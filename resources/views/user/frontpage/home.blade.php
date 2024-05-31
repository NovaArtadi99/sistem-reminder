@extends('user.general.layout')
@section('content')
    <header class="style-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="info">
                        <h1>{{ $data->title_home }}
                            <span>
                                {{ $data->subtitle_home }}
                                <img src="../storage/public/assets/template_user/img/hub-pasien/garis.png" alt=""
                                    class="head-line">
                                <img src="../storage/public/assets/template_user/img/hub-pasien/verified.png" alt=""
                                    class="head-pen">
                            </span>
                        </h1>
                        <p>{{ $data->description_home}}</p>
                        <div class="main-img">
                            <img src="{{ asset('/storage/public/' . $data->image_home) }}"
                                alt="" class="page-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="../storage/public/assets/template_user/img/hub-pasien/whatsapp-hand,flip.png" alt=""
            class="handl-img" style="width: 40%;">
        <img src="../storage/public/assets/template_user/img/hub-pasien/mockup-1-flip.png" alt="" class="handr-img"
            style="z-index: 15; width: 28%;">
    </header>

    <!-- ====== start about ====== -->
    <section class="about section-padding style-5">
        <div class="content mb-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 order-2 order-lg-0">
                        <div class="section-head mb-30 style-5">
                            <h2> Mudah Diakses melalui <span> Gadget </span></h2>
                        </div>
                        <p>Menyediakan Fitur Aplikasi Klinik Terbaik</p>
                        <div class="line-links">
                            <a class="my-1">1. Permudah Akses Proses Operasional Klinik Anda melalui Genggaman
                                Smartphone secara Online</a>
                            <a class="my-1">2. Menjaga Hubungan Klinik dengan Pasien menggunakan fitur Reminder via
                                WhatsApp</a>
                            <a href="https://api.whatsapp.com/send?phone=6281237376068&text=Hello%20Bapak%2FIbu%2C%20%F0%9F%99%82%0ATolong%20isi%20form%20dibawah%20untuk%20Registrasi%20%3A%0ANama%20Anda%20%3A%20%0ANama%20Klinik%20%3A%20%0AAlamat%20Klinik%20%3A%20%0APertanyaan%20%3A%20%0A%0ATerima%20Kasih%20%F0%9F%99%8F%F0%9F%8F%BB"
                                class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold mt-50">
                                <span> <i class="fa-brands fa-whatsapp fs-5 mx-1"></i> Klik Untuk Registrasi </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 order-0 order-lg-2">
                        <div class="img main-img1">
                            <img src="../storage/public/assets/template_user/img/hub-pasien/about_s5_1_1.png" alt=""
                                class="sm-circle">
                            <img src="../storage/public/assets/template_user/img/hub-pasien/mockup-cmp3.png" alt=""
                                class="img-body">
                            <img src="../storage/public/assets/template_user/img/hub-pasien/about_s5_1_5.png" alt=""
                                class="lg-circle">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="img main-img2">
                            <img src="../storage/public/assets/template_user/img/hub-pasien/about_s5_2_1.png"
                                alt="">
                            <img src="../storage/public/assets/template_user/img/hub-pasien/phone.png" alt=""
                                class="img-body">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-head mb-30 style-5">
                            <h2> Permudah Reminder <span> Pasien </span></h2>
                        </div>
                        <p>
                            Menyediakan Fitur Aplikasi Klinik Terbaik
                        </p>
                        <ul class="list-icon">
                            <li>
                                <span class="icon" style="background-color: #00d566;">
                                    <i class="bi bi-check2"></i>
                                </span>
                                <h6>
                                    Reminder Pasien secara Otomatis dengan WhatsApp.
                                </h6>
                            </li>
                            <li>
                                <span class="icon" style="background-color: #00d566;">
                                    <i class="bi bi-check2"></i>
                                </span>
                                <h6>
                                    Rangkum Jadwal Operasional pada Kalender Task.
                                </h6>
                            </li>
                            <li>
                                <span class="icon" style="background-color: #00d566;">
                                    <i class="bi bi-check2"></i>
                                </span>
                                <h6>
                                    Manajemen Data Pasien secara Terstruktur & Online.
                                </h6>
                            </li>
                            <li>
                                <span class="icon" style="background-color: #00d566;">
                                    <i class="bi bi-check2"></i>
                                </span>
                                <h6>
                                    Skema Digital Operasional Pasien dengan Mudah.
                                </h6>
                            </li>
                        </ul>
                        <a href="https://api.whatsapp.com/send?phone=6281237376068&text=Hello%20Bapak%2FIbu%2C%20%F0%9F%99%82%0ATolong%20isi%20form%20dibawah%20untuk%20Registrasi%20%3A%0ANama%20Anda%20%3A%20%0ANama%20Klinik%20%3A%20%0AAlamat%20Klinik%20%3A%20%0APertanyaan%20%3A%20%0A%0ATerima%20Kasih%20%F0%9F%99%8F%F0%9F%8F%BB"
                            class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold mt-50">
                            <span> <i class="fa-brands fa-whatsapp fs-5 mx-1"></i> Klik Untuk Registrasi </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end about ====== -->

    <!-- ====== start testimonials ====== -->
    <section class="testimonials style-3">
        <div class="container">
            <div class="content section-padding">
                <div class="container">
                    <div class="section-head text-center mb-100 style-5">
                        <h2 class="mb-20"> Testimonial <span> Pengguna </span></h2>
                        <p> Tanggapan Pengguna ReminderPasien.com </p>
                    </div>
                </div>
                <div class="testimonial-slider style-3">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-card style-3">
                                    <div class="text">
                                        “Sekarang menjadi praktis pekerjaan Kami di klinik, yang awalnya menajemen data
                                        dan
                                        CRM klien manual sekarang menjadi otomatis. Mantappp”
                                    </div>
                                    <div class="user-img mt-30 d-flex align-items-center">
                                        <div class="img icon-40 img-cover rounded-circle overflow-hidden me-3">
                                            <img src="../storage/public/assets/template_user/img/hub-pasien/dokter-ari.png"
                                                alt="">
                                        </div>
                                        <div class="inf">
                                            <p class="fw-bold">Dokter Ari</p>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card style-3">
                                    <div class="text">
                                        “Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit minus, a id non
                                        blanditiis maiores harum hic modi. Neque numquam velit nostrum id voluptates
                                        itaque aperiam aliquam et repudiandae magni.”
                                    </div>
                                    <div class="user-img mt-30 d-flex align-items-center">
                                        <div class="img icon-40 img-cover rounded-circle overflow-hidden me-3">
                                            <img src="../storage/public/assets/template_user/img/hub-pasien/author-4.jpg"
                                                alt="">
                                        </div>
                                        <div class="inf">
                                            <p class="fw-bold">Author 4</p>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card style-3">
                                    <div class="text">
                                        “Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit minus, a id non
                                        blanditiis maiores harum hic modi. Neque numquam velit nostrum id voluptates
                                        itaque aperiam aliquam et repudiandae magni.“
                                    </div>
                                    <div class="user-img mt-30 d-flex align-items-center">
                                        <div class="img icon-40 img-cover rounded-circle overflow-hidden me-3">
                                            <img src="../storage/public/assets/template_user/img/hub-pasien/author-5.jpg"
                                                alt="">
                                        </div>
                                        <div class="inf">
                                            <p class="fw-bold">Author 5</p>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card style-3">
                                    <div class="text">
                                        “Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit minus, a id non
                                        blanditiis maiores harum hic modi. Neque numquam velit nostrum id voluptates
                                        itaque aperiam aliquam et repudiandae magni.“
                                    </div>
                                    <div class="user-img mt-30 d-flex align-items-center">
                                        <div class="img icon-40 img-cover rounded-circle overflow-hidden me-3">
                                            <img src="../storage/public/assets/template_user/img/hub-pasien/author-7.jpg"
                                                alt="">
                                        </div>
                                        <div class="inf">
                                            <p class="fw-bold">Author 7</p>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <img src="../storage/public/assets/template_user/img/testimonials/testi3_lines.png" alt=""
                class="testi_lines w-100">
        </div>
    </section>
    <!-- ====== end testimonials ====== -->
    <!-- ====== start download ====== -->
    <section class="download section-padding style-5 parallax">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="content text-center">
                        <h2>Segera Optimalkan
                            <br><span>
                                Klinik
                                <img src="../storage/public/assets/template_user/img/hub-pasien/garis.png" alt=""
                                    class="head-line">
                                <img src="../storage/public/assets/template_user/img/hub-pasien/verified-flip.png"
                                    alt="" class="head-pen">
                            </span>
                            Anda
                        </h2>
                        <p class="mt-2">
                            dengan klik tombol dibawah untuk melakukan registrasi dan segera dapatkan akun Aplikasinya
                        </p>
                        <div class="butns mt-10">
                            <a href="https://api.whatsapp.com/send?phone=6281237376068&text=Hello%20Bapak%2FIbu%2C%20%F0%9F%99%82%0ATolong%20isi%20form%20dibawah%20untuk%20Registrasi%20%3A%0ANama%20Anda%20%3A%20%0ANama%20Klinik%20%3A%20%0AAlamat%20Klinik%20%3A%20%0APertanyaan%20%3A%20%0A%0ATerima%20Kasih%20%F0%9F%99%8F%F0%9F%8F%BB"
                                class="btn rounded-pill blue5-3Dbutn hover-blue3 sm-butn fw-bold mx-1" target="_blank">
                                <span> <i class="fa-brands fa-whatsapp fs-5 mx-1"></i> Klik Untuk Registrasi </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end download ====== -->
@endsection
