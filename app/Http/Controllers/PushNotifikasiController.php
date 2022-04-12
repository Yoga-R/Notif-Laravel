<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tblfirebase;
use App\Mail\MailNotif;
class PushNotifikasiController extends Controller
{
    public function sendFirebase($title,$body)
    {
        $url = 'https://fcm.googleapis.com/fcm/send';
        $FcmToken = tblfirebase::whereNotNull('keyfirebase')->pluck('keyfirebase')->all();
          
        
  
        $data = [
            "registration_ids" => $FcmToken,
            "notification" => [
                "title" => $title,
                "body" => $body,  
            ]
        ];
        $encodedData = json_encode($data);
    
        $headers = [
            'Authorization:key=' . env('FIREBASE_KEY_SERVER'),
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }        
        // Close connection
        curl_close($ch);
        // FCM response
        return  redirect('/pekerjaan');
    }

    public function create()
    {
        return view('pushnotif.create');
    }
    public function sendNotifAll(Request $request)
    {
        $title=$request->judul;
        $body=$request->detail;
        $user = User::all();   
        // $details = [
        //     'judul' => $tbl_pekerjaan->judul,
        //     // 'judul'=> 'tes',
        //     'body' => $tbl_pekerjaan->dibutuhkan
        //     // 'body'=>'test'
        // ];
        // dd($path_file);
        foreach($user as $u){
            // dd($u->email);
            \Mail::to($u->email)->send(new MailNotif($titel,$body));
            // \Mail::to('yogagames27@gmail.com')->send(new \App\Mail\SendMail($details));
        }

        $url = 'https://fcm.googleapis.com/fcm/send';
        $FcmToken = User::whereNotNull('device_key')->pluck('device_key')->all();
          
        
  
        $data = [
            "registration_ids" => $FcmToken,
            "notification" => [
                "title" => $title,
                "body" => $body,  
            ]
        ];
        $encodedData = json_encode($data);
    
        $headers = [
            'Authorization:key=' . env('FIREBASE_KEY_SERVER'),
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }        
        // Close connection
        curl_close($ch);

    return redirect('/send-firebase/'.$title.'/'.$body);


    }
}
