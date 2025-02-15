@extends('layouts.main-map')

@section('map-search')
    <div id="search-bar" class="flex justify-center items-center justify-items-center w-full drop-shadow-md">
        <input type="text" placeholder="Cari penyedia jasa di Babantu" class="w-full px-6 py-3 border border-gray-300 rounded-full shadow-sm">
    </div>
@endsection

@section('map-content')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />


    {{-- load map --}}
    <div id="map" class="absolute inset-0 z-0 w-full h-[92vh]"></div>


    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script type="text/javascript">
        // Initialize the map
        let map = L.map('map').setView([-2.5489, 118.0149], 5); // Centered on Indonesia

        // Add a tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);


        let locations = @json($locations);

        // function to handle GET DATA and SHOW DATA
        locations.forEach(location => {
            let marker = L.marker([location.latitude, location.longitude]).addTo(map);

            marker.on('click', function () {
                fetch(`http://127.0.0.1:8000/api/locations/${location.location_id}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(responseData => {
                        console.log('Location Details:', responseData); // debug

                        const data = responseData.data;

                        if (!data || !data.kota || !data.prov || !data.kec || !data.kel || !data.latitude || !data.longitude) {
                            throw new Error('Invalid location data structure');
                        }

                        const popupContent = `
                            <div class="flex flex-col justify-start items-center gap-1">
                                <h3 class="font-extrabold text-lg tracking-wider">${data.kota}</h3>
                                <ul>
                                    <li><p><b>Provinsi:</b> ${data.prov}</p></li>
                                    <li><p><b>Kecamatan:</b> ${data.kec}</p></li>
                                    <li><p><b>Kelurahan:</b> ${data.kel}</p></li>
                                    <li><p><b>Latitude:</b> ${data.latitude}</p></li>
                                    <li><p><b>Longitude:</b> ${data.longitude}</p></li>
                                </ul>
                                <div class="flex flex-row space-x-2 mt-2">
                                    <button onclick="editLocation(${data.location_id})" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Edit</button>
                                    <button onclick="deleteLocation(${data.location_id})" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                                </div>
                            </div>
                        `;

                        marker.bindPopup(popupContent).openPopup();
                    })
                    .catch(error => console.error('Error fetching location details:', error));
            });
        });

        // function to handle EDIT button click
        function editLocation(locationId) {
            // alert(`Edit location with ID: ${locationId}`);
            window.location.href = `/locations/${locationId}/edit`;
        }

        // function to handle DELETE button click
        function deleteLocation(locationId) {
            if (confirm('Are you sure you want to delete this location?')) {
                // send a DELETE request to the API
                fetch(`http://127.0.0.1:8000/api/locations/${locationId}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // Display a success message
                    alert('Location deleted successfully!');

                    // Remove the marker from the map
                    // const markerToRemove = markers.find(marker => marker.location_id === locationId);
                    // if (markerToRemove) {
                    //     map.removeLayer(markerToRemove);
                    // }

                    // Optionally, reload the page or update the markers list
                    window.location.reload(); // Reload the page to reflect the changes
                })
                .catch(error => {
                    console.error('Error deleting location:', error);
                    alert('Failed to delete location. Please try again.');
                });
            }
        }
    </script>
    <script>
        @if (session('success'))
            alert('{{ session('success') }}');
        @endif
    </script>
@endsection

@section('list-content')
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
@endsection