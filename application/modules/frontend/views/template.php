<!DOCTYPE html>
<!-- saved from url=(0035)https://booking.go2indonesia.my.id/ -->
<html lang="en" itemscope="" itemtype="http://schema.org/WebPage">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> GO2INDONESIA - Beranda</title>
    <meta name="title" content="GO2INDONESIA - Beranda">
    <meta name="description" content="Website pemesanan tiket untuk biro travel agent/po bus/driver dll">
    <meta name="keywords" content="bus booking system,bus booking php script,single vendro bus booking system,Lunaria">

    <link rel="shortcut icon" type="image/x-icon" href="https://booking.go2indonesia.my.id/assets/frontend/images/logoIcon/favicon.png">


    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/frontend/css/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="GO2INDONESIA - Home">

    <meta itemprop="name" content="GO2INDONESIA - Home">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="https://booking.go2indonesia.my.id/assets/frontend/images/seo/64e38c28e3fa91692634152.png">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Booking Tiket Di Lunaria Travel">
    <meta property="og:description" content="Website pemesanan tiket untuk biro travel agent/po bus/driver dll">
    <meta property="og:image" content="https://booking.go2indonesia.my.id/assets/frontend/images/seo/64e38c28e3fa91692634152.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="315">
    <meta property="og:url" content="https://booking.go2indonesia.my.id">

    <meta name="twitter:card" content="summary_large_image">

    <!-- BootStrap Link -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/bootstrap.min.css">
    <!-- Icon Link -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/all.min.css">
    <!--    <link rel="stylesheet" href="--><?php //= base_url() 
                                            ?><!--assets/frontend/css/line-awesome.min.css">-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/font-awesome-4/css/font-awesome.min.css">

    <!-- Plugings Link -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/slick.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/jquery-ui.css">

    <!-- Cookie Link -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/cookie.css">
    <!-- Custom Link -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/main.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/custom.css">

    <!-- select 2 -->
    <script src="<?= base_url() ?>assets/frontend/js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/select2.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

    <!--    date picker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <script>
        $(function() {
            $("#datepicker").datepicker();
            $("#datepickersearch").datepicker();
        });
    </script>
</head>

<body>
    <div class="overlay"></div>

    <!-- Preloader -->
    <div class="preloader" style="display: none;">
        <div class="loader-wrapper">
            <div class="truck-wrapper">
                <div class="preloader-content">GO2INDONESIA</div>
                <div class="truck">
                    <div class="truck-container"></div>
                    <div class="glases"></div>
                    <div class="bonet"></div>

                    <div class="base"></div>

                    <div class="base-aux"></div>
                    <div class="wheel-back"></div>
                    <div class="wheel-front"></div>
                    <div class="smoke"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader -->
    <!-- Header Section Starts Here -->

    <div class="header-top">
        <div class="container">
            <div class="header-top-area">
                <ul class="left-content">
                    <li>
                        <i class="las la-phone"></i>
                        <a href="tel:+62 85104717073">
                            +62 85104717073
                        </a>
                    </li>
                    <li>
                        <i class="las la-envelope-open"></i>
                        <a href="mailto:admin@go2indonesia.my.id">
                            admin@go2indonesia.my.id
                        </a>
                    </li>
                </ul>
                <div class="right-content d-flex flex-wrap" style="gap:10px">
                    <div>
                        <select class="langSel form-select form-select-sm" aria-label="Default">
                            <option value="en">English</option>
                            <option value="id" selected="">Indonesia</option>
                        </select>
                    </div>
                    <ul class="header-login">
                        <li><a class="sign-in" href="https://booking.go2indonesia.my.id/login"><i class="fas fa-sign-in-alt"></i>Masuk</a></li>
                        <li>/</li>
                        <li><a class="sign-up" href="https://booking.go2indonesia.my.id/register"><i class="fas fa-user-plus"></i>Daftar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-bottom-area">
                <div class="logo">
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url() ?>assets/frontend/css/logo.png" alt="Logo">
                    </a>
                </div> <!-- Logo End -->
                <ul class="menu">
                    <li>
                        <a href="<?= base_url() ?>">Beranda</a>
                    </li>
                    <li>
                        <a href="#">Tentang</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Hubungi Kami</a>
                    </li>
                </ul>
                <div class="d-flex flex-wrap algin-items-center">
                    <a href="#" class="cmn--btn btn--sm">Order Tiket</a>
                    <div class="header-trigger-wrapper d-flex d-lg-none ms-4">
                        <div class="header-trigger d-block d-lg-none">
                            <span></span>
                        </div>
                        <div class="top-bar-trigger">
                            <i class="las la-ellipsis-v"></i>
                        </div>
                    </div><!-- Trigger End-->
                </div>
            </div>
        </div>
    </div>

    <!-- Header Section Ends Here -->
    <?= $contents ?>
    <!-- Footer Section Starts Here -->
    <section class="footer-seciton">
        <div class="footer-top">
            <div class="container">
                <div class="row footer-wrapper gy-sm-5 gy-4">
                    <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <div class="logo">
                                <img src="<?= base_url() ?>assets/frontend/css/logowhite.png" alt="Logo">
                            </div>
                            <p>Go2Indonesia adalah perusahaan penyedia armada untuk perjalanan bisnis atau tour anda</p>
                            <ul class="social-icons">
                                <li>
                                    <a href="https://www.facebook.com/go2.indonesiatravel"><i class="lab la-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/go2.indonesia?igshid=MzMyNGUyNmU2YQ=="><i class="lab la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Link Terkait</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="https://booking.go2indonesia.my.id/about-us">Tentang</a>
                                </li>
                                <li>
                                    <a href="https://booking.go2indonesia.my.id/faq">FAQs</a>
                                </li>
                                <li>
                                    <a href="https://booking.go2indonesia.my.id/blog">Blog</a>
                                </li>
                                <li>
                                    <a href="https://booking.go2indonesia.my.id/contact">Hubungi Kami</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Kebijakan</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="https://booking.go2indonesia.my.id/policy/69/privacy-policy">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="https://booking.go2indonesia.my.id/policy/71/terms-and-conditions">Terms and Conditions</a>
                                </li>
                                <li>
                                    <a href="https://booking.go2indonesia.my.id/policy/90/ticket-policies">Ticket Policies</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Informasi Kontak</h4>
                            <ul class="footer-contacts">
                                <li>
                                    <i class="las la-map-pin"></i> Surabaya, Indonesia
                                </li>
                                <li>
                                    <i class="las la-phone-volume"></i> <a href="tel:+62 85104717073"> +62 85104717073</a>
                                </li>
                                <li>
                                    <i class="las la-envelope"></i> <a href="mailto:admin@go2indonesia.my.id"> admin@go2indonesia.my.id</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section Ends Here -->


    <!-- cookies default start -->
    <div id="cookiePolicy" class="cookies-card bg--default radius--10px text-center" style="display: none;">
        <div class="cookies-card__icon">
            <i class="fas fa-cookie-bite"></i>
        </div>
        <p class="mt-4 cookies-card__content">
            <b>Kami</b> menggunakan cookie untuk meningkatkan pengalaman menjelajah Anda. <a href="https://booking.go2indonesia.my.id/cookie/details" target="_blank">learn more</a>
        </p>
        <div class="cookies-card__btn mt-4">
            <a href="https://booking.go2indonesia.my.id/#" name="cookieAccept" class="cookies-btn">Allow</a>
        </div>
    </div>
    <!-- cookies default end -->


    <a href="javascript::void()" class="scrollToTop"><i class="fa fa-chevron-up"></i></a>
    <!-- <script src="<?= base_url() ?>assets/frontend/js/jquery-3.6.0.min.js"></script> -->
    <script src="<?= base_url() ?>assets/frontend/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/slick.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/select2/select2.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/js/main.js"></script>


    <script>
        $(document).ready(function() {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "https://booking.go2indonesia.my.id/change/" + $(this).val();
            });
        });
    </script>
    <script>
        (function($) {
            "use strict";

            $('#cookiePolicy').hide();

            $('a[name="cookieAccept"]').click(function(event) {
                event.preventDefault();
                var actionUrl = "https://booking.go2indonesia.my.id/cookie/accept";
                $.ajax({
                    type: "GET",
                    url: actionUrl,
                    success: function(data) {
                        console.log(data);
                        $('#cookiePolicy').hide();
                        if (data.success) {
                            notify('success', data.success);
                            $('#cookiePolicy').hide();
                        }
                    }
                });
            });
            $('.search').on('change', function() {
                $('#filterForm').submit();
            });
        })(jQuery);
    </script>


    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/js/iziToast.min.css">
    <script src="<?= base_url() ?>assets/frontend/js/iziToast.min.js"></script>

    <script>
        "use strict";

        function notify(status, message) {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        }
    </script>



</body>

</html>