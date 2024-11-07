<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class interactive
{
    private static $matkul_interactive =
            [
        [
            "image" => "./img/img2.jpg",
            "judul"=> "Human Computer Interaction",
            "slug" => "human-computer-interaction",
            "penulis" => "14 May 2024 | by: Lia", 
            "body" => "Human Computer Interaction atau HCI adalah studi
            tentang bagaimana manusia berhungan dengan...",
            "button" => '/readmore'
        ],
    
        [
            "image" => "img/img4.jpg",
            "judul"=> "User Experience",
            "slug" => "user-experience",
            "penulis" => "14 May 2024 | by: Sabrina",
            "body" => "User Experice adalah studi 
            tentang bagaimana manusia berinteraksi dengan....",
            "button" => '/readmore1'
        ],
    
        [
            "image" => "img/img3.jpg",
            "judul"=> "Digital Immersive Technology",
            "slug" => "Digital-Immersive-Technology",
            "penulis" => "14 May 2024 | by: Sabrina",
            "body" => "Digital Immersive Technology studi 
            tentang bagaimana manusia berinteraksi dengan....",
            "button" => '/readmore2'
        ]
    
        ];

        public static function all(){
            return collect(self::$matkul_interactive); 
        }

        public static function find1($slug){
            $post = static::all();
            return $post->firstWhere('slug',$slug);

        }        
}
