<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Mydb extends Controller
{
    public function select()
    {
        // $data = DB::select('select * from articles where id =4');
        // $data = DB::select('select * from articles where id =:id',['id'=>2]);
        // dd($data);
        $res = DB::table('articles')->get()->all();
        $res = DB::table('articles')->where('id', 1)->first();
        $res = (array)$res;
        dd($res);
        $data = [];
        $res  = DB::table('articles')->insert($data);
    }
}
