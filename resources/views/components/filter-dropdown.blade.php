<div class="relative inline-block text-left" x-data="{ open: false }">
    <div>
    <button @click="open = !open" type="button" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
        Filter
        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>
    </div>
    <div x-show="open" @click.away="open = false" class="absolute right-0 z-10 mt-2 w-56 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" style="display: none;">
    <div class="py-1">
        <div class="px-4 py-2 text-sm text-gray-700">
        <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox" value="Depok">
            <span class="ml-2">Depok</span>
        </label>
        </div>
        <div class="px-4 py-2 text-sm text-gray-700">
        <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox" value="Tangerang">
            <span class="ml-2">Tangerang</span>
        </label>
        </div>
        <!-- Add more checkboxes here -->
        <div class="px-4 py-2 text-sm text-gray-700">
        <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox" value="Bekasi">
            <span class="ml-2">Bekasi</span>
        </label>
        </div>
        <div class="px-4 py-2 text-sm text-gray-700">
        <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox" value="Jakarta">
            <span class="ml-2">Jakarta</span>
        </label>
        </div>
        <div class="px-4 py-2 text-sm text-gray-700">
        <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox" value="Bogor">
            <span class="ml-2">Bogor</span>
        </label>
        </div>
    </div>
    <div class="py-1">
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Lihat selengkapnya</a>
    </div>
    </div>
</div>