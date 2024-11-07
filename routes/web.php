<?php

use App\Http\Controllers\interactiveController;
use Illuminate\Support\Facades\Route;
use App\Models\interactive;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title"=> "Home"
    ]);
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/writers', function () {
    return view('writers');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/popular', function () {
    return view('popular');
});

Route::get('/interactive',[interactiveController::class,'index']);

Route::get('/software', function () {
    $matkul =[
        [
            "image" => "img/img2.jpg",
            "judul"=> "Software Design",
            "penulis" => "14 May 2024 | by: Lia",
            "body" => "Software Design atau SE adalah studi
            tentang bagaimana manusia membuat software dengan...",
            
        ],
    
        [
            "image" => "img/img4.jpg",
            "judul"=> "Agile Software Development",
            "penulis" => "14 May 2024 | by: Sabrina",
            "body" => "Agile Software Development adalah studi 
            tentang bagaimana manusia berinteraksi dengan....",
           
        ],
    
        [
            "image" => "img/img3.jpg",
            "judul"=> "Code Reengineering",
            "penulis" => "14 May 2024 | by: Sabrina",
            "body" => "Code Reengineering adalah studi 
            tentang bagaimana manusia berinteraksi dengan....",
            
        ]
    
        ];
    return view('software',[
        "title"=> "software",
        "posts" => $matkul
    ]);
});


Route::get('interactive/{slug}',[interactiveController::class,'show']);

