<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;

class frontController extends Controller
{
    public function index()
    {
        $posts = Posts::all()->take(8);
        return view('index', compact('posts', $posts));
    }

}
