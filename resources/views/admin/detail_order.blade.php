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
        <div class="flex flex-col w-full py-8 rounded-lg shadow-md  mb-10">
            <h1 class="text-center text-md font-bold ">Name : {{ $item->barangJual->name }}</h1>
            <h1 class="text-center text-md font-bold ">Quantity : {{ $item->quantity }}</h1>
            <h1 class="text-center text-md font-bold ">Price : {{ $item->price }}</h1>
        </div>
    @endforeach
@endsection
