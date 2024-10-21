<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail-Barang</title>
    @vite('resources/css/app.css')
</head>
<body>
    @extends('user.layout')
    @include('user.includes.navbar')
    <div class="grid lg:grid-cols-2">
        <div>
            <div class="flex justify-center">
                <img src="{{ asset('assets/baju1.webp') }}" alt="" class="h-[495px] mt-20" />
            </div>
            <div class="flex justify-center space-x-2 w-[90%] mx-auto">
                <img src="{{ asset('assets/baju1.webp') }}" alt="" class="h-[140px] py-6" />
                <img src="{{ asset('assets/baju1.webp') }}" alt="" class="h-[140px] py-6" />
                <img src="{{ asset('assets/baju1.webp') }}" alt="" class="h-[140px] py-6" />
                <img src="{{ asset('assets/baju1.webp') }}" alt="" class="h-[140px] py-6" />
                <img src="{{ asset('assets/baju1.webp') }}" alt="" class="h-[140px] py-6" />
            </div>
        </div>
    
        <div class="flex-col justify-start m-20">
            <h1 class="font-bold lg:text-[44px] leading-10 text-[#5C4033]">Sarung Tenun Biru</h1>
            <h1 class="text-[28px] leading-12 text-[#5C4033]">Terjual 10+</h1>
            <h1 class="font-bold text-[48px] leading-20 text-[#5C4033]">Rp. 120.000</h1>
            <hr class="h-px w-full mt-6 mb-4 bg-gray-700 border-0 text-[#5C4033]">
            <h1 class="font-bold text-[40px] leading 5 text-[#5C4033]">Detail</h1>
            <hr class="h-px w-full mt-4 mb-5 bg-gray-700 border-0 text-[#5C4033]">
            <h1 class="text-[20px] text-[#5C4033]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</h1>
            <div class="flex justify-center">
                <button
                type="button"
                class=" mt-[70px] w-full h-16 inline-block bg-[#7B5A49] px-6 pb-2 pt-2.5 text-3xl font-medium leading-normal text-[#F5E9D3] shadow-sm transition duration-150 ease-in-out hover:bg-[#6B4B3A] hover:shadow-md focus:bg-[#4B3226] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#3E2721] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" onclick="window.location.href='{{ route('milih-barang') }}'">
                Masukkan ke Tas
            </button>
        </div>
        </div>
    </div>
    
</body>
</html>