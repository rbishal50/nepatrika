<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <h3>समाचार </h3>
                <ul>
                    <li><a href="#">समाचार </a></li>
                    <li><a href="#">बिचार/ब्लग</a></li>
                    <li><a href="#">मनोरञ्जन </a></li>
                    <li><a href="#">विजनेस</a></li>
                    <li><a href="#">खेलकुद</a> </li>
                    <li><a href="#">विचित्र संसार</a></li>
                    <li><a href="#">शिक्षा</a></li>
                    <li><a href="#">स्वास्थ्य</a></li>
                    <li><a href="#">बिदेश</a></li>
                    <li><a href="#">धर्म</a></li>
                    <li><a href="#"> लेख / रचना</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Live TV</a></li>
                    <li><a href="#">लेख / रचना पठाउनुहोस्</a></li>
                    <li><a href="#">DONATE BLOOD</a></li>
                    <li><a href="#">ADVERTISE WITH US</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3">
                <h3>Facebook </h3>
                <div class="fb-page" data-href="https://www.facebook.com/NePatrika" data-tabs="timeline" data-height="280" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/NePatrika" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/NePatrika">NePatrika</a></blockquote>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <h3>सम्पर्क गर्नुहोस् </h3>
                <img src="images/footer-logo.png" class="img-responsive m-b-20" alt="" />
                <ul>
                    <li><i class="fa fa-map-marker m-r-5" aria-hidden="true"></i> काठमन्दौ, नेपाल</li>
                    <li><i class="fa fa-phone m-r-5" aria-hidden="true"></i> ९८XXXXXXXX / ९८XXXXXXXX</li>
                    <li><i class="fa fa-envelope m-r-5" aria-hidden="true"></i> <a href="#">info@nepatrika.com</a></li>
                    <li><i class="fa fa-globe m-r-5" aria-hidden="true"></i> <a href="#">www.nepatrika.com</a></li>
                </ul>
            </div>
        </div>
        <h1><a href="#">के तपाईं हामीलाई आफ्नो लेख / रचनाहरू पठाउन चहांनू हुन्छ... पठाउँनुहोस</a></h1>
        <ul class="bottom">
            <li><a href="https://www.facebook.com/NePatrika/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- video slider trending on youtube slider -->
<script src="js/slick.min.js" type="text/javascript"></script>
<script>
$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,

        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 2,
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
        }
    }]
});
</script>
<!-- end video slider trending on youtube slider -->
<script src="js/modernizr.js"></script>
<script src="js/main.js"></script>
<!-- only include in gallery page -->
<script src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript">
$(document).ready(function() {

    $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({
        animation_speed: 'normal',
        theme: 'light_square',
        slideshow: 3000,
        autoplay_slideshow: false
    });



});
</script>
<!-- // end only include in gallery -->
</body>

</html>
