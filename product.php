


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
</html>