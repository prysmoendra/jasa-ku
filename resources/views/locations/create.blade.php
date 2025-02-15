<!DOCTYPE html>
<html>
<head>
    <title>Babantu | Add Location</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>
<body class="font-sans bg-gray-100 p-8">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold tracking-wide drop-shadow-sm">Tambah Lokasi Baru</h1>
    </div>

    <!-- Form -->
    <form id="locationForm" class="bg-white px-16 py-8 mx-8 my-2 rounded-xl shadow-lg flex flex-row justify-center gap-6">
        {{-- location form --}}
        <div class="w-1/2">
            <!-- message Display -->
            <div class="w-full">
                <span class="font-bold text-red-500 text-sm" id="message"></span>
            </div>

            <div class="mb-4">
                <label for="prov" class="block mb-1">Provinsi:</label>
                <select name="prov" id="prov" class="type-select w-full p-2 border border-gray-300 rounded" tabindex="1">
                    <option>Pilih</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="kota" class="block mb-1">Kota:</label>
                <select name="kota" id="kota" class="type-select w-full p-2 border border-gray-300 rounded" tabindex="2">
                    <option>Pilih</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="kec" class="block mb-1">Kecamatan:</label>
                <select name="kec" id="kec" class="type-select w-full p-2 border border-gray-300 rounded" tabindex="3">
                    <option>Pilih</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="kel" class="block mb-1">Kelurahan/Desa:</label>
                <select name="kel" id="kel" class="type-select w-full p-2 border border-gray-300 rounded" tabindex="4">
                    <option>Pilih</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="latitude" class="block mb-1">Latitude:</label>
                <input type="number" step="any" id="latitude" name="latitude" required class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="longitude" class="block mb-1">Longitude:</label>
                <input type="number" step="any" id="longitude" name="longitude" required class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="bg-gray-50 border-y-2 px-10 py-2 my-8 flex flex-row justify-center gap-4">
                <a onclick="myLocation()" class="p-4 font-bold cursor-pointer border bg-white hover:bg-yellow-500 text-gray-600 hover:text-white rounded-xl">
                    Get Location!
                </a>
    
                <p id="myloc" class="flex justify-center items-center"></p>
            </div>
            <div class="flex flex-row gap-5 justify-start items-center">
                <button type="submit" class="rounded-lg px-5 py-2 bg-green-600 text-white border-none cursor-pointer hover:bg-green-700">Tambah</button>
                <a href="{{ url('/locations') }}" class="rounded-lg px-5 py-[9px] bg-white text-black border cursor-pointer hover:bg-gray-400 hover:text-gray-50">
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


    <!-- JavaScript to Handle Form Submission -->
    <script>
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', myLocation);
        } else {
            myLocation();
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
</body>
</html>
