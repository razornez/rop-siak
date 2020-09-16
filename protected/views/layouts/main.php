<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ROP & EOQ</title>
    
    <!-- core CSS -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/css/animate.min.css" rel="stylesheet">
    <link href="css/css/prettyPhoto.css" rel="stylesheet">
    <link href="css/css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <!-- <link rel="shortcut icon" href="images/logo.png"> -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <?php echo $content; ?>


    <footer id="footer" class="midnight-blue" style="background: rgba(5, 5, 5, 0.18);">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" style="font-weight: normal;font-style: normal;width: 100%;">
                    <center>&copy; Copyright Aplikasi Inventory ROP & EOQ | 2017 <br>Developed By Iwan Kurniawan</center>
                </div>
                <div class="col-sm-68" style="font-weight: normal;font-style: normal;">
                    <!-- <ul class="pull-right">
                        <li><a href="#">Beranda</a></li>
                        <li><a href="index.php?r=site/admin_auth">Login</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    <!-- <script src="js/js/jquery.js"></script> -->
    <script src="js/js/bootstrap.min.js"></script>
    <script src="js/js/jquery.prettyPhoto.js"></script>
    <script src="js/js/jquery.isotope.min.js"></script>
    <script src="js/js/main.js"></script>
    <script src="js/js/wow.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script type='text/javascript'>
    //<![CDATA[

    $(document).ready(function() {
        // Menentukan elemen yang dijadikan sticky yaitu .nav
        var stickyNavTop = $('.navbar-inverse').offset().top; 
        var stickyNav = function(){
            var scrollTop = $(window).scrollTop();  
            // Kondisi jika discroll maka menu akan selalu diatas, dan sebaliknya        
            if (scrollTop > stickyNavTop) { 
                $('.navbar-inverse').css({ 'position': 'fixed', 'top':0, 'z-index':9999,'width':'100%' });
            } else {
                $('.navbar-inverse').css({ 'position': 'relative' });
            }
        };
        // Jalankan fungsi
        stickyNav();
        $(window).scroll(function() {
            stickyNav();
        });
    });
    //]]>
    $('.line2').click(function(){

    $("html, body").animate({ scrollTop: $(this.hash).offset().top }, 800);

    return false;

    });
    ////////
    $('.line3').click(function(){

    $("html, body").animate({ scrollTop: $(this.hash).offset().top }, 800);

    return false;

    });
    ////////
    $('.line4').click(function(){

    $("html, body").animate({ scrollTop: $(this.hash).offset().top }, 800);

    return false;

    });
    ////////
    $('.line5').click(function(){

    $("html, body").animate({ scrollTop: $(this.hash).offset().top }, 800);

    return false;

    });
    ////////
    $('.line6').click(function(){

    $("html, body").animate({ scrollTop: $(this.hash).offset().top }, 800);

    return false;

    });
    ////////
    $('.line7').click(function(){

    $("html, body").animate({ scrollTop: $(this.hash).offset().top }, 800);

    return false;

    });
    
    
    
    // $(document).ready(function(ev){
    // var items = $(".nav li").length;
    // var leftRight=0;
    // if(items>5){
    //     leftRight=(items-5)*50*-1;
    // }
    // $('#custom_carousel').on('slide.bs.carousel', function (evt) {
        
 
    //   $('#custom_carousel .controls li.active').removeClass('active');
    //   $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
    // })
    // $('.nav').draggable({ 
    //     axis: "x",
    //      stop: function() {
    //         var ml = parseInt($(this).css('left'));
    //         if(ml>0)
    //         $(this).animate({left:"0px"});
    //             if(ml<leftRight)
    //                 $(this).animate({left:leftRight+"px"});
                        
    //         }
          
    //     });
    // });
    
    $('#myCarousel').carousel({
        interval:   4000
    });
    
    var clickEvent = false;
    $('#myCarousel').on('click', '.nav a', function() {
            clickEvent = true;
            $('.nav li').removeClass('active');
            $(this).parent().addClass('active');        
    }).on('slid.bs.carousel', function(e) {
        if(!clickEvent) {
            var count = $('.nav').children().length -1;
            var current = $('.nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if(count == id) {
                $('.nav li').first().addClass('active');    
            }
        }
        clickEvent = false;
    });
    </script>
</body>
</html>