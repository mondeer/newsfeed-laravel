<!DOCTYPE html>
<html>
<head>
    <title>South Sudan || NewsFeed</title>
    <meta name="description" content="Malual newsfeed, south sudan nation news, written by Malual">
    <meta name="keywords" content="south sudan news, breaking news south sudan, south sudan now">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="/">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <p>Today: {{ Carbon\Carbon::now()->format('l j F Y')}}</p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.html" class="logo"><img src="images/logo.jpg" alt=""></a></div>
          <div class="add_banner"><a href="#"><img src="images/banner.png" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="index.html"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          <li><a href="#">Breaking News</a></li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Politics</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">South Sudan</a></li>
              <li><a href="#">East Africa</a></li>
              <li><a href="#">International</a></li>
            </ul>
          </li>
          <li><a href="#">Sports</a></li>
          <li><a href="#">Health</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </nav>
  </section>
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker">
            @foreach ($blogs as $blog)
              <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">{{ $blog->title }}</a></li>
            @endforeach
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          @foreach ($blogs as $blog)
            <div class="single_iteam"> <a href="/viewblog/{{ $blog->slug }}"> <img src="/featured/{{ $blog->featured_img }}"></a>
              <div class="slider_article">
                <h2><a class="slider_tittle" href="/viewblog/{{ $blog->slug }}">{{ $blog->title }}</a></h2>
                {{-- <p>{!! str_limit($blog->content, $limit = 150, $end = "...") !!}</p> --}}
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Latest post</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
              @foreach ($blogs as $blog)
                <li>
                  <div class="media wow fadeInDown"> <a href="/viewblog/{{$blog->slug}}" class="media-left"> <img width="20%" src="/featured/{{$blog->featured_img}}"> </a>
                    <div class="media-body"> <a href="/viewblog/{{$blog->slug}}" class="catg_title">{{$blog->title}}</a> </div>
                  </div>
                </li>
              @endforeach
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>Business</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                @foreach ($business as $biz)
                  <li>
                    <figure class="bsbig_fig"> <a href="/viewblog/{{$biz->slug}}" class="featured_img"> <img alt="" src="/featured/{{$biz->featured_img}}"> <span class="overlay"></span> </a>
                      <figcaption> <a href="pages/single_page.html">{{$biz->title}}</a> </figcaption>
                      <p>{!! str_limit($biz->content, $limit = 150, $end = "...") !!}</p>
                    </figure>
                  </li>
                @endforeach
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                @foreach ($business as $biz)
                  <li>
                    <div class="media wow fadeInDown"> <a href="/viewblog/{{$biz->slug}}" class="media-left"> <img alt="" src="featured/{{$biz->featured_img}}"> </a>
                      <div class="media-body"> <a href="/viewblog/{{$biz->slug}}" class="catg_title">{!! str_limit($biz->content, $limit = 150, $end = "...") !!}</a> </div>
                    </div>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>Fashion</span></h2>
                <ul class="business_catgnav wow fadeInDown">
                  @foreach ($fashion as $fash)
                    <li>
                      <figure class="bsbig_fig"> <a href="/viewblog/{{$fash->slug}}" class="featured_img"> <img alt="" src="/featured/{{$fash->featured_img}}"> <span class="overlay"></span> </a>
                        <figcaption> <a href="/viewblog/{{$fash->slug}}">{{$fash->title}}</a> </figcaption>
                        <p>{!! str_limit($fash->content, $limit = 150, $end = "...") !!}</p>
                      </figure>
                    </li>
                  @endforeach
                </ul>
                <ul class="spost_nav">
                  @foreach ($fashion as $fash)
                    <li>
                      <div class="media wow fadeInDown"> <a href="/viewblog/{{$fash->slug}}" class="media-left"> <img alt="" src="/featured/{{$fash->featured_img}}"> </a>
                        <div class="media-body"> <a href="/viewblog/{{$fash->slug}}" class="catg_title">{{$fash->title}}</a> </div>
                      </div>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>Cultural</span></h2>
                <ul class="business_catgnav">
                  @foreach ($cultural as $cult)
                    <li>
                      <figure class="bsbig_fig wow fadeInDown"> <a href="/viewblog/{{$cult->slug}}" class="featured_img"> <img alt="" src="/featured/{{$cult->featured_img}}"> <span class="overlay"></span> </a>
                        <figcaption> <a href="/viewblog/{{$cult->slug}}">{{$cult->title}}</a> </figcaption>
                        <p>{!! str_limit($cult->content, $limit = 150, $end = "...") !!}</p>
                      </figure>
                    </li>
                  @endforeach
                </ul>
                <ul class="spost_nav">
                  @foreach ($cultural as $cult)
                    <li>
                      <div class="media wow fadeInDown"> <a href="/viewblog/{{$cult->slug}}" class="media-left"> <img alt="" src="/featured/{{$cult->featured_img}}"> </a>
                        <div class="media-body"> <a href="/viewblog/{{$cult->slug}}" class="catg_title">{{$cult->title}}</a> </div>
                      </div>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
            <ul class="spost_nav">
              @foreach ($blogs as $blog)
                <li>
                  <div class="media wow fadeInDown"> <a href="/viewblog/{{$blog->slug}}" class="media-left"> <img width="20%" src="/featured/{{$blog->featured_img}}"> </a>
                    <div class="media-body"> <a href="/viewblog/{{$blog->slug}}" class="catg_title">{{$blog->title}}</a> </div>
                  </div>
                </li>
              @endforeach
            </ul>
          </div>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                  <li class="cat-item"><a href="#">Politics</a></li>
                  <li class="cat-item"><a href="#">Sports</a></li>
                  <li class="cat-item"><a href="#">Fashion</a></li>
                  <li class="cat-item"><a href="#">Business</a></li>
                  <li class="cat-item"><a href="#">Technology</a></li>
                  <li class="cat-item"><a href="#">Games</a></li>
                  <li class="cat-item"><a href="#">Life &amp; Style</a></li>
                  <li class="cat-item"><a href="#">Photography</a></li>
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Sponsor</span></h2>
            <a class="sideAdd" href="#"><img src="images/add_img.jpg" alt=""></a> </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Links</span></h2>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Rss Feed</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Life &amp; Style</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig">

          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Tag</h2>
            <ul class="tag_nav">
              <li><a href="#">Politics</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Fashion</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Life &amp; Style</a></li>
              <li><a href="#">Technology</a></li>
              <li><a href="#">Photo</a></li>
              <li><a href="#">Slider</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Contact</h2>
            <p>South Sudan nation news </p>
            <address>
            South Sudan News, 1238 S.Sudan . 123 St.Suite 25 Town City 3333,South Sudan Phone:
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; 2018 <a href="/">South Sudan Daily News</a></p>
      <p class="developer">Developed By iMond Solutions</p>
    </div>
  </footer>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.li-scroller.1.0.js"></script>
<script src="assets/js/jquery.newsTicker.min.js"></script>
<script src="assets/js/jquery.fancybox.pack.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>
