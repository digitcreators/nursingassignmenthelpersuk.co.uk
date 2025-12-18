<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use App\Models\Invoice;
use App\Models\PaperType;
use App\Models\User;
Use App\Models\Deadline;
use App\Models\AcademicLevel;
use App\Models\Country;
use App\Models\Order;
use App\Models\ReferenceStyle;
use App\Models\Subject;
use App\Models\Fare;
use App\Models\File;
use App\Models\Service;
use App\Http\Requests\StoreOrderRequest;
use App\Models\WebSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderAdminMail;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Reference\Reference;
use Illuminate\Support\Str;


class OrderController extends Controller
{
    public function create()
    {
        $paper_types = PaperType::orderBy('id', 'ASC')->get();
        $academic_levels = AcademicLevel::orderBy('id', 'ASC')->get();
        $deadlines = Deadline::orderBy('id', 'ASC')->get();
        $reference_styles = ReferenceStyle::orderBy('id', 'ASC')->get();
        $subjects = Subject::orderBy('id', 'ASC')->get();
        $countries = Country::orderBy('id', 'ASC')->get();
        $web_setting=WebSetting::first();
        $fares          = Fare::all();
        $services = Service::orderBy('name', 'ASC')->get();
        // dd($fares);
        return view('pages.order-now', compact('paper_types', 'academic_levels', 'deadlines', 'reference_styles', 'subjects', 'countries','web_setting','fares', 'services'));
    }

    public function store(StoreOrderRequest $request)
    {
        // dd($request->all());
        // Get the reCAPTCHA response from the request
        $recaptcha = $request->input('g-recaptcha-response');
    
        // Check if the reCAPTCHA response is null
        if (is_null($recaptcha)) {
            return redirect()->back()->with('error', 'Please complete the reCAPTCHA to proceed.');
        }
    
        // Verify the reCAPTCHA response with Google's API
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $params = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $recaptcha,
            'remoteip' => $request->ip()
        ];
        
        $client = new \GuzzleHttp\Client();
        $response = $client->post($url, ['form_params' => $params]);
        $responseBody = json_decode($response->getBody(), true);
    
        // Check if the reCAPTCHA verification was successful
        if (!$responseBody['success']) {
            return redirect()->back()->with('error', 'reCAPTCHA verification failed. Please try again.');
        }
        
        // return $request->all();
        $user = User::where(['email' => $request->email])->first();
        $password = Str::random(8);
                    
        $flag = false;
        // dd($flag);

        if (!$user) {

            $flag = true;

            $user = User::create(
                [
                    'name'      => request('name'),
                    'email'    =>  request('email'),
                    'phone'     => request('phone'),
                    'country'   => request('country'),
                    'password'  => Hash::make($password),
                ]
            );

            $user->roles()->sync(2);

            session()->flash('userData', ['userEmail' => 'Customer Account' . ' ' . $user->email . ' ' . 'created successfully check your email for login credentials', 'userId' => $user->id]);
        }
        $request->merge(['user_id' => $user->id]);
        if ($request->hasfile('emailAttachments')) {
            $fileSize = 0;
            $fileQty = 0;
            foreach ($request->file('emailAttachments') as $file) {
                $fileSize += $file->getSize();
                $fileQty = $fileQty + 1;
            }

            if ($fileQty > 10) {
                $request->session()->flash('message', 'file quantity exceeded the limit.');
                return redirect()->route('order');
            }

            if ($fileSize >  25000000) {
                $request->session()->flash('message', 'file size exceeded the limit.');
                return redirect()->route('order');
            }
        }

        $files = [];

        //Dynamic getting price from database according to deadline and Academic level
        $fare = Fare::where(['academic_level_id' => $request->academic_level_id, 'deadline_id' => $request->deadline_id])->firstOrFail();

        $request->merge([
            'cost_per_page' => $fare->per_page_price,
            "total_price" => ($fare->per_page_price * $request->number_of_pages),
            'academic_level' => $fare->academiclevel->name,
            'deadline' => $fare->deadline->name,
        ]);

        DB::beginTransaction();
        $order = Order::create($request->all());
        // dd($order);
        if ($request->hasfile('emailAttachments')) {
            foreach ($request->file('emailAttachments') as $file) {
                $fileName = uniqid() . '_' . time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads', $fileName, 'public');

                array_push($files, $filePath);

                File::create([
                    "order_id" => $order->id,
                    "file_path" => $filePath
                ]);
            }
        }

        $invoice = Invoice::create([
                "ref_no"    => Str::uuid()->toString(),
                "amount"    => $request->total_price,
                "order_id"  => $order->id,
                "user_id"   => $user->id,
                "gateway"   => "stripe",
                "currency"  => "GBP",
            ]);

        $data = [
            'flag'=>$flag,
            'user'  => $user,
            'password'=>$password,
            'files' => $files,
            'invoice' => $invoice,
        ];
        // Send mail to user
        Mail::to($request->email)->send(new OrderMail($order, $data, $files));

        // Send mail to admin
        Mail::to(env('MAIL_FROM_ADDRESS', config('app.app_email')))->send(new OrderAdminMail($order, $files));
        DB::commit();

        //  return $order;
        return redirect()->route('invoice', ['reference' => $invoice->ref_no]);
    }

    public function invoice(Request $request)
    {

        if ($request->query('reference')) {
            $invoice = Invoice::where(['ref_no' => $request->query('reference'), 'status_id' => 4])->with('order')->firstOrFail();
            $order = Order::where(['id' => $invoice->order_id])->firstorFail();

            return view('pages.invoice', compact('invoice', 'order'));
        }
    }
    
     public function order()
    {
        $paper_types = PaperType::orderBy('id', 'ASC')->get();
        $academic_levels = AcademicLevel::orderBy('id', 'ASC')->get();
        $deadlines = Deadline::orderBy('id', 'ASC')->get();
        $reference_styles = ReferenceStyle::orderBy('id', 'ASC')->get();
        $subjects = Subject::orderBy('id', 'ASC')->get();
        $countries = Country::orderBy('id', 'ASC')->get();
        $web_setting=WebSetting::first();
        $fares          = Fare::all();
        return view('pages.order-now', compact('paper_types', 'academic_levels', 'deadlines', 'reference_styles', 'subjects', 'countries','web_setting','fares'));
    }

}

