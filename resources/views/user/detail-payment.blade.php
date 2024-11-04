<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    {{-- @extends('user.layout') --}}
    @include('user.includes.navbar')
    <div class="flex justify-center">
        <hr class="h-px w-[1200px] mt-10 mb-5 bg-gray-700 border-0">
    </div>
    <div class="flex mx-12">
        <div class="grid grid-cols-3 place-items-center ">
            <div class=" bg-gray-200 w-[220px] h-[385px] mx-2 my-2">
                <div class="">
                    <img src="{{ asset('assets/baju1.webp') }}" alt="" class="w-full h-[200px]" />
                </div>
                
                <div class="bg-[#5C4033] w-[220px] h-[185px]">
                    <div class="p-4">
                        <h1 class=" font-semibold text-[20px] text-[#F5E9D3]">Sarung Tenun Biru</h1>
                        <h1 class=" font-bold text-[20px] leading-4 text-[#F5E9D3]">Rp. 120.000</h1>
                        <h1 class=" leading-5 mt-2 text-[16px] text-[#F5E9D3]">Stok Tersisa 20 buah</h1>
                        <h1 class=" leading-4 text-[16px] text-[#F5E9D3]">10 Terjual</h1>
                    </div>
                </div>
            </div>

            <div class=" bg-gray-200 w-[220px] h-[385px] mx-2 my-2">
                <div class="">
                    <img src="{{ asset('assets/baju1.webp') }}" alt="" class="w-full h-[200px]" />
                </div>
                
                <div class="bg-[#5C4033] w-[220px] h-[185px]">
                    <div class="p-4">
                        <h1 class=" font-semibold text-[20px] text-[#F5E9D3]">Sarung Tenun Biru</h1>
                        <h1 class=" font-bold text-[20px] leading-4 text-[#F5E9D3]">Rp. 120.000</h1>
                        <h1 class=" leading-5 mt-2 text-[16px] text-[#F5E9D3]">Stok Tersisa 20 buah</h1>
                        <h1 class=" leading-4 text-[16px] text-[#F5E9D3]">10 Terjual</h1>
                    </div>
                </div>
            </div>
            <div class=" bg-gray-200 w-[220px] h-[385px] mx-2 my-2">
                <div class="">
                    <img src="{{ asset('assets/baju1.webp') }}" alt="" class="w-full h-[200px]" />
                </div>
                
                <div class="bg-[#5C4033] w-[220px] h-[185px]">
                    <div class="p-4">
                        <h1 class=" font-semibold text-[20px] text-[#F5E9D3]">Sarung Tenun Biru</h1>
                        <h1 class=" font-bold text-[20px] leading-4 text-[#F5E9D3]">Rp. 120.000</h1>
                        <h1 class=" leading-5 mt-2 text-[16px] text-[#F5E9D3]">Stok Tersisa 20 buah</h1>
                        <h1 class=" leading-4 text-[16px] text-[#F5E9D3]">10 Terjual</h1>
                    </div>
                </div>
            </div>
            <div class=" bg-gray-200 w-[220px] h-[385px] mx-2 my-2">
                <div class="">
                    <img src="{{ asset('assets/baju1.webp') }}" alt="" class="w-full h-[200px]" />
                </div>
                
                <div class="bg-[#5C4033] w-[220px] h-[185px]">
                    <div class="p-4">
                        <h1 class=" font-semibold text-[20px] text-[#F5E9D3]">Sarung Tenun Biru</h1>
                        <h1 class=" font-bold text-[20px] leading-4 text-[#F5E9D3]">Rp. 120.000</h1>
                        <h1 class=" leading-5 mt-2 text-[16px] text-[#F5E9D3]">Stok Tersisa 20 buah</h1>
                        <h1 class=" leading-4 text-[16px] text-[#F5E9D3]">10 Terjual</h1>
                    </div>
                </div>
            </div>
            <div class=" bg-gray-200 w-[220px] h-[385px] mx-2 my-2">
                <div class="">
                    <img src="{{ asset('assets/baju1.webp') }}" alt="" class="w-full h-[200px]" />
                </div>
                
                <div class="bg-[#5C4033] w-[220px] h-[185px]">
                    <div class="p-4">
                        <h1 class=" font-semibold text-[20px] text-[#F5E9D3]">Sarung Tenun Biru</h1>
                        <h1 class=" font-bold text-[20px] leading-4 text-[#F5E9D3]">Rp. 120.000</h1>
                        <h1 class=" leading-5 mt-2 text-[16px] text-[#F5E9D3]">Stok Tersisa 20 buah</h1>
                        <h1 class=" leading-4 text-[16px] text-[#F5E9D3]">10 Terjual</h1>
                    </div>
                </div>
            </div>
            <div class=" bg-gray-200 w-[220px] h-[385px] mx-2 my-2">
                <div class="">
                    <img src="{{ asset('assets/baju1.webp') }}" alt="" class="w-full h-[200px]" />
                </div>
                
                <div class="bg-[#5C4033] w-[220px] h-[185px]">
                    <div class="p-4">
                        <h1 class=" font-semibold text-[20px] text-[#F5E9D3]">Sarung Tenun Biru</h1>
                        <h1 class=" font-bold text-[20px] leading-4 text-[#F5E9D3]">Rp. 120.000</h1>
                        <h1 class=" leading-5 mt-2 text-[16px] text-[#F5E9D3]">Stok Tersisa 20 buah</h1>
                        <h1 class=" leading-4 text-[16px] text-[#F5E9D3]">10 Terjual</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex ml-10 flex-col justify-center">
            <div class="flex w-[480px] mb-6 px-8">
                <h1 class="font-semibold text-[20px] w-full">Sarung Tenun Biru</h1>
                <h1 class="font-bold text-[20px] w-full text-end">Rp. 120.000</h1>
            </div>
            <div class="flex w-[480px] mb-6 px-8">
                <h1 class="font-semibold text-[20px] w-full">Sarung Tenun Biru</h1>
                <h1 class="font-bold text-[20px] w-full text-end">Rp. 120.000</h1>
            </div>
            <div class="flex w-[480px] mb-6 px-8">
                <h1 class="font-semibold text-[20px] w-full">Sarung Tenun Biru</h1>
                <h1 class="font-bold text-[20px] w-full text-end">Rp. 120.000</h1>
            </div>
            <div class="flex w-[480px] mb-6 px-8">
                <h1 class="font-semibold text-[20px] w-full">Sarung Tenun Biru</h1>
                <h1 class="font-bold text-[20px] w-full text-end">Rp. 120.000</h1>
            </div>
            <div class="flex w-[480px] mb-6 px-8">
                <h1 class="font-semibold text-[20px] w-full">Sarung Tenun Biru</h1>
                <h1 class="font-bold text-[20px] w-full text-end">Rp. 120.000</h1>
            </div>
            <div class="flex w-[480px] mb-6 px-8">
                <h1 class="font-semibold text-[20px] w-full">Sarung Tenun Biru</h1>
                <h1 class="font-bold text-[20px] w-full text-end">Rp. 120.000</h1>
            </div>
            <hr class="h-px w-full mt-4 mb-5 bg-gray-700 border-0">
            <div class="flex w-[480px] mb-6 px-8">
                <h1 class="font-bold text-[20px] w-full">Subtotal</h1>
                <h1 class="font-bold text-[20px] w-full text-end">Rp. 480.000</h1>
            </div>
        </div>
    </div>
</body>
</html>