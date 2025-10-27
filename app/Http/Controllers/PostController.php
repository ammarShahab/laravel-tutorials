<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // 3. create a create method according to the the name 'create' as per [PostController::class, 'create']
    public function create(){
        return view('create-form');
    }
// 4.3 create a store method according to the name 'storeData' as per [PostController::class, 'storeData']
// Note: if shows "Page Expired" then follow 4.4
    public function storeData(Request $request){ 
        //return $request->all(); //to check that getting all data correctly use this code now commented due to we are going to save the data to the db

        // 4.5 saving data to the db
        $post = new Post();

        $post -> name = $request -> name;
        $post -> description = $request -> description;
        $post -> image = $request -> image;

        $post -> save();

        return redirect()->route('home');//return to home
    }
}
