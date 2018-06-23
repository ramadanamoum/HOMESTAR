<footer id="contact" class="footer-key text-center z-index-105">
    <div class="container">
        <div><a href="#" class="footer logo"><img src="img/straight-light.png" alt="" ></a></div>
        <p class="footer-det">
            <b class="bold">Get in touch</b>
            <br>
            Penhurst House, 352-356 Battersea Park Road
            , London, England, SW11 3BY
            <br>
            Call: 07947 089792
            <br>
            E-mail: <a href="mailto:support@thehomestraight.online">support@thehomestraight.online</a>
            <br>
        </p>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center white-color">
           © 2018 The Home Straight Online Ltd Company number 11250998
                </p>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top:15px;">
                <img src="img/logogamble.png" alt="Be Gamble" style="width: 220px; background: #fff; padding: 10px; border-radius: 10px;">
                <div style="display:inline-block">
                <span style="display: inline-block; background: #fff; color: #000; width: 45px; height: 45px; padding: 10px 5px; border-radius: 50%; border: 4px solid #f72020; position: relative; top: -15px; left: 14px;">18+</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="js/jquery-3.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/owl.carousel.js"></script>
<script>
    AOS.init({
        duration: 1200,
        offset: 100,
        startEvent: 'DOMContentLoaded'
    });

</script>
<!--<script type="text/javascript" src="dist/skrollr.min.js"></script>-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        "use strict";

        $(window).scroll(function () {
            if ($(this).scrollTop() >= 200) {
                // $('.line-to-top').fadeOut();
                $('.two-top').addClass('right-lang');
                // $('.line-to-right').fadeOut();
                $('.right-menu').addClass('fix-menu');
            } else {
                // $('.line-to-top').fadeIn();
                $('.two-top').removeClass('right-lang');
                // $('.line-to-right').fadeIn();
                $('.right-menu').removeClass('fix-menu');
            }

        });
    });
    $('.right-menu li:has(> ul)').addClass("haschaid");

    //
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,

        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
</script>
<script>
    $(".dropdown-content .close").on("click", function () {
        $(".right-menu .dropdown").toggleClass("Hoverd")
    });
    $(".right-menu .dropbtn").on("click", function () {
        $(".right-menu .dropdown").toggleClass("Hoverd")
    });
</script>
<script>
    var div_num = $('.lang-list div').length;
    $(".left-lang").on("click", function () {
        $(".two-top").toggleClass("Hoverdlang")
        $('.lang-list').css({'height': 0+'%'})
        $('.Hoverdlang .lang-list').css({'height': div_num*100+'%'})
    });
    $(".left-lang::before").on("click", function () {
        $(".two-top").toggleClass("Hoverdlang")
    });
    $(".menu-contant a:not( a[href$='javascript:void(0)'])").on("click", function () {
        $(".right-menu .dropdown").toggleClass("Hoverd")
    });
</script>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        $('em').tooltip('enable')
    })
</script>
<script src="js/wow.min.js"></script>
<script src="js/smooth-scroll.polyfills.js"></script>
<script>
    var scroll = new SmoothScroll('a[href*="#"]');
</script>