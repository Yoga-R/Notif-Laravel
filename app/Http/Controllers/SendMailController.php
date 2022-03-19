<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\tblPekerjaan;
use App\User;
use Storage;
class SendMailController extends Controller
{
    public function sendMail($id)
    {
        $tbl_pekerjaan = tblPekerjaan::find($id);
        $user = User::all();   
        // $details = [
        //     'judul' => $tbl_pekerjaan->judul,
        //     // 'judul'=> 'tes',
        //     'body' => $tbl_pekerjaan->dibutuhkan
        //     // 'body'=>'test'
        // ];
        $judul = $tbl_pekerjaan->Judul_Pekerjaan;
        $body = $tbl_pekerjaan->dibutuhkan;
        $file = $tbl_pekerjaan->File;

        $path_file = Storage::url('file-pekerjaan/'.$file);
        // dd($path_file);
        // dd('test');
        // dd($user);
        foreach($user as $u){
            // dd($u->email);
            \Mail::to($u->email)->send(new SendMail($judul,$body,$path_file));
            // \Mail::to('yogagames27@gmail.com')->send(new \App\Mail\SendMail($details));
        }
        // return redirect('some/url');
    dd("Email is Sent.");
    }
}
