<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\interactive;

class interactiveController extends Controller
{
    public function index(){
        return view('interactive',[
            "title"=> "interactive",
            "posts" => interactive::all()
        ]);
    }

    public function show($slug){
        return view('readmore',[
            "title"=> "HCI",
            "post" => interactive::find1($slug)
        ]);
    }
}
