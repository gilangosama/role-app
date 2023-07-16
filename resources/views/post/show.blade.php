<x-app-layout>
    <x-slot name="header">
        <h1 class="mb-3 text-center font-semibold text-xl text-gray-800 leading-tight">Formulir Pendataan Aplikasi
            {{-- {{ __( $post->nama_apk) }} --}}
        </h1>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">                  
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full h-80 block text-center text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama OPD :
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ __( $post->user->nama_opd) }}
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Nama Aplikasi :
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->nama_apk) }}
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Versi :
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->versi) }}
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    SK Walikota
                </th>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Nomor
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->nomor_sk) }}
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Tahun 
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->tahun_sk) }}
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Kondisi
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->kondisi) }}
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Alasan
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->alasan) }}
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Nama Admin
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->nama_admin) }}
                </td>
            </tr>
            <tr>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Nomor WhatsApp
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->nomor_wa) }}
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Email
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->email) }}
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Jumlah Pengguna
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->jumlah_pengguna) }}
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Alamat Web
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->alamat_web) }}
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Jenis Layanan
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->jenis_layanan) }}
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Uraian
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->uraian) }}
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Dokumen Proses Bisnis / SOP
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->SOP) }}
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Kepemilikan Aplikasi
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->pemilik) }}
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Tampilan Layar
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->tampilan) }}
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Link Tampilan Layar
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->video_tampilan) }}
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Pelatihan untuk penggunaan aplikasi
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->pelatihan) }}
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Rapat Evaluasi
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->rapat) }}
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Tempat konsultasi jika terjadi error / bug 
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->bug) }}
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    kendala dalam penggunaan aplikasi 
                </th>
                <td class="px-6 py-4">
                    {{ __( $post->kendala) }}
                </td>
            </tr>

            


        </tbody>
    </table>
</div>

                    {{-- <p><span class="font-semibold">Nama OPD :</span>  {{ __( $post->user->nama_opd) }}</p>  
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
        </div> --}}
</x-app-layout>

