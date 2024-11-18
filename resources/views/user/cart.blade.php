@extends('user.layout')
@section('content')
<div class="absolute flex space-x-2 mt-10 ml-24 font3">
    <a href="{{ route('home')}}" class=" text-[#5C4033]">Home</a>
    <span>></span>
    <p class="">Cart</p>
</div>
<h1 class="text-4xl my-4 text-center font-bold">
    Cart
</h1>
<div class="grid grid-cols-5 px-20 place-items-center">
    @foreach ($cart as $value)
        <div class="relative bg-gray-200 w-[220px] h-[385px] my-5 cursor-pointer border border-gray-200">
            <!-- Tombol silang -->
            <a href="{{ route('delete-from-cart', $value)}}">
                <button class="absolute top-2 right-2 text-white bg-red-500 rounded-full w-6 h-6 flex items-center justify-center hover:bg-red-700 focus:outline-none">
                    &times;
                </button>
            </a>

            <!-- Gambar produk -->
            <div class="">
                <img src="{{ $value['image'] }}" alt="" class="w-full h-[200px]" />
            </div>

            <!-- Informasi produk -->
            <div class="bg-[#5C4033] w-[219px] h-[185px]">
                <div class="p-4">
                    <h1 class="font-semibold text-[16px] text-[#F5E9D3]">{{ $value['name'] }}</h1>
                    <h1 class="font-bold text-[16px] leading-4 text-[#F5E9D3]">Rp. {{ number_format($value['price'], 0, ',', '.') }}</h1>
                    <h1 class="leading-4 text-[16px] text-[#F5E9D3]">{{ $value['description'] }}</h1>
                    <h1 class="leading-4 text-[16px] text-[#F5E9D3]">Jumlah: {{ $value['quantity'] }}</h1>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="flex justify-center mt-16">
    <a href="{{ route('detail-payment')}}" class="w-3/4">
        <button
        type="button"
        class="rounded w-full h-16 inline-block !bg-[#7B5A49] px-6 pb-2 pt-2.5 text-3xl font-medium leading-normal text-[#F5E9D3] shadow-sm transition duration-150 ease-in-out hover:bg-[#6B4B3A] hover:shadow-md focus:bg-[#4B3226] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#3E2721] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" onclick="window.location.href='{{ route('detail-payment') }}'">
        Lanjut ke Pembayaran
        </button>
    </a>    
</div>


@endsection
