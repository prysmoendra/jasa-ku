{{-- @if ($errors->any())
    <div class="flex justify-center items-center mt-1">
        <div class="bg-red-500 text-white font-bold text-sm rounded p-2 w-[85%] h-full">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif --}}

{{-- @if (session('error'))
    <div class="flex justify-center items-center mt-1">
        <div class="bg-red-500 text-white font-bold text-sm rounded p-2 w-[85%] h-full">
            {{ session('error') }}
        </div>
    </div>
@endif --}}

<!-- Modal Body -->
<form id="signup-form" action="{{ route('login.authenticate') }}" method="POST" class="mx-6 my-2 pt-3 pb-8 flex flex-col gap-2">
    @csrf

    <div class="flex flex-col gap-8">
        <div class="flex flex-col gap-4">
            <div>
                <!-- Phone Number Field -->
                <label for="phone" class="block text-sm font-medium text-gray-700">Nomor telepon</label>
                <div class="flex mt-1 w-full">
                    <span class="justify-center inline-flex items-center px-2 text-lg border border-gray-300 bg-gray-100 rounded-l-lg w-[12%] font-medium">+62</span>
                    <input type="tel" id="show_phone" name="show_phone" class="w-[88%] border border-gray-300 rounded-r-lg focus:border-black focus:ring-0 focus:ring-black focus:outline-none px-4 py-[10px] text-lg" value="{{ $phone }}" readonly oninput="formatPhoneDisplay(this)">
                    <input type="hidden" id="phone_login" name="phone_login" value="{{ $phone }}">
                </div>
            </div>
    
            <!-- Password -->
            <div class="relative flex flex-col gap-[2px]">
                <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
                <input type="password" name="password_login" id="password" class="mt-1 block w-full border border-gray-300 rounded-lg focus:border-black focus:ring-0 focus:ring-black focus:outline-none px-4 py-[10px] text-lg pr-10">
                <i class="bi bi-eye-slash absolute top-[32px] px-2 py-[6px] right-4 cursor-pointer text-xl text-gray-500" id="togglePassword"></i>

                @error('password')
                    <span class="font-bold text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror

            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full px-4 py-3 bg-[#F33661] text-white rounded-lg hover:bg-rose-600 font-bold text-lg">Masuk</button>
        <button type="button" id="cancel-button" class="mr-2 px-4 py-2 bg-gray-300 rounded-md hover:bg-gray-400 hidden">Cancel</button>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var togglePassword = document.getElementById('togglePassword');
        var passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            // Toggle the type attribute
            var type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle the icon
            this.classList.toggle('bi-eye');
            this.classList.toggle('bi-eye-slash');
        });
    });


    function formatPhoneDisplay(input) {
        // Get the raw input value
        let value = input.value.replace(/\D/g, '');
        
        // Store original value for form submission
        let actualValue = value;
        
        // Remove country code for display
        if (value.startsWith('62')) {
            value = value.substring(2);
        }
        if (value.startsWith('0')) {
            value = value.substring(1);
        }
        
        // Update displayed value
        input.value = value;
        
        // Store actual value with country code in hidden field
        // document.getElementById('phone_login').value = '62' + value;
    }

    // Initialize when modal opens
    document.addEventListener('DOMContentLoaded', function() {
        const phoneInput = document.getElementById('show_phone');
        if(phoneInput.value) {
            formatPhoneDisplay(phoneInput);
        }
    });
</script>