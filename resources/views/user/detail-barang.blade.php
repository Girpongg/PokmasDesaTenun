@extends('user.layout')
@section('content')
<div class="absolute flex space-x-2 mt-10 ml-40 font3">
    <a href="{{ route('home')}}" class=" text-[#5C4033]">Home</a>
    <span>></span>
    <p class="">Detail Barang</p>
</div>
<div class="grid lg:grid-cols-2 place-items-center h-screen mx-24">
    <div class="flex justify-center items-center">
        <img src="{{ asset($barang->image) }}" alt="" class="h-[500px] w-[500px] border border-gray-300" />
    </div>

    <div class="flex-col flex justify-between mx-10 h-[500px]">
        <div>
            <h1 class="font-extrabold font3 lg:text-[32px] leading-10 text-[#5C4033]">{{ $barang->name }}</h1>
            <h1 class="font-bold font3 text-[28px] leading-20 text-[#5C4033]">Rp. {{ $barang->price }}</h1>
            <hr class="h-px w-full mt-6 mb-4 bg-gray-700 border-0 text-[#5C4033]">
            <h1 class="font-bold font3 text-[18px] leading 5 text-[#5C4033]">{{ $barang->description }}</h1>
            <hr class="h-px w-full mt-4 mb-5 bg-gray-700 border-0 text-[#5C4033]">
            <h1 class="text-[18px] font3 text-[#5C4033]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</h1>
        </div>
        <a href="{{ route('add-cart', $barang->id)}}" class="flex justify-center">
            <button
            type="button"
            class="rounded w-full h-16 inline-block !bg-[#7B5A49] px-6 pb-2 pt-2.5 text-3xl font-medium leading-normal text-[#F5E9D3] shadow-sm transition duration-150 ease-in-out hover:bg-[#6B4B3A] hover:shadow-md focus:bg-[#4B3226] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#3E2721] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" onclick="window.location.href='{{ route('milih-barang') }}'">
            Masukkan ke Tas
            </button>
        </a>
    </div>
</div>
@endsection