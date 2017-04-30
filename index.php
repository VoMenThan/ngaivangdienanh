<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intro</title>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link href="css/video-js.css" rel="stylesheet">
    <script src="js/videojs-ie8.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<section>
    <article>
        <div class="logo-nvda">
            <img class="img-logo mg-aut" src="images/logo.png" alt="logo ngai vàng điện ảnh">
        </div>
        <div class="slider-nvda">
            <div class="regular slider">
                <div>
                    <img src="images/slider.jpg">
                </div>
                <div>
                    <img src="images/04.jpg">
                </div>
                <div>
                    <img src="images/05.jpg">
                </div>
            </div>
        </div>
    </article>
    <article>
        <div class="title-bg">
            <div class="box-Contest box-title">
                <a href="#" class="du-thi img-top"></a>
            </div>
            <div class="box-Candidates box-title">
                <a href="#" class="thi-sinh img-top"></a>
            </div>
        </div>
        <nav class="nav-top nav-home">
            <a href="http://ngaivangdienanh.com">
                <img src="images/logo.png" alt="logo" class="logo-nav-nvda">
            </a>
            <ul class="menu-top-scroll">
                <li class="menu-detail btn-close"><span class="close-x">X</span></li>
                <li class="menu-detail">
                    <a href="">Giới thiệu</a>
                </li>
                <li class="menu-detail">
                    <a class="active" href="">Thể lệ</a>
                </li>
                <li class="menu-detail">
                    <a href="">Tin tức</a>
                </li>
                <li class="menu-detail">
                    <a href="">Hình ảnh</a>
                </li>
                <li class="menu-detail">
                    <a href="">Video</a>
                </li>
            </ul>
            <img class="btn-menu" src="images/btn-menu.png" alt="menu">
        </nav>
    </article>
</section>
<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="js/video.js"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $(".regular").slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            speed: 500
        });
        /*js menu top mobile*/
        $('.btn-menu').click(function(event){
            event.stopPropagation();
            $('.menu-top-scroll').fadeIn();
        });
        $('.close-x').click(function () {
            $('.menu-top-scroll').fadeOut();
        })
    });

</script>
</body>
</html>