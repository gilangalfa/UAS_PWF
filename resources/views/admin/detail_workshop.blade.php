<x-admin.layout>

    {{-- Headline --}}
    <header>

        {{-- Hero image --}}
        <section class="shadow-md">
            <img class="border-b-4 border-[#EAD8B1] overflow-" src="{{ asset('assets/img/hero.jpg') }}" alt="">
        </section>

        {{-- Headline Content --}}
        <section class="pb-20 border-b-[1px] border-gray-500 flex justify-between mt-6 h-fit w-3/4 m-auto mb-12">

            <section class="">
                <span class="text-sm text-gray-500 border-[1px] border-gray-500">Workshop</span>
                <h1 class="text-4xl ">{{$workshop->name}}</h1>
                <p class="mb-3 text-sm font-normal text-gray-500">Diselenggarakan oleh: Komunitas Pangkalan Besi</p>
            </section>
    
            <section class="text-center">
                <h4>Terbuka Hingga:</h4>
                <h2 class="font-bold mb-4">{{ Carbon\Carbon::parse($workshop->open_until)->format('j F, o')}}</h2>
    
                <h4>Sisa Kuota:</h4>
                <h2 class="font-bold mb-4">{{ $workshop->max_participants - $workshop->current_participants }}</h2>
            </section>
        </section>

    </header>
    
    {{-- Main Content --}}
    <article class="mt-6 h-fit w-3/4 m-auto mb-12 flex justify-between">

        {{-- Description --}}
        <section class="max-w-2xl flex flex-col gap-6">
            <section>
                <h2 class="text-3xl">Deskripsi</h2>
                <img class="my-2" src="{{ asset('assets/img/event.jpg') }}" alt="">
                <p class="font-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis facere quisquam harum veniam illo consectetur est. Sequi fuga iure natus dolorem ut, accusamus odit eaque labore eveniet temporibus iusto. Necessitatibus nam suscipit veniam perspiciatis dolorum ipsa rerum? Ipsum dolor ullam asperiores sint totam iure necessitatibus sit. Suscipit cum veniam incidunt ea eos eveniet, dolorem ducimus facilis molestias, sunt, sequi sint architecto quibusdam aut qui quas voluptatibus odio fugit fugiat laboriosam?</p>
            </section>

            <section>
                <h2 class="text-3xl mb-4">Peserta yang bisa mendaftar</h2>
                <ul class="list-disc px-8 font-light">
                    @forelse ($requirements as $requirement)
                        <li>{{$requirement->name}}</li>
                    @empty
                        <li>Tidak membutuhkan persyaratan</li>
                    @endforelse
                </ul>
            </section>   
        </section>

        {{-- Aside --}}
        <aside class="w-96 flex flex-col gap-12">

            {{-- Jadwal Pelaksanaan --}}
            <section class="flex flex-col gap-2">
                <h2 class="text-3xl font-[350]">Jadwal Pelaksanaan</h2>
                <table class="font-light">
                    <tr>
                        <td>Mulai</td>
                        <td class="font-bold">: {{ Carbon\Carbon::parse($workshop->start_time)->format('j F o') }}</td>
                        <td >{{ Carbon\Carbon::parse($workshop->start_time)->format(' H:i') }}</td>
                    </tr>
                    <tr>
                        <td>Selesai</td>
                        <td class="font-bold">: {{ Carbon\Carbon::parse($workshop->end_time)->format('j F o') }}</td>
                        <td >{{ Carbon\Carbon::parse($workshop->end_time)->format(' H:i') }}</td>
                    </tr>
                </table>
            </section>

            {{-- Lokasi --}}
            <section class="flex flex-col gap-2">
                <h2 class="text-3xl font-[350]">Lokasi Acara</h2>
                <p class="font-light">{{$workshop->venue}}</p>
            </section>
        </aside>   

    </article>

    {{-- Table --}}
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12 mb-12">
        <div class="bg-white dark:bg-gray-800 relative overflow-hidden shadow-lg border-2">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4 ">

                <h3 class="w-full text-white text-3xl font-semibold ">Tabel Peserta</h3>
                <form class="w-full flex items-center ">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                    </div>
                </form>
                
                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                    
                    
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">Nama</th>
                            <th scope="col" class="px-4 py-3">Asal</th>
                            <th scope="col" class="px-4 py-3">Tingkat Pendidikan</th>
                            <th scope="col" class="px-4 py-3">Email</th>
                            <th scope="col" class="px-4 py-3">No. HP</th>
                            <th scope="col" class="px-4 py-3 text-center">
                                Actions
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($participants as $participant)

                            <tr class="border-b dark:border-gray-700">
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$participant->name}}</th>
                                <td class="px-4 py-3">{{$participant->location}}</td>
                                <td class="px-4 py-3">{{$participant->educational_level}}</td>
                                <td class="px-4 py-3">{{$participant->email}}</td>
                                <td class="px-4 py-3">{{$participant->phone_number}}</td>
                                <td class="px-4 py-3 flex items-center justify-center">
                                    <a href="#" class="block py-2 px-4 w-20 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white transition-all">Edit</a>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white transition-all">Delete</a>
                                    
                                    {{-- <div class=" z-10 w-44 bg-white  shadow dark:bg-gray-700 dark:divide-gray-600 flex">
                                        <a href="#" class="block py-2 px-4 w-20 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                                        
                                    </div> --}}
                                </td>
                            </tr>
                            
                        @endforeach
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple iMac 27&#34;</th>
                            <td class="px-4 py-3">PC</td>
                            <td class="px-4 py-3">Apple</td>
                            <td class="px-4 py-3">300</td>
                            <td class="px-4 py-3">$2999</td>
                            <td class="px-4 py-3 flex items-center justify-center">
                                <a href="#" class="block py-2 px-4 w-20 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white transition-all">Edit</a>
                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white transition-all">Delete</a>
                                
                                {{-- <div class=" z-10 w-44 bg-white  shadow dark:bg-gray-700 dark:divide-gray-600 flex">
                                    <a href="#" class="block py-2 px-4 w-20 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                                    
                                </div> --}}
                            </td>
                        </tr>
                    </tbody>
                    
                </table>
            </div>

            
        </div>
    </div>

</x-admin.layout>