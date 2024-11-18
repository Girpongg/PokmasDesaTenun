@extends('user.layout')
@section('style')
    <style>
        .cart-button {
            box-shadow: 0px 0px 20px -5px rgba(0,0,0,0.3);
            -webkit-box-shadow: 0px 0px 20px -5px rgba(0,0,0,0.3);
            -moz-box-shadow: 0px 0px 20px -5px rgba(0,0,0,0.3);
        }
    </style>
@endsection
@section('content')
<h1 class="text-4xl my-4 text-center font-bold">
    Katalog
</h1>

<a href=" {{ route('cart')}}">
    <button class="cart-button fixed bottom-4 right-4 hover:bg-gray-500 p-3 rounded-full">
        {{-- <img src="{{ asset('assets/cart.png') }}" alt="Button Image" class="w-14 h-14 p-1"> --}}
        <svg width="50" height="50" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect width="90" height="90" fill="url(#pattern0_219_5)"/>
            <defs>
            <pattern id="pattern0_219_5" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_219_5" transform="scale(0.0111111)"/>
            </pattern>
            <image id="image0_219_5" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAC9ElEQVR4nO2cvWsUYRDGf0bMoWAQSSOxNlrYRq1SCP4FKtai2CRpIoKNoKZXUUFJYWxFFNJYqZ0xwa9a7SL4gd93EUTjK4tvkcL3krvb3ZmdnR88cEVgZh7udt/ZZwk4juM4juNIsAm4CnwFQkKfgPvACWCjSJcGuNbG4P/pNTAi3XTV6AN+dGh0piVgn3TzdTA60xtgs/QAli8dK3Vauvkqkd3cLgNfujD6pXTzllgPHGlj9i7pBq3xJGH0SenGrHE2YfRD6casMZIw+hewRbo5a0fBdwmzD0s3Z40bCaNvSjdmjYMJoz/Eb7yTEwPAz4TZe/Mq4vzjQcLo825QvkwmjH6Wc53aM5ww+g+wvfbu5MyrhNnH8y5Udy728MQvGFGWOl0A+os0+oCCQYMSZWYXRgNoKhgyKNBHCuaOgiGDAn0u2uhjCoYMCjRbtNHb4pEu1FzjlMBTBYMGYWV7ReGcUzBoENQiJbFHwbBBUNMawoBQA5UaeMwoGDgIaBkYLNPoQwqGDgJaQFEYEAxrCkVhQDCsUU1hQDCqVnzeUzo7FQwfLK3d3YQBwaBKWbtTXFJgQLC0dtc9DFhEmOzm8F2BEcHK2t2OuwqMCAVLxXuG1sOA5bLX7rqGAQsownIYMIUiLIcBoyjCahjQklq76xYGzKKQGQXGmFq76xQGDKOQAWNhgPjaXZcwYBrFTCowyNTanWKHAoPyUHYJ3IpyHikwqlfdpgLsV2BUL/oN7KYiXFdgWLc6Q4XYANxSYFqnugKso2L0xVPIkgID1/IG/1EqziBwKp6x38cH6Rquw2+Be8CY/0Mux3Ecx3GcbmgAE8DjmMW14ufxgnM5qboiDAEv2pxrn8e/sVJXhMYqw64cumGgrhgTHWxsYwbqijHfwcBzBuqK0exg4KaBumI0Oxj4m4G6Ysz7paMcxoVuSlJ1xWjEI9Rajln9BuqKMrTK0EUuLBJ1RemPP9G5eKNqxlcTxgr+RknVdRzHcRzHcRzHQRV/ASvoI7knhlT4AAAAAElFTkSuQmCC"/>
            </defs>
        </svg>            
    </button>
</a>
<div class="grid grid-cols-5 px-20 place-items-center">
    @foreach ($catalog as $item)
        <div class=" bg-gray-200 w-[220px] h-[385px] my-5 cursor-pointer drop-shadow-xl" onclick="window.location.href='{{ route('detail-barang', $item->id) }}'">
            <div class="border border-gray-200">
                <img src="{{ $item->image }}" alt="" class="w-full h-[200px]" />
            </div>
            <div class="bg-[#5C4033] w-[220px] h-[185px]">
                <div class="p-4">
                    <h1 class=" font-semibold text-[16px] text-[#F5E9D3]">{{ $item->name }}</h1>
                    <h1 class=" font-bold text-[16px] leading-4 text-[#F5E9D3]">Rp. {{ $item->price }}</h1>
                    <h1 class=" leading-5 mt-2 text-[12px] text-[#F5E9D3]">Stok Tersisa {{ $item->stock }} pcs</h1>
                    <h1 class=" leading-4 text-[12px] text-[#F5E9D3]">{{ $item->description }}</h1>
                </div>
                <a class="flex justify-center" href="{{ route('add-cart', $item->id)}}">
                    <button class="w-4/5 inline-block !bg-[#dfdfdf] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-2xl transition duration-150 ease-in-out hover:bg-[#C29545] hover:shadow-md focus:bg-[#C29545] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#B1833F] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                        Masukkan ke Tas
                    </button>
                </a>
            </div>
        </div>            
    @endforeach
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>
