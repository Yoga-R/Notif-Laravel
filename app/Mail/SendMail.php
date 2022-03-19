<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $judul;
    public $kerjaan;
    public $file;
    public function __construct($judul,$kerjaan,$file)
    {
        $this->judul = $judul;
        $this->kerjaan = $kerjaan;
        $this->file = public_path() . '/' .$file;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("agoy@gmail.com")->
        subject('Mail from agoy.com')
        ->with([
                'judul'=>$this->judul,
                'body'=>$this->kerjaan
                ])
                ->attach($this->file, [
                    'as' => 'sample.pdf',
                    'mime' => 'application/pdf',
               ])
        ->view('notifikasi.email');
    }
}
