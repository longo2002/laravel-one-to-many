<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function dashboard()
   {

    $user = User::all();
    $data = [
        "user" => $user
    ];

    return view("dashboard", $data);
   } 
}
