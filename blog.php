<?php include  'db/config.php' ?>

<!doctype html>
<html lang="en">

<!-- Mirrored from themezinho.net/anchor/journal.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 05:36:08 GMT -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="format-detection" content="telephone=no">
  <title>KMF Media | Music Production Company | Saurabh </title>
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
  <div class="preloader"> <img src="images/preloader.gif" alt="Image">
    <ul class="text-rotater">
      <li>Hangin there</li>
      <li>Still loading</li>
      <li>Almost done</li>
    </ul>
  </div>
  <!-- end preloader -->
  <div class="transition-overlay"></div>
  <!-- end transition-overlay -->
  <main>
    <!-- end hamburger-navigation -->
    <?php include 'includes/header.php' ?>

    <section class="int-hero">
      <div class="video-bg">
        <video src="videos/video.mp4" muted autoplay loop></video>
      </div>
      <!-- end video-bg -->
      <div class="inner">
        <h2>Stories any about our small digital agency</h2>
      </div>
      <!-- end inner -->
    </section>
    <!-- end int-hero -->
    <section class="content">
      <div class="journal">
        <div class="post highlight wow fadeInUp">
          <figure><img src="images/news01.jpg" alt="Image">
            <div class="post-content">
              <!-- <div class="author"> <img src="images/team01.jpg" alt="Image"> <small>by <strong>Themezinho</strong></small> </div> -->
              <!-- <small>Posted 20 July 2021 | <a href="#">Web</a>, <a href="#">UI-UX</a>, <a href="#">Coding</a></small> -->
              <h3><a href="blog-post.php">Behind the Beats: Artist Spotlights and Interviews</a></h3>
              <p>
                Discover the stories behind the beats as we shine a spotlight on talented artists in the music industry.
              </p>
              <!-- <a href="blog-post.php" class="link">READ MORE</a> -->
            </div>
            <!-- end post-content -->
          </figure>
        </div>
        <!-- end post -->
        <div class="clearfix"></div>
        <div class="container mt-5">
          <div class="row">
            <?php
            $query = mysqli_query($conn, "select * from blog where is_active=1 order by blog_id asc ");
            $totl = mysqli_num_rows($query);
            if ($totl > 0) {
              $id = 1;
              while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-md-4 col-sm-12 wow fadeInUp">
                  <div class="post">
                    <figure><img src="<?= BASE_URL_IMG . 'blog-image/' . $row['blog_img'] . '' ?>" alt="Image">
                      <div class="author"> <img src="images/logo.png" alt="Image"> <small>by <strong>KMF Media</strong></small> </div>
                    </figure>
                    <div class="post-content"> <small>Posted 20 October 2023</small>
                      <h3><a href="blog-post.php?blog_id=<?= $row['blog_id'] ?> "><?= $row["blog_title"] ?></a></h3>
                      <p><?= $row["blog_content"] ?></p>
                    </div>
                    <!-- end post-content -->
                  </div>
                  <!-- end post -->
                </div>

              <?php $id++;
              }
            } else { ?>
              <div>
                <p salign="center">No record found</p>
              </div>
            <?php } ?>

            <hr class="my-4">



            <!-- end col-6 -->
            <!-- end col-6 -->
          </div>
          <!-- end row -->
        </div>

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
  <script src="js/isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/perspective.min.js"></script>
  <script src="js/scripts.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

<!-- Mirrored from themezinho.net/anchor/journal.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 05:36:16 GMT -->

</html>