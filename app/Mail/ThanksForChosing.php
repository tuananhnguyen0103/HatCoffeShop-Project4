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
    private $inforCustormer;

    public function __construct($cartcontent , $total, $inforCustormer)
    {
        //
        $this->cartcontent = $cartcontent;
        $this->total = $total;
        $this->inforCustormer= $inforCustormer;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->inforCustormer["customer_name"]);
        $data = ['cartcontent'=>$this->cartcontent,'total'=>$this->total,'inforCustormer'=>$this->inforCustormer];

        return $this->view('client.sites.email-thanks',$data);
    }
}
