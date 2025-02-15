<!DOCTYPE html>
<html>
<head>
    <title>Babantu | Edit Location</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>
<body class="font-sans bg-gray-100 p-8">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold tracking-wide drop-shadow-sm">Edit Lokasi</h1>
    </div>

    <!-- Form -->
    <form action="{{ route('locations.update', $location->location_id) }}" method="POST" class="bg-white px-16 py-8 mx-8 my-2 rounded-xl shadow-lg flex flex-row justify-center gap-6">
        @csrf
        @method('PUT')

        {{-- location form --}}
        <div class="w-1/2">
            <!-- message Display -->
            <div class="w-full">
                <span class="font-bold text-red-500 text-sm" id="message"></span>
            </div>

            <div class="mb-4">
                <label for="prov" class="block mb-1">Provinsi:</label>
                <select name="prov" id="prov" class="type-select w-full p-2 border border-gray-300 rounded" tabindex="1">
                    <option value="{{ $location->prov }}">Pilih</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="kota" class="block mb-1">Kota:</label>
                <select name="kota" id="kota" class="type-select w-full p-2 border border-gray-300 rounded" tabindex="2">
                    <option value="{{ $location->kota }}">Pilih</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="kec" class="block mb-1">Kecamatan:</label>
                <select name="kec" id="kec" class="type-select w-full p-2 border border-gray-300 rounded" tabindex="3">
                    <option value="{{ $location->kec }}">Pilih</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="kel" class="block mb-1">Kelurahan/Desa:</label>
                <select name="kel" id="kel" class="type-select w-full p-2 border border-gray-300 rounded" tabindex="4">
                    <option value="{{ $location->kel }}">Pilih</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="latitude" class="block mb-1">Latitude:</label>
                <input type="number" step="any" id="latitude" name="latitude" required class="w-full p-2 border border-gray-300 rounded" value="{{ $location->latitude }}">
            </div>
            <div class="mb-4">
                <label for="longitude" class="block mb-1">Longitude:</label>
                <input type="number" step="any" id="longitude" name="longitude" required class="w-full p-2 border border-gray-300 rounded" value="{{ $location->longitude }}">
            </div>

            <div class="bg-gray-50 border-y-2 px-10 py-2 my-8 flex flex-row justify-center gap-4">
                <a onclick="myLocation()" class="p-4 font-bold cursor-pointer border bg-white hover:bg-yellow-500 text-gray-600 hover:text-white rounded-xl">
                    Get Location!
                </a>
    
                <p id="myloc" class="flex justify-center items-center"></p>
            </div>
            <div class="flex flex-row gap-5 justify-start items-center">
                <button type="submit" class="rounded-lg px-5 py-2 bg-blue-600 text-white border-none cursor-pointer hover:bg-blue-700">Update</button>
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
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize the map with current coordinates
            var map = L.map('map').setView([currentLat, currentLng], 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Add draggable marker
            var marker = L.marker([currentLat, currentLng], { draggable: true }).addTo(map);
            
            // Update inputs on marker drag
            marker.on('dragend', function (e) {
                document.getElementById('latitude').value = e.target.getLatLng().lat;
                document.getElementById('longitude').value = e.target.getLatLng().lng;
            });
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
        const currentProv = "{{ $location->prov }}";
        const currentKota = "{{ $location->kota }}";
        const currentKec = "{{ $location->kec }}";
        const currentKel = "{{ $location->kel }}";
        const currentLat = {{ $location->latitude }};
        const currentLng = {{ $location->longitude }};

        // GET API WILAYAH INDONESIA
        // Function to set select value and trigger change
        function setSelectValue(selectId, value) {
            const select = document.getElementById(selectId);
            select.value = value;
            select.dispatchEvent(new Event('change'));
        }

        // Fetch provinces and initialize selects
        fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json`)
            .then(response => response.json())
            .then(provinces => {
                let options = '<option>Pilih</option>';
                provinces.forEach(prov => {
                    options += `<option data-prov="${prov.id}" value="${prov.name}" ${prov.name === currentProv ? 'selected' : ''}>${prov.name}</option>`;
                });
                document.getElementById('prov').innerHTML = options;

                // After provinces load, trigger kota load
                if (currentProv) {
                    const provinsi = document.querySelector(`#prov option[value="${currentProv}"]`);
                    if (provinsi) {
                        fetchKotas(provinsi.dataset.prov, currentKota);
                    }
                }
            });

        function fetchKotas(provId, currentKota) {
            fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/regencies/${provId}.json`)
                .then(response => response.json())
                .then(regencies => {
                    let options = '<option>Pilih</option>';
                    regencies.forEach(kota => {
                        options += `<option data-prov="${kota.id}" value="${kota.name}" ${kota.name === currentKota ? 'selected' : ''}>${kota.name}</option>`;
                    });
                    document.getElementById('kota').innerHTML = options;

                    // Trigger kec load
                    if (currentKota) {
                        const kota = document.querySelector(`#kota option[value="${currentKota}"]`);
                        if (kota) {
                            fetchKecs(kota.dataset.prov, currentKec);
                        }
                    }
                });
        }

        function fetchKecs(kotaId, currentKec) {
            fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/districts/${kotaId}.json`)
                .then(response => response.json())
                .then(districts => {
                    let options = '<option>Pilih</option>';
                    districts.forEach(kec => {
                        options += `<option data-prov="${kec.id}" value="${kec.name}" ${kec.name === currentKec ? 'selected' : ''}>${kec.name}</option>`;
                    });
                    document.getElementById('kec').innerHTML = options;

                    // Trigger kel load
                    if (currentKec) {
                        const kec = document.querySelector(`#kec option[value="${currentKec}"]`);
                        if (kec) {
                            fetchKels(kec.dataset.prov, currentKel);
                        }
                    }
                });
        }

        function fetchKels(kecId, currentKel) {
            fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/villages/${kecId}.json`)
                .then(response => response.json())
                .then(villages => {
                    let options = '<option>Pilih</option>';
                    villages.forEach(kel => {
                        options += `<option data-prov="${kel.id}" value="${kel.name}" ${kel.name === currentKel ? 'selected' : ''}>${kel.name}</option>`;
                    });
                    document.getElementById('kel').innerHTML = options;
                });
        }
    </script>
</body>
</html>
