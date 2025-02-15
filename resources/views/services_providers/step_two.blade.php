@extends('layouts.main-map')

@section('map-content')
    <div class="w-4/5 h-[88vh] px-12 pt-12 pb-0 flex flex-col justify-between">
        <div class="space-y-6">
            <div class="space-y-2">
                <h1 class="text-3xl font-black">Daftar Jasa</h1>
                <p class="text-gray-700 text-lg">Halo, <b class="font-extrabold text-black">{{ $customer->customer_name }}</b> isi dan lengkapi detail Jasamu!</p>
            </div>
    
            <form method="POST" action="{{ url('/jasaku/step-two') }}" class="bg-white p-6 rounded-lg shadow-md border">
                @csrf
    
                <div class="flex items-center mb-6">
                    <div class="flex-1">
                        <div class="w-full border-b border-gray-300"></div>
                        <div class="w-0 border-b-4 border-blue-500" style="width: {{ (request()->is('jasaku') ? '33' : (request()->is('jasaku/step-two') ? '66' : (request()->is('jasaku/step-three') ? '100' : '0'))) }}%;"></div>
                    </div>
                </div>
    
                <h2 class="text-2xl font-bold mb-4">Masukan Nama Jasa dan Kategorikan</h2>
                <div class="mb-4">
                    <label class="block text-gray-700">Nama Jasa</label>
                    <input type="text" name="service_provider_name" class="w-full p-2 border border-gray-300 rounded mt-1 text-lg tracking-wide" value="{{ old('service_provider_name') }}">
                    @error('service_provider_name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Kategori Jasa</label>
                    <select name="category_id" id="category_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="">Pilih Kategori</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->category_id }}">
                                {{ $category->category_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-between mt-8">
                    <a href="{{ url('/jasaku') }}" class="text-blue-500 hover:font-extrabold">Kembali</a>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:font-bold hover:bg-blue-600">Selanjutnya</button>
                </div>
            </form>
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