<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function insertRecord(){
        $products = new Product();
        $products->product = "PUBG Game";
        $user = new User();
        $user->name = "Alex";
        $user->email = "Alex@smail.com";
        $user->password = encrypt('secret');
        $user->save();
        $user->products()->save($products);
        return "Record has been created!";
    }
    public function fetchdata($id){
      $product = User::find($id)->products;
      return $product;
    }
}
