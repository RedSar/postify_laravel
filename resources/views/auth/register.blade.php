@extends('layout.app')

@section('content')

<div class="flex justify-center">
    <div class="w-6/12 bg-white p-6 rounded-lg">
       <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-4">
               
                <label for="name" class="sr-only">Name</label>
                <input type="text" class="bg-gray-100 border-2 @error('name') border-red-500 @enderror  w-full p-4 rounded-lg" value="{{ old('name') }}" name="name" id="name" placeholder="Your name">
                @error('name')
                    <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="username" class="sr-only">Userusername</label>
                <input type="text" class="bg-gray-100 border-2 @error('username') border-red-500 @enderror w-full p-4 rounded-lg" value="{{ old('username') }}" name="username" id="username" placeholder="Username">
                @error('username')
                    <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="email" class="bg-gray-100 border-2 @error('email') border-red-500 @enderror w-full p-4 rounded-lg" value="{{ old('email') }}" name="email" id="email" placeholder="Your email">
                @error('email')
                    <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" class="bg-gray-100 border-2 @error('password') border-red-500 @enderror w-full p-4 rounded-lg" value="" name="password" id="password" placeholder="choose password">
                @error('password')
                    <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="name" class="sr-only">Password confirmation</label>
                <input type="password" class="bg-gray-100 border-2 @error('password_confirmation') border-red-500 @enderror w-full p-4 rounded-lg" value="" name="password_confirmation" id="name" placeholder="Password again">
                @error('password_confirmation')
                    <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
            </div>
           
       </form>
    </div>
</div>
@endsection('content')