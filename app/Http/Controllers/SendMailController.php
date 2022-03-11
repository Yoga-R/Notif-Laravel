<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function sendMail($id)
    {
        $tbl_pekerjaan = tblPekerjaan::find($id);
        $user = User::all();   
        $details = [
            'judul' => $tbl_pekerjaan->judul,
            'body' => $tbl_pekerjaan->dibutuhkan,
        ];
   
        foreach($user as $u){
            Mail::to($u->email)->send(new SendMailable($details));
            // \Mail::to('yogagames27@gmail.com')->send(new \App\Mail\SendMail($details));
        }
        return redirect('some/url');
    // dd("Email is Sent.");
    }
}
