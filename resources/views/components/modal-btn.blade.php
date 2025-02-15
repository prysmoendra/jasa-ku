<div x-data="{ isOpen: @entangle($attributes->wire('model')) }" x-show="isOpen" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
    <div @click.away="isOpen = false" class="relative w-full max-w-2xl max-h-[90vh] overflow-y-auto rounded-lg bg-white p-6 shadow-lg">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-semibold">{{ $title }}</h2>
            <button @click="isOpen = false" class="rounded-full p-1 hover:bg-gray-100 transition-colors" aria-label="Close modal">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        {{ $slot }}
    </div>
</div>