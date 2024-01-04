<?php 

include 'db/config.php';

$blog_id = $_GET['blog_id'];

$query = mysqli_fetch_array(mysqli_query($conn, "select * from blog where blog_id=$blog_id"));
?>


<!doctype html>
<html lang="en">

<!-- Mirrored from themezinho.net/anchor/blog-post.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 05:36:27 GMT -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="format-detection" content="telephone=no">
  <title>KMF Media | Music Production Company</title>
  <meta name="author" content="Themezinho">
  <meta name="description" content="KMF Media | Music Production Company">
  <meta name="keywords" content="creative, works, showcase, portfolio, highlight, projects, parallax, agency, digital, studio, css, animation, transition, svg, html, css">

  <!-- SOCIAL MEDIA META -->
  <meta property="og:description" content="KMF Media | Music Production Company">
  <meta property="og:image" content="http://www.themezinho.net/Anchor/preview.png">
  <meta property="og:site_name" content="KMF Media">
  <meta property="og:title" content="KMF Media">
  <meta property="og:type" content="website">


  <!-- TWITTER META -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@KMFMedia">
  <meta name="twitter:creator" content="@KMFMedia">
  <meta name="twitter:title" content="KMF Media">
  <meta name="twitter:description" content="KMF Media | Music Production Company">


  <!-- FAVICON FILES -->
  <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
  <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
  <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
  <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
  <link href="ico/favicon.png" rel="shortcut icon">

  <!-- CSS FILES -->
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/hamburger-menu.css">
  <link rel="stylesheet" href="css/odometer.min.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/fancybox.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
   
  <!-- end preloader -->
  <div class="transition-overlay"></div>
  <!-- end transition-overlay -->
  <main>
    <ul class="hamburger-navigation">
      <li><a href="index-2.html">Home</a>
        <ul class="dropdown">
          <li><a href="index-video.html">VIDEO BG</a></li>
          <li><a href="index-mouse-split.html">MOUSE SPLIT</a></li>
          <li><a href="index-animation.html">ANIMATION</a></li>
        </ul>
      </li>
      <li><a href="Anchor-2.html">Anchor</a> </li>
      <li><a href="showcase-four-cols.html">Showcase</a>
        <ul class="dropdown">
          <li><a href="showcase-two-cols.html">TWO COLS</a></li>
          <li><a href="showcase-three-cols.html">THREE COLS</a></li>
          <li><a href="showcase-four-cols.html">FOUR COLS</a></li>
          <li><a href="showcase-five-cols.html">FIVE COLS</a></li>
        </ul>
      </li>
      <li><a href="journal.html">Journal<span>BETA</span></a> </li>
      <li><a href="contact-us.php">Contact Us</a> </li>

    </ul>
    <!-- end hamburger-navigation -->
    <svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none">
      <path class="shape-overlays__path" d=""></path>
      <path class="shape-overlays__path" d=""></path>
      <path class="shape-overlays__path" d=""></path>
    </svg>
    <?php include 'includes/header.php' ?>

    <ul class="social-bar">
      <li><a href="#">FB</a></li>
      <li><a href="#">TW</a></li>
      <li><a href="#">YT</a></li>
      <li><a href="#">BE</a></li>
    </ul>
    <section class="int-hero">
      <div class="video-bg">
        <video src="videos/video.mp4" muted autoplay loop></video>
      </div>
      <!-- end video-bg -->
      <div class="inner">
        <h2><?=$query['blog_title']?></h2>
      </div>
      <!-- end inner -->
    </section>

    <style>
      .post-content.left {
text-align: center;
      }
    </style>
    <!-- end int-hero -->
    <section class="content">
      <div class="journal">
        <div class="post detail wow fadeInUp">
          <figure>
          </figure>
          <div class="post-content left">
            <div class="author"> <img src="images/logo.png" alt="Image"> <small>by <strong>KMF Media</strong></small> </div>
            <small>Posted 20 July 2021 | <a href="#">Web</a>, <a href="#">UI-UX</a>, <a href="#">Coding</a></small>

<img src="<?= BASE_URL_IMG . 'blog-image/' . $query['blog_img'] . '' ?>" alt="">

            <h3><a href="#"><?=$query['blog_title']?></a></h3>
            <p class="lead">Our developments are designed to elevate student living beyond just an accommodation space.</p>

            <p>Every element on a web page exerts a visual force that attracts the eye of the viewer. The greater the force, the more the eye is attracted. These forces also appear to act on other elements, imparting a visual direction to their potential movement and suggesting where you should look next.</p>
            <p>Chef’s opened at its current site on the corner of Seneca and Chicago Streets back in 1923. This was Lou Billittier’s childhood neighborhood. In 1941 Lou was hired to wash dishes by then owners Gino Silverstrini and Lee Federconi. Lou worked his way up to busboy, then waiter, eventually earning the title of restaurant manager.</p>
            <p>When was the last time you looked at a website’s menu and thought “gosh, that is just so pretty.” Unless you’re a designer, chances are it’s never. <strong>People don’t visit your website</strong> to admire the UI. They go there for the content. They go there to get shit done.</p>
            <p>Fixed headers are fairly <u>common nowadays</u> with big name brands like Facebook, Twitter, Google, LinkedIn, and others using this pattern. It’s easy to carelessly copy them without any thought to improving on the pattern, but perhaps we should rethink that.</p>


          </div>
          <!-- end post-content -->
          <aside class="sidebar">
            <div class="widget">
              <h4 class="title">What We Offer</h4>
              <ul class="categories">
              <li><a href="music-marketing.php">Music marketing</a></li>
            <li><a href="marketing-consultation.php">Marketing consultation</a></li>
            <li><a href="press-releases.php">Press releases</a></li>
            <li><a href="google-ads.php">Google ads</a></li>
            <li><a href="meta-ads.php">Meta ads</a></li>
            <li><a href="spotify-promotions.php">Spotify promotions</a></li>
            <li><a href="youtube-promotions.php">Youtube promotions</a></li>
            <li><a href="influencer-marketing.php">Influencer marketing</a></li>
            <li><a href="reels-promotions.php">Reels promotions</a></li>
            <li><a href="music-distribution.php">Music distribution</a></li>

              </ul>








            </div>
            <!-- end widget -->
            <!-- end widget -->

            <!-- end widget -->
            <div class="widget">
              <h4 class="title">GALLERY</h4>
              <ul class="gallery">
                <li><a href="images/news03.jpg" data-fancybox><img src="images/news03.jpg" alt="Image"></a></li>
                <li><a href="images/news02.jpg" data-fancybox><img src="images/news02.jpg" alt="Image"></a></li>
                <li><a href="images/news03.jpg" data-fancybox><img src="images/news03.jpg" alt="Image"></a></li>
                <li><a href="images/news04.jpg" data-fancybox><img src="images/news04.jpg" alt="Image"></a></li>
                <li><a href="images/news05.jpg" data-fancybox><img src="images/news05.jpg" alt="Image"></a></li>
                <li><a href="images/news06.jpg" data-fancybox><img src="images/news06.jpg" alt="Image"></a></li>
              </ul>

            </div>
            <!-- end widget -->
          </aside>
          <!-- end sidebar -->

          <!-- end post-comment -->

        </div>
        <!-- end post -->
        <div class="clearfix"></div>

        <!-- end container -->
      </div>
      <!-- end journal -->
    </section>
    <!-- end content -->
  </main>
  <div class="footer-spacing"></div>
  <!-- end footer-spacing -->
  <?php include 'includes/footer.php' ?>

  <!-- end footer -->
  <audio id="link" src="audio/link.mp3" preload="auto"></audio>

  <!-- JS FILES -->
  <script src="js/jquery.min.js"></script>
  <script>
    // PRELOADER
    (function($) {
      $(window).load(function() {
        $("body").addClass("page-loaded");
      });
    })(jQuery)
  </script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/fancybox.min.js"></script>
  <script src="js/jquery.stellar.js"></script>
  <script src="js/odometer.min.js"></script>
  <script src="js/hamburger.min.js"></script>
  <script src="js/easings.js"></script>
  <script src="orjs/isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/perspective.min.js"></script>
  <script src="js/scripts.js"></script>
</body>

<!-- Mirrored from themezinho.net/anchor/blog-post.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 05:36:27 GMT -->

</html>