<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <title>GoCom</title>
    <?php
    include('style.php');
    ?>

</head>
<body>
<div class="line-to-top right-line-to-top"></div>
<div class="line-to-top center-line-to-top"></div>
<div class="line-to-top left-line-to-top"></div>

<div class="line-to-right line-one-top"></div>
<div class="line-to-right line-two-top"></div>


<div class="right-line-to-left"></div>
<?php
include('header.php');
?>
<header id="header-key head" class="header-key" style="height: 30vh; background-color: #b0b0b0; background-image: url('https://transparenttextures.com/patterns/batthern.png');">
    <div class="container contetn-center ">
    </div>

</header>
<!-- contet -->
    <div class="content cont1">
        <div class="container">
        <h2 class="top-title-big title-news  sum-dit wow fadeInLeft" data-wow-duration="0.3s" data-wow-delay="0.5s"
                            data-295=" " data-350="">news 1 about it lorem ipsum</h2>
            <div class="imgdetail row">
                <div class="imgall col-sm-12">
                     <img src="img/img2.jpg" class="imgdetailimg " alt="" data-200="" data-500="">
                </div>
               
            </div>
            <div class="description-all row">
                <p class="col-sm-12 sum-dit title-detail  wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.7s"
                        data-295=" " data-350="">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio doloremque earum enim esse
                            fugiat minus nesciunt, nobis non nulla placeat porro provident quos rerum similique temporibus
                            velit, veritatis voluptatum! Qui.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid commodi, dignissimos est
                            inventore ipsam, magni molestias nesciunt nobis optio pariatur porro, quis sint. Amet
                            consectetur eaque eligendi nostrum numquam, voluptatem.
                </p>
            </div>
        </div>
    </div>
<!--end contet -->

<?php
include('footer.php')
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/2.1.3/parallax.min.js"></script>

<script>
    new WOW().init();
    $(document).ready(function () {
        // Check window size
        if ($(window).width() > 769) {
            var parent = document.getElementById('header-key');
            var parallax = new Parallax(parent, {
                invertX: true,
                invertY: true,
                limitX: 15,
                limitY: 15
            });
        }
    });

    $(document).ready(function () {

    });
</script>
<script>
    // $(window).on('load',function(){
    //     $('#exampleModal').modal('show');
    // });
</script>

</body>