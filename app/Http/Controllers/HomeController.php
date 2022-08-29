<?php

namespace App\Http\Controllers;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * It will return Home Page
     */

     public function home(){
        $blue=asset('img/blue_logo.png');
        $white=asset('img/white_logo.png');
        $posts=Post::orderBy('created_at','desc')->get();
        $categories=Category::get();
      
        return view('home.index')->with('posts',$posts)->with('categories',$categories)->with('blue',$blue)->with('white',$white);
     }
            /***

     * Using Post Model all posts are fetch
     * Using Category Model all categories are fetch
     * Posts are fetch in descending order
     * Posts and Categories are bind to Blog Index Page
     * Using Post and Categories Relationship Category Name is shown
     * It will return blog index page
     */
    public function   blog(){
        $blue=asset('img/blue_logo.png');
        $white=asset('img/white_logo.png');
        $posts=Post::orderBy('created_at','desc')->get();
        $categories=Category::get();

        return view('home.blog.index')->with('posts',$posts)->with('categories',$categories)->with('blue',$blue)->with('white',$white);

    }
     /***
     * Using Post Model all posts are fetch on the basis of slug
     * Using Category Model all categories are fetch
     * Posts and Categories are bind to Blog Details Page
     * Using Post and Categories Relationship Category Name is shown
     * It will return blog details page
     */
    public function   blog_detail($slug){
        $blue=asset('img/blue_logo.png');
        $white=asset('img/white_logo.png');
        $post=Post::where('slug','=',$slug)->firstOrFail();
        $categories=Category::get();
        $posts=Post::orderBy('created_at','desc')->get();
        $seo_title=Post::where('slug','=',$slug)->get('seo_title');

       return view('home.blog.blog_details')->with('post',$post)->with('categories',$categories)->with('posts',$posts)->with('blue',$blue)->with('white',$white)->with('seo_titles',$seo_title);

    }
    public function   course_detail($slug){

        $blue=asset('img/blue_logo.png');
        $white=asset('img/white_logo.png');
        return view('education.course_details')->with('blue',$blue)->with('white',$white);


    }
    public function   services(){
        $blue=asset('img/blue_logo.png');
        $white=asset('img/white_logo.png');

        return view('services.index')->with('blue',$blue)->with('white',$white);

     }

     public function   contact(){
        $blue=asset('img/blue_logo.png');
        $white=asset('img/white_logo.png');

        return view('contact.index')->with('blue',$blue)->with('white',$white);

     }

    public function   about(){

        $blue=asset('img/blue_logo.png');
        $white=asset('img/white_logo.png');
       return view('about.index')->with('blue',$blue)->with('white',$white);

    }









}
