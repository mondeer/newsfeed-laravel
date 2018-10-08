<?php

namespace imond\Http\Controllers;

use Illuminate\Http\Request;
use imond\Blog;
use Auth;
use Carbon\Carbon;

class BlogCtrl extends Controller
{
  public function create () {
    return view ('blogcreate');
  }

  public function postCreate(Request $request) {
    $author = Auth::user()->name;

    $title_slug= str_slug($request->title, '-');
    $slug = $title_slug.'-'.Carbon::today()->year.'-'.Carbon::today()->month.'-'.Carbon::today()->day;

    $blog = new Blog;
    $blog->title = $request->input('title');
    $blog->featured_img = $request->input('featured_img');
    $blog->author = $author;
    $blog->category = $request->input('category');
    $blog->content = $request->input('content');
    $blog->meta_data = $request->input('meta_data');
    $blog->slug = $slug;
    $blog->published = $request->input('published');
    $blog->save();

    return redirect('/viewblog/'.$slug);

  }

  public function show() {
  $blogs = Blog::all();

  return view('home')->with('blogs', $blogs);
  }

  public function showblog($slug='') {
    $blog = Blog::where('slug', $slug)->first();
    $blogs = Blog::all();

    return view('viewblog', compact('blog', 'blogs'));

  }
}
