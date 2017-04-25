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
<header>
    <div class="intro-video">
        <video poster="images/poster.png" id="my-video"
               class="video-js"
                controls
                width="100%" height="264"
                data-setup='{ "techOrder": ["youtube", "html5"], "sources": [{ "type": "video/youtube", "src": "https://www.youtube.com/watch?v=aajlaOzL2-Q"}] }'
        >
            <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a web browser that
            </p>
        </video>
    </div>
    <div id="sticky-anchor-scroll"></div>
    <nav class="nav-top">
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
    <article class="title-head">
        <div class="row-bar"></div>
        <h1>Dự Thi</h1>
    </article>
</header>
<section>
    <article>
        <div class="content sign-up">
            <form name="signupForm" method="post" action="" id="signupForm">
                    <div class="form-row">
                        <label for="sigup_name" class="required">Họ tên</label>
                        <input name="sigup_name" type="text" id="sigup_name"/>
                    </div>
                    <div class="form-row">
                        <label for="sigup_birthday" class="required">Ngày tháng năm sinh</label>
                        <input name="sigup_birthday" type="text" id="sigup_birthday"/>
                    </div>
                    <div class="form-row">
                        <label for="sigup_sex">Giới tính</label>
                        <input name="sigup_sex" type="text" id="sigup_sex"/>
                    </div>
                    <div class="form-row">
                        <label for="sigup_adress required">Địa chỉ</label>
                        <input name="sigup_adress" type="text" id="sigup_adress"/>
                    </div>
                    <div class="form-row">
                        <label for="sigup_phone required">ĐTDĐ</label>
                        <input name="sigup_phone" type="text" id="sigup_phone"/>
                    </div>
                    <div class="form-row">
                        <label for="sigup_email required">Email</label>
                        <input name="sigup_email" type="text" id="sigup_email"/>
                    </div>
                    <div class="form-row">
                        <label for="sigup_facebook">Facebook</label>
                        <input name="sigup_facebook" type="text" id="sigup_facebook"/>
                    </div>
                    <div class="form-row">
                        <label for="sigup_weight required">Cân nặng</label>
                        <input name="sigup_weight" type="text" id="sigup_weight"/>
                    </div>
                    <div class="form-row">
                        <label for="sigup_height required">Chiều cao</label>
                        <input name="sigup_height" type="text" id="sigup_height"/>
                    </div>
                    <div class="form-row required">
                        <label class="required">Số đo 3 vòng</label>
                        <div class="many-text">
                            <label for="sigup_size_1">Vòng 1</label>
                            <input name="sigup_size_1" type="text" id="sigup_size_1" class="uniform"/>

                            <label for="sigup_size_2">Vòng 2</label>
                            <input name="sigup_size_2" type="text" id="sigup_size_2" class="uniform"/>

                            <label for="sigup_size_3">Vòng 3</label>
                            <input name="sigup_size_3" type="text" id="sigup_size_3" class="uniform"/>

                        </div>
                    </div>
                    <div class="form-row">
                        <a id="signupFormSubmit" onclick="$(this).closest('form').submit()" class="btn-submit">Gửi</a>
                        <div id="ServerError" style="display:none;">Đã xảy ra lỗi trên biểu mẫu.</div>
                    </div>
            </form>
            <div class="note-text">
                Lưu ý: <br>
                Các mục có dấu (*) là bắt buộc. <br>
                Vì quyền lợi của thí sinh, mọi thông tin điền vào là chính xác.
            </div>
        </div>
    </article>
</section>
<footer>
    <div class="box-footer">
        <h3>Ban Tổ Chức</h3>
        <img class="img-logo-organize" src="images/cty-sieu-nhan-viet.png" alt="">
        <img class="img-logo-organize" src="images/cty-mouse.png" alt="">
    </div>
    <div class="box-footer logo-footer">
        <img src="images/logo.png" alt="logo ngai vàng điện ảnh">
    </div>
    <div class="box-footer contact ">
        <div class="contact-footer">
            Liên hệ BTC <br>
            0909 000000
        </div>
        <div class="contact-footer">
            Liên hệ quảng áo <br>
            Công ty Dihaan Media <br>
            0909 000000
        </div>
    </div>
    <div class="donors"><span> Nhà tài trợ</span> <img src="images/icon-cat.png" alt="Nhà tài trợ"></div>
    <div class="copyright">
        <div class="copy">All right reserved Dehaan Media.</div>
        <div class="copy">Giấy phép số BCT/123445/78</div>
    </div>
</footer>
<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="js/video.js"></script>
<script src="js/youtube.js"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(e) {
        $('#signupForm').validate({
            errorElement: 'div', //default input error message container
            errorClass: 'error-message', // default input error message class
            errorPlacement: function(error, element) {
                var placement = $(element).parents('.form-row');
                if (placement) {
                    $(placement).append(error)
                } else {
                    error.insertAfter(element);
                }
            },

            rules: {
                sigup_name: {
                    required:true,
                    minlength:2
                },
                sigup_birthday: {
                    required:true,
                    minlength:6
                },
                sigup_adress: {
                    required:true,
                    minlength:10
                },
                sigup_phone: {
                    required:true,
                },
                sigup_email: {
                    required:true,
                    email:true,
                },
                sigup_facebook: {
                    required:true
                },
                sigup_weight: {
                    required: true
                },
                sigup_height: {
                    required: true
                },
                sigup_size_1: {
                    required: true
                }
            },
            messages: {
                sigup_name: {
                    required:'Vui lòng nhập!',
                    minlength:'Ít nhất 2 ký tự'
                },
                sigup_birthday: {
                    required:'Vui lòng nhập!',
                    minlength:'Ít nhất 6 ký tự'
                },
                sigup_adress: {
                    required:'Vui lòng nhập!',
                    minlength:'Ít nhất 10 ký tự'
                },
                sigup_phone: {
                    required:'Vui lòng nhập!',
                },
                sigup_email: {
                    required:'Vui lòng nhập!',
                    email:'Nhập sai định dạng',
                },
                sigup_facebook: {
                    required:'Vui lòng nhập!'
                },
                sigup_weight: {
                    required: 'Vui lòng nhập!'
                },
                sigup_height: {
                    required: 'Vui lòng nhập!'
                },
                sigup_size_1: {
                    required: 'Vui lòng nhập!'
                }
            }
        });
        $.validator.setDefaults({
            showErrors: function (errorMap, errorList) {
                $("#ServerError").show();
            }
        });
    });
</script>
</body>
</html>