<?php include  'db/config.php' ?>

<!doctype html>
<html lang="en">

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
  <meta property="og:site_name" content="KMF Media">
  <meta property="og:title" content="KMF Media">
  <meta property="og:type" content="website">
  <!--  -->

  <!-- TWITTER META -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@KMFMedia">
  <meta name="twitter:creator" content="@KMFMedia">
  <meta name="twitter:title" content="KMF Media">
  <meta name="twitter:description" content="KMF Media | Music Production Company">
  <!--  -->

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

  <div class="transition-overlay"></div>
  <!-- end transition-overlay -->
  <main>
    <?php include "includes/header.php" ?>
    <section class="slider">
      <div class="video-bg">
        <video src="./videos/video1.mp4" loop muted autoplay></video>
      </div>
      <!-- end video -->
      <div class="swiper-container">
        <div class="swiper-wrapper">

          <?php
          $query = mysqli_query($conn, "select * from slider where is_active=1 order by slider_id asc ");
          $totl = mysqli_num_rows($query);
          if ($totl > 0) {
            $id = 1;
            while ($row = mysqli_fetch_array($query)) {
          ?>
              <div class="swiper-slide">
                <div class="inner">
                  <h5 data-swiper-parallax="-600"><?=$row['slider_preheader']?></h5>
                  <h2 data-swiper-parallax="-400"><?=$row['slider_header']?></h2>
                  <p data-swiper-parallax="-200">
                  <?=$row['slider_desc']?>
                  </p>
                </div>
              </div>
            <?php $id++;
            }
          } else { ?>
            <div>
              <p salign="center">No record found</p>
            </div>
          <?php } ?>



        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-prev"><span>PREV</span><img src="images/arrow-left.svg" alt="Image"></div>
        <span class="swiper-button-line"></span>
        <div class="swiper-button-next"><span>NEXT</span><img src="images/arrow-right.svg" alt="Image"></div>
      </div>

      <!-- end swiper-container -->

      <div class="scroll-down"><span></span></div>
    </section>
    <section class="content">
      <div class="works four-cols">
        <div class="grid-sizer"></div>
        <!-- end grid-sizer -->
        <div class="grid-item-double">
          <figure class="reveal-effect se2-white wow perspective-box"> 
            <a href="">

              <img src="images/works01.jpg" alt="Image">
            </a> 
            <figcaption> <a href="music-marketing.php">
                <div class="bg-color" data-background="#2095f4"></div>
                <!-- end bg-color -->
                <div class="brand"> </div>
                <!-- end brand -->
                <h5>Meta Ads</h5>
                <small>
                Our expertise in Meta Ads (Facebook and Instagram) enhances your reach and engagement.

                </small>
              </a> </figcaption>
          </figure>
        </div>
        <!-- end grid-item -->
        <div class="grid-item-double">
          <figure class="reveal-effect se2-white wow perspective-box">
            <a href="">

              <img src="images/works02.jpg" alt="Image">
            </a> 
            <figcaption> <a href="music-marketing.php">
                <div class="bg-color" data-background="#ffc509"></div>
                <!-- end bg-color -->
                <div class="brand"> </div>
                <!-- end brand -->
                <h5>YouTube Promotions</h5>
                <small>
                Elevate your YouTube presence and increase views with our promotional strategies.
                </small>
              </a></figcaption>
          </figure>
        </div>
        <!-- end grid-item -->
        <div class="grid-item">
          <figure class="reveal-effect se2-white wow perspective-box">
            <a href="">

              <img src="images/works03.jpg" alt="Image">
            </a> 
            <figcaption> <a href="music-marketing.php">
                <div class="bg-color" data-background="#6dd7a9"></div>
                <!-- end bg-color -->
                <div class="brand"> </div>
                <!-- end brand -->
                <h5>
                Reels Promotions

                </h5>
                <small>
                Utilize Instagram Reels for music promotion and capturing audience attention.

                </small>
              </a></figcaption>
          </figure>
        </div>
        <!-- end grid-item -->
        <div class="grid-item">
          <figure class="reveal-effect se2-white wow perspective-box">
            <a href="">

              <img src="images/works04.jpg" alt="Image">
            </a> 
            <figcaption><a href="music-marketing.php">
                <div class="bg-color" data-background="#2d2d2f"></div>
                <!-- end bg-color -->
                <div class="brand"> </div>
                <!-- end brand -->
                <h5>
                Press Releases

                </h5>
                <small>
                Craft a unique and compelling brand identity that resonates with your audience.

                </small>
              </a> </figcaption>
          </figure>
        </div>
        <!-- end grid-item -->
        <div class="grid-item">
          <figure class="reveal-effect se2-white wow perspective-box">
            <a href="">

              <img src="images/works06.jpg" alt="Image">
            </a> 
            <figcaption> <a href="music-marketing.php">
                <div class="bg-color" data-background="#fec520"></div>
                <!-- end bg-color -->
                <div class="brand"> </div>
                <!-- end brand -->
                <h5>
                Google Ads

                </h5>
                <small>
                Engage your audience through strategic email marketing <br> campaigns.

                </small>
              </a></figcaption>
          </figure>
        </div>
        <!-- end grid-item -->
        <div class="grid-item-double">
          <figure class="reveal-effect se2-white wow perspective-box">
            <a href="">

              <img src="images/works05.jpg" alt="Image">
            </a> 
            <figcaption> <a href="music-marketing.php">
                <div class="bg-color" data-background="#9f7cb2"></div>
                <!-- end bg-color -->
                <div class="brand"> </div>
                <!-- end brand -->
                <h5>
                Spotify Promotions

                </h5>
                <small>
                We create captivating content to tell your music's story and connect with fans.

                </small>
              </a> </figcaption>
          </figure>
        </div>
        <!-- end grid-item -->
      </div>
      <!-- end works -->
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

      <!-- slider section -->

      <!-- slider section -->

      <!-- Slideshow container -->
      <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <!-- <div class="numbertext">1 / 3</div> -->
          <img src="images/saurav-kmf/1.jpg" style="width:100%">
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
          <!-- <div class="numbertext">2 / 3</div> -->
          <img src="images/saurav-kmf/2.jpg" style="width:100%">
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
          <!-- <div class="numbertext">3 / 3</div> -->
          <img src="images/saurav-kmf/3.jpg" style="width:100%">
          <div class="text"></div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>

      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>

      <style>
        .slideshow-container {
          max-width: 1200px;
          position: relative;
          margin: auto;
        }

        /* Hide the images by default */
        /* .mySlides {
          display: none;
        } */

        /* Next & previous buttons */
        .prev,
        .next {
          cursor: pointer;
          position: absolute;
          top: 88%;
          width: auto;
          margin-top: -22px;
          padding: 16px;
          color: white;
          font-weight: bold;
          font-size: 18px;
          transition: 0.6s ease;
          border-radius: 0 3px 3px 0;
          user-select: none;
        }


        /* Position the "next button" to the right */
        .next {
          right: 0;
          border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
          background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
          cursor: pointer;
          height: 5px;
          width: 5px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
          background-color: #717171;
        }

        /* Fading animation */
        .fade {
          animation-name: fade;
          animation-duration: 1.5s;
        }

        @keyframes fade {
          from {
            opacity: .4
          }

          to {
            opacity: 1
          }
        }


        @media only screen and (max-width: 600px) {
          .slider {
            height: 100vh;
          }
        }
      </style>
      <!-- news section -->


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

      <!-- news section -->

      <!-- end icon-features -->
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap');
      </style>
      <div class="">
        <div class="col-md-5 col-sm-12 col-12 wow fadeIn">
          <h5 class="ce cee yout">YOUTUBE</h5>
          <h2 class="ce you">Our Recent <span style="color: red;">Release</span>...</h2>
        </div>
        <hr>

        <style>
          .release {
            font-family: 'Dancing Script', cursive;
          }

          @media (max-width: 767px) {
            .release {
              display: none;
            }

            .you {
              font-size: 26px;
            }

            .yout {
              font-size: 20px;
            }
          }
        </style>
        <div class="inner video-custom wow fadeInRight video">
          <div class="contenty" style="text-align: center; margin-bottom:50px">
            <?php
            $query = mysqli_query($conn, "select * from youtube_link where is_active=1 order by youtube_link_id asc ");
            $totl = mysqli_num_rows($query);
            if ($totl > 0) {
              $id = 1;
              while ($row = mysqli_fetch_array($query)) {
            ?>
                <iframe width="95%" height="500px" src="<?= $row['youtube_link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              <?php $id++;
              }
            } else { ?>
              <div>
                <p salign="center">No record found</p>
              </div>
            <?php } ?>

          </div>
        </div>
      </div>
      <style>
        .video {
          margin-top: 2.5rem;
        }
      </style>

      <!-- testimonial section -->
      <div class="col-md-5 col-sm-12 col-12 wow fadeIn">
        <h5 class="ce cee">TESTIMONIALS</h5>
        <h2 class="ce">What People are saying...</h2>
      </div>
      <hr>

      <section style="margin: 50px 0px;">
        <div class="c-testimonials">
          <ul class="c-testimonials__items swiper-wrapper">

            <?php
            $query = mysqli_query($conn, "select * from testimonials where is_active=1 order by testimonials_id asc ");
            $totl = mysqli_num_rows($query);
            if ($totl > 0) {
              $id = 1;
              while ($row = mysqli_fetch_array($query)) {
            ?>

                <li class="c-testimonials__item c-card-testimonial swiper-slide">
                  <div class="c-card-testimonial__description">
                    <div class="c-card-testimonial__author">
                      <?= $row['testimonials_name'] ?>
                    </div>
                    <div class="c-card-testimonial__excerpt">
                      <i>
                        <?= $row['testimonials_quote'] ?>
                      </i>
                    </div>
                  </div>
                </li>
              <?php $id++;
              }
            } else { ?>
              <div>
                <p salign="center">Can't fetch testimonials, please visit later</p>
              </div>
            <?php } ?>
          </ul>

          <div class="c-testimonials__pagination"></div>

          <div class="c-testimonials__arrows">
            <button class="c-testimonials__arrow-prev">Prev</button>
            <button class="c-testimonials__arrow-next">Next</button>
          </div>
        </div>

      </section>

      <hr>



      <style>
        .ce {
          margin-left: 50px;
        }

        .cee {
          margin-top: 8rem;
        }


        .testimonial-section {
          margin-top: 35px;
          /* Add margin-top to create space from the top */
          display: flex;
          flex-direction: column;
          align-items: center;
          padding: 20px;
          margin-bottom: 1rem;
        }

        .testimonial-sectionn {
          margin-top: 2px;
          /* Add margin-top to create space from the top */
          display: flex;
          flex-direction: row;
          align-items: center;
          justify-content: space-around;
          padding: 20px;
          margin-bottom: 5rem;
        }


        .testimonial {
          max-width: 400px;
          margin-bottom: 10px;
          padding: 20px;
          background-color: #f9f9f9;
          border-radius: 10px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          text-align: center;
        }

        .testimoniall {
          max-width: 400px;
          margin-bottom: 10px;
          padding: 20px;
          background-color: #f9f9f9;
          border-radius: 10px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          text-align: center;
        }

        @media (min-width: 768px) {
          .testimonial-section {
            flex-direction: row;
            justify-content: space-around;
          }

          .testimonial {
            margin-bottom: 1px;
          }
        }

        @media (max-width: 767px) {
          .testimonial-sectionn {
            flex-direction: column;
            align-items: center;
          }

          .cee {
            margin-top: 5rem;
          }

        }
      </style>
      <!-- testimonial section -->
      <div class="side-image-content">
        <div class="inner">
          <figure class="reveal-effect se2-white wow main-image" data-aos="slide-effect"><img src="images/image01.jpg" alt="Image"></figure>
          <figure class="reveal-effect se2-white wow sub-image" data-aos="slide-effect"><img src="images/image02.jpg" alt="Image"></figure>
        </div>
        <div class="inner bg1 wow fadeInRight">
          <div class="contenty">
            <h5>ELEVATING MUSIC</h5>
            <h2>Welcome to Our Harmony...</h2>
            <p>
              At <i>KMF Media, </i> you'll be part of a community that shares your passion. Enjoy your private studio and facilities designed to amplify the musical life you envision.
            </p>
            <a href="about-us.php"><span data-hover="FIND OUT MORE">FIND OUT MORE</span></a>
          </div>
        </div>
      </div>

      <div class="col-md-5 col-sm-12 col-12 wow fadeIn">
        <h5 class="ce cee blogg">Blogs and Journal</h5>
        <h2 class="ce blog">Music Muses and Insights...</h2>
      </div>
      <hr>
      <style>
        @media (max-width: 767px) {
          .blogg {
            display: none;
          }

          .ce {
            margin-left: 18px;
          }

          .sub-image {
            display: none;
          }

        }
      </style>

      <section class="content">
        <div class="journal">

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
                        <h3><a href="blog-post.php?blog_id=<?= $row['blog_id'] ?>"><?= $row["blog_title"] ?></a></h3>
                        <p>
                          <?= $row["blog_content"] ?>
                        </p>
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

      <!--end side-image-content -->
      <!-- end awards -->
    </section>
    <!-- end content -->
  </main>
  <div class="footer-spacing"></div>
  <!-- end footer-spacing -->
  <?php include "includes/footer.php" ?>

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

  <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      slides[slideIndex - 1].style.display = "block";
      setTimeout(showSlides, 3000); // Change image every 2 seconds
    }
    // const testimonialsSwiper = new Swiper('.testimonials_swiper', {
    //   direction: 'horizontal',
    //   loop: true,
    //   autoplay: true,
    //   delay: 1,
    //   lazy: true,
    //   lazyPreloadPrevNext: 6,
    //   pagination: {
    //     el: '.swiper-pagination',
    //   },

    //   navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    //   },

    //   scrollbar: {
    //     el: '.swiper-scrollbar',
    //   },
    //   slidesPerView: 6,
    // });
  </script>


  <script>
    var swiper = new Swiper('.c-testimonials', {
      spaceBetween: 30,
      effect: 'fade',
      loop: true,
      mousewheel: {
        invert: false,
      },
      // autoHeight: true,
      pagination: {
        el: '.c-testimonials__pagination',
        clickable: true
      },
      navigation: {
        nextEl: '.c-testimonials__arrow-next',
        prevEl: '.c-testimonials__arrow-prev',
      }
    });
  </script>


  <style>
    @media only screen and (max-width: 600px) {

      .prev,
      .next {
        top: 98%;
      }

      .slider .swiper-container .swiper-slide .inner {
        position: absolute;
        bottom: auto !important;
      }
    }
  </style>



</body>

<!-- Mirrored from themezinho.net/anchor/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 05:35:36 GMT -->

</html>