<!-- Modal Body -->
<form id="signup-form" action="#" method="POST" class="mx-6 my-2 pt-3 pb-8 flex flex-col gap-2">
    @csrf

    <div class="flex flex-col gap-8">
        <div class="flex flex-col gap-4">
            <div>
                <!-- Phone Number Field -->
                <label for="phone" class="block text-sm font-medium text-gray-700">Nomor telepon</label>
                <div class="flex mt-1 w-full">
                    <span class="justify-center inline-flex items-center px-2 text-lg border border-gray-300 bg-gray-100 rounded-l-lg w-[12%] font-medium">+62</span>
                    <input type="tel" id="phone" name="phone" class="w-[88%] border border-gray-300 rounded-r-lg focus:border-black focus:ring-0 focus:ring-black focus:outline-none px-4 py-[10px] text-lg" value="{{ $phone }}">
                </div>
            </div>
    
            <!-- Password -->
            <div class="relative flex flex-col gap-[2px]">
                <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
                <input type="password" name="password" id="password" class="mt-1 block w-full border border-gray-300 rounded-lg focus:border-black focus:ring-0 focus:ring-black focus:outline-none px-4 py-[10px] text-lg pr-10">
                <i class="bi bi-eye-slash absolute top-[35px] px-2 py-[6px] right-4 cursor-pointer text-xl text-gray-500" id="togglePassword"></i>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full px-4 py-3 bg-[#F33661] text-white rounded-lg hover:bg-rose-600 font-bold text-lg">Masuk</button>
        <button type="button" id="cancel-button" class="mr-2 px-4 py-2 bg-gray-300 rounded-md hover:bg-gray-400 hidden">Cancel</button>
    </div>
</form>


<!-- JavaScript for toggling password visibility -->
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
</script>
