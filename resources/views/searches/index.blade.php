@extends('layouts.main-search')

@section('top-right')
    @if($customer->serviceProvider)
    {{-- // The customer has a service provider. --}}
        <div class="flex flex-row justify-end justify-items-end items-center space-x-1 w-[30%]">
            {{-- bahasa Babantu --}}
            <div class="relative">
                <div id="language-menu" class="w-[46px] h-[42px] flex justify-center justify-items-center items-center hover:bg-gray-100 hover:rounded-full cursor-pointer">
                    <i class="bi bi-globe"></i>
                </div>
                <!-- Language Dropdown -->
                <div id="language-dropdown" class="absolute right-0 mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg hidden z-20 py-2">
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 z-50">Bahasa</a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 z-50">English</a>
                </div>
            </div>

            {{-- profil Babantu --}}
            <div class="relative">
                {{-- Profile --}}
                <div id="profile-menu" class="w-[86px] h-[48px] bg-white flex justify-center justify-items-center items-center space-x-3 border rounded-full hover:drop-shadow-md cursor-pointer">
                    <i class="bi bi-list text-xl"></i>
                    <i class="bi bi-person-circle text-3xl"></i>
                </div>
                <!-- Profile Dropdown -->
                <div id="dropdown" class="absolute right-0 mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-md hidden z-20 py-2 w">
                    <div class="border-b-2">
                        <a href="{{ url('profile') }}" id="" class="block px-4 py-2 text-base text-gray-800 hover:bg-gray-100 cursor-pointer z-50 mb-2 hover:font-bold">Profil</a>
                    </div>
                    <div class="border-b-2">
                        <a href="{{ url('/dashboards') }}" class="block px-4 py-2 text-base text-gray-800 hover:bg-gray-100 cursor-pointer z-50 mb-2 mt-2 hover:font-bold hover:text-[#F33661]">Dashboard Jasa</a>
                    </div>
                    <div class="">
                        <a href="#" class="block px-4 py-2 text-base text-gray-800 hover:bg-gray-100 cursor-pointer z-50 mt-2">Pengaturan</a>
                        <a href="#" class="block px-4 py-2 text-base text-gray-800 hover:bg-gray-100 cursor-pointer z-50">Pusat Bantuan</a>
                        <a href="#" class="block px-4 py-2 text-base text-gray-800 hover:bg-gray-100 cursor-pointer z-50 hover:font-bold">Keluar</a>
                    </div>
                </div>
            </div>
        </div>
    @else
    {{-- // The customer does not have a service provider. --}}
        <div class="flex flex-row justify-end justify-items-end items-center space-x-1 w-[30%]">
            {{-- bahasa Babantu --}}
            <div class="relative">
                <div id="language-menu" class="w-[46px] h-[42px] flex justify-center justify-items-center items-center hover:bg-gray-100 hover:rounded-full cursor-pointer">
                    <i class="bi bi-globe"></i>
                </div>
                <!-- Language Dropdown -->
                <div id="language-dropdown" class="absolute right-0 mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg hidden z-20 py-2">
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 z-50">Bahasa</a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 z-50">English</a>
                </div>
            </div>

            {{-- profil Babantu --}}
            <div class="relative">
                {{-- Profile --}}
                <div id="profile-menu" class="w-[86px] h-[48px] bg-white flex justify-center justify-items-center items-center space-x-3 border rounded-full hover:drop-shadow-md cursor-pointer">
                    <i class="bi bi-list text-xl"></i>
                    <i class="bi bi-person-circle text-3xl"></i>
                </div>
                <!-- Profile Dropdown -->
                <div id="dropdown" class="absolute right-0 mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-md hidden z-20 py-2 w">
                    <div class="border-b-2">
                        <a href="{{ url('profile') }}" id="" class="block px-4 py-2 text-base text-gray-800 hover:bg-gray-100 cursor-pointer z-50 mb-2 hover:font-bold">Profil</a>
                    </div>
                    <div class="border-b-2">
                        <a href="{{ url('jasaku') }}" class="block px-4 py-2 text-base text-gray-800 hover:bg-gray-100 cursor-pointer z-50 mb-2 mt-2 hover:font-bold hover:text-[#F33661]">Buka Jasa Gratis</a>
                    </div>
                    <div class="">
                        <a href="#" class="block px-4 py-2 text-base text-gray-800 hover:bg-gray-100 cursor-pointer z-50 mt-2">Pengaturan</a>
                        <a href="#" class="block px-4 py-2 text-base text-gray-800 hover:bg-gray-100 cursor-pointer z-50">Pusat Bantuan</a>
                        <a href="#" class="block px-4 py-2 text-base text-gray-800 hover:bg-gray-100 cursor-pointer z-50 hover:font-bold">Keluar</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('main-content')
    <section class="main-content w-full flex justify-center items-center pt-24 bg-gray-50 relative">
        <div class="flex flex-row justify-between items-start w-4/5 h-fit gap-2 relative">
            {{-- column filter --}}
            <div class="w-[25%] h-fit bg-white border rounded-lg p-6">
                <h1 class="text-xl font-bold">Filter</h1>
            
                <!-- lokasi dropdown filter -->
                <div class="relative inline-block text-left mt-3 w-full" x-data="{ open: false }">
                    <div class="flex flex-row justify-between w-full">
                    <button @click="open = !open" type="button" class="inline-flex justify-between w-full h-fit px-6 py-2 text-lg font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
                        <p class="mr-8">Lokasi</p>
                        <i class="bi bi-chevron-down"></i>
                    </button>
                    </div>
                    <div x-show="open" class="relative mt-2 w-full bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" style="display: none;">
                    <div class="py-1">
                        <div class="px-4 py-2 text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox" value="Depok">
                            <span class="ml-2">Depok</span>
                        </label>
                        </div>
                        <div class="px-4 py-2 text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox" value="Tangerang">
                            <span class="ml-2">Tangerang</span>
                        </label>
                        </div>
                        <!-- Add more checkboxes here -->
                        <div class="px-4 py-2 text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox" value="Bekasi">
                            <span class="ml-2">Bekasi</span>
                        </label>
                        </div>
                        <div class="px-4 py-2 text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox" value="Jakarta">
                            <span class="ml-2">Jakarta</span>
                        </label>
                        </div>
                        <div class="px-4 py-2 text-sm text-gray-700">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox" value="Bogor">
                            <span class="ml-2">Bogor</span>
                        </label>
                        </div>
                    </div>
                    <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Lihat selengkapnya</a>
                    </div>
                    </div>
                </div>
            
                <!-- harga dropdown filter -->
                <div class="relative inline-block text-left mt-3 w-full" x-data="{ open: false }">
                    <div class="flex flex-row justify-between w-full">
                    <button @click="open = !open" type="button" class="inline-flex justify-between w-full h-fit px-6 py-2 text-lg font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
                        <p class="mr-8">Harga</p>
                        <i class="bi bi-chevron-down"></i>
                    </button>
                    </div>
                    <div x-show="open" class="relative mt-2 w-full bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" style="display: none;">
                    <div class="py-1">
                        <div class="px-4 py-2 text-sm text-gray-700">
                        <label for="min-price" class="block text-sm font-medium text-gray-700">Harga Minimum</label>
                        <input type="number" id="min-price" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Rp.">
                        </div>
                        <div class="px-4 py-2 text-sm text-gray-700">
                        <label for="max-price" class="block text-sm font-medium text-gray-700">Harga Maksimum</label>
                        <input type="number" id="max-price" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Rp.">
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            {{-- column data-filter --}}
            <div class="w-[75%] h-full bg-gray-50 p-6 flex flex-col justify-start items-start border rounded-lg gap-4">
                {{-- TOP section column --}}
                <div class="flex flex-row justify-between items-center w-full">
                    {{-- total detail data --}}
                    <div class="w-[75%]">
                        <h1>Menampilkan 10 provider untuk jasa (1 - 10 dari 1000)</h1>
                    </div>

                    {{-- sort detail data --}}
                    <div class="w-[25%] flex flex-row justify-center items-center gap-3">
                        <h1 class="font-extrabold">Urutkan:</h1>
                        <div class="relative text-left mt-3 w-full" x-data="{ open: false, sortOption: 'Ulasan' }">
                            <div class="flex flex-row justify-center items-center w-full">
                                <button @click="open = !open" type="button" class="inline-flex justify-between items-center w-full h-fit mb-2 px-6 py-2 text-lg font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
                                    <p class="mr-8 text-base w-fit" x-text="sortOption ? sortOption : 'Pilih Kriteria'"></p>
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                            <div x-show="open" @click.away="open = false" class="absolute right-0 z-10 w-full origin-top-right bg-white border border-gray-200 rounded-md shadow-lg outline-none">
                                <form class="py-2 px-4 space-y-3">
                                    <div class="flex items-center cursor-pointer mb-2">
                                        <input id="sort-rating" name="sort" type="radio" value="Rating" class="focus:ring-red-500 h-4 w-4 text-red-600 border-gray-300 cursor-pointer" x-model="sortOption">
                                        <label for="sort-rating" class="ml-2 block text-base font-medium text-gray-700 cursor-pointer">
                                            Rating
                                        </label>
                                    </div>
                                    <div class="flex items-center cursor-pointer mb-2">
                                        <input id="sort-transaction" name="sort" type="radio" value="Transaksi" class="focus:ring-red-500 h-4 w-4 text-red-600 border-gray-300 cursor-pointer" x-model="sortOption">
                                        <label for="sort-transaction" class="ml-2 block text-base font-medium text-gray-700 cursor-pointer">
                                            Transaksi
                                        </label>
                                    </div>
                                    <div class="flex items-center cursor-pointer">
                                        <input id="sort-review" name="sort" type="radio" value="Ulasan" class="focus:ring-red-500 h-4 w-4 text-red-600 border-gray-300 cursor-pointer" x-model="sortOption">
                                        <label for="sort-review" class="ml-2 block text-base font-medium text-gray-700 cursor-pointer">
                                            Ulasan
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- MAIN section column --}}
                <div class="flex flex-col gap-6 w-full h-fit">
                    @foreach ($providers as $provider)
                    <a href="{{ url('/detailjasa') }}">
                        <div class="w-full h-44 px-6 py-4 bg-white rounded-lg cursor-pointer flex flex-row gap-2">
                            {{-- foto jasa --}}
                            <div class="w-[15%] flex justify-center items-center">
                                <img src="{{ asset('images/jasa-ac1.png') }}" alt="Les Privat" class="w-full h-full rounded-md">
                            </div>
                            {{-- deskripsi jasa --}}
                            <div class="w-[85%] p-3 flex flex-col justify-start items-start gap-1">
                                <p class="text-xs">Semper Barat, jakarta utara</p>
                                <h1 class="text-base font-extrabold">Service AC Jaya</h1>
                                <p class="text-sm">Menerima service Ac rumahan, kantor, ruko, pabrik, dan Sekolahan,Menerima Pemasangan Ac Perbaikan segala merek Ac Perawatan rutin Bongkar pasang Ac Isi preon dll. ,Bahasa Indonesia,Selamat datang di Nisa teknik Kami Nisa teknik jasa layanan resmi service Ac yang telah berpengalaman...</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                    
                    <div class="w-full h-44 px-6 py-4 bg-white rounded-lg cursor-pointer flex flex-row gap-2">
                        {{-- foto jasa --}}
                        <div class="w-[15%] flex justify-center items-center">
                            <img src="{{ asset('images/jasa-ac4.png') }}" alt="Les Privat" class="w-full h-full rounded-md">
                        </div>
                        {{-- deskripsi jasa --}}
                        <div class="w-[85%] p-3 flex flex-col justify-start items-start gap-1">
                            <p class="text-xs">Cipete Selatan, Jakarta Selatan</p>
                            <h1 class="text-base font-extrabold">Service Elektronik</h1>
                            <p class="text-sm">Kami melayani service AC untuk berbagai jenis bangunan, mulai dari rumah tinggal, apartemen, perkantoran, hingga pabrik dan sekolah. Teknisi kami handal dan berpengalaman!</p>
                        </div>
                    </div>

                    <div class="w-full h-44 px-6 py-4 bg-white rounded-lg cursor-pointer flex flex-row gap-2">
                        {{-- foto jasa --}}
                        <div class="w-[15%] flex justify-center items-center">
                            <img src="{{ asset('images/jasa-ac2.png') }}" alt="Les Privat" class="w-full h-full rounded-md">
                        </div>
                        {{-- deskripsi jasa --}}
                        <div class="w-[85%] p-3 flex flex-col justify-start items-start gap-1">
                            <p class="text-xs">Kelapa Gading, Jakarta Utara</p>
                            <h1 class="text-base font-extrabold">Tukang Perbaikan AC</h1>
                            <p class="text-sm">Butuh pasang AC baru? Atau AC lama Anda rusak? Tenang, kami ahlinya! Menerima pemasangan, perbaikan, perawatan rutin, bongkar pasang, dan isi freon untuk semua merek AC.</p>
                        </div>
                    </div>

                    <div class="w-full h-44 px-6 py-4 bg-white rounded-lg cursor-pointer flex flex-row gap-2">
                        {{-- foto jasa --}}
                        <div class="w-[15%] flex justify-center items-center">
                            <img src="{{ asset('images/jasa-ac3.png') }}" alt="Les Privat" class="w-full h-full rounded-md">
                        </div>
                        {{-- deskripsi jasa --}}
                        <div class="w-[85%] p-3 flex flex-col justify-start items-start gap-1">
                            <p class="text-xs">Pondok Indah, Jakarta Selatan</p>
                            <h1 class="text-base font-extrabold">Perbaikan Elektronik</h1>
                            <p class="text-sm">Jangan biarkan AC Anda bermasalah! Nisa Teknik siap membantu Anda mengatasi segala keluhan AC. Kami menawarkan service AC berkualitas dengan harga terjangkau dan garansi yang terjamin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('map-content')
    <section class="pt-8 bg-gray-50">
        <div class="flex justify-center items-center fixed z-50 w-full bottom-8" id="floatingButton">
            <a href="{{ url('/locations') }}">
                <div class="bg-black h-[52px] w-40 p-2 rounded-full flex justify-center items-center hover:drop-shadow-lg cursor-pointer">
                    <button class="justify-center items-center flex flex-row gap-2">
                        <p class="text-base text-white font-medium">Tampilkan peta</p>
                        <i class="bi bi-map text-base text-white font-semibold"></i>
                    </button>
                </div>
            </a>
        </div>
    </section>
@endsection