<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailNotif extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $judul;
    public $kerjaan;
    public function __construct($judul,$kerjaan)
    {
        $this->judul = $judul;
        $this->kerjaan = $kerjaan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("agoy@gmail.com")->
        subject($this->judul)
        ->with([
                'body'=>$this->kerjaan
                ])
        ->view('notifikasi.email');
    }
}
