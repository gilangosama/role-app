<x-guest-layout>
    <div class="pb-4">
        <img style="max-width:300px; max-height:300px" class="mx-auto d-block" src="{{ url('assets/img/logo diskominfo.png')}}" alt="Diskominfo Kota Sukabumi">
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Nama OPD -->
        <div class="mt-4">
            <x-input-label for="nama_opd" :value="__('Nama OPD')" />
            <select id="nama_opd" name="nama_opd" class="form-select mt-1 block w-full z-10 bg-white divide-y divide-gray-100 rounded-lg shadow">
                <option value="kecamatan-cikole">Kecamatan Cikole</option>
                <option value="kecamatan-cibereum">Kecamatan Cibereum</option>
                <option value="Kecamatan Citamiang">Kecamatan Citamiang</option>
                <option value="Kecamatan Lembursitu">Kecamatan Lembursitu</option>
                <option value="BPBD">BPBD</option>
                <option value="RSUD Syamsudin">RSUD Syamsudin </option>
                <option value="Al-Mulk">Al-Mulk</option>
                <option value="Bagian Hukum">Bagian Hukum</option>
                <option value="BKPSDM">BKPSDM</option>
                <option value="Dalduk">Dalduk</option>
                <option value="Dinas P&K">Dinas P&K</option>
                <option value="Dinas PU">Dinas PU</option>
                <option value="Dinas Sosial">Dinas Sosial</option>
                <option value="Dsihub">Dsihub</option>
                <option value="Diskominfo">Diskominfo</option>
                <option value="Disnake">Disnake</option>
                <option value="Disporapar">Disporapar</option>
                <option value="DKP3">DKP3</option>
                <option value="DPMPTSP">DPMPTSP</option>
                <option value="Dukcapil">Dukcapil</option>
                <option value="Kecamatan Baros">Kecamatan Baros</option>
                <option value="SETDA">SETDA</option>
                <option value="Diskumindag">Diskumindag</option>
                <option value="Ortala">Ortala</option>
                <option value="Perumda BPR">Perumda BPR</option>
            </select>
            <x-input-error :messages="$errors->get('nama_opd')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Sudah Punya Akun?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Daftar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
