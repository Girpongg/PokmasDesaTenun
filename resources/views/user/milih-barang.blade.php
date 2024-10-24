<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Milih Barang</title>
    @vite('resources/css/app')
    @include('user.includes.navbar')
</head>
<body>
    @extends('user.layout')
    @include('user.includes.navbar')
    <div class="flex justify-center">
        <hr class="h-px w-[1200px] mt-10 mb-5 bg-gray-700 border-0">
    </div>
    <div class="grid xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 px-20 place-items-center">
        @foreach ($catalog as $item)
            <div class=" bg-gray-200 w-[220px] h-[385px] mt-5 cursor-pointer" onclick="window.location.href='{{ route('detail-barang') }}'">
                <div class="">
                    <img src="{{ $item->image }}" alt="" class="w-full h-[200px]" />
                </div>
                <div class="bg-[#5C4033] w-[220px] h-[185px]">
                    <div class="p-4">
                        <h1 class=" font-semibold text-[16px] text-[#F5E9D3]">{{ $item->name }}</h1>
                        <h1 class=" font-bold text-[16px] leading-4 text-[#F5E9D3]">Rp. {{ $item->price }}</h1>
                        <h1 class=" leading-5 mt-2 text-[12px] text-[#F5E9D3]">Stok Tersisa {{ $item->stock }} pcs</h1>
                        <h1 class=" leading-4 text-[12px] text-[#F5E9D3]">{{ $item->description }}</h1>
                    </div>
                    <div class="flex justify-center">
                        <button
                        type="button"
                        class="w-4/5 inline-block !bg-[#dfdfdf] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-2xl transition duration-150 ease-in-out hover:bg-[#C29545] hover:shadow-md focus:bg-[#C29545] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#B1833F] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                        onclick="event.stopPropagation(); window.location.href='{{ route('detail-payment') }}'">
                        Masukkan ke Tas
                        </button>
                    </div>
                </div>
            </div>
            
        @endforeach

{{-- 
        <div class=" bg-gray-200 w-[220px] h-[385px] mt-5 cursor-pointer" onclick="window.location.href='{{ route('detail-barang') }}'">
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
                <div class="flex justify-center">
                    <button
                    type="button"
                    class="w-4/5 inline-block !bg-[#dfdfdf] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-2xl transition duration-150 ease-in-out hover:bg-[#C29545] hover:shadow-md focus:bg-[#C29545] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#B1833F] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                    onclick="event.stopPropagation(); window.location.href='{{ route('detail-payment') }}'">
                    Masukkan ke Tas
                    </button>
                </div>
            </div>
        </div>

        <div class=" bg-gray-200 w-[220px] h-[385px] mt-5 cursor-pointer" onclick="window.location.href='{{ route('detail-barang') }}'">
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
                <div class="flex justify-center">
                    <button
                    type="button"
                    class="w-4/5 inline-block !bg-[#dfdfdf] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-2xl transition duration-150 ease-in-out hover:bg-[#C29545] hover:shadow-md focus:bg-[#C29545] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#B1833F] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                    onclick="event.stopPropagation(); window.location.href='{{ route('detail-payment') }}'">
                    Masukkan ke Tas
                    </button>
                </div>
            </div>
        </div>

        <div class=" bg-gray-200 w-[220px] h-[385px] mt-5 cursor-pointer" onclick="window.location.href='{{ route('detail-barang') }}'">
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
                <div class="flex justify-center">
                    <button
                    type="button"
                    class="w-4/5 inline-block !bg-[#dfdfdf] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-2xl transition duration-150 ease-in-out hover:bg-[#C29545] hover:shadow-md focus:bg-[#C29545] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#B1833F] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                    onclick="event.stopPropagation(); window.location.href='{{ route('detail-payment') }}'">
                    Masukkan ke Tas
                    </button>
                </div>
            </div>
        </div>

        <div class=" bg-gray-200 w-[220px] h-[385px] mt-5 cursor-pointer" onclick="window.location.href='{{ route('detail-barang') }}'">
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
                <div class="flex justify-center">
                    <button
                    type="button"
                    class="w-4/5 inline-block !bg-[#dfdfdf] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-2xl transition duration-150 ease-in-out hover:bg-[#C29545] hover:shadow-md focus:bg-[#C29545] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#B1833F] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                    onclick="event.stopPropagation(); window.location.href='{{ route('detail-payment') }}'">
                    Masukkan ke Tas
                    </button>
                </div>
            </div>
        </div>

        <div class=" bg-gray-200 w-[220px] h-[385px] mt-5 cursor-pointer" onclick="window.location.href='{{ route('detail-barang') }}'">
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
                <div class="flex justify-center">
                    <button
                    type="button"
                    class="w-4/5 inline-block !bg-[#dfdfdf] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-2xl transition duration-150 ease-in-out hover:bg-[#C29545] hover:shadow-md focus:bg-[#C29545] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#B1833F] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                    onclick="event.stopPropagation(); window.location.href='{{ route('detail-payment') }}'">
                    Masukkan ke Tas
                    </button>
                </div>
            </div>
        </div>

        <div class=" bg-gray-200 w-[220px] h-[385px] mt-5 cursor-pointer" onclick="window.location.href='{{ route('detail-barang') }}'">
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
                <div class="flex justify-center">
                    <button
                    type="button"
                    class="w-4/5 inline-block !bg-[#dfdfdf] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-2xl transition duration-150 ease-in-out hover:bg-[#C29545] hover:shadow-md focus:bg-[#C29545] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#B1833F] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                    onclick="event.stopPropagation(); window.location.href='{{ route('detail-payment') }}'">
                    Masukkan ke Tas
                    </button>
                </div>
            </div>
        </div> --}}
    </div>
</body>
</html>