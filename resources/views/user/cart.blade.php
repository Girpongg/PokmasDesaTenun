@extends('user.layout')
@section('content')
    <div class=" min-h-20"></div>
    <div class="container mx-auto my-10 px-5">
        <div class="text-center mb-14">
            <h1 class="text-[54px] font-bold mb-2 custom-span text-[#5C4033]" data-aos="zoom-in-up">Cart</h1>
        </div>
        <a href="{{ route('cart') }}">
            <div class="fixed z-50 bottom-4 right-4">
                <div class="relative">
                    <button class="bg-gray-200 hover:bg-gray-500 p-3 rounded-full shadow-2xl">
                        <img src="{{ asset('assets/cart.png') }}" alt="Cart Button" class="w-14 h-14 p-1">
                    </button>
                    <span
                        class="absolute top-0 right-0 bg-[rgb(92,64,51)] border-white border text-white text-xs font-bold rounded-full w-6 h-6 flex items-center justify-center shadow-lg">
                        {{ count(session('cart', [])) }}
                    </span>
                </div>
            </div>
        </a>
        
        @if ($cart == null)
            <div class="text-center">
                <h1 class="text-[30px] font3 font-bold mb-2 p-24 custom-span text-[#5C4033]" data-aos="zoom-in-up">
                    your cart is empty, please add some items to your cart!
                </h1>
            </div>
        @else
            <div class="grid grid-cols-5 px-12 place-items-center">
                @foreach ($cart as $value)
                    <div class="relative bg-gray-200 w-[220px] h-[385px] my-5 cursor-pointer">
                        <!-- Tombol silang -->
                        <a href="{{ route('delete-from-cart', $value) }}">
                            <button
                                class="absolute top-2 right-2 text-white bg-red-500 rounded-full w-6 h-6 flex items-center justify-center hover:bg-red-700 focus:outline-none">
                                &times;
                            </button>
                        </a>
                        <!-- Gambar produk -->
                        <div class="">
                            <img src="{{ $value['image'] }}" alt="" class="w-full h-[200px]" />
                        </div>

                        <!-- Informasi produk -->
                        <div class="bg-[#5C4033] w-[220px] h-[185px]">
                            <div class="p-4">
                                <h1 class="font-semibold text-[16px] text-[#F5E9D3]">{{ $value['name'] }}</h1>
                                <h1 class="font-bold text-[16px] leading-4 text-[#F5E9D3]">Rp.
                                    {{ number_format($value['price'], 0, ',', '.') }}</h1>
                                <h1 class="leading-4 text-[16px] text-[#F5E9D3]">{{ $value['description'] }}</h1>
                                <h1 class="leading-4 text-[16px] text-[#F5E9D3]">Jumlah: {{ $value['quantity'] }}</h1>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

    </div>
@endsection
