<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ThanksForChosing extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $cartcontent;
    private $total;
    public function __construct($cartcontent , $total)
    {
        //
        $this->cartcontent = $cartcontent;
        $this->total = $total;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = ['cartcontent'=>$this->cartcontent,'total'=>$this->total];

        return $this->view('client.sites.email-thanks',$data);
    }
}
