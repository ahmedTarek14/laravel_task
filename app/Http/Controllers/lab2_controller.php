<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class lab2_controller extends Controller
{

    function add_form(){
        return view('add_post');
    }

    function insert()
    {
        $rows = request()->all();  # $_POST
        array_shift($rows);  # remove _csrf
//        dd($product_details);
        DB::table('product')->insert($rows);
        return to_route('posts.view');
    }

    function show()
    {
        $rows = DB::table('product')->get();
//        dump($products);
        return view("view_post", $data=['rows'=>$rows]);
    }


    function details($id)
    {
        $rows = DB::table('product')->where('product_id', $id)->first();

        if ($rows){
            // dump($rows);
            return view("details_post", $data=['rows'=>$rows]);

        }else{
            return abort(404);
        }
    }

    function delete($id)
    {
        $deleted = DB::table('product')->where('product_id', $id)->delete();
        // $rows = DB::table('product')->get();

        if ($deleted){
            // dump($rows);
            // return view("view_product", $data=['rows'=>$rows]);
            return to_route("posts.view");

        }else{
            return abort(404);
        }
    }
}
