@extends('admin.layout')

@section('content')
<!-- Order from catalog -->
<div class="text-left">
    <h1 class="text-3xl font-bold">Orders</h1>
</div>
<div class="text-left lg:mt-[40px]">
    <h1 class="text-xl font-medium">From Catalog</h1>
</div>

<div class="flex flex-row flex-wrap lg:mt-[20px] gap-7">
    <!-- Cards -->
    <div class="p-2 w-[250px] h-[300px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] bg-white rounded-xl grid grid-rows-7">
        <div class="row-span-6 flex flex-col gap-1">
        <img src="{{ asset('img/ulos.jpg') }}" alt="Description of the image" class="w-full h-[45%] rounded-xl object-cover">
        <h1 class="text-lg font-medium">Kain Sarung Ulos</h1>
        <p class="text-sm font-medium">Harga:  <span class="text-sm">Rp. 120.000</span> </p>
        </div>
        <button class="bg-black text-white w-full rounded-lg py-2">Details</button>
    </div>
    <div class="p-4 w-[250px] h-[300px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] bg-white rounded-xl flex flex-row">
        <h1>
            
        </h1>
    </div>
</div>
<!-- Requested motif tenun -->
<div class="text-left lg:mt-[20px]">
    <h1 class="text-xl font-medium">By Request</h1>
</div>
<div class="flex flex-row flex-wrap lg:mt-[20px]">
    <!-- Cards -->
    <div class="w-[250px] h-[300px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] bg-white rounded-xl">
        <h1>
            
        </h1>
    </div>
</div>
@endsection