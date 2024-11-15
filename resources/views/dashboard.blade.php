<x-layout>

  @if (session('delete')) 
    <div class="bg-green-100 text-amber-950 py-4 my-4 h-16 rounded-md shadow-md mx-auto block text-center text-lg font-semibold w-full" role="alert">
        {{ session('delete') }}
    </div> 
  @endif
  <div class="mt-20 px-16 py-8 flex flex-col mx-auto mb-16 bg-[#FFD09B] w-5/12 gap-4 rounded-md shadow-md ">
  
    <h1 class="font-semibold text-3xl pb-3 border-b border-slate-500 ">Daftar event</h1>
    <div class=" bg-slate-900"></div>

        <div class="flex flex-col gap-2">

            <div class="flex justify-between">

                <form class="self-start hover:text-black">
                    <label for="table-search" class="sr-only">Search</label>
    
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
    
                        <input type="search" name="search" id="table-search" class=" py-2 ps-10 text-sm placeholder:text-black border border-gray-300 rounded-md w-96 bg-[#FFECC8] focus:outline-none hover:bg-[#f7d494] transition-all" placeholder="Cari nama acara">
                    </div>
                </form>
    
                <form class="" action="{{ route('event_form') }}">
                    <button class=" hover:shadow-md hover:hover:bg-[#FFF7D1] transition-all rounded-md bg-[#FFECC8] text-black p-[10px] font-semibold">Tambahkan acara</button>
                </form>

            </div>

            
                
            <div class="border rounded-md overflow-hidden ">
              <table class="table-auto">
                <thead class="bg-[#f1b084]">
                  <tr>
                    <th class="px-4 py-4">Nama Acara</th>
                    <th class="px-4 py-4">Keterangan</th>
                    <th class="px-4 py-4">Kuota</th>
                    <th class="px-4 py-4">Tanggal di-adakan</th>
                    <th class="px-4 py-4">Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($data as $event)

                  <tr class="hover:bg-[#FFF7D1] hover:transition-all hover:cursor-pointer" data-href="/event-detail/{{ $event->event_id }}">
                    <td class=" px-4 py-4 ">{{ $event->event_name }}</td>
                    <td class="  px-4 py-4">{{ $event->description }}</td>
                    <td class="  px-4 py-4">{{ $event->max_participants }} orang</td>
                    <td class="  px-4 py-4">{{ $event->date }}</td>

                    <td class="flex justify-center gap-4  px-4 py-4">

                      <form  action="/{{ $event->event_id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="bg-red-400 px-4 py-2 rounded-md font-bold hover:shadow-md" type="submit" class="btn btn-danger btn-sm delete-btn">✕</button>
                      </form>


                        <a class="bg-blue-300 px-4 py-2 rounded-md font-bold hover:shadow-md" href="/update-event-form/{{ $event->event_id }}">✎</a>
                       
                        
                      
                    </td>
                  </tr>
                      
                  @endforeach
                  
    
              </tbody>
            </table>
            </div>
            

          
            

        </div>
  
  </div>

        
  <script>
    const tableRows = document.querySelectorAll("table tbody tr");
    for (const tableRow of tableRows) {
      tableRow.addEventListener('click', function (){
        window.location.href = this.dataset.href;
      })
    }
  </script>
    
    
</x-layout>