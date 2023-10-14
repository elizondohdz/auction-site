<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body class="mx-auto mt-10 max-w-2xl text-slate-700 bg-gradient-to-r from-slate-50 to bg-indigo-100">
    
        <nav class="flex items-center justify-between p-6">
        <div class="flex items-center gap-3">
                <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Logo">
                <span class="font-semibold text-xl tracking-tight">Auction Site</span>
        </div>

        <div class="flex items-center">
        @if (auth()->user())

        <div class="text-sm">
                <a href="#" class="mt-4 text-indigo-500 hover:text-indigo-900 mr-4">
                    My Bids
                </a>
            </div>
            <div class="text-sm">
                <a href="#" class="mt-4 text-indigo-500 hover:text-indigo-900 mr-4">
                    My Items
                </a>
            </div>
            <div class="text-sm">
                <a href="#" class="mt-4 text-indigo-500 hover:text-indigo-900 mr-4">
                    Profile
                </a>
            </div>
            <div class="text-sm">
                <form action="{{ route('auth.destroy') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="text-indigo-500 hover:text-indigo-900 mr-4">Logout</button>
                </form>
            </div>
            
        @else
            <div class="text-sm">
                <a href="{{ route('auth.create') }}" class="mt-4 text-indigo-500 hover:text-indigo-900 mr-4">
                    Login
                </a>
            </div>
            <div class="text-sm">
                <a href="{{ route('user.create') }}" class="mt-4 text-indigo-500 hover:text-indigo-900 mr-4">
                    Register
                </a>
            </div>
        @endif
            
        </div>
        </nav>
        
    @if (session('success'))
        <div role="alert" class="my-8 rounded-md border-l-4 border-green-300 bg-green-100 p-4 text-green-700 opacity-75">
            <p class="font-bold">Success!</p>
            <p> {{ session('success') }} </p>
        </div>
    @endif
    @if (session('error'))
            <div role="alert" class="my-8 rounded-md border-l-4 border-red-300 bg-red-100 p-4 text-red-700 opacity-75">
                <p class="font-bold">Error!</p>
                <p> {{ session('error') }} </p>
            </div>
        @endif
    @if ($errors->any())
        <div role="alert" class="my-8 rounded-md border-l-4 border-red-300 bg-red-100 p-4 text-red-700 opacity-75">
                @foreach ($errors->all() as $error)
                    <p class="font-bold">Oops!</p>
                    <p>{{ $error }}</p>
                @endforeach
        </div>
    @endif   
    {{ $slot }}
</body>
</html>
