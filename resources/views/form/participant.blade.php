<x-layout>


    <div class="mt-20 px-16 py-8 flex flex-col mx-auto mb-16 bg-white w-5/12 gap-4 rounded-md shadow-md ">

        <a class="bg-red-500 rounded-md px-4 py-2 text-amber-50 hover:shadow-md transition-all self-start order-2" href="/event-detail/{{ $event->event_id }}">👈 Kembali</a>
        @if (session('success')) 
              <div class="bg-green-100 text-amber-950 py-4 my-4 h-16 rounded-md shadow-md mx-auto block text-center text-lg font-semibold w-full" role="alert">
                  {{ session('success') }}
              </div> 
            @endif
        <h1 id="heading" class=" text-4xl font-semibold text-slate-500 pb-3 border-b border-slate-200 order-1 text-center">Form Registrasi</h1>
    
  

            
          
    
          <form class="flex flex-col flex-grow justify-center gap-4 order-3" action="/participant-form/{{ $event->event_id }}" method="post">
            @csrf

            
                <input disabled id="name" name="event" type="text" class="bg-slate-100 rounded-md h-12 p-5 placeholder:text-black hover:bg-slate-200 transition-all focus:outline-none" placeholder="{{ $event->event_name }}">            
                <input id="name" name="name" type="text" class="bg-slate-100 rounded-md h-12 p-5 placeholder:text-black hover:bg-slate-200 transition-all focus:outline-none" placeholder="Nama Lengkap">
                <input id="desc" name="email" type="email" class="bg-slate-100 rounded-md h-12 p-5 placeholder:text-black hover:bg-slate-200 transition-all focus:outline-none" placeholder="Email">
                <input id="date" name="phone_number" type="text" class="bg-slate-100 rounded-md h-12 p-5 placeholder:text-black hover:bg-slate-200 transition-all focus:outline-none" placeholder="Nomor Handphone">        
                <button type="submit" id="kirim" class="bg-[#FFD09B] text-amber-950 hover:bg-[#fab957] hover:text-black hover:shadow-md transition-all py-4 my-4 w-5/12 h-16 rounded-md mx-auto block cursor-pointer text-center text-2xl font-semibold">Tambah</button>

              
          </form>
  
    </div>

       
    

      
        

</x-layout>