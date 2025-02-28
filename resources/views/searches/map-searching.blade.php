<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Situs Penyedia Jasa Online Terlengkap, Mudah & Aman di Indonesia | Babantu</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
            </style>
        @endif

        <style> /* custom styles css for transition */

        </style>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    </head>
    <body class="font-sans antialiased">
        {{-- HEADER --}}
        <section class="header">
            {{-- top position --}}
            <div id="header-main-wrapper" class="relative">
                {{-- #fixed section --}}
                <div class="fixed top-0 left-0 right-0 z-20 border-b-2 bg-white">
    
                    <div class="flex justify-between items-center h-20 pl-20 pr-20">
                        {{-- logo Babantu --}}
                    <div class="font-extrabold underline decoration-pink-500 text-xl flex justify-start items-center w-[30%]">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/svg-nama-logo.png') }}" alt="babantu" class="w-32 h-16">
                        </a>
                    </div>

                        {{-- field pencarian --}}
                        <div id="search-bar" class="flex justify-center items-center justify-items-center w-full drop-shadow-md">
                            <input type="text" placeholder="Cari penyedia jasa di Babantu" class="w-full px-6 py-3 border border-gray-300 rounded-full shadow-sm">
                        </div>

                        {{-- right side menu --}}
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
                                <div id="profile-menu" class="w-[86px] h-[48px] bg-white flex justify-center justify-items-center items-center space-x-3 border rounded-full cursor-pointer hover:drop-shadow-md">
                                    <i class="bi bi-list text-xl"></i>
                                    <i class="bi bi-person-circle text-3xl"></i>
                                </div>
                                <!-- Profile Dropdown -->
                                <div id="dropdown" class="absolute right-0 mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-md hidden z-20 py-2">
                                    <div class="border-b-2">
                                        <a href="#" class="block px-4 py-2 text-base text-gray-800 hover:bg-gray-100 cursor-pointer z-50 font-bold">Daftar</a>
                                        <a href="#" class="block px-4 py-2 text-base text-gray-800 hover:bg-gray-100 cursor-pointer z-50 mb-2">Masuk</a>
                                    </div>
                                    <div class="">
                                        <a href="#" class="block px-4 py-2 text-base text-gray-800 hover:bg-gray-100 cursor-pointer z-50 mt-2">Pusat Bantuan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="main-content w-full flex justify-center items-center mt-20 relative">
            <!-- Elemen Peta Fullscreen -->
            <div id="map" class="absolute inset-0 z-0 w-full h-[92vh]"></div>
        </section>

        <section class="mt-8">
            <div class="flex justify-center items-center fixed z-50 w-full bottom-8" id="floatingButton">
                <a href="{{ url('/carijasa') }}">
                    <div class="bg-black h-[52px] w-44 rounded-full border p-2 flex justify-center items-center hover:drop-shadow-lg cursor-pointer">
                        <button class="justify-center items-center flex flex-row gap-2">
                            <p class="text-base text-white font-medium">Tampilkan daftar</p>
                            <i class="bi bi-list-ul text-lg text-white font-semibold"></i>
                        </button>
                    </div>
                </a>
            </div>
        </section>

        {{-- FOOTER --}}
        {{-- <section class="footer w-full text-center pt-8 mt-24">
            <hr>
            <h4 class="mb-8 mt-5 font-bold">About Us</h4>
            <p class="text-[#777777] tracking-wide text-base">
                Hubungi kami untuk informasi teknis seputar proses dan pelaksanaan Layanan yang disediakan ole Babantu di menu Contact,<br>
                Atau pilih menu About untuk membaca Tata Cara dalam menggunakan Layanan Babantu.
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
        </section> --}}

        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

        <script type="text/javascript">
            // to handle the scroll event
            document.addEventListener('scroll', function() {
                const searchBar = document.getElementById('search-bar');
                const scrollY = window.scrollY || window.pageYOffset;

                if (scrollY > 100) { // to adjust the value for scrolling
                    // searchBar.classList.add('search-bar-fixed');
                } else {
                    // searchBar.classList.remove('search-bar-fixed');
                }
            });


            // hidden/show MAP
            let lastScrollTop = 0;
            const floatingButton = document.getElementById("floatingButton");

            window.addEventListener("scroll", function() {
                let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

                if (currentScroll > lastScrollTop && currentScroll > 100) {
                    // Scrolling down and past 100px from the top
                    floatingButton.style.transform = "translateY(100px)";
                    floatingButton.style.transition = "transform 0.3s ease-in-out";
                } else if (currentScroll < lastScrollTop) {
                    // Scrolling up
                    floatingButton.style.transform = "translateY(0)";
                    floatingButton.style.transition = "transform 0.3s ease-in-out";
                }

                lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
            });


            // right side menu
            const profileMenu = document.getElementById('profile-menu');
            const profileDropdown = document.getElementById('dropdown');
            const languageMenu = document.getElementById('language-menu');
            const languageDropdown = document.getElementById('language-dropdown');

            // Toggle profile dropdown
            profileMenu.addEventListener('click', function(event) {
                event.stopPropagation();
                profileDropdown.classList.toggle('hidden');
                // Hide the language dropdown if it's open
                if (!languageDropdown.classList.contains('hidden')) {
                    languageDropdown.classList.add('hidden');
                }
            });

            // Toggle language dropdown
            languageMenu.addEventListener('click', function(event) {
                event.stopPropagation();
                languageDropdown.classList.toggle('hidden');
                // Hide the profile dropdown if it's open
                if (!profileDropdown.classList.contains('hidden')) {
                    profileDropdown.classList.add('hidden');
                }
            });

            // Hide dropdowns when clicking outside
            document.addEventListener('click', function(event) {
                if (!profileMenu.contains(event.target)) {
                    profileDropdown.classList.add('hidden');
                }
                if (!languageMenu.contains(event.target)) {
                    languageDropdown.classList.add('hidden');
                }
            });




            // Data lokasi
                const locations = [
            {
                name: "Permak Jahit Bandung",
                rating: "4.9",
                reviews: "183",
                address: "Jalan Bihbul Raya G H, Gg.H.Idris Dalam, RT.04/RW.02, Sayati, Kab. Margahayu, Jawa Barat 40228",
                status: "Buka 24 jam",
                imageUrl: "https://via.placeholder.com/300",
                lat: -6.975433,
                lng: 107.566921,
            },
            {
                name: "Jahit Cepat Margahayu",
                rating: "4.8",
                reviews: "120",
                address: "Jalan Margahayu Raya No.15, Bandung, Jawa Barat",
                status: "Buka hingga 22.00",
                imageUrl: "https://via.placeholder.com/300",
                lat: -6.959694,
                lng: 107.567999,
            },
            {
                name: "Jahit Elegan Bandung",
                rating: "4.6",
                reviews: "45",
                address: "Jalan Cihampelas No.22, Bandung, Jawa Barat",
                status: "Buka hingga 21.00",
                imageUrl: "https://via.placeholder.com/300",
                lat: -6.891560,
                lng: 107.610116,
            },
            {
                name: "Tailor Modern Bandung",
                rating: "4.7",
                reviews: "180",
                address: "Jalan Dago No.45, Bandung, Jawa Barat",
                status: "Buka hingga 20.00",
                imageUrl: "https://via.placeholder.com/300",
                lat: -6.891876,
                lng: 107.620186,
            },
            {
                name: "Jahit Premium Bandung",
                rating: "4.8",
                reviews: "210",
                address: "Jalan Merdeka No.5, Bandung, Jawa Barat",
                status: "Buka hingga 22.00",
                imageUrl: "https://via.placeholder.com/300",
                lat: -6.917647,
                lng: 107.618422,
            },
            {
                name: "Jahit Rapi Bandung",
                rating: "4.5",
                reviews: "80",
                address: "Jalan Pasir Kaliki No.12, Bandung, Jawa Barat",
                status: "Buka hingga 19.00",
                imageUrl: "https://via.placeholder.com/300",
                lat: -6.945073,
                lng: 107.647563,
            },
            {
                name: "Jahit Trendy Bandung",
                rating: "4.7",
                reviews: "100",
                address: "Jalan Sukajadi No.23, Bandung, Jawa Barat",
                status: "Buka hingga 21.00",
                imageUrl: "https://via.placeholder.com/300",
                lat: -6.900447,
                lng: 107.598209,
            },
            {
                name: "Tailor & Co Bandung",
                rating: "4.6",
                reviews: "90",
                address: "Jalan Braga No.8, Bandung, Jawa Barat",
                status: "Buka hingga 20.00",
                imageUrl: "https://via.placeholder.com/300",
                lat: -6.921400,
                lng: 107.608048,
            },
            {
                name: "Jahit Klasik Bandung",
                rating: "4.8",
                reviews: "115",
                address: "Jalan Setiabudi No.25, Bandung, Jawa Barat",
                status: "Buka hingga 23.00",
                imageUrl: "https://via.placeholder.com/300",
                lat: -6.886433,
                lng: 107.616210,
            },
            {
                name: "Tailor Elegan Bandung",
                rating: "4.9",
                reviews: "200",
                address: "Jalan Cibaduyut No.18, Bandung, Jawa Barat",
                status: "Buka 24 jam",
                imageUrl: "https://via.placeholder.com/300",
                lat: -6.976091,
                lng: 107.601348,
            }
        ];




                // Inisialisasi peta
                const map = L.map('map').setView([-6.917647, 107.619124], 13);
                L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                    maxZoom: 20,
                    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                }).addTo(map);

                // Generate list dan marker dari lokasi
                function generateList() {
                    const listContainer = document.getElementById('location-list');
                    listContainer.innerHTML = '';
                    locations.forEach((location, index) => {
                        // Tambahkan list item
                        const listItem = document.createElement('div');
                        listItem.classList = "bg-white p-4 rounded-lg shadow-md flex space-x-4 items-start w-full cursor-pointer text-gray-900";
                        listItem.innerHTML = `
                            <img src="${location.imageUrl}" alt="${location.name}" class="w-20 h-20 rounded-md object-cover">
                            <div>
                                <h3 class="text-lg font-semibold">${location.name}</h3>
                                <div class="text-yellow-500 flex items-center space-x-2 text-sm">
                                    <span>⭐ ${location.rating}</span>
                                    <span class="text-gray-600">(${location.reviews} ulasan)</span>
                                </div>
                                <p class="text-sm text-gray-600">${location.status}</p>
                            </div>
                        `;
                        listItem.onclick = () => showDetailsAndFocusMap(location);
                        listContainer.appendChild(listItem);

                        // Tambahkan marker
                        const marker = L.marker([location.lat, location.lng]).addTo(map);
                        marker.bindPopup(location.name);
                    });
                }

                // Tampilkan detail lokasi
                function showDetailsAndFocusMap(location) {
                    const detailContent = document.getElementById("detailContent");
                    const detailView = document.getElementById("detailView");
                    detailView.innerHTML = `
                        <div>
                            <img src="${location.imageUrl}" alt="${location.name}" class="w-full h-64 object-cover rounded-md">
                        </div>
                        <h2 class="text-2xl font-bold">${location.name}</h2>
                        <div class="flex items-center space-x-2 text-yellow-500">
                            <span>⭐ ${location.rating}</span>
                            <span class="text-gray-600">(${location.reviews} ulasan)</span>
                        </div>
                        <p class="text-gray-700">${location.address}</p>
                        <p class="text-green-600 font-semibold">${location.status}</p>
                    `;
                    detailContent.classList.remove("hidden");

                    // Fokus ke marker di peta
                    map.setView([location.lat, location.lng], 15);
                }

                // Tutup detail lokasi
                function closeDetails() {
                    const detailContent = document.getElementById("detailContent");
                    detailContent.classList.add("hidden");
                }

                // Inisialisasi
                generateList();
        </script>
    </body>
</html>