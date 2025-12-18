<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $order;
    protected $attachmentsPath;
    protected $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order, $data, $files)
    {
        $this->order = $order;
        $this->attachmentsPath = $files;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->data, $this->order);
        $email = $this->markdown('email.order')->subject(config('app.app_name').' '. 'Order Confirmation')->with(["order" => $this->order,'data' => $this->data]);

        foreach ($this->attachmentsPath as $filePath) {
            $email->attachFromStorage('/public/'. $filePath);
        }

        return $email;
    }
}
