@extends('admin.layout')

@section('content')
<div class="flex flex-col w-full py-8 rounded-lg shadow-xl items-center justify-center mb-10">
    <h1 class="text-center text-4xl uppercase font-bold mb-2">{{ $nama->customer_name }}</h1>
    <h1 class="text-center text-md uppercase font-bold mb-2">Order : {{ $nama->order_date }}</h1>

</div>
<a href="{{ route('viewOrder') }}">
    <button class="bg-blue-500 p-2 px-5 rounded-lg text-white hover:bg-blue-900 mb-5">
        Back
    </button>
</a>
@foreach ($order as $item)
    <div class="grid grid-cols-6 w-full py-8 rounded-lg shadow-md mb-10 bg-slate-400">
        <div class="col-span-2 px-[30px] h-[200px]">
            <img src="{{asset('storage/uploads/catalog/' . $item->barangJual->image)}}" alt="" class="w-full h-full">
        </div>
        <div class="col-span-4">
            <div class="flex flex-col gap-5">
                <div>
                    <h1 class="text-left text-xl font-bold ">Name : {{ $item->barangJual->name }}</h1>
                    <h1 class="text-left text-xl font-bold ">Quantity : {{ $item->quantity }}</h1>
                    <h1 class="text-left text-xl font-bold ">Price : {{ $item->price }}</h1>
                </div>

                <div clas="flex self-end">
                    <button class="bg-blue-500 p-2 px-5 rounded-lg text-white hover:bg-blue-900 mb-5">
                        <a href="">Accept</a>
                    </button>

                    <button class="bg-red-500 p-2 px-5 rounded-lg text-white hover:bg-red-900 mb-5">
                        <a href="">Decline</a>
                    </button>

                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection