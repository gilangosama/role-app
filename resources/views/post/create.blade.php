<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="{{ route('store') }}">
            @csrf

            <!-- Nama APK -->
            <div class="flex gap-5">
            <div class="w-full">
                <x-input-label for="nama_apk" :value="__('Nama Aplikasi')" />
                <x-text-input id="nama_apk" class="block mt-1 w-full" type="text" name="nama_apk" :value="old('nama_apk')" required autofocus />
            </div>

            <div class="w-full">
                <x-input-label for="versi" :value="__('Versi')" />
                <x-text-input id="versi" class="block mt-1 w-full" type="text" name="versi" :value="old('versi')" required autofocus />
            </div>
            </div>

            <div class="my-3">
                <x-input-label for="SK" :value="__('SK Walikota / Kepala Unit Kerja yang berkaitan dengan aplikasi :')"/>
                <div class="flex gap-5">
                    <div class="w-full">
                        <x-input-label for="nomor_sk" :value="__('Nomor')" />
                        <x-text-input id="nomor_sk" class="block mt-1 w-full" type="text" name="nomor_sk" :value="old('nomor_sk')" required autofocus />
                    </div>

                    <div class="w-full">
                        <x-input-label for="tahun_sk" :value="__('Tahun')" />
                        <x-text-input id="tahun_sk" class="block mt-1 w-full" type="text" name="tahun_sk" :value="old('tahun_sk')" required autofocus />
                    </div>
                </div>
            </div>

            <x-input-label for="kondisi" :value="__('Kondisi')" />
            <div>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio" name="status" value="aktif" id="status-aktif">
                    <span class="ml-2">Aktif</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio" name="status" value="tidak_aktif" id="status-tidak-aktif">
                    <span class="ml-2">Tidak Aktif</span>
                </label>
            </div>
            
            <div id="alasan-tidak-aktif-container" class="hidden">
                <label for="alasan-tidak-aktif" class="block mt-4">
                    Alasan Tidak Aktif:
                </label>
                <textarea id="alasan-tidak-aktif" name="alasan_tidak_aktif" class="form-textarea mt-1 block w-full"></textarea>
            </div>
            

            <!-- Body -->
            <div class="mt-4">
                <x-input-label for="body" :value="__('Versi')" />
                <x-text-input id="body" class="block mt-1 w-full" type="text" name="body" :value="old('body')" required />
            </div>
  
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('dashboard') }}">
                    	{{ __('Cancel ?') }}
                </a>

                <x-primary-button class="ml-4">
                    	{{ __('Submit') }}
                </x-primary-button>
            	</div>
        	</form>
               </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const statusAktif = document.getElementById('status-aktif');
            const statusTidakAktif = document.getElementById('status-tidak-aktif');
            const alasanTidakAktifContainer = document.getElementById('alasan-tidak-aktif-container');
            const alasanTidakAktif = document.getElementById('alasan-tidak-aktif');
    
            function toggleAlasanTidakAktif() {
                if (statusTidakAktif.checked) {
                    alasanTidakAktifContainer.classList.remove('hidden');
                    alasanTidakAktif.required = true;
                } else {
                    alasanTidakAktifContainer.classList.add('hidden');
                    alasanTidakAktif.required = false;
                }
            }
    
            statusAktif.addEventListener('change', toggleAlasanTidakAktif);
            statusTidakAktif.addEventListener('change', toggleAlasanTidakAktif);
    
            // Saat halaman dimuat, periksa status radio button
            toggleAlasanTidakAktif();
        });
    </script>
    
</x-app-layout>