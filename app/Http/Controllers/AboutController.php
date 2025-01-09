<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $data = [
            "title" => "About",
            "active" => "about",
            "nama" => "Andri Widani",
            "email" => "andriwidani@upi.edu",
            "gambar" => "kafka.png"
        ];
        return view('about', $data);
    }
}
