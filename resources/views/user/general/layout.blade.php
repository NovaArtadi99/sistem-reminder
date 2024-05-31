
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="keywords" content="HTML5 Template Iteck Multi-Purpose themeforest"/>
    <meta name="description" content="Iteck - Multi-Purpose HTML5 Template"/>
    <meta name="author" content=""/>

    <!-- Title  -->
    <title>Sistem Reminder Pasien</title>


    <!-- ==== LightBox ==== -->
    <link rel="stylesheet" href="../storage/public/assets/template_user/dist/css/lightbox.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../storage/public/assets/template_user/img/hub-pasien/Logo-Hub-Pasien-Real-isi-WhatsApp.png" title="Favicon"
          sizes="16x16"/>

    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- ====== font awesome cdn ====== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="../storage/public/assets/template_user/css/lib/bootstrap.min.css">

    <!-- ====== font family ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="../storage/public/assets/template_user/css/lib/all.min.css"/>
    <link rel="stylesheet" href="../storage/public/assets/template_user/css/lib/animate.css"/>
    <link rel="stylesheet" href="../storage/public/assets/template_user/css/lib/jquery.fancybox.css"/>
    <link rel="stylesheet" href="../storage/public/assets/template_user/css/lib/lity.css"/>
    <link rel="stylesheet" href="../storage/public/assets/template_user/css/lib/swiper.min.css"/>

    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="../storage/public/assets/template_user/css/style.css"/>

    <!-- ===== parallax ===== -->
    <link rel="stylesheet" href="../storage/public/assets/template_user/css/parallax.css">

</head>

<body>

<!-- ====== start loading page ====== -->
<div id="preloader">
</div>
<!-- ====== end loading page ====== -->

<!-- ====== start navbar ====== -->
    @include('user.general.navbar')
<!-- ====== end navbar ====== -->

<!-- ====== start header ====== -->
{{-- Home --}}
@yield('content')
<!-- ====== end header ====== -->

<!--Contents-->
<main>

    <!-- ====== start features ====== -->

    <!-- ====== end features ====== -->

    <!-- ====== start about ====== -->

    <!-- ====== end about ====== -->

    <!-- ====== start testimonials ====== -->

    <!-- ====== end testimonials ====== -->

    <!-- ====== start pricing ====== -->
   {{-- @yield('content') --}}
    <!-- ====== end pricing ====== -->

    <!-- ====== start galery ====== -->
    {{-- @yield('content') --}}
    <!-- ====== end galery ====== -->

    <!-- ====== start Blog ====== -->
    @yield('blog')
    <!-- ====== end Popular Blog ====== -->

    <!-- ====== start download ====== -->

    <!-- ====== end download ====== -->

</main>
<!--End-Contents-->

<!-- ====== start footer ====== -->
@include('user.general.footer')
<!-- ====== end footer ====== -->

<!-- ====== start to top button ====== -->
<a href="https://api.whatsapp.com/send?phone=6281237376068&text=Hello%20Bapak%2FIbu%2C%20%F0%9F%99%82%0ATolong%20isi%20form%20dibawah%20untuk%20Registrasi%20%3A%0ANama%20Anda%20%3A%20%0ANama%20Klinik%20%3A%20%0AAlamat%20Klinik%20%3A%20%0APertanyaan%20%3A%20%0A%0ATerima%20Kasih%20%F0%9F%99%8F%F0%9F%8F%BB"
   class="" style="position:fixed; z-index:999999; right: 70px; bottom: 15px;">
    <img src="../storage/public/assets/template_user/img/hub-pasien/whatsapp-kontak.png" class="w-100 h-100" alt="">
</a>
<a href="#" class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
    <i class="bi bi-chevron-up fs-6 text-dark"></i>
</a>
<!-- ====== end to top button ====== -->

<!-- ====== request ====== -->

<script src="../storage/public/assets/template_user/dist/js/lightbox-plus-jquery.js"></script>
<script src="../storage/public/assets/template_user/js/lib/jquery-3.0.0.min.js"></script>
<script src="../storage/public/assets/template_user/js/lib/jquery-migrate-3.0.0.min.js"></script>
<script src="../storage/public/assets/template_user/js/lib/bootstrap.bundle.min.js"></script>
<script src="../storage/public/assets/template_user/js/lib/wow.min.js"></script>
<script src="../storage/public/assets/template_user/js/lib/jquery.fancybox.js"></script>
<script src="../storage/public/assets/template_user/js/lib/lity.js"></script>
<script src="../storage/public/assets/template_user/js/lib/swiper.min.js"></script>
<script src="../storage/public/assets/template_user/js/lib/jquery.waypoints.min.js"></script>
<script src="../storage/public/assets/template_user/js/lib/jquery.counterup.js"></script>
<script src="../storage/public/assets/template_user/js/lib/pace.js"></script>
<script src="../storage/public/assets/template_user/js/lib/scrollIt.min.js"></script>
<script src="../storage/public/assets/template_user/js/main.js"></script>

</body>

</html>
