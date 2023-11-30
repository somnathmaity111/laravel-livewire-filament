<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('home',[
            'feachuredPost'=> Post::published()->featured()->take(3)->latest('published_at')->get(),
            'latestPost'=> Post::published()->take(9)->latest('published_at')->get(),
        ]);
    }
}
