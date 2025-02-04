<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Situs Penyedia Jasa Online Terlengkap, Mudah & Aman di Indonesia | JasaKu</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                
            </style>
        @endif

        <style></style>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <section class="w-full flex flex-col justify-center items-center">
            <div class="h-full mx-24 my-4 p-8 flex flex-col gap-8 mb-52">
                {{-- top section --}}

                {{-- judul jasa --}}
                <div class="h-fit">
                    <h1 class="text-2xl font-extrabold">Judul jasa yang dipilih</h1>
                </div>

                {{-- deskripsi jasa --}}
                <div class="w-full h-fit bg-white border rounded-xl p-6 flex flex-col justify-between gap-0">
                    <div class="flex justify-center items-center">
                        <h1>Rangkaian penanganan untuk penyedia jasa. Penanganan ini akan ditangani oleh mitra berpengalaman dan profesional.</h1>
                    </div>
                    <div class="p-2 flex justify-start items-start flex-col">
                        <h1 class="font-bold">Beberapa informasi penting seputar layanan ini:</h1>
                        <ul>
                            <li>1. Kami menjamin kenyamanan Anda saat proses perawatan.</li>
                            <li>2. Terapis akan menyediakan alat dan perlengkapan yang dibutuhkan saat proses perawatan.</li>
                            <li>3. Selama pandemi COVID-19, terapis dan customer wajib menggunakan masker.</li>
                        </ul>
                    </div>
                </div>

                {{-- layanan utama --}}
                <div class="h-fit bg-white p-6 border rounded-xl">
                    <h2 class="text-xl font-bold mb-4">Layanan Tambahan *</h2>
                    <div class="container mx-auto mt-4">
                        <div class="bg-white shadow-md px-8 pt-6 pb-8 mb-4 border rounded-lg">
                            <ul class="divide-y divide-gray-200">
                                <li class="flex items-center justify-between py-3">
                                    <div>
                                        <h2 class="text-xl font-medium">Category 1</h2>
                                        <p class="text-gray-500">Description of Category 1</p>
                                    </div>
                                    <div class="flex items-center">
                                        <button id="decrement" class="bg-red-500 text-white font-bold py-1 px-2 rounded">-</button>
                                        <span id="number" class="mx-4 text-lg">0</span>
                                        <button id="increment" class="bg-blue-500 text-white font-bold py-1 px-2 rounded">+</button>
                                    </div>
                                </li>
                                <li class="flex items-center justify-between py-3">
                                    <div>
                                        <h2 class="text-xl font-medium">Category 2</h2>
                                        <p class="text-gray-500">Description of Category 2</p>
                                    </div>
                                    <div class="flex items-center">
                                        <button class="bg-red-500 text-white px-2 py-1 rounded">-</button>
                                        <span class="mx-2">0</span>
                                        <button class="bg-blue-500 text-white px-2 py-1 rounded">+</button>
                                    </div>
                                </li>
                                <li class="flex items-center justify-between py-3">
                                    <div>
                                        <h2 class="text-xl font-medium">Category 3</h2>
                                        <p class="text-gray-500">Description of Category 3</p>
                                    </div>
                                    <div class="flex items-center">
                                        <button class="bg-red-500 text-white px-2 py-1 rounded">-</button>
                                        <span class="mx-2">0</span>
                                        <button class="bg-blue-500 text-white px-2 py-1 rounded">+</button>
                                    </div>
                                </li>
                                <li class="flex items-center justify-between py-3">
                                    <div>
                                        <h2 class="text-xl font-medium">Category 4</h2>
                                        <p class="text-gray-500">Description of Category 4</p>
                                    </div>
                                    <div class="flex items-center">
                                        <button class="bg-red-500 text-white px-2 py-1 rounded">-</button>
                                        <span class="mx-2">0</span>
                                        <button class="bg-blue-500 text-white px-2 py-1 rounded">+</button>
                                    </div>
                                </li>
                                <li class="flex items-center justify-between py-3">
                                    <div>
                                        <h2 class="text-xl font-medium">Category 5</h2>
                                        <p class="text-gray-500">Description of Category 5</p>
                                    </div>
                                    <div class="flex items-center">
                                        <button class="bg-red-500 text-white px-2 py-1 rounded">-</button>
                                        <span class="mx-2">0</span>
                                        <button class="bg-blue-500 text-white px-2 py-1 rounded">+</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- layanan tambahan --}}
                <div class="h-fit bg-white p-6 border rounded-xl">
                    <h2 class="text-xl font-bold mb-4">Layanan Tambahan *</h2>
                    <div class="container mx-auto mt-4">
                        <div class="bg-white shadow-md px-8 pt-6 pb-8 mb-4 border rounded-lg">
                            <ul class="divide-y divide-gray-200">
                                <li class="flex items-center justify-between py-3">
                                    <div>
                                        <h2 class="text-xl font-medium">Category 1</h2>
                                        <p class="text-gray-500">Description of Category 1</p>
                                    </div>
                                    <div class="flex items-center">
                                        <button class="bg-red-500 text-white px-2 py-1 rounded">-</button>
                                        <span class="mx-2">0</span>
                                        <button class="bg-blue-500 text-white px-2 py-1 rounded">+</button>
                                    </div>
                                </li>
                                <li class="flex items-center justify-between py-3">
                                    <div>
                                        <h2 class="text-xl font-medium">Category 2</h2>
                                        <p class="text-gray-500">Description of Category 2</p>
                                    </div>
                                    <div class="flex items-center">
                                        <button class="bg-red-500 text-white px-2 py-1 rounded">-</button>
                                        <span class="mx-2">0</span>
                                        <button class="bg-blue-500 text-white px-2 py-1 rounded">+</button>
                                    </div>
                                </li>
                                <li class="flex items-center justify-between py-3">
                                    <div>
                                        <h2 class="text-xl font-medium">Category 3</h2>
                                        <p class="text-gray-500">Description of Category 3</p>
                                    </div>
                                    <div class="flex items-center">
                                        <button class="bg-red-500 text-white px-2 py-1 rounded">-</button>
                                        <span class="mx-2">0</span>
                                        <button class="bg-blue-500 text-white px-2 py-1 rounded">+</button>
                                    </div>
                                </li>
                                <li class="flex items-center justify-between py-3">
                                    <div>
                                        <h2 class="text-xl font-medium">Category 4</h2>
                                        <p class="text-gray-500">Description of Category 4</p>
                                    </div>
                                    <div class="flex items-center">
                                        <button class="bg-red-500 text-white px-2 py-1 rounded">-</button>
                                        <span class="mx-2">0</span>
                                        <button class="bg-blue-500 text-white px-2 py-1 rounded">+</button>
                                    </div>
                                </li>
                                <li class="flex items-center justify-between py-3">
                                    <div>
                                        <h2 class="text-xl font-medium">Category 5</h2>
                                        <p class="text-gray-500">Description of Category 5</p>
                                    </div>
                                    <div class="flex items-center">
                                        <button class="bg-red-500 text-white px-2 py-1 rounded">-</button>
                                        <span class="mx-2">0</span>
                                        <button class="bg-blue-500 text-white px-2 py-1 rounded">+</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- calendar tgl view -->
                <div class="h-fit w-full bg-white p-6 border rounded-xl flex justify-between flex-col gap-4">
                    <h2 class="text-xl font-bold">Kapan Anda membutuhkan layanan ini?</h2>
                    <div class="flex flex-row justify-between w-full">
                        <div class="h-48 w-1/2 flex justify-center items-start p-4 gap-4 border rounded-l-xl">
                            <label for="layanan-date">Tanggal Berapa?</label>
                            <input type="date" id="layanan-date" name="layanan-date">
                        </div>
                        <div class="h-48 w-1/2 flex justify-center items-start p-4 gap-4 border rounded-r-xl">
                            <label for="layanan-time">Di Jam Berapa?</label>
                            <input type="time" id="layanan-time" name="layanan-time">
                        </div>
                    </div>
                </div>

                {{-- catatan --}}
                <div class="h-fit w-full bg-white p-6 rounded-xl flex justify-between flex-col gap-2">
                    <label for="textInput" class="block text-gray-700 text-xl font-bold">Catatan</label>
                    <input type="text" id="textInput" name="textInput" maxlength="100" class="shadow appearance-none rounded w-full py-3 px-4 mt-2 text-black leading-tight border border-gray-200 focus:border-cyan-300 focus:outline-none focus:shadow-outline">
                </div>

                {{-- detail kontak --}}
                <div class="h-fit w-full bg-white p-6 rounded-xl flex justify-between flex-col gap-3">
                    <label for="textInput" class="block text-gray-700 text-xl font-bold">Detail Kontak</label>
                    <div class="px-2">
                        <ul class="flex flex-col justify-start gap-3">
                            {{-- nama akun --}}
                            <li class="flex flex-row justify-start items-center gap-4">
                                <i class="bi bi-person text-xl text-cyan-600"></i>
                                <p class="text-base">Kris Mahendra</p>
                            </li>
                            {{-- email akun --}}
                            <li class="flex flex-row justify-start items-center gap-4">
                                <i class="bi bi-envelope text-xl text-cyan-600"></i>
                                <p class="text-base">masmas@gmail.com</p>
                            </li>
                            {{-- no. hp --}}
                            <li class="flex flex-row justify-start items-center gap-4">
                                <i class="bi bi-telephone text-xl text-cyan-600"></i>
                                <p class="text-base">+62812345679</p>
                            </li>
                            {{-- checkbox --}}
                            <li class="flex flex-row justify-start items-center gap-4">
                                <input type="checkbox">
                                <p class="flex justify-center items-center text-base text-black hover:text-cyan-600">Saya ingin mendapatkan email promosi dan informasi baru dari JasaKu</p>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- lokasi service --}}
                <div class="h-fit w-full bg-white p-6 rounded-xl flex justify-between flex-col gap-2">
                    <label for="textInput" class="block text-gray-700 text-xl font-bold">Lokasi</label>
                    <input type="text" id="textInput" name="textInput" maxlength="100" class="shadow appearance-none rounded w-full py-3 px-4 mt-2 text-black leading-tight border border-gray-200 focus:border-cyan-300 focus:outline-none focus:shadow-outline">

                    <label for="textInput" class="block text-gray-700 text-xl font-bold">Alamat Lengkap</label>
                    <input type="text" id="textInput" name="textInput" maxlength="100" class="shadow appearance-none rounded w-full py-16 px-4 mt-2 text-black leading-tight border border-gray-200 focus:border-cyan-300 focus:outline-none focus:shadow-outline">
                </div>

                {{-- info --}}
                <div class="h-fit w-full flex justify-center items-center">
                    <p class="text-[#777777] text-base">Made With by | <b class="text-red-600 font-extrabold">Dakode</b></p>
                </div>
            </div>

            {{-- fixed box --}}
            <div class="w-[1440px] h-48 mx-24 bg-white border rounded-xl bottom-0 fixed mb-4">
                {{-- checkbox agreement --}}
                <div class="flex flex-row border-b-2 w-full h-[25%] justify-center items-center gap-4">
                    <input type="checkbox">
                    <div class="flex flex-row justify-between gap-1">
                        <p class="flex justify-center items-center text-[#777777]">Dengan melanjutkan, Kamu setuju untuk membagikan profil Kamu dengan rekan kami JasaKu<p class="cursor-pointer text-[#777777] hover:text-red-700">Lihat Detail</p></p>
                    </div>
                </div>

                {{-- detail harga --}}
                <div class="flex flex-row h-[75%] w-fu ll px-16 py-4 rounded-b-xl justify-between gap-8">
                    <div class="w-4/5 h-full flex justify-start items-center">
                        <div class="flex flex-col gap-2">
                            <h2 class="text-xl font-normal">Estimasi Harga</h2>
                            <h2 class="flex flex-row text-3xl font-extrabold text-cyan-500">Rp
                                <p class="text-3xl font-extrabold text-cyan-500">100.000</p>
                            </h2>
                            <i class="text-[#777777] text-sm">
                                Minimal transaksi per kedatangan Rp75.000
                            </i>
                        </div>
                    </div>
                    <div class="w-1/5 h-full flex justify-center items-center">
                        <div class="flex justify-end items-center h-full">
                            <button class="px-20 py-3 bg-green-400 text-white text-lg font-bold rounded-md hover:bg-green-600 hover:shadow-lg">
                                Selanjutnya
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const decrementButton = document.getElementById('decrement');
            const incrementButton = document.getElementById('increment');
            const numberDisplay = document.getElementById('number');
            let number = 0;

            decrementButton.addEventListener('click', function () {
                number--;
                numberDisplay.textContent = number;
            });

            incrementButton.addEventListener('click', function () {
                number++;
                numberDisplay.textContent = number;
            });
        });
    </script>
    </body>
</html>