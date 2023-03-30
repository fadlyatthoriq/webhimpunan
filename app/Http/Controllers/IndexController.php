<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Carousel;
use App\Models\About;
use App\Models\StrukturOrg;
use TCG\Voyager\Models\Post;

class IndexController extends Controller
{
    public function index (){

        $carousels = Carousel::orderBy('id')->get();

        $sejarah = About::where('id', 1)->get();
        $visimisi = About::where('id', 2)->get();

        $post = Post::get();


        return view('index', 
        compact('carousels', 'sejarah', 'visimisi', 'post'));
    }
    
    public function showBySlug($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $show = Post::where('slug', $slug)->get();
        return view('posts.show', compact('post', 'show'));
    }

    public function struktur(){
        return view('struktur');
    }

}
