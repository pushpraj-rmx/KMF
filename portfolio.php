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

    <style>
        .responsive ul {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 1rem;
        }

        .responsive2 ul {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 1rem;
        }

        ul {
            list-style: none;
            margin: 0rem;
            padding: 1rem;

        }




        .responsive li,
        .responsive2 li {
            background: #FFF;
            padding: 1rem;
        }

        .portfolio-page {
            margin-top: 150px;
        }

        .responsive2 img {
            max-height: 200px;
        }

        @media (max-width: 550px) {

            h1,
            h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>

    <div class="transition-overlay"></div>
    <!-- end transition-overlay -->
    <main>
        <?php include "includes/header.php" ?>

        <section class="content portfolio-page">


            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>



            <!-- news section -->

            <!-- end icon-features -->
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap');
            </style>
            <div class="">

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

                        <section class="responsive">
                            <h2><span style="color:goldenrod;font-size:40px">Recording Records </span></h2>
                            <h5> &nbsp; &nbsp; Showcasing Our Diverse Portfolio with a Stylish CSS Grid Perfect for Portfolios or Photo Galleries.</h5>
                            <hr>
                            <ul class="grid-container">
                                <li> <img style="box-shadow:0px 8px 40px goldenrod " src="./images/port-xlogo.png">
                                    <!-- <h3>Words to Live By</h3> -->
                                </li>
                            </ul>
                        </section>

                        <section class="responsive2">
                            <ul class="grid-container">

                                <?php
                                $query = mysqli_query($conn, "select * from portfolio where is_active=1 order by portfolio_id asc ");
                                $totl = mysqli_num_rows($query);
                                if ($totl > 0) {
                                    $id = 1;
                                    while ($row = mysqli_fetch_array($query)) {
                                ?>


                                        <li> <img src="<?= BASE_URL_IMG . 'blog-image/' . $row['portfolio_img'] . '' ?>">
                                        </li>

                                    <?php $id++;
                                    }
                                } else { ?>
                                    <div>
                                        <p salign="center">No record found</p>
                                    </div>
                                <?php } ?>


                            </ul>
                        </section>
                    </div>
                </div>
            </div>
            <style>
                .video {
                    margin-top: 2.5rem;
                }
            </style>
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