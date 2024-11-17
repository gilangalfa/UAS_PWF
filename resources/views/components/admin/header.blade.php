<div class="min-h-[6rem] border-b-[1px] border-black bg-[#E1AFD1]  flex justify-center gap-80 items-center flex-initial">
     
    <h1 class="text-3xl font-semibold">Seminar dan Workshop</h1>
    <section class="flex justify-center items-center">

        <form action="" class=" flex justify-start">
            <label for="table-search" class="sr-only">Search</label>

            <!-- Search icon -->
            <div class="absolute w-12 h-9 flex justify-center items-center  pointer-events-none ">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>

            <!-- Search bar -->
            <div class="">
                <input type="search" name="search" id="table-search" class=" py-2 ps-10 text-sm placeholder:text-black border border-gray-300 rounded-s-md w-96 bg-white hover:bg-slate-100 focus:outline-none transition-all" placeholder="Search here">
            </div>
        </form>

        {{-- Search by button --}}
        <form action="" class="rounded-e-md bg-white w-9 h-9 flex justify-center items-center text-2xl hover:bg-slate-100 transition-all">
            <button>🔽</button>
        </form>

    </section>
</div>