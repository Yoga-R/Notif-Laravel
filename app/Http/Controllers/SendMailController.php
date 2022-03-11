<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\tblPekerjaan;
use App\User;
class SendMailController extends Controller
{
    public function sendMail($id)
    {
        $tbl_pekerjaan = tblPekerjaan::find($id);
        $user = User::all();   
        $details = [
            'judul' => $tbl_pekerjaan->judul,
            // 'judul'=> 'tes',
            'body' => $tbl_pekerjaan->dibutuhkan
            // 'body'=>'test'
        ];
        // dd('test');
        // dd($user);
        foreach($user as $u){
            // dd($u->email);
            \Mail::to($u->email)->send(new SendMail($details));
            // \Mail::to('yogagames27@gmail.com')->send(new \App\Mail\SendMail($details));
        }
        // return redirect('some/url');
    dd("Email is Sent.");
    }
}
