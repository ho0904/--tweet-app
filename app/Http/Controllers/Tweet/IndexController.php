<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $tweets = Tweet::orderBy('created_at', 'DESC')->get();
        // $tweets 
       // = Tweet::all();
     
       return view('tweet.index')
       ->with('tweets', $tweets);
    }
}
