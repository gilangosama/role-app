{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($posts as $post)
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl">{{ $post->title }}</h2>
                    <p>by {{ $post->user->name }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout> --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Aplikasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- @foreach ($posts as $post)
                    @if ($post->user->id == Auth::user()->id)
                    <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl">{{ $post->title }}</h2>
                    <p>by {{ $post->user->name }}</p>
                    </div>
                    @endif
                    @endforeach --}}
                    
                <div class="relative overflow-x-auto sm:rounded-lg p-4">
                    <div class="flex justify-between">
                    {{-- <div class="pb-4 bg-white">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative mt-1">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 " aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for items">
                        </div>
                    </div> --}}
                    {{-- <div class="">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Aplikasi</button>
                         </div> --}}
                         {{-- <div class="p-6 text-gray-900">
                    Jumlah OPD yang terdaftar : <b>{{ $postCount }}</b>
                </div> --}}
                    </div>
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="p-4">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Aplikasi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b  hover:bg-gray-50 ">
                                @foreach ($posts as $key => $post)
                                <td class="w-4 p-4">
                                    {{$key + 1}}
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{$post->nama_apk}}
                                    <p class="text-[10px]">oleh {{ $post->user->nama_opd }}</p>
                                </th>
                                <td class="px-6 py-4">
                                    @if (Auth::user()->is_admin)
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('post.destroy', $post->id) }}" method="POST">
                                    {{-- <a href="" class="font-medium text-blue-600 hover:underline">Edit</a> --}}
                                    <a href="{{ route('post.show', $post->id) }}" class="font-medium text-grey-600 hover:underline">Lihat</a> 
                                    <a href="{{ route('post.edit', $post->id) }}" class="font-medium text-grey-600 hover:underline">Edit</a>
                                    @endif
                                    @csrf
                                    @method('DELETE')
                                    {{-- <a type="submit" class="font-medium text-red-600 hover:underline">Hapus</a> --}}
                                    <button type="submit">Hapus</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
