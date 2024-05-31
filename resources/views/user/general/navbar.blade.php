<nav class="navbar navbar-expand-lg navbar-light style-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="">
            <img src="../storage/public/assets/template_user/img/hub-pasien/reminder-pasien-logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            Menu 
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown oren position-static {{ $active === 'index' ? 'active' : '' }} ">
                    <a class="nav-link" href="{{ route('index') }}">Beranda</a>
                </li>
                <li class="nav-item dropdown oren {{ $active === 'fitur' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('frontpage.fitur') }}">Fitur</a>
                </li>
                <li class="nav-item dropdown oren {{ $active === 'price' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('frontpage.price') }}">Harga</a>
                </li>
                <li
                    class="nav-item dropdown oren mega-dropdown-md {{ $active === 'gallery' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('frontpage.gallery') }}">Galeri Aplikasi</a>
                </li>
                <li class="nav-item dropdown oren {{ $active === 'blog' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('frontpage.blog') }}">Blog</a>
                </li>
                <li class="nav-item dropdown oren {{ $active === 'contact' ? 'active' : '' }}">
                    <a class="nav-link" href="#kontak">Kontak Kami</a>
                </li>
            </ul>
            <div class="nav-side">
                <div class="d-flex align-items-center">
                    <a href="https://api.whatsapp.com/send?phone=6281237376068&text=Hello%20Bapak%2FIbu%2C%20%F0%9F%99%82%0ATolong%20isi%20form%20dibawah%20untuk%20Registrasi%20%3A%0ANama%20Anda%20%3A%20%0ANama%20Klinik%20%3A%20%0AAlamat%20Klinik%20%3A%20%0APertanyaan%20%3A%20%0A%0ATerima%20Kasih%20%F0%9F%99%8F%F0%9F%8F%BB"
                        class="btn rounded-pill blue5-3Dbutn hover-blue3 sm-butn fw-bold">
                        <span> <i class="fa-brands fa-whatsapp fs-5 mx-1"></i> Registrasi </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
