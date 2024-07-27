<!DOCTYPE html>
<html lang="en">

<head>
    <title>7arefa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ url('css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ url('css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ url('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ url('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ url('css/aos.css') }}">

    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <style>
        /* Preloader styles */
        #preloader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: #fff; /* Change this to the color of your choice */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .preloader {
            /* You can add styles for inner preloader elements here */
        }

        .fadeOut {
            transition: opacity 600ms;
            opacity: 0;
        }
    </style>


</head>

<body>

<!-- LOADER -->
<div id="preloader">
    <img class="preloader" src="{{ url('images/loading-img.gif') }}" alt="">
</div>
<!-- END LOADER -->

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">

        <div class="container">
            <div class="d-flex align-items-center">
                <div class="site-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ url('images/logo.png') }}" alt="Logo">
                    </a>
                </div>
                <div class="ml-auto">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li class="active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>

                            <li><a href="blog.html" class="nav-link">Blog</a></li>
                            <li><a href="contact.html" class="nav-link">Contact</a></li>
                        </ul>
                    </nav>

                    <a href="#"
                       class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                            class="icon-menu h3 text-white"></span></a>
                </div>
            </div>
        </div>

    </header>

    <div class="hero overlay" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 ml-auto">
                    <h1 class="text-white">World Cup Event</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.</p>
{{--                    <div id="date-countdown"></div>--}}
{{--                    <p>--}}
{{--                        <a href="#" class="btn btn-primary py-3 px-4 mr-3">Book Ticket</a>--}}
{{--                        <a href="#" class="more light">Learn More</a>--}}
{{--                    </p>--}}
                </div>
            </div>
        </div>
    </div>



    <div class="container">



    </div>


    <div class="latest-news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <!-- Ad section -->
                    <img src="https://picsum.photos/200/300" alt="Ad 1" class="img-fluid mb-3">
                    <img src="https://picsum.photos/200/300" alt="Ad 1" class="img-fluid mb-3">
                </div>


                <div class="container mb-3">

                    <div class="row no-gutters">

                        <div class="col-md-12">
                            <div class="post-entry">
                                <a href="#">
                                    <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                                </a>
                                <div class="caption">
                                    <div class="caption-inner">
                                        <h3 class="mb-3">Dogba set for Juvendu return?</h3>
                                        <div class="author d-flex align-items-center">
                                            <div class="img mb-2 mr-3">
                                                <img src="images/person_1.jpg" alt="">
                                            </div>
                                            <div class="text">
                                                <h4>Mellissa Allison</h4>
                                                <span>May 19, 2020 &bullet; Sports</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>







                </div>


                <div class="col-md-2">
                    <!-- Ad section -->
                    <img src="https://picsum.photos/200/300" alt="Ad 1" class="img-fluid mb-3">
                    <img src="https://picsum.photos/200/300" alt="Ad 1" class="img-fluid mb-3">
                </div>



            </div>
            <!-- end row -->


            <div class="row justify-content-center m-auto">
                <div class="col-auto">
                    <!-- Ad section -->
                    <img src="https://picsum.photos/800/200" alt="Ad 3" class="img-fluid mx-3 mb-3">
                </div>
                <div class="col-auto">
                    <!-- Ad section -->
                    <img src="https://picsum.photos/800/200" alt="Ad 4" class="img-fluid mx-3 mb-3">
                </div>
            </div>

        </div>
    </div>





    <footer class="footer-section">
        <div class="container">
            <div class="row">
{{--                <div class="col-lg-3">--}}
{{--                    <div class="widget mb-3">--}}
{{--                        <h3>News</h3>--}}
{{--                        <ul class="list-unstyled links">--}}
{{--                            <li><a href="#">All</a></li>--}}
{{--                            <li><a href="#">Club News</a></li>--}}
{{--                            <li><a href="#">Media Center</a></li>--}}
{{--                            <li><a href="#">Video</a></li>--}}
{{--                            <li><a href="#">RSS</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-lg-3">
                    <div class="widget mb-3">
                        <h3>sbscribtion</h3>
                        <ul class="list-unstyled links">
                            <form action="">
                                <li>
                                    <input type="email" class="form-control" placeholder="Enter Your mail">
                                </li>
                                <li>
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </li>
                            </form>
{{--                            <li><a href="#">Online Ticket</a></li>--}}
{{--                            <li><a href="#">Payment and Prices</a></li>--}}
{{--                            <li><a href="#">Contact &amp; Booking</a></li>--}}
{{--                            <li><a href="#">Tickets</a></li>--}}
{{--                            <li><a href="#">Coupon</a></li>--}}
                        </ul>
                    </div>
                </div>
{{--                <div class="col-lg-3">--}}
{{--                    <div class="widget mb-3">--}}
{{--                        <h3>Matches</h3>--}}
{{--                        <ul class="list-unstyled links">--}}
{{--                            <li><a href="#">Standings</a></li>--}}
{{--                            <li><a href="#">World Cup</a></li>--}}
{{--                            <li><a href="#">La Lega</a></li>--}}
{{--                            <li><a href="#">Hyper Cup</a></li>--}}
{{--                            <li><a href="#">World League</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="col-lg-3">
                    <div class="widget mb-3">
                        <h3>Social</h3>
                        <ul class="list-unstyled links">
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Youtube</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="row text-center">
                <div class="col-md-12">
                    <div class=" pt-5">
                        <p>

                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This  made with <i class="icon-heart"
                                                                                          aria-hidden="true"></i> by <a target="_blank" href="https://wa.me/201016483454">Khaled Neam</a>

                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>



</div>
<!-- .site-wrap -->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.mb.YTPlayer.min.js"></script>


<script src="js/main.js"></script>

<script>

    window.addEventListener('load', function() {
        setTimeout(function() {
            document.getElementById('preloader').style.display = 'none';
        }, 3000);

        setTimeout(function() {
            var preloaderElements = document.getElementsByClassName('preloader');
            for (var i = 0; i < preloaderElements.length; i++) {
                preloaderElements[i].style.transition = 'opacity 600ms';
                preloaderElements[i].style.opacity = '0';
                setTimeout(function(element) {
                    element.style.display = 'none';
                }, 600, preloaderElements[i]);
            }
        }, 2000);
    });




</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var heroElement = document.querySelector('.hero.overlay');
        var imageUrl = "{{ url('images/bg_3.jpg') }}"; // Blade directive to generate the URL
        heroElement.style.backgroundImage = 'url("' + imageUrl + '")';
    });
</script>

</body>

</html>
