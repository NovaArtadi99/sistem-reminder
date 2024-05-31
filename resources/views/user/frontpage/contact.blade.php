@extends('user.general.footer')
@section('content')
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
@endsection
