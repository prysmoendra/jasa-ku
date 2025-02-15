@extends('layouts.main-map')

@section('map-content')
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <div class="w-4/5 h-[88vh] px-12 pt-12 pb-0 flex flex-col justify-between">
        <div class="space-y-6">
            <div class="space-y-2">
                <h1 class="text-3xl font-black">Daftar Jasa</h1>
                <p class="text-gray-700 text-lg">Halo, <b class="font-extrabold text-black">{{ $customer->customer_name }}</b> isi dan lengkapi detail Jasamu!</p>
            </div>
    
            <form method="POST" action="{{ url('/jasaku/step-three') }}" class="bg-white p-6 rounded-lg shadow-md border">
                @csrf
    
                <div class="flex items-center mb-6">
                    <div class="flex-1">
                        <div class="w-full border-b border-gray-300"></div>
                        <div class="w-0 border-b-4 border-blue-500" style="width: {{ (request()->is('jasaku') ? '33' : (request()->is('jasaku/step-two') ? '66' : (request()->is('jasaku/step-three') ? '100' : '0'))) }}%;"></div>
                    </div>
                </div>
    
                <h2 class="text-2xl font-bold mb-4">Masukkan Alamat Jasamu</h2>
                <div class="mb-4">
                    <label class="block text-gray-700">Alamat Lengkap</label>
                    <textarea name="address" id="address" class="w-full p-2 border border-gray-300 rounded mt-1 text-lg tracking-wide"></textarea>
                    @error('address')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4 space-y-3">
                    <label class="block text-gray-700">Detail Lokasi</label>
                    {{-- button trigger MODAL --}}
                    <button id="openModalButton" type="button" class="px-4 py-3 bg-gray-200 border rounded-lg hover:bg-gray-100 hover:font-bold font-medium">Atur Lokasi</button>
                </div>
                <div class="flex justify-between mt-8">
                    <a href="{{ url('/jasaku/step-two') }}" class="text-blue-500 hover:font-extrabold">Kembali</a>
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:font-bold hover:bg-green-600">Selesai</button>
                </div>
            </form>
        </div>


        <!-- Modal Container -->
        <div id="locationModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-40 w-full">
            <form id="locationForm" class="relative bg-white px-16 py-8 mx-8 my-2 rounded-xl shadow-lg flex flex-row justify-center gap-6 w-full">
                <!-- Close Button -->
                <button id="closeModalButton" type="button" class="absolute top-4 right-6 text-gray-600 hover:text-gray-800">
                    <i class="bi bi-x-lg hover:font-bold hover:text-red-400 font-medium"></i>
                </button>

                <div class="w-1/2">
                    <!-- message Display -->
                    <div class="w-full">
                        <span class="font-bold text-red-500 text-sm" id="message"></span>
                    </div>
                    
                    <div class="mb-4">
                        <label for="prov" class="font-medium block mb-1">Provinsi:</label>
                        <select name="prov" id="prov" class="type-select w-full p-2 border border-gray-300 rounded" tabindex="1">
                            <option>Pilih</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="kota" class="font-medium block mb-1">Kota:</label>
                        <select name="kota" id="kota" class="type-select w-full p-2 border border-gray-300 rounded" tabindex="2">
                            <option>Pilih</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="kec" class="font-medium block mb-1">Kecamatan:</label>
                        <select name="kec" id="kec" class="type-select w-full p-2 border border-gray-300 rounded" tabindex="3">
                            <option>Pilih</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="kel" class="font-medium block mb-1">Kelurahan/Desa:</label>
                        <select name="kel" id="kel" class="type-select w-full p-2 border border-gray-300 rounded" tabindex="4">
                            <option>Pilih</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="latitude" class="font-medium block mb-1">Latitude:</label>
                        <input type="number" step="any" id="latitude" name="latitude" required class="w-full p-2 border border-gray-300 rounded">
                    </div>
                    <div class="mb-4">
                        <label for="longitude" class="font-medium block mb-1">Longitude:</label>
                        <input type="number" step="any" id="longitude" name="longitude" required class="w-full p-2 border border-gray-300 rounded">
                    </div>
                    <div class="bg-gray-50 border-y-2 px-10 py-2 my-8 flex flex-row justify-center gap-4">
                        <a onclick="myLocation()" class="p-4 font-bold cursor-pointer border bg-white hover:bg-yellow-500 text-gray-600 hover:text-white rounded-xl">
                            Get Location!
                        </a>
                    
                        <p id="myloc" class="flex justify-center items-center"></p>
                    </div>
                    <div class="flex flex-row gap-5 justify-start items-center">
                        <button type="submit" class="rounded-lg px-5 py-2 bg-green-600 text-white border-none cursor-pointer hover:bg-green-700 hover:font-bold">Simpan</button>
                        <button id="closeModalButton2" class="rounded-lg px-5 py-[9px] bg-white text-black border cursor-pointer hover:bg-gray-100 hover:text-gray-600 hover:font-bold">Kembali</button>
                    </div>
                </div>
        
                {{-- map drag location --}}
                <div class="w-1/2">
                    <div id="map" style="width: 100%; height: 85%;" class="mt-6"></div>
                    <div id="message" style="display: none;"></div>
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


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize the map
            var map = L.map('map').setView([-6.1754, 106.8272], 13); // Default to Jakarta coordinates

            // Add a tile layer (e.g., OpenStreetMap)
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Add a draggable marker
            var marker = L.marker([-6.1754, 106.8272], { draggable: true }).addTo(map);

            // Update latitude and longitude fields when the marker is dragged
            marker.on('dragend', function (event) {
                var latLng = marker.getLatLng();
                document.getElementById('latitude').value = latLng.lat;
                document.getElementById('longitude').value = latLng.lng;
            });

            // SAVE LOCATION
            document.getElementById('locationForm').addEventListener('submit', function (e) {
                e.preventDefault(); // Prevent the default form submission

                // Get form data
                const formData = {
                    prov: document.getElementById('prov').value,
                    kota: document.getElementById('kota').value,
                    kec: document.getElementById('kec').value,
                    kel: document.getElementById('kel').value,
                    latitude: parseFloat(document.getElementById('latitude').value),
                    longitude: parseFloat(document.getElementById('longitude').value)
                };

                // Send POST request to the API
                fetch('http://127.0.0.1:8000/api/locations', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(formData)
                })
                .then(response => response.json())
                .then(data => {
                    // Display success message
                    const messageDiv = document.getElementById('message');
                    messageDiv.textContent = data.message;
                    messageDiv.className = 'mb-4 p-2 rounded bg-green-100 text-green-700 block';
                    messageDiv.style.display = 'block';

                    // Clear the form
                    document.getElementById('locationForm').reset();
                })
                .catch(error => {
                    // Display error message
                    const messageDiv = document.getElementById('message');
                    messageDiv.textContent = 'Error: ' + error.message;
                    messageDiv.className = 'mb-4 p-2 rounded bg-red-100 text-red-700 block';
                    messageDiv.style.display = 'block';
                });
            });
        });


        // Get modal elements
        const openModalButton = document.getElementById('openModalButton');
        const closeModalButton = document.getElementById('closeModalButton');
        const closeModalButton2 = document.getElementById('closeModalButton2');
        const locationModal = document.getElementById('locationModal');
        
        // Function to open the modal
        openModalButton.addEventListener('click', () => {
            locationModal.classList.remove('hidden');
            setTimeout(() => {
                map.invalidateSize();
            }, 200);
        });
        
        // Function to close the modal
        closeModalButton.addEventListener('click', () => {
            locationModal.classList.add('hidden');
        });
        closeModalButton2.addEventListener('click', () => {
            locationModal.classList.add('hidden');
        });
        
        // Close modal when clicking outside the modal content
        window.addEventListener('click', (event) => {
            if (event.target == locationModal) {
                locationModal.classList.add('hidden');
            }
        });


        // get my current location
        const latitudeInput = document.getElementById('latitude');
        const longitudeInput = document.getElementById('longitude');
        var loc = document.getElementById('myloc');
        function myLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                loc.inner = "Tidak bisa mendapatkan Lokasi saat ini, coba lagi!"
            }
        }
        function showPosition(position){
            loc.innerHTML = "Latitude: " + position.coords.latitude + "<br> Longitude: " + position.coords.longitude
            // set the input values
            if (latitudeInput && longitudeInput) {
                latitudeInput.value = position.coords.latitude;
                longitudeInput.value = position.coords.longitude;
            } else {
                console.error("Latitude or longitude input elements not found!");
            }
        }
    </script>
    <script>
        // GET API WILAYAH INDONESIA
        fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json`)
            .then((response) => response.json())
            .then((provinces) => {
                var data = provinces;
                var temp_data = `<option>Pilih</option>`;
                data.forEach((element) => {
                    temp_data += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                });
                document.getElementById("prov").innerHTML = temp_data;
            });

        const selectProvinsi = document.getElementById('prov');
        const selectKota = document.getElementById('kota');
        const selectKecamatan = document.getElementById('kec');
        const selectKelurahan = document.getElementById('kel');

        selectProvinsi.addEventListener('change', (e) => {
            var provinsi = e.target.options[e.target.selectedIndex].dataset.prov;
            fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/regencies/${provinsi}.json`)
                .then((response) => response.json())
                .then((regencies) => {
                    var data = regencies;
                    var temp_data = `<option>Pilih</option>`;
                    document.getElementById('kota').innerHTML = '<option>Pilih</option>';
                    document.getElementById('kec').innerHTML = '<option>Pilih</option>';
                    document.getElementById('kel').innerHTML = '<option>Pilih</option>';
                    data.forEach((element) => {
                        temp_data += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                    });
                    document.getElementById("kota").innerHTML = temp_data;
                });
        });
        selectKota.addEventListener('change', (e) => {
            var kota = e.target.options[e.target.selectedIndex].dataset.prov;
            fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/districts/${kota}.json`)
                .then((response) => response.json())
                .then((districts) => {
                    var data = districts;
                    var temp_data = `<option>Pilih</option>`;
                    document.getElementById('kec').innerHTML = '<option>Pilih</option>';
                    document.getElementById('kel').innerHTML = '<option>Pilih</option>';
                    data.forEach((element) => {
                        temp_data += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                    });
                    document.getElementById("kec").innerHTML = temp_data;
                });
        });
        selectKecamatan.addEventListener('change', (e) => {
            var kecamatan = e.target.options[e.target.selectedIndex].dataset.prov;
            fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/villages/${kecamatan}.json`)
                .then((response) => response.json())
                .then((villages) => {
                    var data = villages;
                    var temp_data = `<option>Pilih</option>`;
                    document.getElementById('kel').innerHTML = '<option>Pilih</option>';
                    data.forEach((element) => {
                        temp_data += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
                    });
                    document.getElementById("kel").innerHTML = temp_data;
                });
        });
    </script>
@endsection