@extends('blog.index')

@section('content')
  <div class="left_content">
    <div class="single_page">
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="#">{{ $blog->category }}</a></li>
      </ol>
      <h1>{{ $blog->title}}</h1>
      <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>{{ $blog->author }}</a> <span><i class="fa fa-calendar"></i>{{$blog->created_at->diffForHumans()}}</span> <a href="#"><i class="fa fa-tags"></i>{{ $blog->category }}</a> </div>
      <div class="single_page_content"> <img class="img-center" src="../images/bg.jpg" alt="">
        <p>{!!$blog->content!!}</p>
      </div>
      <div class="social_link">
        <ul class="sociallink_nav">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
        </ul>
      </div>
      <div class="related_post">
        <h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2>
        <ul class="spost_nav wow fadeInDown animated">
          @foreach ($blogs as $related)
            <li>
              <div class="media"> <a class="media-left" href="single_page.html"> <img src="../images/bg.jpg" alt=""> </a>
                <div class="media-body"> <a class="catg_title" href="single_page.html">{{ $related->title }}</a> </div>
              </div>
            </li>
          @endforeachs
        </ul>
      </div>
    </div>
  </div>
@endsection
