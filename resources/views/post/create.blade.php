<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambahkan Data Aplikasi') }}
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
                <x-input-error class="mt-2" :messages="$errors->get('nama_apk')" />
            </div>

            <div class="w-full">
                <x-input-label for="versi" :value="__('Versi')" />
                <x-text-input id="versi" class="block mt-1 w-full" type="text" name="versi" :value="old('versi')" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('versi')" />
            </div>
            </div>

            <div class="my-3">
                <x-input-label for="SK" :value="__('SK Walikota / Kepala Unit Kerja yang berkaitan dengan aplikasi :')"/>
                <div class="flex gap-5">
                    <div class="w-full">
                        <x-input-label for="nomor_sk" :value="__('Nomor')" />
                        <x-text-input id="nomor_sk" class="block mt-1 w-full" type="text" name="nomor_sk" :value="old('nomor_sk')" required autofocus />
                        <x-input-error class="mt-2" :messages="$errors->get('nomor_sk')" />
                    </div>

                    <div class="w-full">
                        <x-input-label for="tahun_sk" :value="__('Tahun')" />
                        <x-text-input id="tahun_sk" class="block mt-1 w-full" type="text" name="tahun_sk" :value="old('tahun_sk')" required autofocus />
                        <x-input-error class="mt-2" :messages="$errors->get('tahun_sk')" />
                    </div>
                </div>
            </div>

            <x-input-label for="kondisi" :value="__('Kondisi')" required/>
            <div>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio" name="kondisi" value="aktif" id="status-aktif">
                    <span class="ml-2 block font-medium text-sm text-gray-700">Aktif</span>
                    <x-input-error class="mt-2" :messages="$errors->get('kondisi')" />
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio" name="kondisi" value="tidak_aktif" id="status-tidak-aktif">
                    <span class="ml-2 block font-medium text-sm text-gray-700">Tidak Aktif</span>
                    <x-input-error class="mt-2" :messages="$errors->get('kondisi')" />
                </label>
            </div>
            
            <div id="alasan-tidak-aktif-container" class="hidden">
                <label for="alasan-tidak-aktif" class="block mt-4">
                    Alasan Tidak Aktif:
                </label>
                <textarea id="alasan-tidak-aktif" name="alasan" class="form-textarea mt-1 block w-full"></textarea>
                <x-input-error class="mt-2" :messages="$errors->get('alasan')" />
            </div>
            
            <div class="w-full my-3">
                <x-input-label for="nama_admin" :value="__('Nama Admin')" />
                <x-text-input id="nama_admin" class="block mt-1 w-full" type="text" name="nama_admin" :value="old('nama_admin')" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('nama_admin')" />
            </div>

            <div class="w-full my-3">
                <x-input-label for="nomor_wa" :value="__('Nomor WhatsApp')" />
                <x-text-input id="nomor_wa" class="block mt-1 w-full" type="text" name="nomor_wa" :value="old('nomor_wa')" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('nomor_wa')" />
            </div>

            <div class="w-full my-3">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>

            <div class="w-full my-3">
                <x-input-label for="jumlah_pengguna" :value="__('Jumlah Pengguna')" />
                <x-text-input id="jumlah_pengguna" class="block mt-1 w-full" type="number" name="jumlah_pengguna" :value="old('jumlah_pengguna')" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('jumlah_pengguna')" />
            </div>

            <div class="w-full my-3">
                <x-input-label for="alamat_web" :value="__('Alamat Web')" />
                <x-text-input id="alamat_web" class="block mt-1 w-full" type="text" name="alamat_web" :value="old('alamat_web')" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('alamat_web')" />
            </div>

            <div class="mb-3 flex flex-col">
                <label for="jenis_layanan" class="block font-medium text-sm text-gray-700">Jenis Layanan</label>
                <select name="jenis_layanan" class="form-select border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-[12px]">
                    <option value="Untuk Pemerintahan(G2G)">Untuk Pemerintahan(G2G)</option>
                    <option value="Untuk Pelaku Usaha(G2B)">Untuk Pelaku Usaha(G2B)</option>
                    <option value="Untuk Masyarakat Umum (G2C)">Untuk Masyarakat Umum (G2C)</option>
                    <option value="Untuk Pegawai ASN dan Non ASN (G2E)">Untuk Pegawai ASN dan Non ASN (G2E)</option>

                </select>
                <x-input-error class="mt-2" :messages="$errors->get('jenis_layanan')" />
            </div>

            <div class="flex flex-col">
                <label for="uraian" class="block font-medium text-sm text-gray-700">Uraian Singkat Aplikasi dan Manfaatnya :</label>
                <textarea id="uraian" rows="4" class="block p-2.5 w-full text-[12px] text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Uraian Singkat Aplikasi dan Manfaatnya" name="uraian" required></textarea>
                <x-input-error class="mt-2" :messages="$errors->get('uraian')" />
            </div>

            <div class="w-full my-3">
                <x-input-label for="sop" :value="__('Apakah aplikasi ini memiliki dokumen Proses Bisnis atau SOP yang berkaitan ? (lampirkan
                jika ada)')" />
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none" aria-describedby="sop" id="file_sop" type="file" name="sop" accept=".pdf,.doc,.docx">
                <p class="mt-1 text-[10px] text-gray-500" id="sop">PDF,DOC,DOCX (MAX.5Mb). Contoh Format Nama File : Dokumen SOP_Diskominfo.pdf</p>
                <x-input-error class="mt-2" :messages="$errors->get('sop')" />
            </div>

            <div class="mb-3 flex flex-col">
                <label for="pemilik" class="block font-medium text-sm text-gray-700">Kepemilikan Aplikasi</label>
                <select name="pemilik" class="form-select form-select border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-[12px]">
                    <option value="Pusat">Pusat</option>
                    <option value="Provinsi">Provinsi</option>
                    <option value="Kota">Kota</option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('pemilik')" />
            </div>

            <div class="w-full my-3">
                <x-input-label for="tampilan" :value="__('Tampilan layar (screen shoot) aplikasi : (halaman awal, proses yang terjadi, contoh keluaran)')" />
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none" aria-describedby="tampilan" id="file_sop" type="file" name="tampilan" accept=".pdf,.doc,.docx">
                <p class="mt-1 text-[10px] text-gray-500" id="tampilan">PDF,DOC,DOCX (MAX.5Mb). Contoh Format Nama File : tampilan layar_Diskominfo.pdf</p>
                <x-input-error class="mt-2" :messages="$errors->get('tampilan')" />

                <x-text-input id="video_tampilan" class="block mt-1 w-full text-[12px]" type="text" name="video_tampilan" :value="old('video_tampilan')" placeholder="Masukan Link Cloud Drive berupa Video Tampilan Aplikasi, Jika ada" autofocus /> 
                <x-input-error class="mt-2" :messages="$errors->get('video_tampilan')" />
            </div>

            <div class="w-full my-3">
                <x-input-label for="pelatihan" :value="__('Apakah diadakan pelatihan untuk penggunaan aplikasi ?(jika ya sebutkan tahun dan jumlah peserta)')" />
                <x-text-input id="pelatihan" class="block mt-1 w-full" type="text" name="pelatihan" :value="old('pelatihan')" autofocus /> 
                <x-input-error class="mt-2" :messages="$errors->get('pelatihan')" />
            </div>

            <div class="w-full my-3">
                <x-input-label for="rapat" :value="__('Rapat Evaluasi yang berkaitan dengan aplikasi: (Foto rapat, notulen, daftar hadir)')" />
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none" aria-describedby="rapat" id="file_sop" type="file" name="rapat" accept=".pdf,.doc,.docx">
                <p class="mt-1 text-[10px] text-gray-500" id="rapat">PDF,DOC,DOCX (MAX.5Mb). Contoh Format Nama File : Foto Rapat_Diskominfo.pdf</p>
                <x-input-error class="mt-2" :messages="$errors->get('rapat')" />
            </div>
            
            <div class="w-full my-3">
                <x-input-label for="bug" :value="__('Apakah ada pihak yang dapat dijadikan tempat konsultasi jika suatu saat terjadi error / bug?')" />
                <x-text-input id="bug" class="block mt-1 w-full" type="text" name="bug" :value="old('bug')" autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('bug')" />
            </div>

            <div class="w-full my-3">
                <x-input-label for="kendala" :value="__('Apakah ada kendala dalam penggunaan/ pengeloaan aplikasi ?')" />
                <x-text-input id="kendala" class="block mt-1 w-full" type="text" name="kendala" :value="old('kendala')" autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('kendala')" />
            </div>

                {{-- <div class="text-sm ">
                    <a href="https://drive.google.com/drive/folders/1msYywxDO80TKhmk3o0RfG9TRg7bn2yon?usp=sharing" class="flex items-center font-sans teks-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
                Tambah Data lain</a>
                </div> --}}

            <!-- Body -->
            {{-- <div class="mt-4">
                <x-input-label for="body" :value="__('Versi')" />
                <x-text-input id="body" class="block mt-1 w-full" type="text" name="body" :value="old('body')" required />
            </div> --}}
  
            <div class="flex items-center justify-end mt-4">
                <a class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" href="{{ route('dashboard') }}">
                    	{{ __('Cencel') }}
                </a>

                <x-primary-button class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" href="{{ route('dashboard') }}">
                    	{{ __('Submit') }}
                </x-primary-button>
            	</div>
        	</form>
               </div>
            </div>
            {{-- {{ $posts->links() }} --}}
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