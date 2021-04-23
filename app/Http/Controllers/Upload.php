<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class Upload extends Controller
{
    public function upload(Request $request){
       Clients::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'file'=>$request->file 
     ]);
     $name = $request->name;
     $email = $request->email;
     $phone = $request->phone;
     $file = $request->file('file');
     $destination = 'uploads';
    $file->move($destination, $file->getClientOriginalName());
       echo 'Name: '.$name;
       echo '<br>';
       echo 'Email: '.$email;
       echo '<br>';
       echo 'Phone: '.$phone;
       echo '<br>';
       echo 'File: '.$file->getClientOriginalName(); 
       echo '<br>';
       echo "Your file uploaded successfully!";
       
    }
}
