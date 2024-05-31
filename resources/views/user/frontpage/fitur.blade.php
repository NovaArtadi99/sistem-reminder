@extends('user.general.layout')
@section('content')
    <!-- ====== start features ====== -->
    <section class="features section-padding style-5 bg-gray5" id="fitur">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-head text-center mb-60 style-5">
                        <h2 class="mb-20">{{ $fiturs->fitur_title }}<span>{{ $fiturs->fitur_subtitle }}</span></h2>
                        <p>{{ $fiturs->fitur_description }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <a href="https://api.whatsapp.com/send?phone=6281237376068&text=Hello%20Bapak%2FIbu%2C%20%F0%9F%99%82%0ATolong%20isi%20form%20dibawah%20untuk%20Registrasi%20%3A%0ANama%20Anda%20%3A%20%0ANama%20Klinik%20%3A%20%0AAlamat%20Klinik%20%3A%20%0APertanyaan%20%3A%20%0A%0ATerima%20Kasih%20%F0%9F%99%8F%F0%9F%8F%BB"
                            class="features-card mb-30 style-5">
                            <div class="icon">
                                <img src="../storage/public/assets/template_user/img/hub-pasien/Whatsapp-Fitur.png"
                                    alt="">
                            </div>
                            <div class="info">
                                <h5 class="card-title">
                                    Reminder Otomatis Pasien dengan WhatsApp
                                </h5>
                                <p class="text">
                                    Otomatiskan Reminder Jadwal Konsultasi, Operasi, Tindakan dan Kontrol via
                                    WhatsApp
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="https://api.whatsapp.com/send?phone=6281237376068&text=Hello%20Bapak%2FIbu%2C%20%F0%9F%99%82%0ATolong%20isi%20form%20dibawah%20untuk%20Registrasi%20%3A%0ANama%20Anda%20%3A%20%0ANama%20Klinik%20%3A%20%0AAlamat%20Klinik%20%3A%20%0APertanyaan%20%3A%20%0A%0ATerima%20Kasih%20%F0%9F%99%8F%F0%9F%8F%BB"
                            class="features-card mb-30 style-5">
                            <div class="icon">
                                <img src="../storage/public/assets/template_user/img/hub-pasien/gmail.png" alt="">
                            </div>
                            <div class="info">
                                <h5 class="card-title">
                                    Reminder Jadwal Operasional Klinik via Email
                                </h5>
                                <p class="text">
                                    Reminder jadwal operasional klinik untuk hari selanjutnya via Email
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="https://api.whatsapp.com/send?phone=6281237376068&text=Hello%20Bapak%2FIbu%2C%20%F0%9F%99%82%0ATolong%20isi%20form%20dibawah%20untuk%20Registrasi%20%3A%0ANama%20Anda%20%3A%20%0ANama%20Klinik%20%3A%20%0AAlamat%20Klinik%20%3A%20%0APertanyaan%20%3A%20%0A%0ATerima%20Kasih%20%F0%9F%99%8F%F0%9F%8F%BB"
                            class="features-card mb-30 style-5">
                            <div class="icon">
                                <img src="../storage/public/assets/template_user/img/hub-pasien/schedule.png"
                                    alt="">
                            </div>
                            <div class="info">
                                <h5 class="card-title">
                                    Permudah Merangkum Jadwal Operasional
                                </h5>
                                <p class="text">
                                    Permudah Operasional Klinik dengan Tampilan Rangkuman Tasks dalam Kalender
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="https://api.whatsapp.com/send?phone=6281237376068&text=Hello%20Bapak%2FIbu%2C%20%F0%9F%99%82%0ATolong%20isi%20form%20dibawah%20untuk%20Registrasi%20%3A%0ANama%20Anda%20%3A%20%0ANama%20Klinik%20%3A%20%0AAlamat%20Klinik%20%3A%20%0APertanyaan%20%3A%20%0A%0ATerima%20Kasih%20%F0%9F%99%8F%F0%9F%8F%BB"
                            class="features-card mb-30 style-5">
                            <div class="icon">
                                <img src="../storage/public/assets/template_user/img/hub-pasien/time.png" alt="">
                            </div>
                            <div class="info">
                                <h5 class="card-title">
                                    Solusi Permudah Sistem Operasional Klinik
                                </h5>
                                <p class="text">
                                    Efisiensikan waktu operasional klinik dengan sistem komputer secara Online
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="https://api.whatsapp.com/send?phone=6281237376068&text=Hello%20Bapak%2FIbu%2C%20%F0%9F%99%82%0ATolong%20isi%20form%20dibawah%20untuk%20Registrasi%20%3A%0ANama%20Anda%20%3A%20%0ANama%20Klinik%20%3A%20%0AAlamat%20Klinik%20%3A%20%0APertanyaan%20%3A%20%0A%0ATerima%20Kasih%20%F0%9F%99%8F%F0%9F%8F%BB"
                            class="features-card mb-30 mb-lg-0 style-5">
                            <div class="icon">
                                <img src="../storage/public/assets/template_user/img/hub-pasien/computer-logo.png"
                                    alt="">
                            </div>
                            <div class="info">
                                <h5 class="card-title">
                                    Aplikasi Komputer Cetak Rekam Medis & Kwitansi
                                </h5>
                                <p class="text">
                                    Permudah proses cetak rekam medis & kwitansi pembayaran Pasien
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="https://api.whatsapp.com/send?phone=6281237376068&text=Hello%20Bapak%2FIbu%2C%20%F0%9F%99%82%0ATolong%20isi%20form%20dibawah%20untuk%20Registrasi%20%3A%0ANama%20Anda%20%3A%20%0ANama%20Klinik%20%3A%20%0AAlamat%20Klinik%20%3A%20%0APertanyaan%20%3A%20%0A%0ATerima%20Kasih%20%F0%9F%99%8F%F0%9F%8F%BB"
                            class="features-card mb-30 mb-lg-0 style-5">
                            <div class="icon">
                                <img src="../storage/public/assets/template_user/img/hub-pasien/privacy.png" alt="">
                            </div>
                            <div class="info">
                                <h5 class="card-title">
                                    Privasi Data Klinik Dijamin Keamanannya
                                </h5>
                                <p class="text">
                                    Jaminan keamanan data karena menggunakan Backup Otomatis
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end features ====== -->
@endsection
