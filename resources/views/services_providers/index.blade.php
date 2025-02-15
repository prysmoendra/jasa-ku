@extends('layouts.main-map')

@section('map-content')
    <div class="w-4/5 h-[88vh] px-12 py-12 bg-red-100">
        <h1 class="text-3xl font-black">Daftar Jasa</h1>

        {{-- @include('services_providers.step_one') --}}
        @csrf
        <div class="my-8">
            <div class="max-w-4xl mx-auto py-8">
                <h1 class="text-3xl font-bold mb-6 text-gray-800">Create New Service Provider</h1>
                
                <form action="#" method="POST" class="bg-white p-6 rounded-lg shadow-md">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Provider Name -->
                        <div>
                            <label for="provider_name" class="block text-sm font-medium text-gray-700">Provider Name *</label>
                            <input type="text" name="provider_name" id="provider_name" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                value="{{ old('provider_name') }}" required>
                            @error('provider_name')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Category Dropdown -->
                        <div>
                            <label for="category_id" class="block text-sm font-medium text-gray-700">Category *</label>
                            <select name="category_id" id="category_id" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">
                                    {{-- <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}> --}}
                                        {{ $category->category_name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Sub Category Dropdown (Dynamic) -->
                        <div>
                            <label for="sub_category_id" class="block text-sm font-medium text-gray-700">Sub Category</label>
                            <select name="sub_category_id" id="sub_category_id" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="">Select Sub Category</option>
                            </select>
                            @error('sub_category_id')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Location Dropdown -->
                        <div>
                            <label for="location_id" class="block text-sm font-medium text-gray-700">Location</label>
                            <select name="location_id" id="location_id" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="">Select Location</option>
                                @foreach($locations as $location)
                                    <option value="{{ $location->id }}" {{ old('location_id') == $location->id ? 'selected' : '' }}>
                                        {{ $location->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('location_id')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
                            <input type="email" name="email" id="email" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                value="{{ old('email') }}" required>
                            @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number *</label>
                            <input type="tel" name="phone_number" id="phone_number" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                value="{{ old('phone_number') }}" pattern="[0-9]{10,15}" required>
                            @error('phone_number')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Address -->
                        <div class="md:col-span-2">
                            <label for="address" class="block text-sm font-medium text-gray-700">Address *</label>
                            <textarea name="address" id="address" rows="3"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                required>{{ old('address') }}</textarea>
                            @error('address')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-6">
                        <button type="submit" 
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline">
                            Create Service Provider
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        // Dynamic Sub Category Loading
        document.getElementById('category_id').addEventListener('change', function() {
            const categoryId = this.value;
            const subCategorySelect = document.getElementById('sub_category_id');
            
            if (categoryId) {
                fetch(`/api/sub-categories?category_id=${categoryId}`)
                    .then(response => response.json())
                    .then(data => {
                        subCategorySelect.innerHTML = '<option value="">Select Sub Category</option>';
                        data.forEach(subCategory => {
                            subCategorySelect.innerHTML += `
                                <option value="${subCategory.id}">${subCategory.name}</option>
                            `;
                        });
                    });
            } else {
                subCategorySelect.innerHTML = '<option value="">Select Sub Category</option>';
            }
        });


        function editField(field, currentValue) {
        const displayDiv = document.getElementById(`${field}-display`);

        // Create an input element
        const input = document.createElement('input');
        input.type = 'text';
        input.id = `${field}-input`;
        input.value = currentValue;
        input.className = 'border rounded px-2 py-1';

        // Replace the display div with the input
        displayDiv.parentNode.replaceChild(input, displayDiv);

        // Change the button to 'Save'
        const button = input.nextElementSibling;
        button.textContent = 'Save';
        button.onclick = function() { saveField(field); };
        }

        function saveField(field) {
        const input = document.getElementById(`${field}-input`);
        const newValue = input.value;

        // Perform validation (you can expand this as needed)
        if (newValue.trim() === '') {
            alert('This field cannot be empty.');
            return;
        }

        // Send an AJAX request to update the field
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('{{ route("profile.update") }}', {
            method: 'POST',
            headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': token,
            },
            body: JSON.stringify({ [field]: newValue }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
            // Create a new display div
            const displayDiv = document.createElement('div');
            displayDiv.id = `${field}-display`;
            displayDiv.textContent = newValue;

            // Replace the input with the display div
            input.parentNode.replaceChild(displayDiv, input);

            // Change the button back to 'Edit'
            const button = displayDiv.nextElementSibling;
            button.textContent = 'Edit';
            button.onclick = function() { editField(field, newValue); };

            alert('Profile updated successfully!');
            } else {
            alert('An error occurred while updating your profile.');
            }
        })
        .catch((error) => {
            console.error('Error:', error);
            alert('An error occurred while updating your profile.');
        });
        }
    </script> 
@endsection