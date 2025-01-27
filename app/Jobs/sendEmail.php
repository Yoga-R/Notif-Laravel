<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\tblPekerjaan;
use App\tbltenagakerja;
use App\User;
use Illuminate\Support\Facades\Storage as FacadesStorage;

class sendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $id;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $tbl_pekerjaan = tblPekerjaan::find($this->id);
        $user = User::all();

        $judul = $tbl_pekerjaan->Judul_Pekerjaan;
        $body = $tbl_pekerjaan->dibutuhkan;
        $file = $tbl_pekerjaan->File;

        $path_file = FacadesStorage::url('file-pekerjaan/'.$file);

        foreach($user as $u){
            // dd($u->email);
            \Mail::to($u->email)->send(new SendMail($judul,$body,$path_file));
            // \Mail::to('yogagames27@gmail.com')->send(new \App\Mail\SendMail($details));
        }
        // dd($tbl_pekerjaan);
        $tbl_pekerjaan->update([
            'status'=>1,
        ]);
    }
}
