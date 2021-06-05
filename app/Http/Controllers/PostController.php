<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Inertia\Inertia;

class PostController extends Controller
{
    //
    public function index(Request $request , $post_url)
    {
        $post = Post::where('post_url','=',$post_url)->first();

        return Inertia::render('post', ['post' => $post]);
    }    

    public function slugify($text)
    {
        // Swap out Non "Letters" with a -
        $text = preg_replace('/[^\\pL\d]+/u', '-', $text); 
    
        // Trim out extra -'s
        $text = trim($text, '-');
    
        // Convert letters that we have left to the closest ASCII representation
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    
        // Make text lowercase
        $text = strtolower($text);
    
        // Strip out anything we haven't been able to convert
        $text = preg_replace('/[^-\w]+/', '', $text);
    
        return $text;
    }
}
