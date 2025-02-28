@if ($errors->any())
    <div class="flex justify-center items-center mt-1">
        <div class="bg-red-500 text-white font-bold text-sm rounded p-2 w-[85%] h-full">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

<!-- Modal Body -->
<form id="signup-form" action="{{ route('signup.register') }}" method="POST" class="mx-6 my-2 pt-3 pb-8 flex flex-col gap-2">
    @csrf
    <div class="flex flex-col gap-4">
        <!-- Nama Resmi -->
        <div>
            <div class="flex flex-col gap-2">
                <div class="flex flex-col gap-[6px]">
                    <label for="first_name" class="block text-sm font-medium text-gray-700">Nama resmi</label>
                    <input type="text" id="first_name" name="first_name" placeholder="Nama depan pada identitas" class="w-full border border-gray-300 rounded-lg focus:border-black focus:ring-0 focus:ring-black focus:outline-none px-4 py-2 text-lg">
                </div>
            </div>
        </div>

        <!-- Tanggal Lahir -->
        <div>
            <div class="flex flex-col gap-2">
                <div class="flex flex-col gap-[6px]">
                    <label for="dob" class="block text-sm font-medium text-gray-700">Tanggal lahir</label>
                    <input type="text" id="dob" name="dob" placeholder="Tanggal lahir" class="w-full border border-gray-300 rounded-lg focus:border-black focus:ring-0 focus:ring-black focus:outline-none px-4 py-2 text-lg" onfocus="this.type='date'" onblur="this.type='text'">
                </div>
            </div>
        </div>

        <!-- Info Kontak -->
        <div>
            <div class="flex flex-col gap-2">
                <div class="flex flex-col gap-[6px]">
                    <label for="email" class="block text-sm font-medium text-gray-700">Info kontak</label>
                    <input type="email" id="email" name="email" placeholder="Email" class="w-full border border-gray-300 rounded-lg focus:border-black focus:ring-0 focus:ring-black focus:outline-none px-4 py-2 text-lg">
                </div>
            </div>
        </div>

        <!-- Alamat -->
        <div class="hidden">
            <label for="address" class="block text-xs font-medium text-gray-700">Alamat</label>
            <textarea id="address" name="address" class="w-full border border-gray-300 rounded-lg focus:border-black focus:ring-0 focus:ring-black focus:outline-none px-4 py-2 text-lg"></textarea>
        </div>

        <!-- Nomor Telepon -->
        <div class="flex flex-col gap-4">
            <div class="flex flex-col gap-1">
                <label for="country" class="block text-sm font-medium text-gray-700">Negara/Wilayah</label>
                <div id="country" class="dropdown bg-gray-100 p-2 text-base border border-gray-300 rounded-lg pointer-events-none mt-1 px-4 py-[10px]">Indonesia (+62)</div>
            </div>
            <div class="flex flex-col gap-1">
                <!-- Phone Number Field -->
                <label for="phone" class="block text-sm font-medium text-gray-700">Nomor telepon</label>
                <div class="flex mt-1 w-full">
                    <span class="justify-center inline-flex items-center px-2 text-lg border border-gray-300 bg-gray-100 rounded-l-lg w-[12%] font-medium">+62</span>
                    <input type="tel" id="ex_phone_signup" name="ex_phone_signup" value="{{ old('ex-phone_signup') }}" class="w-[88%] border border-gray-300 rounded-r-lg focus:border-black focus:ring-0 focus:ring-black focus:outline-none px-4 py-[10px] text-lg" oninput="formatPhoneNumberSignUp(this)">
                    <input type="hidden" id="phone_signup" name="phone_signup">
                </div>

                {{-- error message --}}
                @error('phone_number')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Password -->
        <div class="relative flex flex-col gap-[6px]">
            <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
            <input type="password" name="password" id="l_password" class="mt-1 block w-full border border-gray-300 rounded-lg focus:border-black focus:ring-0 focus:ring-black focus:outline-none px-4 py-[10px] text-lg pr-10">
            <i class="bi bi-eye-slash absolute top-[35px] px-2 py-[6px] right-4 cursor-pointer text-xl text-gray-500" id="l_togglePassword"></i>
        </div>
        <!-- Confirm Password -->
        <div class="relative flex flex-col gap-[6px]">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Kata Sandi</label>
            <input type="password" name="password_confirmation" id="s_password_confirmation" class="mt-1 block w-full border border-gray-300 rounded-lg focus:border-black focus:ring-0 focus:ring-black focus:outline-none px-4 py-[10px] text-lg pr-10">
            <i class="bi bi-eye-slash absolute top-[35px] px-2 py-[6px] right-4 cursor-pointer text-xl text-gray-500" id="s_toggleConfirmPassword"></i>
        </div>

        <hr>

        <!-- Agreement -->
        <p class="text-gray-600 text-xs text-center">
            Dengan memilih <b>Setujui dan lanjutkan</b>, saya menyetujui Ketentuan Layanan, Ketentuan Layanan Pembayaran, dan Kebijakan Non-diskriminasi layanan ini dan menerima Kebijakan Privasi.
        </p>

        <!-- Submit Button -->
        <button type="submit" class="w-full px-4 py-3 bg-[#F33661] text-white rounded-lg hover:bg-rose-600 font-bold text-lg">Setujui dan lanjutkan</button>
        <button type="button" id="cancel-button" class="mr-2 px-4 py-2 bg-gray-300 rounded-md hover:bg-gray-400 hidden">Cancel</button>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
            var togglePassword = document.getElementById('l_togglePassword');
            var passwordInput = document.getElementById('l_password');
            var toggleConfirmPassword = document.getElementById('s_toggleConfirmPassword');
            var confirmPasswordInput = document.getElementById('s_password_confirmation');

            togglePassword.addEventListener('click', function() {
                // Toggle the type attribute
                var type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);

                // Toggle the icon
                this.classList.toggle('bi-eye');
                this.classList.toggle('bi-eye-slash');
            });

            toggleConfirmPassword.addEventListener('click', function() {
                // Toggle the type attribute
                var type = confirmPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                confirmPasswordInput.setAttribute('type', type);

                // Toggle the icon
                this.classList.toggle('bi-eye');
                this.classList.toggle('bi-eye-slash');
            });
    });


    // validation phone number
    function formatPhoneNumberSignUp(input) {
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

        // Store the full value (with country code) in a hidden field
        const fullPhoneNumber = '62' + value;
        document.getElementById('phone_signup').value = fullPhoneNumber;
    }
</script>