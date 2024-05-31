<footer class="style-5 border-top brd-gray" id="kontak">
    <div class="container">
        <div class="row gx-0 justify-content-between">
            <div class="col-lg-3 col-sm-6">
                <div class="items">
                    <div class="title">
                        {{ $abouts->title }}
                    </div>
                    <small class="text">
                        {{ $abouts->description }}
                    </small>
                    <div class="socail-icons">
                        <a href= {{ $abouts->buttom1 }}
                           class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2"
                           target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href= {{ $abouts->buttom2 }}
                           class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray"
                           target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="items">
                    <div class="title">
                        {{ $abouts->name }}
                    </div>
                    <ul>
                        <li>
                            <a href="#"> {{ $abouts->list }} </a>
                        </li>
                        <li>
                            <a href="#fitur"> {{ $abouts->list2 }} </a>
                        </li>
                        <li>
                            <a href="#harga"> {{ $abouts->list3 }} </a>
                        </li>
                        <li>
                            <a href="#galeri"> {{ $abouts->list4 }} </a>
                        </li>
                        <li>
                            <a href="#blog"> {{ $abouts->list5 }} </a>
                        </li>
                        <li>
                            <a href="#kontak"> {{ $abouts->list6 }} </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="items">
                    <div class="title">
                        {{ $contacts->name }}
                    </div>
                    <ul>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=6281237376068&text=Hello%20Bapak%2FIbu%2C%20%F0%9F%99%82%0ATolong%20isi%20form%20dibawah%20untuk%20Registrasi%20%3A%0ANama%20Anda%20%3A%20%0ANama%20Klinik%20%3A%20%0AAlamat%20Klinik%20%3A%20%0APertanyaan%20%3A%20%0A%0ATerima%20Kasih%20%F0%9F%99%8F%F0%9F%8F%BB">
                                <i class="fa-solid fa-phone"></i>{{ $contacts->telepon }}</a>
                        </li>
                        <li>
                            <a href="mailto:reminderpasien@gmail.com"> <i class="fa-solid fa-envelope"></i>
                                {{ $contacts->email }} </a>
                        </li>
                        <li>
                            <a href=""> <i class="fa-solid fa-location-dot"></i> {{ $contacts->alamat }} </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="foot">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="logo">
                        <img src="../storage/public/assets/template_user/img/hub-pasien/reminder-pasien-logo.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <small class="small">
                        © copyright 2022 by <a href="#"
                                               class="fw-bold text-decoration-underline">reminderpasien.com</a>
                    </small>
                </div>
            </div>
        </div>
    </div>
</footer>
