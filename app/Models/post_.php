<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class post extends Model
// {
//     use HasFactory;
// }

class post
{
   private static $isi_post = [
        [
            "idpesan" => "11124",
            "nama_penerima" => "Aldy",
            "nama_pengirim" => "Sapri",
            "judul" => "Text judul",
            "textpesan" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        ],
    ];


    public static function all(){
        return self::$isi_post;
    }
}