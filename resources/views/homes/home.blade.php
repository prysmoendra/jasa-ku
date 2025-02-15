@extends('layouts.dash-landpage')

@section('title-content')
    Situs Penyedia Jasa Online Terlengkap, Mudah & Aman di Indonesia | Babantu
@endsection

@section(section: 'main-content')
    <section class="flex flex-col items-center min-h-screen mt-[160px]">

        {{-- FEATURE IMAGE BANNER SLIDER --}}
        <div class="promo-banner w-[1208px] h-[302px] mt-6">
            {{-- # carousel image banner --}}
            <div class="container mx-auto">
                <div class="carousel relative">
                    <div class="carousel-inner relative w-full">
                        @php
                        $images = [
                            asset('images/banner-1.png'),
                            asset('images/banner-2.png'),
                            asset('images/banner-3.png')
                        ];
                        @endphp

                        @foreach($images as $index => $image)
                            <input class="carousel-open hidden" type="radio" id="carousel-{{$index}}" name="carousel" aria-hidden="true" hidden="" {{$index == 0 ? 'checked="checked"' : ''}}>
                            <div class="carousel-item {{$index == 0 ? 'carousel-visible' : ''}} z-10" id="carousel-item-{{$index}}">
                                <img src="{{ $image }}" class="carousel-image block w-full rounded-xl">
                            </div>
                        @endforeach

                        <button class="carousel-button carousel-button-left rounded-full h-10 w-10 items-center flex justify-center hover:scale-105 -translate-y-6" id="prevButton">
                            <i class="bi bi-chevron-left text-xl text-gray-400"></i>
                        </button>
                        <button class="carousel-button carousel-button-right rounded-full h-10 w-10 items-center flex justify-center hover:scale-105 -translate-y-6" id="nextButton">
                            <i class="bi bi-chevron-right text-xl text-gray-400"></i>
                        </button>

                        <ol class="carousel-indicators">
                            @foreach($images as $index => $image)
                                <li class="mr-2">
                                    <label for="carousel-{{$index}}" class="carousel-bullet cursor-pointer block {{$index == 0 ? 'carousel-bullet-active' : ''}}" id="indicator-{{$index}}"></label>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        {{-- FEATURE LIST CATEGORY --}}
        <div class="list-category w-[1208px] h-[312px] rounded-xl py-4 flex flex-col justify-start items-start mt-6">
            <div class="flex flex-row justify-between items-center w-full">
                <div class="flex justify-items-start">
                    <h1 class="text-2xl font-extrabold tracking-tight w-full py-2 bg-white">Kategori Pilihan</h1>
                </div>
                <div class="flex justify-items-end cursor-pointer hover:text-blue-600">
                    <h1 class="text-md font-extrabold tracking-tight w-full py-2 bg-white">Lihat semua Jasa</h1>
                </div>
            </div>
            {{-- # all list category --}}
            <div class="w-fit h-full py-2">
                <div class="grid grid-cols-4 grid-rows-2 gap-x-4 gap-y-4">
                    <a href="{{ url('/searches') }}">
                        <div class="flex items-center bg-white drop-shadow-md rounded-lg p-6 border gap-3" style="width: 290px; height: 100px;">
                            <img src="{{ asset('images/svg-service-ac.png') }}" alt="Service AC" class="w-16 h-16">
                            <div class="ml-4">
                                <h2 class="text-lg font-bold">Service AC</h2>
                                <p class="text-gray-500">794 Penyedia jasa</p>
                            </div>
                        </div>
                    </a>
                    <div class="flex items-center bg-white drop-shadow-md rounded-lg p-6 border gap-3" style="width: 290px; height: 100px;">
                        <img src="{{ asset('images/svg-daily-cleaning.png') }}" alt="Daily Cleaning" class="w-16 h-16">
                        <a href="{{ url('/searches') }}">
                            <div class="ml-4">
                                <h2 class="text-lg font-bold">Daily Cleaning</h2>
                                <p class="text-gray-500">608 Penyedia jasa</p>
                            </div>
                        </a>
                    </div>
                    <div class="flex items-center bg-white drop-shadow-md rounded-lg p-6 border gap-3" style="width: 290px; height: 100px;">
                        <img src="{{ asset('images/svg-massage.png') }}" alt="Massage" class="w-16 h-16">
                        <div class="ml-4">
                            <h2 class="text-lg font-bold">Massage</h2>
                            <p class="text-gray-500">298 Penyedia jasa</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white drop-shadow-md rounded-lg p-6 border gap-3" style="width: 290px; height: 100px;">
                        <img src="{{ asset('images/svg-renovasi-rumah.png') }}" alt="Renovasi Rumah" class="w-16 h-16">
                        <div class="ml-4">
                            <h2 class="text-lg font-bold">Renovasi Rumah</h2>
                            <p class="text-gray-500">290 Penyedia jasa</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white drop-shadow-md rounded-lg p-6 border gap-3" style="width: 290px; height: 100px;">
                        <img src="{{ asset('images/svg-jasa-pertukangan.png') }}" alt="Jasa Pertukangan" class="w-16 h-16">
                        <div class="ml-4">
                            <h2 class="text-lg font-bold">Jasa Pertukangan</h2>
                            <p class="text-gray-500">794 Penyedia jasa</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white drop-shadow-md rounded-lg p-6 border gap-3" style="width: 290px; height: 100px;">
                        <img src="{{ asset('images/svg-konsultasi-pertukangan.png') }}" alt="Konsultasi Pertukangan" class="w-16 h-16">
                        <div class="ml-4">
                            <h2 class="text-lg font-bold">Konsultasi Pertukangan</h2>
                            <p class="text-gray-500">608 Penyedia jasa</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white drop-shadow-md rounded-lg p-6 border gap-3" style="width: 290px; height: 100px;">
                        <img src="{{ asset('images/svg-catering.png') }}" alt="Catering" class="w-14 h-14 mr-2">
                        <div class="ml-4">
                            <h2 class="text-lg font-bold">Katering</h2>
                            <p class="text-gray-500">298 Penyedia jasa</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white drop-shadow-md rounded-lg p-6 border gap-3" style="width: 290px; height: 100px;">
                        <img src="{{ asset('images/svg-tutor-privat.png') }}" alt="Les Privat" class="w-16 h-16">
                        <div class="ml-4">
                            <h2 class="text-lg font-bold">Les Privat</h2>
                            <p class="text-gray-500">290 Penyedia jasa</p>
                        </div>
                    </div>
                    <!-- Add more categories as needed -->
                </div>
            </div>
        </div>

        {{-- FEATURE DETAIL REGISTRATION --}}
        <div class="flex mt-10">
            <div class="w-[473px] h-[584px] bg-orange-400 p-12 text-white mr-6 rounded-xl flex flex-col justify-end">
                <h1 class="font-bold text-4xl text-white">Semua hanya di Babantu</h1>
                <p>Lebih dari 200 kategori jasa yang kami tawarkan</p>
                <button class="bg-white text-green-500 rounded-lg py-2 px-4 mt-4 font-bold w-fit">Daftar Gratis</button>
            </div>
            <div class="w-[664px] h-[584px] bg-green-100 p-12 text-black rounded-xl">
                <div class="">
                    <h1 class="font-semibold text-4xl text-">Menyelesaikan pekerjaan mudah bersama Babantu</h1>
                </div>
                <div class="mt-8">
                    <h1 class="font-semibold text-lg">Tidak ada biaya sampai Anda menyewa</h1>
                    <p class="text-gray-500">Wawancarai calon yang cocok untuk pekerjaan Anda, negosiasikan tarif, dan hanya bayar untuk pekerjaan yang Anda setujui.</p>
                </div>
                <div class="mt-4">
                    <h1 class="font-semibold text-lg">Aman dan nyaman</h1>
                    <p class="text-gray-500">Fokus pada pekerjaan Anda karena kami tahu kami membantu melindungi data dan privasi Anda. Kami di sini dengan dukungan 24/7 jika Anda membutuhkannya.</p>
                </div>
                <div class="mt-4">
                    <h1 class="font-semibold text-lg">Bukti kualitas</h1>
                    <p class="text-gray-500">Periksa sampel pekerjaan profesional, ulasan klien, dan verifikasi identitas.</p>
                </div>
            </div>
        </div>

        {{-- FEATURE DETAIL STEPS ORDER --}}
        <div class="flex mt-10 bg-red-200 w-[1208px] h-[584px] justify-between">
            <div class="bg-yellow-200 w-[55%] flex flex-col">
                <div class="bg-green-300 flex flex-row justify-between h-full">
                    <div class="bg-yellow-200 w-full flex justify-center items-center flex-col gap-3">
                        <h1 class="font-semibold text-xl">1. Isi kebutuhan</h1>
                        <p class="px-10 text-center text-lg">Informasikan kepada kami kebutuhan Anda dengan menjawab beberapa pertanyaan</p>
                    </div>
                    <div class="bg-green-200 w-full flex justify-center items-center flex-col gap-3">
                        <h1 class="font-semibold text-xl">2. Tunggu beberapa saat</h1>
                        <p class="px-10 text-center text-lg">Dapatkan sampai dengan enam penawaran dari penyedia jasa yang sesuai dengan kebutuhan Anda</p>
                    </div>
                </div>
                <div class="bg-blue-200 h-full flex justify-center items-center flex-col gap-3">
                    <h1 class="font-semibold text-xl">3. Pilih yang terbaik</h1>
                    <p class="px-16 text-center text-lg">Bandingkan penawaran dan profil usaha penyedia jasa lalu hubungi penyedia jasa yang Anda inginkan</p>
                </div>
            </div>
            <div class="bg-gray-200 w-[45%] flex justify-start items-start flex-col gap-6 px-8 py-10">
                <h1 class="font-semibold text-2xl px-4">Lebih dari 300,000 customer telah menggunakan Babantu.com untuk menemukan Penyedia Jasa Terpercaya</h1>
                <ul class="flex flex-col gap-1 px-4">
                    <li class="flex flex-row gap-4">
                        <i class="bi bi-check-lg text-green-400 text-2xl"></i>
                        <h1 class="font-semibold text-base">Respon langsung dari Mitra Penyedia Jasa Kami</h1>
                    </li>
                    <li class="flex flex-row gap-4">
                        <i class="bi bi-check-lg text-green-400 text-2xl"></i>
                        <h1 class="font-semibold text-base">Bantuan pengecekan pekerjaan & progress pembayaran</h1>
                    </li>
                    <li class="flex flex-row gap-4">
                        <i class="bi bi-check-lg text-green-400 text-2xl"></i>
                        <h1 class="font-semibold text-base">Asuransi untuk keamanan projek Anda</h1>
                    </li>
                </ul>
                <div class="flex w-fit px-6">
                    <button class="bg-orange-400 text-white rounded-md py-5 px-6 font-bold w-fit uppercase text-sm">Pesan Jasa</button>
                </div>
            </div>
        </div>

        {{-- FEATURE TESTIMONY ORDER --}}
        <div class="flex flex-col border rounded-2xl m-14 w-[1523px] h-[584px] relative overflow-hidden">
            <img src="{{ asset('images/ads.png') }}" class="absolute w-full h-full object-cover blur-sm pt-4">
            <div class="relative z-10 flex justify-center items-center flex-col">
                <h1 class="text-4xl font-bold text-center mt-14 mb-4">Yang Pelanggan Kami Katakan!</h1>
                <p class="text-center mb-16 text-[#777777]">Mendapatkan pelayanan, di mana pun, kapan pun, dan kapan pun Anda butuhkan.</p>
                <div class="flex flex-col justify-center px-10">
                    <div class="flex flex-row justify-center items-center">

                        <div class="px-4 mb-8 hover:scale-105 hover:drop-shadow-xl cursor-pointer">
                            <div class="bg-red-50 p-6 rounded-xl flex items-start w-[622px] h-[215px]">
                                <img src="/images/user1.jpg" class="h-10 w-10 rounded-full mr-6">
                                <div>
                                    <p class="mb-3 text-[#777777]">Pekerjaan rapih banget, tukang dan mandornya juga ramah banget. Terus enak juga minta pendapat / saran ke mereka, untuk masalah harga sesuai kualitas kerja dan juga bisa nego. Pokoknya mantap Mas Tukang.</p>
                                    <h1 class="font-black text-xl mb-2">Anselma Kanih</h1>
                                    <div class="flex">
                                        <i class="bi bi-star-fill text-red-500"></i>
                                        <i class="bi bi-star-fill text-red-500"></i>
                                        <i class="bi bi-star-fill text-red-500"></i>
                                        <i class="bi bi-star-fill text-red-500"></i>
                                        <i class="bi bi-star-half text-red-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 mb-8 hover:scale-105 hover:drop-shadow-xl cursor-pointer">
                            <div class="bg-red-50 p-6 rounded-xl flex items-start w-[622px] h-[215px]">
                                <img src="/images/user2.jpg" class="h-10 w-10 rounded-full mr-6">
                                <div>
                                    <p class="mb-3 text-[#777777]">AP Arsitektur, sangat brillian dalam mengembangkan ide dan memberikan solusi dalam merenovasi rumah yang di sesuaikan dengan keterbatsan dana. saya sangat merekomendasikan kepada siapapun untuk menggunakan jasa AP Arsitektur</p>
                                    <h1 class="font-black text-xl mb-2">Abraham Gingsul</h1>
                                    <div class="flex">
                                        <i class="bi bi-star-fill text-red-500"></i>
                                        <i class="bi bi-star-fill text-red-500"></i>
                                        <i class="bi bi-star-fill text-red-500"></i>
                                        <i class="bi bi-star-fill text-red-500"></i>
                                        <i class="bi bi-star-fill text-red-500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- FEATURE JOIN SERVICE PROVIDER --}}
        <div class="bg-white h-fit flex items-center justify-center mt-16">
            <div class="bg-gradient-to-r from-green-500 to-blue-500 py-10 rounded-lg shadow-md flex justify-center items-center overflow-visible">
                <div class="w-[40%] relative -m-28 overflow-visible">
                    <img src="{{ asset('images/join-provider.png') }}" alt="Example Image" class="ml-4 mb-[72px]">
                </div>
                <div class="w-[60%] pl-10">
                    <h1 class="text-5xl font-extrabold mb-4 text-white">Menjadi Penyedia Jasa</h1>
                    <p class="mb-6 text-xl text-white">Kami akan menghubungkan Anda dengan customer sehingga Anda dapat meningkatkan kinerja bisnis Anda.</p>
                    <button class="bg-orange-500 text-white rounded-lg py-3 px-4 mt-4 text-lg font-bold w-fit">Daftar Sekarang</button>
                </div>
            </div>
        </div>

        {{-- FEATURE SERVICE PROVIDER VOICE --}}
        <div class="w-full h-screen mt-24 relative">
            <h1 class="text-4xl font-bold text-center mt-4 mb-4">Yang Pelanggan Kami Katakan!</h1>
            <p class="text-center mb-2 text-[#777777]">Mendapatkan pelayanan, di mana pun, kapan pun, dan kapan pun Anda butuhkan.</p>
            <div class="cont-box-1 bg-white w-full h-[40%] relative">
                <div class="bg-white w-[1024px] h-[482px] absolute left-1/2 transform -translate-x-1/2 top-[22%] -mt-8 flex flex-row items-center justify-center text-white text-lg font-bold rounded-lg shadow-xl">
                    <div class="w-full h-full flex flex-col justify-between gap-6 items-center p-16 hover:border hover:rounded-lg cursor-pointer">
                        <div class="flex w-full h-[70%] justify-center">
                            <p class="mb-3 text-lg tracking-wide text-justify text-[#777777]">"Saya nggak perlu menghabiskan banyak waktu dan tenaga untuk bertemu dan deal dengan customer secara langsung setelah menggunakan Babantu. Rezeki dari customer baru yang saya dapat juga banyak karena Babantu sudah terkenal sebagai penyedia jasa online yang terpercaya."</p>
                        </div>
                        <div class="flex flex-row justify-start items-center w-full h-[30%]">
                            <img src="/images/jasa-AP.png" class="h-14 w-14 rounded-full mr-6 border">
                            <div class="flex flex-col">
                                <h1 class="font-black text-black text-lg">AP Architecture Studio</h1>
                                <p class="text-[#777777] text-sm tracking-wide">Kontraktor Bangunan</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-full flex flex-col justify-between gap-6 items-center p-16 hover:border hover:rounded-lg cursor-pointer">
                        <div class="flex w-full h-[70%] justify-center">
                            <p class="mb-3 text-lg tracking-wide text-justify text-[#777777]">"Selama 6 bulan menggunakan Babantu, saya sangat amat terbantu. Bukan hanya menambah pelanggan baru, kegiatan usaha saya semakin padat berkat proyek dari Babantu.com. Pokoknya makin sibuk karena limpahan proyek baru! Babantu benar-benar mengubah cara saya menjalankan usaha."</p>
                        </div>
                        <div class="flex flex-row justify-start items-center w-full h-[30%]">
                            <img src="/images/jasa-SG.png" class="h-14 w-14 rounded-full mr-6 border">
                            <div class="flex flex-col">
                                <h1 class="font-black text-black text-lg">Sumber Gemilang</h1>
                                <p class="text-[#777777] text-sm tracking-wide">Kontraktor Bangunan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cont-box-2 bg-cover bg-center bg-black w-full h-[60%] flex flex-col justify-end items-center">
                <h1 class="text-white mb-4 text-center font-semibold tracking-wide text-4xl">Ada Yang Perlu Ditanyakan,</h1>
                <h1 class="text-white mb-10 text-center font-semibold tracking-wide text-4xl">Hubungi Kami!</h1>
                <div class="mb-32">
                    <a href="" class="inline-block text-white border border-white py-4 px-8 text-sm font-bold bg-transparent relative cursor-pointer hover:border-red-600 hover:bg-red-600 transition duration-1000">CONTACT US</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('end-content')
    <section class="footer w-full text-center pt-8 mt-36">
        <hr>
        <h4 class="mb-8 mt-5 font-bold">About Us</h4>
        <p class="text-[#777777] tracking-wide text-base">
            Hubungi kami untuk informasi teknis seputar proses dan pelaksanaan Layanan yang disediakan ole Babantu di menu Kontak,<br>
            Atau pilih menu Tentang untuk membaca Tata Cara dalam menggunakan Layanan Babantu.
        </p>
        <div class="icons flex justify-center space-x-6 py-6">
            <a href="#" class="text-red-600 cursor-pointer"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-red-600 cursor-pointer"><i class="bi bi-twitter"></i></a>
            <a href="#" class="text-red-600 cursor-pointer"><i class="bi bi-instagram"></i></a>
            <a href="#" class="text-red-600 cursor-pointer"><i class="bi bi-youtube"></i></a>
        </div>
        <p class="text-[#777777] text-base">Made With by | <b class="text-red-600 font-extrabold">Dakode</b></p>
        <hr class="mt-3">
        <div class="flex flex-row justify-between items-center w-full h-12 px-36">
            <p class="text-red-600 font-extrabold">Babantu | <b class="text-[#777777] font-extralight text-base">Copyright © 2025 PT. Dakotech Services Technology</b></p>
            <div class="flex flex-row gap-8">
                <p class="text-[#777777] text-base hover:text-gray-600 cursor-pointer">Kebijakan Privasi</p>
                <p class="text-[#777777] text-base hover:text-gray-600 cursor-pointer">Syarat dan Ketentuan</p>
            </div>
        </div>
    </section>
@endsection