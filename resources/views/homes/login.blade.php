<!-- Modal Body -->
<form id="login-form" action="{{ route('login.check') }}" method="POST" class="m-6 flex flex-col gap-2">
    @csrf
    <div class="flex flex-col gap-6">
        <h1 class="text-2xl font-bold">Selamat Datang di Babantu</h1>
        <div class="flex flex-col gap-4">
            <div>
                <label for="country" class="block text-sm font-medium text-gray-700">Negara/Wilayah</label>
                <div id="country" class="dropdown bg-gray-100 p-2 text-base border border-gray-300 rounded-lg pointer-events-none mt-1 px-4 py-[10px]">Indonesia (+62)</div>
            </div>
            <div>
                <!-- Phone Number Field -->
                <label for="phone" class="block text-sm font-medium text-gray-700">Nomor telepon</label>
                <div class="flex mt-1 w-full">
                    <span class="justify-center inline-flex items-center px-2 text-lg border border-gray-300 bg-gray-100 rounded-l-lg w-[12%] font-medium">+62</span>
                    <input type="tel" id="ex_phone" name="ex_phone" class="w-[88%] border border-gray-300 rounded-r-lg focus:border-black focus:ring-0 focus:ring-black focus:outline-none px-4 py-[10px] text-lg" oninput="formatPhoneNumber(this)">
                    <input type="hidden" id="phone" name="phone">
                </div>
            </div>
        </div>
        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" id="check-phone-button" class="w-full px-4 py-3 bg-[#F33661] text-white rounded-lg hover:bg-rose-600 font-bold text-lg">Lanjutkan</button>
            <button type="button" id="cancel-button" class="mr-2 px-4 py-2 bg-gray-300 rounded-md hover:bg-gray-400 hidden">Cancel</button>
        </div>
    </div>

    {{-- boundary line --}}
    <div class="flex flex-row justify-center items-center w-full">
        <hr class="w-full my-0">
        <h1 class="p-4">atau</h1>
        <hr class="w-full my-0">
    </div>

    {{-- Other Method Login --}}
    <div class="flex flex-col gap-5">
        {{-- google --}}
        <div class="flex justify-center items-center w-full px-7 py-3 bg-white border border-black rounded-lg cursor-pointer hover:bg-gray-100">
            <div class="flex justify-start items-start w-fit">
                {{-- <i class="bi bi-google"></i> --}}
                <img src="{{ asset('images/icon-google.svg') }}" alt="babantu" class="w-5 h-5">
            </div>
            <div class="flex justify-center items-center w-full">
                <h1 class="font-bold">
                    Lanjutkan dengan Google
                </h1>
            </div>
            <div class=""></div>
        </div>
        {{-- facebook --}}
        <div class="flex justify-center items-center w-full px-7 py-3 bg-white border border-black rounded-lg cursor-pointer hover:bg-gray-100">
            <div class="flex justify-start items-start w-fit">
                {{-- <i class="bi bi-facebook"></i> --}}
                <img src="{{ asset('images/icon-facebook.svg') }}" alt="babantu" class="w-5 h-5">
            </div>
            <div class="flex justify-center items-center w-full">
                <h1 class="font-bold">
                    Lanjutkan dengan Facebook
                </h1>
            </div>
            <div class=""></div>
        </div>
        {{-- apple --}}
        <div class="flex justify-center items-center w-full px-7 py-3 bg-white border border-black rounded-lg cursor-pointer hover:bg-gray-100">
            <div class="flex justify-start items-start w-fit">
                {{-- <i class="bi bi-apple"></i> --}}
                <img src="{{ asset('images/icon-apple.svg') }}" alt="babantu" class="w-5 h-5">
            </div>
            <div class="flex justify-center items-center w-full">
                <h1 class="font-bold">
                    Lanjutkan dengan Apple
                </h1>
            </div>
            <div class=""></div>
        </div>
    </div>
</form>

<script>
    function formatPhoneNumber(input) {
        // Remove all non-digit characters
        let value = input.value.replace(/\D/g, '');
        
        // Auto-replace "08" with "628"
        if (value.startsWith('08')) {
            value = '8' + value.substring(2);
        }
        if (value.startsWith('628')) {
            value = '8' + value.substring(3);
        }
        
        // Update the input value
        input.value = value;

        const fullPhoneNumber = '62' + value;
        document.getElementById('phone').value = fullPhoneNumber;
    }
</script>