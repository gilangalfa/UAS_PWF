<x-layout>

    

    <div class="mt-20 px-16 py-8 flex flex-col mx-auto mb-16 bg-[#FFD09B] w-5/12 gap-4 rounded-md shadow-md ">

        @if (session('updated')) 
            <div class="bg-green-100 text-amber-950 py-4 my-4 h-16 rounded-md shadow-md mx-auto block text-center text-lg font-semibold w-full" role="alert">
                {{ session('updated') }}
            </div> 
        @endif

        <a class="bg-red-500 rounded-md px-4 py-2 text-amber-50 font-semibold hover:shadow-md hover:bg-red-600 hover:text-amber-100 transition-all self-start order-2" href="{{ route('events_view') }}">👈 Kembali</a>
        @if (session('success')) 
          <div class="bg-green-100 text-amber-950 py-4 my-4 h-16 rounded-md shadow-md mx-auto block text-center text-lg font-semibold w-full" role="alert">
              {{ session('success') }}
          </div> 
        @endif
    
          <form class="flex flex-col flex-grow justify-center gap-4 order-3" action="/update-event/{{ $event->event_id }}" method="post">
            @csrf
            @method('put')
            
                       
              <input id="name" name="event_name" type="text" class="bg-slate-100 rounded-md h-12 p-5 placeholder:text-black hover:bg-[#f7d494] transition-all focus:outline-none" value="{{ $event->event_name }}" placeholder="Nama Acara">
              <input id="desc" name="desc" type="text" class="bg-slate-100 rounded-md h-12 p-5 placeholder:text-black hover:bg-[#f7d494] transition-all focus:outline-none" value="{{ $event->description }}" placeholder="Deskripsi Acara">
              <input id="date" name="date" type="date" class="bg-slate-100 rounded-md h-12 p-5 placeholder:text-black hover:bg-[#f7d494] transition-all focus:outline-none" value="{{ $event->date }}" placeholder="Tanggal">
              <input id="maxp" name="maxp" type="number" class="bg-slate-100 rounded-md h-12 p-5 placeholder:text-black hover:bg-[#f7d494] transition-all focus:outline-none" value="{{ $event->max_participants }}" placeholder="Maksimal Partisipan">
        
              <button type="submit" id="kirim" class="bg-[#FFECC8] text-amber-950 hover:bg-[#fab957] hover:text-black hover:shadow-md transition-all py-4 my-4 w-5/12 h-16 rounded-md mx-auto block cursor-pointer text-center text-2xl font-semibold">Update Acara</button>

              
          </form>
  
    </div>

       
    

      
        

</x-layout>