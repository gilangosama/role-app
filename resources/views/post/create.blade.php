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
                <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
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

            <x-input-label for="kondisi" :value="__('Kondisi')" required/>
            <div>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio" name="kondisi" value="aktif" id="status-aktif">
                    <span class="ml-2">Aktif</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio" name="kondisi" value="tidak_aktif" id="status-tidak-aktif">
                    <span class="ml-2">Tidak Aktif</span>
                </label>
            </div>
            
            <div id="alasan-tidak-aktif-container" class="hidden">
                <label for="alasan-tidak-aktif" class="block mt-4">
                    Alasan Tidak Aktif:
                </label>
                <textarea id="alasan-tidak-aktif" name="alasan" class="form-textarea mt-1 block w-full"></textarea>
            </div>
            
            <div class="w-full my-3">
                <x-input-label for="nama_admin" :value="__('Nama Admin')" />
                <x-text-input id="nama_admin" class="block mt-1 w-full" type="text" name="nama_admin" :value="old('nama_admin')" required autofocus />
            </div>

            <div class="w-full my-3">
                <x-input-label for="nomor_wa" :value="__('Nomor WhatsApp')" />
                <x-text-input id="nomor_wa" class="block mt-1 w-full" type="text" name="nomor_wa" :value="old('nomor_wa')" required autofocus />
            </div>

            <div class="w-full my-3">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="w-full my-3">
                <x-input-label for="jumlah_pengguna" :value="__('Jumlah Pengguna')" />
                <x-text-input id="jumlah_pengguna" class="block mt-1 w-full" type="number" name="jumlah_pengguna" :value="old('jumlah_pengguna')" required autofocus />
            </div>

            <div class="w-full my-3">
                <x-input-label for="alamat_web" :value="__('Alamat Web')" />
                <x-text-input id="alamat_web" class="block mt-1 w-full" type="text" name="alamat_web" :value="old('alamat_web')" required autofocus />
            </div>

            <div class="mb-3 flex flex-col">
                <label for="jenis_layanan" class="form-label">Jenis Layanan</label>
                <select name="jenis_layanan" class="form-select">
                    <option value="Untuk Pemerintahan(G2G)">Untuk Pemerintahan(G2G)</option>
                    <option value="Untuk Pelaku Usaha(G2B)">Untuk Pelaku Usaha(G2B)</option>
                    <option value="Untuk Masyarakat Umum (G2C)">Untuk Masyarakat Umum (G2C)</option>
                    <option value="Untuk Pegawai ASN dan Non ASN (G2E)">Untuk Pegawai ASN dan Non ASN (G2E)</option>
                </select>
            </div>

            <div class="flex flex-col">
                <label for="uraian" class="block mb-2 text-sm font-medium text-gray-900">Uraian Singkat Aplikasi dan Manfaatnya :</label>
                <textarea id="uraian" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Uraian Singkat Aplikasi dan Manfaatnya" name="uraian"></textarea>
            </div>

            <div class="w-full my-3">
                <x-input-label for="sop" :value="__('Apakah aplikasi ini memiliki dokumen Proses Bisnis atau SOP yang berkaitan ? (lampirkan
                jika ada)')" />
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none" aria-describedby="sop" id="file_sop" type="file" name="sop" accept=".pdf,.doc,.docx">
                <p class="mt-1 text-sm text-gray-500" id="sop">PDF,DOC,DOCX (MAX. 2Mb).</p>
            </div>

            <div class="mb-3 flex flex-col">
                <label for="pemilik" class="form-label">Kepemilikan Aplikasi</label>
                <select name="pemilik" class="form-select">
                    <option value="Pusat">Pusat</option>
                    <option value="Provinsi">Provinsi</option>
                    <option value="Kota">Kota</option>
                </select>
            </div>

            <div class="w-full my-3">
                <x-input-label for="tampilan" :value="__('Tampilan layar (screen shoot) aplikasi : (halaman awal, proses yang terjadi, contoh keluaran)')" />
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none" aria-describedby="tampilan" id="file_sop" type="file" name="tampilan" accept=".pdf,.doc,.docx">
                <p class="mt-1 text-sm text-gray-500" id="tampilan">PDF,DOC,DOCX (MAX. 2Mb).</p>
            </div>

            <div class="w-full my-3">
                <x-input-label for="pelatihan" :value="__('Apakah diadakan pelatihan untuk penggunaan aplikasi ?(jika ya sebutkan tahun dan jumlah peserta)')" />
                <x-text-input id="pelatihan" class="block mt-1 w-full" type="text" name="pelatihan" :value="old('pelatihan')" autofocus />
            </div>

            <div class="w-full my-3">
                <x-input-label for="rapat" :value="__('Rapat Evaluasi yang berkaitan dengan aplikasi: (Foto rapat, notulen, daftar hadir)')" />
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none" aria-describedby="rapat" id="file_sop" type="file" name="rapat" accept=".pdf,.doc,.docx">
                <p class="mt-1 text-sm text-gray-500" id="rapat">PDF,DOC,DOCX (MAX. 2Mb).</p>
            </div>
            
            <div class="w-full my-3">
                <x-input-label for="bug" :value="__('Apakah ada pihak yang dapat dijadikan tempat konsultasi jika suatu saat terjadi error / bug?')" />
                <x-text-input id="bug" class="block mt-1 w-full" type="text" name="bug" :value="old('bug')" autofocus />
            </div>

            <div class="w-full my-3">
                <x-input-label for="kendala" :value="__('Apakah ada kendala dalam penggunaan/ pengeloaan aplikasi ?')" />
                <x-text-input id="kendala" class="block mt-1 w-full" type="text" name="kendala" :value="old('kendala')" autofocus />
            </div>

            <!-- Body -->
            {{-- <div class="mt-4">
                <x-input-label for="body" :value="__('Versi')" />
                <x-text-input id="body" class="block mt-1 w-full" type="text" name="body" :value="old('body')" required />
            </div> --}}
  
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('dashboard') }}">
                    	{{ __('Cancel ?') }}
                </a>

                <x-primary-button class="ml-4" href="{{ route('dashboard') }}">
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