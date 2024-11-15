<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100 ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manajemen Acara</title> 
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="flex flex-col h-full m-0 ">


    <header class="min-h-16 border-b-[1px] border-black bg-[#EAD8B1]  flex justify-evenly items-center flex-initial">
        
            <h1 class="text-3xl font-semibold">Title</h1>

            <section class="flex justify-center items-center">

                <form action="" class=" flex justify-start">
                    <label for="table-search" class="sr-only">Search</label>

                    <!-- Search icon -->
                    <div class="absolute w-12 h-9 flex justify-center items-center  pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>

                    <!-- Search bar -->
                    <div class="">
                        <input type="search" name="search" id="table-search" class=" py-2 ps-10 text-sm placeholder:text-black border border-gray-300 rounded-s-md w-96 bg-white focus:outline-none hover:bg-slate-100 transition-all" placeholder="Search here">
                    </div>
                </form>

                <form action="" class="rounded-e-md bg-white w-9 h-9 flex justify-center items-center text-2xl hover:bg-slate-100 transition-all">
                    <button>🔽</button>
                </form>

            </section>
            
        
    </header>

    

    <section class="flex justify-between  flex-auto  ">



        <!-- Sidebar -->
        <aside class=" w-[28rem] border-r-[1px] bg-white border-black flex flex-col justify-between text-start h-full ">

            <section class="px-12">

                <section class="my-14">
                        <h1 class="text-4xl font-normal">By Category</h1>
                    </section>

                    <section class="flex flex-col gap-4">
                        
                        <a href="{{ url('/') }}"><h3 class="border-y-[1px] border-[#6A9AB0] py-4 w-[12rem] text-2xl font-normal hover:px-2 transition-all">Seminar</h3></a>
                        
                        <a href="{{ url('workshops/') }}"><h3 class="border-b-[1px] border-[#6A9AB0] pb-4 w-[12rem] text-2xl font-normal hover:px-2 transition-all">Workshop</h3></a>
                  
                        <a href=""><h3 class="border-b-[1px] border-[#6A9AB0] pb-8 w-[12rem] text-lg font-normal my-4 hover:px-2 transition-all">Log In</h3></a>
                       
                </section>

            </section>
            

            <section class="flex flex-col gap-2 px-8">
                <div class="bg-[#6A9AB0] w-[16rem] h-[1px] self-center"></div>
                <h3 class="text-2xl font-normal my-2">From Kelompok 5</h3>

                <ul class="px-2 pb-2">
                    <li class="text-sm">Zamzam Muazam</li>
                    <li class="text-sm">Muhammad Gilang Alfarezel Putra Natsir Rasad</li>
                    <li class="text-sm">Adli Imam Suryadin</li>
                </ul>
             
                <div class="bg-[#6A9AB0] w-[16rem] h-[1px] mb-2 self-center"></div>
                
               
                <a href=""><h3 class="text-lg font-normal pb-8 text-center">Web Framework, Sistem Informasi</h3></a>

            </section>
            

        </aside>

        <main class="flex justify-center p-8 gap-8 flex-wrap bg-white w-full ">    

            {{ $slot }}

        </main>

        
        
        
    </section>
    
    <!-- Content and footer -->
            

            <footer class="flex justify-center items-center border-t-[1px] border-black bg-[#EAD8B1] min-h-12 ">
                <p class="text-amber-950 text-sm ">Kelompok 5 &copy; 2024, Universitas Mulawarman</p>
            </footer>
        
</body>
</html>