<?php

namespace App\Http\Controllers\Web;

use App\Models\Service;
use App\Models\PaperType;
use App\Models\AcademicLevel;
Use App\Models\Deadline;
Use App\Models\Country;
use App\Http\Controllers\Controller;
use App\Models\WebSetting;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(){
        $services = Service::orderBy('name', 'ASC')->get();
        return $services;
    }

    public function show($slug)
    {
        //  return 'msg';
        $service = Service::where(['slug' => $slug])->firstOrFail();
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $countries=Country::all();
        $web_setting=WebSetting::first();
        
        return view('pages.services.show', compact('service','services','deadlines','academic_levels','paper_types','web_setting', 'countries'));  
    }
    
    public function nursingDissertation() {

    $paper_types = PaperType::all();
    $academic_levels = AcademicLevel::orderBy('id','asc')->get();
    $deadlines = Deadline::orderBy('id','asc')->get();
    $services = Service::all();
    $countries = Country::all();
    $web_setting = WebSetting::first();

    return view('pages.services.nursing-dissertation-writing', compact('services','deadlines','academic_levels','paper_types','web_setting', 'countries'));
}

public function nursingEssay() {

    $paper_types = PaperType::all();
    $academic_levels = AcademicLevel::orderBy('id','asc')->get();
    $deadlines = Deadline::orderBy('id','asc')->get();
    $services = Service::all();
    $countries = Country::all();
    $web_setting = WebSetting::first();

    return view('pages.services.nursing-essay-writing', compact('services','deadlines','academic_levels','paper_types','web_setting', 'countries'));
}

public function writeMyNursingAssignment() {

    $paper_types = PaperType::all();
    $academic_levels = AcademicLevel::orderBy('id','asc')->get();
    $deadlines = Deadline::orderBy('id','asc')->get();
    $services = Service::all();
    $countries = Country::all();
    $web_setting = WebSetting::first();

    return view('pages.services.write-my-nursing-assignment', compact('services','deadlines','academic_levels','paper_types','web_setting', 'countries'));
}

public function nursingProposal() {

    $paper_types = PaperType::all();
    $academic_levels = AcademicLevel::orderBy('id','asc')->get();
    $deadlines = Deadline::orderBy('id','asc')->get();
    $services = Service::all();
    $countries = Country::all();
    $web_setting = WebSetting::first();

    return view('pages.services.nursing-proposal', compact('services','deadlines','academic_levels','paper_types','web_setting', 'countries'));
}

public function nursingCoursework() {

    $paper_types = PaperType::all();
    $academic_levels = AcademicLevel::orderBy('id','asc')->get();
    $deadlines = Deadline::orderBy('id','asc')->get();
    $services = Service::all();
    $countries = Country::all();
    $web_setting = WebSetting::first();

    return view('pages.services.nursing-coursework', compact('services','deadlines','academic_levels','paper_types','web_setting', 'countries'));
}

public function nursingConceptMapping() {

    $paper_types = PaperType::all();
    $academic_levels = AcademicLevel::orderBy('id','asc')->get();
    $deadlines = Deadline::orderBy('id','asc')->get();
    $services = Service::all();
    $countries = Country::all();
    $web_setting = WebSetting::first();

    return view('pages.services.nursing-concept-mapping-assignment', compact('services','deadlines','academic_levels','paper_types','web_setting', 'countries'));
}

public function nursingDiscussion() {

    $paper_types = PaperType::all();
    $academic_levels = AcademicLevel::orderBy('id','asc')->get();
    $deadlines = Deadline::orderBy('id','asc')->get();
    $services = Service::all();
    $countries = Country::all();
    $web_setting = WebSetting::first();

    return view('pages.services.nursing-discussion-posts', compact('services','deadlines','academic_levels','paper_types','web_setting', 'countries'));
}

public function nursingLiterature() {

    $paper_types = PaperType::all();
    $academic_levels = AcademicLevel::orderBy('id','asc')->get();
    $deadlines = Deadline::orderBy('id','asc')->get();
    $services = Service::all();
    $countries = Country::all();
    $web_setting = WebSetting::first();

    return view('pages.services.nursing-literature-review', compact('services','deadlines','academic_levels','paper_types','web_setting', 'countries'));
}


    
}










