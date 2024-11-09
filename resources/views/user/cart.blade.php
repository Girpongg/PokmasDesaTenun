@extends('user.layout')
@section('content')
<div class="grid grid-cols-5 px-20 place-items-center">
    @foreach ($cart as $value)
        <div class="relative bg-gray-200 w-[220px] h-[385px] my-5 cursor-pointer">
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
            <div class="bg-[#5C4033] w-[220px] h-[185px]">
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
@endsection
