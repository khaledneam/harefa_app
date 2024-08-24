


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

<script src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ url('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ url('js/jquery-ui.js') }}"></script>
<script src="{{ url('js/popper.min.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/owl.carousel.min.js') }}"></script>
<script src="{{ url('js/jquery.stellar.min.js') }}"></script>
<script src="{{ url('js/jquery.countdown.min.js') }}"></script>
<script src="{{ url('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ url('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ url('js/aos.js') }}"></script>
<script src="{{ url('js/jquery.fancybox.min.js') }}"></script>
<script src="{{ url('js/jquery.sticky.js') }}"></script>
<script src="{{ url('js/jquery.mb.YTPlayer.min.js') }}"></script>


<script src="{{ url('js/main.js') }}"></script>

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
