<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class BlogController extends Controller
{

    protected $post = '';

    public function __construct(Post $post)
    {
        $this->post = $post;
    }    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gridBlogs(Request $request)
    {
        $posts = $this->post->latest()->take(6)->get();

        $blogs = [];

        foreach($posts as $key => $blog){
            $temp = [];
            $temp['pubDate']    = $blog['pubDate'];
            $temp['id']    = $blog['id'];
            $temp['post_title'] = $blog['post_title'];
            $temp['post_category'] = $blog['post_category'];

            $html = $blog['post_content'];
            preg_match_all( '|<img.*?src=[\'"](.*?)[\'"].*?>|i',$html, $matches ); 
            $temp['post_image'] = stripslashes($matches[ 1 ][ 0 ]);
            $temp['post_content'] = substr($this->remove_html_comments(strip_tags($blog['post_content'])),0,150);
            $blogs[] = $temp;
        }



        return $this->sendResponse($blogs, 'Grid Posts list');        

    }

    public function remove_html_comments($content = '') {
        return preg_replace('/<!--(.|\s)*?-->/', '', $content);
    }

}
