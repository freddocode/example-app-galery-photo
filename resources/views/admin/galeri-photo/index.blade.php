<x-app-layout>
    <title>{{ $pageTitle }} | {{ config('app.name', 'Laravel') }}</title>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    {{-- @foreach ($listPost as $item)
                        <p> {{ $item['title'] }}</p>
                    @endforeach --}}
                    {{-- cara pertama di-atas --}}

                    {{-- cara kedua --}}
                    {{-- TOMBOL --}}<br>
                    <button type="button"
                        class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <a href="{{ route('admin-create-galeri-photo') }}">
                            TAMBAH FOTO
                        </a>

                    </button>
                    {{-- END OF TOMBOL --}}
                    {{-- DISPLAY DATA --}}


                    <div class="mt-5 relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #
                                    <th scope="col" class="px-6 py-3">
                                        Nama Album
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Deskripsi
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Gambar
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kategori
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($listPost as $post)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $loop->iteration }}
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $post->title }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $post->description }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ __('BELUM ADA GAMBAR') }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $post->category }}
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a 
                                                href="{{ route('admin-edit-galeri-photo', [$post->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                Edit
                                            </a>
                                                @empty
                                            <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300"
                                                role="alert">
                                                <span class="font-medium">Warning alert!</span> GAK ADA USER!
                                            </div>
                                @endforelse

                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>






                    {{-- END OF DISPLAY DATA --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
