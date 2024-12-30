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
                /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
            </style>
        @endif

        <style> /* custom styles css for transition */
            .search-bar {
                /* transition: all 0.5s ease-in-out; */
                /* width: 100%; */
            }
            .search-bar-fixed {
                position: fixed;
                top: 0;
                left: 50%;
                transform: translateX(-50%);
                z-index: 50;
                /* transition: all 0.5s ease-in-out; */
                width: 60%;
            }
            .search-bar-fixed input {
                height: 48px;
            }
            .category-bar{
                margin-top: 0;
            }

            .carousel-inner > .carousel-item {
                position: absolute;
                width: 100%;
                opacity: 0;
                transition: opacity 0.6s;
                z-index: 1;
            }
            .carousel-inner > .carousel-item.carousel-visible {
                opacity: 1;
            }
            .carousel-indicators {
                position: absolute;
                top: 18px;
                left: 20px;
                /* transform: translateX(-50%); */
                display: flex;
                /* justify-content: start; */
                /* gap: 1rem; */
                z-index: 5;
            }
            .carousel-image { 
                height: 302px; 
                width: 1208px; 
                object-fit: cover;
            }
            .carousel-bullet {
                width: 10px;
                height: 10px;
                border-radius: 50%;
                background-color: rgba(255,255,255,0.44);
            }
            .carousel-bullet-active {
                background-color: white;
            }
            .carousel-button {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                background-color: rgba(255, 255, 255, 0.7);
                color: white;
                border: none;
                padding: 10px;
                cursor: pointer;
                opacity: 0;
                transition: opacity 0.3s;
                z-index: 6;
            }
            .carousel-button:hover {
                background-color: rgba(255, 255, 255, 0.9);
            }
            .carousel:hover .carousel-button {
                opacity: 1;
            }
            .carousel-button-left {
                left: -20px;
                top: 150px;
            }
            .carousel-button-right {
                right: -20px;
                top: 150px;
            }
        </style>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body class="font-sans antialiased">
        {{-- top position --}}
        <div id="header-main-wrapper" class="relative">
            {{-- #fixed section --}}
            <div class="fixed top-0 left-0 right-0 bg-white z-20">

                {{-- Top #1 --}}
                <div class="flex justify-between items-center h-20 pl-20 pr-20">
                    {{-- logo JasaKu --}}
                    <div class="font-extrabold underline decoration-pink-500 text-xl flex justify-start w-[30%]">
                        <span>Jasa</span>
                        <span>Ku</span>
                    </div>

                    <div class="flex justify-center w-[40%]">
                        {{-- <input type="text" placeholder="Search..." class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm"> --}}
                        <ul class="flex flex-row w-full justify-center space-x-5">
                            <li class="cursor-pointer font-extrabold border-b-2">Home</li>
                            <li class="cursor-pointer text-gray-500">About</li>
                            <li class="cursor-pointer text-gray-500">Services</li>
                            <li class="cursor-pointer text-gray-500">Contact</li>
                        </ul>
                    </div>

                    <div class="flex flex-row justify-end justify-items-end items-center space-x-1 w-[30%]">
                        {{-- bahasa JasaKu --}}
                        <div class="w-[46px] h-[42px] flex justify-center justify-items-center items-center hover:bg-gray-100 hover:rounded-full cursor-pointer">
                            <i class="bi bi-globe"></i>
                        </div>
                        {{-- profil JasaKu --}}
                        <div class="w-[86px] h-[48px] bg-white flex justify-center justify-items-center items-center space-x-3 border rounded-full cursor-pointer hover:drop-shadow-md">
                            <i class="bi bi-list text-xl"></i>
                            <i class="bi bi-person-circle text-3xl"></i>
                        </div>
                    </div>
                </div>

                {{-- Top #2 --}}
                <div id="search-bar" class="flex justify-center items-center justify-items-center w-full h-20 drop-shadow-md bg-blue-300">
                    <input type="text" placeholder="Search..." class="w-[50%] px-5 py-5 h-[66px] border border-gray-300 rounded-full shadow-sm">
                </div>

                {{-- Top #3 --}}
                {{-- <div id="category-bar" class="items-center h-[78px] pl-8 pr-8 grid grid-flow-col auto-cols-auto justify-items-center mt-2 border-t"> --}}
                    {{-- list Kategori --}}
                    {{-- <div class="flex flex-col justify-center justify-items-center items-center space-y-2 bg-red-200 h-[78px] w-auto">
                        <img src="https://a0.muscache.com/pictures/3271df99-f071-4ecf-9128-eb2d2b1f50f0.jpg" alt="" class="w-6 h-6">
                        <span class="font-bold text-sm">Favorite</span>
                    </div>
                    <div class="flex flex-col justify-center justify-items-center items-center space-y-2 bg-red-200 h-[78px] w-auto">
                        <img src="https://a0.muscache.com/pictures/3271df99-f071-4ecf-9128-eb2d2b1f50f0.jpg" alt="" class="w-6 h-6">
                        <span class="font-bold text-sm">Favorite</span>
                    </div>
                    <div class="flex flex-col justify-center justify-items-center items-center space-y-2 bg-red-200 h-[78px] w-auto">
                        <img src="https://a0.muscache.com/pictures/3271df99-f071-4ecf-9128-eb2d2b1f50f0.jpg" alt="" class="w-6 h-6">
                        <span class="font-bold text-sm">Favorite</span>
                    </div>
                    <div class="flex flex-col justify-center justify-items-center items-center space-y-2 bg-red-200 h-[78px] w-auto">
                        <img src="https://a0.muscache.com/pictures/3271df99-f071-4ecf-9128-eb2d2b1f50f0.jpg" alt="" class="w-6 h-6">
                        <span class="font-bold text-sm">Favorite</span>
                    </div>
                    <div class="flex flex-col justify-center justify-items-center items-center space-y-2 bg-red-200 h-[78px] w-auto">
                        <img src="https://a0.muscache.com/pictures/3271df99-f071-4ecf-9128-eb2d2b1f50f0.jpg" alt="" class="w-6 h-6">
                        <span class="font-bold text-sm">Favorite</span>
                    </div>
                    <div class="flex flex-col justify-center justify-items-center items-center space-y-2 bg-red-200 h-[78px] w-auto">
                        <img src="https://a0.muscache.com/pictures/3271df99-f071-4ecf-9128-eb2d2b1f50f0.jpg" alt="" class="w-6 h-6">
                        <span class="font-bold text-sm">Favorite</span>
                    </div>
                    <div class="flex flex-col justify-center justify-items-center items-center space-y-2 bg-red-200 h-[78px] w-auto">
                        <img src="https://a0.muscache.com/pictures/3271df99-f071-4ecf-9128-eb2d2b1f50f0.jpg" alt="" class="w-6 h-6">
                        <span class="font-bold text-sm">Favorite</span>
                    </div>
                    <div class="flex flex-col justify-center justify-items-center items-center space-y-2 bg-red-200 h-[78px] w-auto">
                        <img src="https://a0.muscache.com/pictures/3271df99-f071-4ecf-9128-eb2d2b1f50f0.jpg" alt="" class="w-6 h-6">
                        <span class="font-bold text-sm">Favorite</span>
                    </div>
                    <div class="flex flex-col justify-center justify-items-center items-center space-y-2 bg-red-200 h-[78px] w-auto">
                        <img src="https://a0.muscache.com/pictures/3271df99-f071-4ecf-9128-eb2d2b1f50f0.jpg" alt="" class="w-6 h-6">
                        <span class="font-bold text-sm">Favorite</span>
                    </div>
                    <div class="flex flex-col justify-center justify-items-center items-center space-y-2 bg-red-200 h-[78px] w-auto">
                        <img src="https://a0.muscache.com/pictures/3271df99-f071-4ecf-9128-eb2d2b1f50f0.jpg" alt="" class="w-6 h-6">
                        <span class="font-bold text-sm">Favorite</span>
                    </div>
                    <div class="flex flex-col justify-center justify-items-center items-center space-y-2 bg-red-200 h-[78px] w-auto">
                        <img src="https://a0.muscache.com/pictures/3271df99-f071-4ecf-9128-eb2d2b1f50f0.jpg" alt="" class="w-6 h-6">
                        <span class="font-bold text-sm">Favorite</span>
                    </div>
                    <div class="flex flex-col justify-center justify-items-center items-center space-y-2 bg-red-200 h-[78px] w-auto">
                        <img src="https://a0.muscache.com/pictures/3271df99-f071-4ecf-9128-eb2d2b1f50f0.jpg" alt="" class="w-6 h-6">
                        <span class="font-bold text-sm">Favorite</span>
                    </div>
                    <div class="flex flex-col justify-center justify-items-center items-center space-y-2 bg-red-200 h-[78px] w-auto">
                        <img src="https://a0.muscache.com/pictures/3271df99-f071-4ecf-9128-eb2d2b1f50f0.jpg" alt="" class="w-6 h-6">
                        <span class="font-bold text-sm">Favorite</span>
                    </div>

                    <div class="flex justify-center items-center w-8 h-8 bg-white rounded-full border-[1.5px] hover:w-[33.5px] hover:h-[33.5px] cursor-pointer hover:drop-shadow-lg">
                        <i class="bi bi-chevron-right text-sm"></i>
                    </div>

                    <div class="flex flex-row justify-center items-center space-x-2 h-12 w-[93px] bg-white rounded-xl border-[1.5px]">
                        <i class="bi bi-sliders"></i>
                        <span class="font-bold text-sm">Filters</span>
                    </div> --}}
                {{-- </div> --}}
            </div>
        </div>

        <div class="flex flex-col items-center min-h-screen mt-[160px] bg-green-100">
            {{-- the tolerant line of limit --}}
            <div class="bg-gray-300 w-full h-10"></div>
            <div class="promo-banner bg-red-100 w-[1208px] h-[302px]">

                <div class="container mx-auto">
                    <div class="carousel relative">
                        <div class="carousel-inner relative w-full">
                            @php
                            $images = [
                                asset('images/banner-1.jpg'),
                                asset('images/banner-2.jpg'),
                                asset('images/banner-3.jpg')
                            ];
                            @endphp

                            @foreach($images as $index => $image)
                                <input class="carousel-open hidden" type="radio" id="carousel-{{$index}}" name="carousel" aria-hidden="true" hidden="" {{$index == 0 ? 'checked="checked"' : ''}}>
                                <div class="carousel-item {{$index == 0 ? 'carousel-visible' : ''}} z-10" id="carousel-item-{{$index}}">
                                    <img src="{{ $image }}" class="carousel-image block w-full rounded-xl">
                                </div>
                            @endforeach

                            <button class="carousel-button carousel-button-left rounded-full h-10 w-10 items-center flex justify-center" id="prevButton">
                                <i class="bi bi-chevron-left text-xl text-gray-400"></i>
                            </button>
                            <button class="carousel-button carousel-button-right rounded-full h-10 w-10 items-center flex justify-center" id="nextButton">
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
            <div class="bg-gray-300 w-full h-10"></div>
        </div>
    
        <div class="p-8">
            <p class="text-center text-gray-600">scroll tol!</p>
            <div class="h-screen bg-white"></div>
            <div class="h-screen bg-white"></div>
        </div>

        <script type="text/javascript">
            // to handle the scroll event
            document.addEventListener('scroll', function() {
                const searchBar = document.getElementById('search-bar');
                const categoryBar = document.getElementById('category-bar');
                const scrollY = window.scrollY || window.pageYOffset;

                if (scrollY > 100) { // to adjust the value for scrolling
                    searchBar.classList.add('search-bar-fixed');
                    categoryBar.classList.add('category-bar');
                } else {
                    searchBar.classList.remove('search-bar-fixed');
                    categoryBar.classList.remove('category-bar');
                }
            });

            // to handle the carousel images
            document.addEventListener("DOMContentLoaded", function () {
                const radioButtons = document.querySelectorAll(".carousel-open");
                const items = document.querySelectorAll(".carousel .carousel-item");
                const indicators = document.querySelectorAll(".carousel-bullet");
                const prevButton = document.getElementById('prevButton');
                const nextButton = document.getElementById('nextButton');
                let interval;

                const showItem = (index) => {
                    items.forEach(item => item.classList.remove("carousel-visible"));
                    document.getElementById(`carousel-item-${index}`).classList.add("carousel-visible");

                    indicators.forEach(indicator => indicator.classList.remove("carousel-bullet-active"));
                    document.getElementById(`indicator-${index}`).classList.add("carousel-bullet-active");
                };

                const setNextInterval = (startIndex) => {
                    if (interval) clearInterval(interval);
                    interval = setInterval(() => {
                        let nextIndex = (startIndex + 1) % items.length;
                        radioButtons[nextIndex].checked = true;
                        showItem(nextIndex);
                        startIndex = nextIndex;
                    }, 3000);
                };

                radioButtons.forEach((radioButton, index) => {
                    radioButton.addEventListener("change", () => {
                        showItem(index);
                        setNextInterval(index);
                    });
                });

                prevButton.addEventListener("click", () => {
                    const checkedRadioButton = document.querySelector(".carousel-open:checked");
                    let prevIndex = Array.from(radioButtons).indexOf(checkedRadioButton) - 1;
                    if (prevIndex < 0) {
                        prevIndex = radioButtons.length - 1;
                    }
                    radioButtons[prevIndex].checked = true;
                    showItem(prevIndex);
                    setNextInterval(prevIndex);
                });

                nextButton.addEventListener("click", () => {
                    const checkedRadioButton = document.querySelector(".carousel-open:checked");
                    let nextIndex = (Array.from(radioButtons).indexOf(checkedRadioButton) + 1) % radioButtons.length;
                    radioButtons[nextIndex].checked = true;
                    showItem(nextIndex);
                    setNextInterval(nextIndex);
                });

                setNextInterval(0); // start the interval when the page loads
            });
        </script>
    </body>
</html>