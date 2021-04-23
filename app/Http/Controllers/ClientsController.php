<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClientsController extends Controller
{
    public function store(Request $request){
      Clients::create([
          'name'=>$request->name,
          'email'=>$request->email,
          'phone'=>$request->phone,
          'file'=>$request->file 
       ]);
        $details = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'file'=>$request->file
        ];
        Mail::to('190103033@stu.sdu.edu.kz')->send(new SendMail($details));
       return back()->with('msg', 'Your application has been sent successfully!');
      return $request->file('file')->store('public/uploads'); 
    }
}
