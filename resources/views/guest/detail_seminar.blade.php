<x-layout>

    <div class=" flex gap-8 w-[85%] mt-16">
        <a class="bg-red-500 rounded-md px-4 py-4 text-black font-semibold hover:shadow-md transition-all self-center " href="{{ route('events_view') }}">👈 Kembali</a>

        <a class="bg-[#FFD09B] rounded-md px-4 py-4 text-black font-semibold hover:shadow-md transition-all self-center " href="/participant-form/{{ $event->event_id }}">Klik untuk Daftar</a>
    </div>

    
    
    <div class=" flex justify-between gap-8 h-fit w-[85%]">

        
            <div class="p-16 flex flex-col bg-[#FFD09B] w-4/5 gap-4 rounded-md shadow-md">
    
                <div class="flex flex-col">
        
                    <h1 class="text-5xl border-b border-slate-600 pb-3 ">{{ $event->event_name }}</h1>
                    <div class="flex justify-between">
                        <p class="text-slate-400">{{ $event->date }}</p> 
                        <p class="text-slate-400 self-end justify-items-end">Peserta: {{ $participants_number }}/{{ $event->max_participants }}</p>
                    </div>
        
                </div>
                
                <div class="flex flex-col">
                    <h3 class="text-2xl mt-5">Deskripsi acara</h3>
                    <p class="border-t border-slate-600 my-3 max-w-40"></p>
                    <p>{{ $event->description }}</p>
                </div>
        
            
            </div>
        
            <aside class="p-16 flex flex-col items-center bg-[#FFD09B] w-[30%] gap-4 rounded-md shadow-md ">
                <section class="flex flex-col items-center gap-4">
    
                    <h3 class="text-2xl">Narasumber</h3>
                    <div class="border-b border-slate-600 min-w-full"></div>
                    <img class="w-3/4 rounded-full object-cover" src="{{ asset('assets/img/guy.jpg') }}" alt="">
                    
                </section>
                
                <section class="flex flex-col items-center mt-2">
                    <p>Zamzam Muazam</p>
                    <p>IT Engineer</p>
                </section>
                
            </aside>
    
            
            
            
        
    </div>

    <div class="px-16 py-8 flex flex-col mx-auto mb-16 bg-[#FFECC8] gap-4 rounded-md shadow-md w-[80vw]">
        <h1 class="font-semibold text-3xl pb-3 border-b border-slate-500 ">Daftar Peserta</h1>
        <div class=" bg-slate-900"></div>

        <form class="self-start" action="">
            <label for="table-search" class="sr-only">Search</label>

            <div class="relative mt-1">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>

                <input type="text" id="table-search" class=" py-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-md w-96 bg-white focus:outline-none hover:shadow-md transition-all" placeholder="Cari nama peserta">
            </div>
        </form>

        <table class="table-auto">
            <thead>
              <tr>
                <th class="px-4 py-4">Nama</th>
                <th class="px-4 py-4">Email</th>
                <th class="px-4 py-4">Nomor Handphone</th>
                <th class="px-4 py-4">Tanggal Registrasi</th>
              </tr>
            </thead>
            <tbody>
    
              @foreach ($participants as $participant)
    
              {{-- Add to <tr></tr> when showing participant detail feature is added: (hover:bg-[#FFF7D1] hover:transition-all hover:cursor-pointer) --}}

              <tr class="" data-href="">
                <td class="border px-4 py-4">{{ $participant->name }}</td>
                <td class="border px-4 py-4">{{ $participant->email }}</td>
                <td class="border px-4 py-4">{{ $participant->phone_number }}</td>
                <td class="border px-4 py-4">{{ $participant->created_at }}</td>
                
                
              </tr>
                  
              @endforeach
              
    
          </tbody>
        </table>
    
    </div>

    


</x-layout>