@extends('layouts.main-map')

@section('map-search')
    
@endsection

@section('map-content')
    <div class="w-4/5 h-[88vh] px-12 py-12">
        <h1 class="text-3xl font-black">Informasi pribadi</h1>
    
        <!-- Edit Modal -->
        <div id="editModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
            <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
                <div class="mt-3 text-center">
                    <h3 class="text-lg font-medium" id="modalTitle"></h3>
                    <form id="editForm" method="POST" action="{{ route('profile.update') }}" class="mt-4">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="field" id="editField">
                        <div class="mb-4">
                            <input type="text" name="value" id="editValue" 
                                class="w-full px-3 py-2 border rounded-md">
                        </div>
                        <div class="flex justify-center gap-4">
                            <button type="button" onclick="closeModal()"
                                    class="px-4 py-2 bg-gray-300 rounded-md">Batal</button>
                            <button type="submit" 
                                    class="px-4 py-2 bg-blue-500 text-white rounded-md">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
        <div class="flex flex-col justify-start items-start my-8 gap-4">
            @foreach(['customer_name' => 'Nama resmi', 
                    'datebirth' => 'Tanggal lahir',
                    'email' => 'Alamat email',
                    'phone_number' => 'Nomor telepon',
                    'address' => 'Alamat lengkap'] as $field => $label)
            <div class="cursor-pointer hover:bg-gray-50 w-full flex flex-row justify-between items-start h-full p-4 rounded-lg">
                <div class="flex flex-col gap-1 w-[90%]">
                    <h1 class="font-bold">{{ $label }}</h1>
                    <p class="text-gray-500">{{ $customer->$field ?? 'Tidak disediakan' }}</p>
                </div>
                
                <div class="flex flex-col justify-center items-center w-[10%]">
                    <button onclick="openModal('{{ $field }}', '{{ $label }}', '{{ $customer->$field }}')" class="w-full h-[52px] flex justify-center items-center hover:font-extrabold">
                        Edit
                    </button>
                </div>
            </div>
            @endforeach



            <!-- Form -->
            <form id="locationForm" class="w-full px-4">
                {{-- location form --}}
                <div class="w-full flex flex-col gap-4">
                    <div class="mb-4">
                        <label for="prov" class="block mb-1 font-bold">Provinsi:</label>
                        <select name="prov" id="prov" class="type-select w-full p-2 border border-gray-300 rounded" tabindex="1">
                            <option>Pilih</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="kota" class="block mb-1 font-bold">Kota:</label>
                        <select name="kota" id="kota" class="type-select w-full p-2 border border-gray-300 rounded" tabindex="2">
                            <option>Pilih</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="kec" class="block mb-1 font-bold">Kecamatan:</label>
                        <select name="kec" id="kec" class="type-select w-full p-2 border border-gray-300 rounded" tabindex="3">
                            <option>Pilih</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="kel" class="block mb-1 font-bold">Kelurahan/Desa:</label>
                        <select name="kel" id="kel" class="type-select w-full p-2 border border-gray-300 rounded" tabindex="4">
                            <option>Pilih</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="latitude" class="block mb-1 font-bold">Latitude:</label>
                        <input type="number" step="any" id="latitude" name="latitude" required class="w-full p-2 border border-gray-300 rounded">
                    </div>
                    <div class="mb-4">
                        <label for="longitude" class="block mb-1 font-bold">Longitude:</label>
                        <input type="number" step="any" id="longitude" name="longitude" required class="w-full p-2 border border-gray-300 rounded">
                    </div>
                    <div class="bg-gray-50 border-y-2 px-10 py-2 my-8 flex flex-row justify-center gap-4">
                        <a onclick="myLocation()" class="p-4 font-bold cursor-pointer border bg-white hover:bg-yellow-500 text-gray-600 hover:text-white rounded-xl">
                            Get Location!
                        </a>
            
                        <p id="myloc" class="flex justify-center items-center"></p>
                    </div>
                    <div class="flex flex-row gap-5 justify-start items-center">
                        <button type="submit" class="rounded-lg px-5 py-2 bg-[#F33661] text-white border-none cursor-pointer hover:bg-red-600 hover:font-bold">Simpan</button>
                        <a href="{{ url('/beranda') }}" class="rounded-lg px-5 py-[9px] bg-white text-black border cursor-pointer hover:bg-gray-400 hover:text-gray-50 hover:font-bold">
                            Kembali
                        </a>
                    </div>
                </div>

                {{-- map drag location --}}
                <div class="w-1/2">
                    <div id="map" style="width: 100%; height: 85%;" class="mt-6"></div>
                    <div id="message" style="display: none;"></div>
                </div>

                
            </form>
        </div>
    </div>

    <script>
        function openModal(field, label, currentValue) {
            document.getElementById('modalTitle').textContent = `Edit ${label}`;
            document.getElementById('editField').value = field;
            document.getElementById('editValue').value = currentValue;
            document.getElementById('editModal').classList.remove('hidden');
        }
    
        function closeModal() {
            document.getElementById('editModal').classList.add('hidden');
        }
    
        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('editModal');
            if (event.target === modal) {
                closeModal();
            }
        }



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
