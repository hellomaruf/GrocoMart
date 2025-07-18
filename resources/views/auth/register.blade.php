@extends('layouts.blank')
@php
    $hasNameError = $errors->has('name');
    $hasEmailError = $errors->has('email');
    $hasPasswordError = $errors->has('password');
@endphp
@section('main_content')
<section class="bg-gray-100">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
    <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-[#1B8058]">
      Groce<span>Mart</span>
    </a>
    <div class="w-full bg-white rounded-lg  shadow-sm md:mt-0 sm:max-w-md xl:p-0">
      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-semibold leading-tight tracking-tight text-gray-900 md:text-xl">
          Register Your Account
        </h1>
        <form class="space-y-4 md:space-y-6" action="{{ route('authenticate.register') }}" method="POST">
            @csrf
          <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" class="{{$hasNameError ? 'border-red-600':'border-gray-300'}} bg-gray-50 border  text-gray-900 rounded-lg focus:outline-[#1B8058] block w-full p-2.5" placeholder="Enter Your Name" >
            <span class="text-red-600 text-[14px]">@error('name')
                {{ $message }}
            @enderror</span>
        </div>
          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
            <input type="email" name="email" id="email" class=" {{$hasEmailError ? 'border-red-600':'border-gray-300'}} bg-gray-50 border  text-gray-900 rounded-lg focus:outline-[#1B8058] block w-full p-2.5" placeholder="Enter Your Email" >
            <span class="text-red-600 text-[14px]">@error('email')
                {{ $message }}
            @enderror</span>
        </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="{{$hasPasswordError ? 'border-red-600':'border-gray-300'}} bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:outline-[#1B8058] block w-full p-2.5" >
             <span class="text-red-600 text-[14px]">@error('password')
                 {{ $message }}
             @enderror</span>
        </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="{{$hasPasswordError ? 'border-red-600':'border-gray-300'}} bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:outline-[#1B8058] block w-full p-2.5" >
             <span class="text-red-600 text-[14px]">@error('password')
                 {{ $message }}
             @enderror</span>
        </div>
          <div class="flex items-center justify-between">
            <div class="flex items-start">
              <div class="flex items-center h-5">
                <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 ">
              </div>
              <div class="ml-3 text-sm">
                <label for="remember" class="text-gray-500">Remember me</label>
              </div>
            </div>
            <a href="#" class="text-sm font-medium text-primary-600 hover:underline">Forgot password?</a>
          </div>
          <button type="submit" class="w-full text-white bg-[#1B8058] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign Up</button>
          <p class="text-sm font-light text-gray-500">
            Already have Account? <a href="login" class="font-medium text-primary-600 hover:underline">Sign in</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
