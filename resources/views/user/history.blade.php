@extends('user.layout')

@section('content')
<div class="container mx-auto px-4 py-8 mt-10">
    <div class="space-y-6">
        @if($histories->isEmpty())
            <p class="text-center text-gray-500 font3">Tidak ada data history untuk ditampilkan.</p>
        @else
            @foreach ($histories as $history)

            <div class="bg-white shadow-lg rounded-xl overflow-hidden flex flex-col lg:flex-row items-center border border-gray-200 relative">

                <div class="flex-1 p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 font3">Order ID: {{ $history->user_id }}</h2>
                    <div class="space-y-2">
                        <p class="text-gray-600 font3"><strong>Customer Name:</strong> {{ $history->customer_name }}</p>
                        <p class="text-gray-600 font3"><strong>Order Date:</strong> {{ $history->order_date }}</p>
                        <p class="text-gray-600 font3"><strong>Address:</strong> {{ $history->address }}</p>
                        <p class="text-gray-600 font3"><strong>Total Price:</strong> Rp{{ number_format($history->total_price, 0, ',', '.') }}</p>
                        <p class="text-gray-600 font3"><strong>Tipe:</strong> 
                            @if ($history->tipe == 1)
                                Katalog
                            @elseif ($history->tipe == 2)
                                Custom
                            @else
                                Tidak Diketahui
                            @endif
                        </p>
                        <p class="text-gray-600 font3"><strong>Status:</strong> 
                            @if ($history->is_done == 0)
                                Sedang dalam proses
                            @elseif ($history->is_done == 1)
                                Produk sudah jadi
                            @elseif ($history->is_done == 2)
                                Sudah diambil
                            @else
                                Status tidak diketahui
                            @endif
                        </p>
                    </div>
                </div>

                <div class="absolute bottom-4 right-4 px-4 py-2 rounded-lg" style="background: linear-gradient(to right, #5C4033, #4D4C1C)">
                    <a href="" class=" text-white block rounded-lg shadow font3 hover:bg-[#5C4033] hover:shadow-md focus:bg-[#d8d8d8] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#bfbfbf] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong" >
                        LIHAT DETAIL
                    </a>
                </div>
            </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
