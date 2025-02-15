@extends('layouts.main-map')

@section('map-content')
    <div class="w-4/5 h-[88vh] px-12 pt-12 pb-0 flex flex-col justify-between">
        <div class="space-y-6">
            <div class="space-y-2">
                <h1 class="text-3xl font-medium">Halo, <b class="font-extrabold text-black">{{ $customer->customer_name }}</b></h1>
                <p class="text-gray-700 text-lg flex flex-row">Selamat datang di Dashboard <b class="font-bold text-red-600 ml-1">Babantu</b>!</p>
            </div>
    
            <div class="bg-white p-6 rounded shadow-md text-center border h-96 flex flex-col justify-center items-center gap-4">
                <div class="">
                    <h2 class="text-2xl font-bold mb-3">Pesanan Transaksi</h2>
                    <p class="text-gray-500 mb-4">Semua Permintaan Jasa Anda Akan Tampil Disini.</p>
                </div>
                <a href="{{ url('/beranda') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:font-bold hover:bg-blue-600">Kembali Beranda</a>
            </div>
        </div>


        <div class="footer">
            <div class="flex flex-row justify-center items-center">
                <p class="text-[#777777] text-base">Made With by | <b class="text-red-600 font-extrabold">Dakode</b></p>
            </div>
            <hr class="mt-3">
            <div class="flex flex-row justify-between items-center w-full h-12 px-36">
                <p class="text-red-600 font-extrabold">Babantu | <b class="text-[#777777] font-extralight text-base">Copyright © 2025 PT. Dakotech Services Technology</b></p>
                <div class="flex flex-row gap-8">
                    <p class="text-[#777777] text-base hover:text-gray-600 cursor-pointer">Kebijakan Privasi</p>
                    <p class="text-[#777777] text-base hover:text-gray-600 cursor-pointer">Syarat dan Ketentuan</p>
                </div>
            </div>
        </div>
    </div> 
@endsection