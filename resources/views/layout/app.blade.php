<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Postify</title>
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li><a href="{{ route('home') }}" class="p-3">Home</a></li>
            <li><a href="{{ route('dashboard') }}" class="p-3">Dashboard</a></li>
            <li><a href="/posts" class="p-3">Posts</a></li>
        </ul> 
        <ul class="flex items-center">
            @auth
                <li><a href="" class="p-3">{{ auth()->user()->name }}</a></li>
                <form action="{{ route('logout') }}" method="post" class="inline">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
                
            @endauth
            @guest
                <li><a href="{{ route('login') }}" class="p-3">Login</a></li>
                <li><a href="{{ route('register') }}" class="p-3">Register</a></li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>
</html>