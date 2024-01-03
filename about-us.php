<?php include  'db/config.php' ?>

<!doctype html>
<html lang="en">

<!-- Mirrored from themezinho.net/anchor/anchor.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 05:35:40 GMT -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="format-detection" content="telephone=no">
  <title>KMF Media - Music Production Company</title>
  <meta name="author" content="Themezinho">
  <meta name="description" content="KMF Media - Music Production Company">
  <meta name="keywords" content="creative, works, showcase, portfolio, highlight, projects, parallax, agency, digital, studio, css, animation, transition, svg, html, css">

  <!-- SOCIAL MEDIA META -->
  <meta property="og:description" content="KMF Media - Music Production Company">
  <meta property="og:image" content="http://www.themezinho.net/Anchor/preview.png">
  <meta property="og:site_name" content="KMF Media">
  <meta property="og:title" content="KMF Media">
  <meta property="og:type" content="website">


  <!-- TWITTER META -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@KMFMedia">
  <meta name="twitter:creator" content="@KMFMedia">
  <meta name="twitter:title" content="KMF Media">
  <meta name="twitter:description" content="KMF Media - Music Production Company">


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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.0/css/all.min.css" integrity="sha512-UJqci0ZyYcQ0AOJkcIkUCxLS2L6eNcOr7ZiypuInvEhO9uqIDi349MEFrqBzoy1QlfcjfURHl+WTMjEdWcv67A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <!-- end preloader -->
  <div class="transition-overlay"></div>
  <!-- end transition-overlay -->
  <main>

    <?php include 'includes/header.php' ?>

    <section class="int-hero">
      <div class="video-bg">
        <video src="videos/video.mp4" muted autoplay loop></video>
      </div>
      <!-- end video-bg -->
      <div class="inner">
        <h2>Kmf Media takes your music to your Target audience!</h2>
      </div>
      <p>Constructing the perfect marketing strategy to bridge the gap between you and your target.</p>
      <!-- end inner -->
    </section>
    <!-- end int-hero -->
    <section class="content">
      <div class="about-studio">
        <figure class="hero-image wow fadeInUp"> <img src="images/big-img.jpg" alt="Image"></figure>
        <div class="container">
          <div class="row">
            <div class="col-md-4 wow fadeInLeft">
              <h5>Welcome to KMF Media – Where Music Meets Marketing! </h5>
              <p class="lead"> At KMF Media, we are more than just a music marketing company; we are the architects of your musical success story. </p>
              <a href="#" class="link">Support@kmfmedia.in</a>
            </div>
            <!-- end col-4 -->
            <div class="col-md-8 wow fadeInRight">
              <p class="lead">Founded in 2020 by the forward-thinking Sourav Kumar Yadav, affectionately referred to as Krantiveer, our goal is to craft a blend of creativity and strategic expertise that goes beyond the conventional. We go beyond being a mere music marketing company; we stand as the masterminds behind the narrative of your musical triumph.<br><br>We believe in the power of music to inspire and move audiences. With a passionate team of music mavens and marketing maestros, we go beyond conventional boundaries to catapult artists to unparalleled heights. Our focus is not just on promoting your music but on ensuring that it resonates and reverberates with the perfect audience, creating a lasting crescendo.</p>
              <p style="display:none;">We believe in the power of music to inspire and move audiences. With a passionate team of music mavens and marketing maestros, we go beyond conventional boundaries to catapult artists to unparalleled heights. Our focus is not just on promoting your music but on ensuring that it resonates and reverberates with the perfect audience, creating a lasting crescendo. </p>
            </div>
            <!--end col-6 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <!-- end about-studio -->
      <div class="side-image-content">
        <div class="inner">
          <figure class="reveal-effect se2-white wow main-image" data-aos="slide-effect"><img src="images/big-saurav.jpg" alt="Image"></figure>
          <figure class="reveal-effect se2-white wow sub-image phone-hid" data-aos="slide-effect"><img src="images/big-saurav.jpg" alt="Image"></figure>
        </div>
        <style>
          .phone-hid {
            display: none;
          }

          @media only screen and (max-width: 600px) {

            .phone-hid {
              display: block;
            }
          }
        </style>
        <div class="inner bg1 wow fadeInRight">
          <?php
          $query = mysqli_query($conn, "select * from about where about_id = 10 ");
          $totl = mysqli_num_rows($query);
          if ($totl > 0) {
            $id = 1;
            while ($row = mysqli_fetch_array($query)) {
          ?>
              <div class="contenty">
                <h5>
                  <?=$row['about_position']?>
                </h5>
                <h2>
                  <?=$row['about_name']?>
                </h2>
                <p>
                  <?=$row['about_desc']?>
                </p>
              </div>
            <?php $id++;
            }
          } else { ?>
            <div>
              <p salign="center">No record found</p>
            </div>
          <?php } ?>
        </div>
      </div>
      <section class="content">
        <div class="journal">

          <!-- end post -->
          <div class="clearfix"></div>
          <div class="container mt-5">
            <div class="row">
              <?php
              $query = mysqli_query($conn, "select * from about WHERE about_id <> 10 AND is_active = 1");
              $totl = mysqli_num_rows($query);
              ?>
              <?php
              if ($totl > 0) {
                $id = 1;
                while ($row = mysqli_fetch_array($query)) : ?>
                  <div class="col-md-4 col-sm-12 wow fadeInUp">
                    <div class="">
                      <figure><img src="<?= BASE_URL_IMG . 'about-image/' . $row['about_img'] . '' ?>" alt="Image">
                      </figure>
                      <div class="post-content"> <small><?= $row['about_position'] ?></small>
                        <h3><?= $row['about_name'] ?></h3>
                        <p><i><?= $row['about_desc'] ?></i></p>
                      </div>
                    </div>
                  </div>
                <?php $id++;
                endwhile;
              } else { ?>
                <div>
                  <p salign="center">No record found</p>
                </div>
              <?php } ?>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
        </div>
        <!-- end journal -->
      </section>
      <!-- end team-members -->
      <div class="icon-features">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-12 wow fadeIn">
              <div class="meta-ads">
                <i class="fab fa-facebook"></i>
                <small>
                  <h6>
                    Meta Ads
                  </h6>
                </small>
              </div>
              <p>
                Our expertise in Meta Ads (Facebook and Instagram) enhances your reach and engagement.
              </p>
              <a href="meta-ads.php">DISCOVER MORE</a>
            </div>
            <!-- end col-4 -->
            <div class="col-md-4 col-sm-4 col-12 wow fadeIn" data-wow-delay="0.2s">
              <div class="youtube-promotions">
                <i class="fab fa-youtube"></i>
                <small>
                  <h6>
                    YouTube Promotions
                  </h6>
                </small>
              </div>

              <p>
                Elevate your YouTube presence and increase views with our promotional strategies.
              </p>
              <a href="youtube-promotions.php">DISCOVER MORE</a>
            </div>
            <!-- end col-4 -->
            <div class="col-md-4 col-sm-4 col-12 wow fadeIn" data-wow-delay="0.4s">
              <div class="reels-promotions">
                <i class="fab fa-instagram"></i>
                <small>
                  <h6>
                    Reels Promotions
                  </h6>
                </small>

              </div>

              <p>
                Utilize Instagram Reels for music promotion and capturing audience attention.
              </p>
              <a href="reels-promotions.php">DISCOVER MORE</a>
            </div>
            <!-- end col-4 -->
            <div class="col-md-4 col-sm-4 col-12 wow fadeIn">
              <div class="press-release">
                <i class="fas fa-newspaper"></i>
                <small>
                  <h6>
                    Press Releases
                  </h6>
                </small>

              </div>

              <p>
                Craft a unique and compelling brand identity that resonates with your audience.
              </p>
              <a href="press-releases.php">DISCOVER MORE</a>
            </div>
            <!-- end col-4 -->
            <div class="col-md-4 col-sm-4 col-12 wow fadeIn" data-wow-delay="0.2s">
              <div class="google-adss">
                <i class="fab fa-google"></i>
                <small>
                  <h6>
                    Google Ads
                  </h6>
                </small>
              </div>
              <p>
                Engage your audience through strategic email marketing <br> campaigns.
              </p>
              <a href="google-ads.php">DISCOVER MORE</a>
            </div>
            <!-- end col-4 -->
            <div class="col-md-4 col-sm-4 col-12 wow fadeIn" data-wow-delay="0.4s">
              <div class="spotify-promotions">
                <i class="fab fa-spotify"></i>
                <small>
                  <h6>
                    Spotify Promotions
                  </h6>
                </small>
              </div>
              <p>
                We create captivating content to tell your music's story and connect with fans.
              </p>
              <a href="spotify-promotions.php">DISCOVER MORE</a>
            </div>
            <!-- end col-4 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-4 wow fadeInLeft">
            <h5>Why Choose KMF Media?</h5>
            <p class="lead"> Transform your musical dreams into reality with KMF Media – Where Your Sound Matters. Explore more at.</p>
            <a href="https://www.kmfmedia.in" class="link">www.kmfmedia.in</a>
          </div>
          <!-- end col-4 -->
          <div class="col-md-8 wow fadeInRight">
            <p class="lead">Whether you are a budding artist or an established name, KMF Media is your partner in musical success. Dive into the art of promotion with us, where your music finds its perfect audience, and your story takes center stage.</p>
            <p><b>Customized Campaigns</b>: Tailored marketing campaigns designed to meet your specific requirements and target audience. </p>
            <p><b>Extensive Experience</b>: Having collaborated with over 3000 artists and more than 30 labels, including industry giants like Zee Music. </p>
            <p><b>Result-Oriented Approach</b>: Our team of marketing experts specializes in strategizing and executing campaigns that deliver tangible results. </p>
            <p><b>Artist Growth</b>: We don't just promote songs; we focus on the holistic growth of both the artist and the music </p>
          </div>
          <!--end col-6 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end icon-features -->
      <!-- end side-image-content -->
      <!-- end clients -->
      <div class="awards" id="counter">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-sm-12 col-12 wow fadeIn">
              <h5>News and Articles</h5>
              <h2>Celebrating Digital Excellence...</h2>
            </div>
            <!-- end col-5 -->
            <div class="col-md-7 col-sm-12 col-12 wow fadeIn" data-wow-delay="0.2s">
              <div class="row inner">
                <div class="col-md-6 col-sm-4 col-12">
                  <div class="award">
                    <figure><a href="https://xpresstimes.in/kmf-media-pvt-ltd-is-a-delhi-based-advertising-and-marketing-company-founded-by-young-entrepreneur-sourav-kumar-yadav/"><img src="images/news1.jpg" alt="Image"></a></figure>
                    <p><b>KMF Media Pvt. Ltd. is a Delhi based advertising and marketing company, founded by Young entrepreneur, Sourav Kumar Yadav.</b></p>
                  </div>
                  <!-- end award -->
                </div>
                <!-- end col-4 -->

                <div class="col-md-6 col-sm-4 col-12">
                  <div class="award">
                    <figure><a href="https://www.thedailybeat.in/krantiveer-sourav-kumar-yadav-founded-kmf-media-one-of-the-fastest-growing-marketing-firm-in-the-industry/"><img src="images/news2.png" alt="Image"></a></figure>
                    <p><b>Krantiveer, Sourav Kumar Yadav founded KMF Media; One of the Fastest Growing Marketing firm in the Industry.</b></p>
                  </div>
                  <!-- end award -->
                </div>
                <!-- end col-4 -->
              </div>
              <!-- end row inner -->
            </div>

            <!-- end col-7 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <div class="side-image-content">
        <div class="inner">
          <figure class="reveal-effect se2-white wow main-image" data-aos="slide-effect"><img src="images/sourav-award.jpeg" alt="Image"></figure>
          <figure class="reveal-effect se2-white wow sub-image" data-aos="slide-effect"><img src="images/saurav-award2.jpg" alt="Image"></figure>
        </div>
        <!-- end inner -->
        <div class="inner bg1">
          <div class="contenty">
            <h5>Let's shine and grow</h5>
            <h2>Enterprenuer Stories</h2>
            <p>I extend my heartfelt gratitude for the acknowledgment of our journey and the appreciation of our collaborative endeavors. This award is a reflection of the dedication, hard work, and innovative spirit that defines our team. I am humbled by this recognition and am inspired to continue leading with passion and purpose. - <b>SAURAV YADAV</b></p>
          </div>
          <!-- end content -->
        </div>
        <!-- end inner -->
      </div>
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
</body>


</html>