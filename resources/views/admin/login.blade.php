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
<body class="flex h-full m-0 items-center justify-center bg-white">

    <div class="w-full rounded-lg shadow-md md:mt-0 sm:max-w-md xl:p-0">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                Sign in as admin
            </h1>
            <form class="space-y-4 md:space-y-6" action="{{ url('loginAction/') }}" method="post">
                @csrf
                <div>
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Your username</label>
                    <input type="username" name="username" id="username" class="bg-gray-50 hover:bg-gray-100 border border-gray-300 text-gray-900 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Username" required="">
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 hover:bg-gray-100 border border-gray-300 text-gray-900 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                    
                    @if (Session::has('error'))
                        <p class="text-sm text-red-500">{{ Session::get('error') }}</p>    
                    @endif
                </div>
                

                <button type="submit" class="w-full text-white bg-[#7469B6] hover:bg-[#5f549e] transition-all focus:outline-none font-medium shadow-md text-sm px-5 py-2.5 text-center">Sign in</button>

                <p class="text-sm font-light text-gray-500 text-center">
                    Kelompok 5 &copy; 2024 | Sistem Informasi, Universitas Mulawarman
                </p>
            </form>
        </div>
    </div>


 
        
</body>
</html>
