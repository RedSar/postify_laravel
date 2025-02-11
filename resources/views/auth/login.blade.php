@extends('layout.app')

@section('content')

<div class="flex justify-center">
    <div class="w-6/12 bg-white p-6 rounded-lg">
        @if (session('status'))
            <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                {{ session('status') }}
            </div>
        @endif
       <form action="{{ route('login') }}" method="post">
            @csrf
            
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
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
            </div>
           
       </form>
    </div>
</div>
@endsection('content')