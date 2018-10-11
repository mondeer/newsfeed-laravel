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

    $image = $request->file('img');
    $photoName = time().'.'.$image->getClientOriginalExtension();

    $image->move(public_path('featured'), $photoName);

    $blog = new Blog;
    $blog->title = $request->input('title');
    $blog->featured_img = $photoName;
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

  $politics = Blog::where('category', 'political')->get();
  $business = Blog::where('category', 'business')->get();
  $sports = Blog::where('category', 'sports')->get();

  return view('home', compact('blogs', 'politics', 'business', 'sports'));
  }

  public function showblog($slug='') {
    $blog = Blog::where('slug', $slug)->first();
    $blogs = Blog::all();

    return view('viewblog', compact('blog', 'blogs'));

  }
}
