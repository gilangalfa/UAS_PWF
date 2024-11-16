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


    <header >
            <x-header title="Workshop"></x-header>    
    </header>

    

    <section class="flex justify-between  flex-auto  ">

        <!-- Sidebar -->
        <aside>
            <x-sidebar></x-sidebar>
        </aside>

        <main class="flex justify-center p-8 gap-8 flex-wrap bg-white w-full ">    

            @foreach ($workshops as $workshop)
                <div class="max-w-2xl min-h-fit bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('assets/img/idk2.png') }}" alt="" />
                        <!-- <img class="h-12 w-12 rounded-full object-cover" src="{{ asset('assets/img/idk2.png') }}" alt=""> -->
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $workshop->name }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $workshop->description }}</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#6A9AB0] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>      
            @endforeach

        </main>

        
        
        
    </section>
    
    <!-- Content and footer -->
            

            <footer>
                <x-footer></x-footer>
            </footer>
        
</body>
</html>