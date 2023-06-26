<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __( $post->nama_apk) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p><span class="font-semibold">Nama OPD :</span>  {{ __( $post->user->nama_opd) }}</p>  
                    <div class="flex gap-10">
                        <p><span class="font-semibold">Nama Aplikasi :</span>  {{ __( $post->nama_apk) }}</p>  
                        <p><span class="font-semibold">Versi :</span>  {{ __( $post->versi) }}</p>  
                    </div>
                    <div class="pt-1">
                        <p class="font-semibold">SK Walikota / Kepala Unit Kerja yang berkaitan dengan aplikasi :</p>
                        <div class="flex gap-10">
                        <p><span class="font-semibold">Nomor :</span>  {{ __( $post->nomor_sk) }}</p>  
                        <p><span class="font-semibold">Tahun :</span>  {{ __( $post->tahun_sk) }}</p>  
                        </div>      
                    </div>
                    <p><span class="font-semibold pt-1">Kondisi :</span>  {{ __( $post->kondisi) }}</p>  
                    <p><span class="font-semibold pt-1">Alasan :</span>  {{ __( $post->alasan) }}</p>  
                    <p><span class="font-semibold pt-1">Nama Admin :</span>  {{ __( $post->nama_admin) }}</p>  
                    <p><span class="font-semibold pt-1">Nomor WhatsApp :</span>  {{ __( $post->nomor_wa) }}</p>  
                    <p><span class="font-semibold pt-1">Email :</span>  {{ __( $post->email) }}</p>  
                    <p><span class="font-semibold pt-1">Jumlah Pengguna :</span>  {{ __( $post->jumlah_pengguna) }}</p>  
                    <p><span class="font-semibold pt-1">Alamat Web :</span>  {{ __( $post->alamat_web) }}</p>  
                    <p><span class="font-semibold pt-1">Jenis Layanan :</span>  {{ __( $post->jenis_layanan) }}</p>  
                    <p><span class="font-semibold pt-1">Uraian Singkat Aplikasi dan Manfaatnya :</span><br>  {{ __( $post->uraian) }}</p>  
                    <p><span class="font-semibold pt-1">Apakah aplikasi ini memiliki dokumen Proses Bisnis atau SOP yang berkaitan : </span><br> </p>  
                    <p><span class="font-semibold pt-1">Kepemilikan Aplikasi :</span> {{ __( $post->pemilik) }}</p>  
                    <p><span class="font-semibold pt-1">Tampilan layar (screen shoot) aplikasi : </span><br>  </p>  
                    <p><span class="font-semibold pt-1">Link Tampilan layar (screen shoot) aplikasi : </span><br>{{ __( $post->video_tampilan) }}  </p>  
                    <p><span class="font-semibold pt-1">Apakah diadakan pelatihan untuk penggunaan aplikasi :</span>  {{ __( $post->pelatihan) }}</p>  
                    <p><span class="font-semibold pt-1">Rapat Evaluasi yang berkaitan dengan aplikasi : </span><br>  </p>  
                    <p><span class="font-semibold pt-1">Apakah ada pihak yang dapat dijadikan tempat konsultasi jika suatu saat terjadi error / bug : </span><br> {{ __( $post->bug) }} </p>  
                    <p><span class="font-semibold pt-1">Apakah ada kendala dalam penggunaan/ pengeloaan aplikasi : </span><br>  {{ __( $post->kendala) }}</p>  
                    
               </div>
            </div>
        </div>
</x-app-layout>