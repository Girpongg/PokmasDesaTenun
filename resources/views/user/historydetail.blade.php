@extends('user.layout')

@section('content')
<div class="container mx-auto px-4 py-8 mt-10">

    <div class="text-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800 font3">Detail Order ID #1</h1>
    </div>

    <div class="space-y-6">
        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-xl overflow-hidden flex flex-col lg:flex-row items-center border border-gray-200 relative">

            <div class="w-full lg:w-1/3 h-48"> 
                <img src="{{ asset('assets/detail1.jpg') }}" alt="Sarung Tenun Biru" class="object-contain w-full h-full"> <!-- Menggunakan object-contain agar gambar tidak terpotong dan sesuai ukuran card -->
            </div>

            <div class="flex-1 p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4 font3">Nama Barang: Sarung Tenun Biru</h2>
                <div class="space-y-2">
                    <p class="text-gray-600 font3"><strong>Jumlah:</strong> 2</p>
                    <p class="text-gray-600 font3"><strong>Harga:</strong> Rp50.000</p>
                    <p class="text-gray-600 font3"><strong>Total:</strong> Rp100.000</p>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-xl overflow-hidden flex flex-col lg:flex-row items-center border border-gray-200 relative">
   
            <div class="w-full lg:w-1/3 h-48"> 
                <img src="{{ asset('assets/detail2.jpeg') }}" alt="Sarung Tenun Hijau" class="object-contain w-full h-full"> <!-- Menggunakan object-contain agar gambar tidak terpotong dan sesuai ukuran card -->
            </div>

            <div class="flex-1 p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4 font3">Nama Barang: Sarung Tenun Hijau</h2>
                <div class="space-y-2">
                    <p class="text-gray-600 font3"><strong>Jumlah:</strong> 1</p>
                    <p class="text-gray-600 font3"><strong>Harga:</strong> Rp75.000</p>
                    <p class="text-gray-600 font3"><strong>Total:</strong> Rp75.000</p>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-xl overflow-hidden flex flex-col lg:flex-row items-center border border-gray-200 relative">
 
            <div class="w-full lg:w-1/3 h-48">
                <img src="{{ asset('assets/detail3.jpeg') }}" alt="Sarung Tenun Kuning" class="object-contain w-full h-full"> <!-- Menggunakan object-contain agar gambar tidak terpotong dan sesuai ukuran card -->
            </div>

            <div class="flex-1 p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4 font3">Nama Barang: Sarung Tenun Kuning</h2>
                <div class="space-y-2">
                    <p class="text-gray-600 font3"><strong>Jumlah:</strong> 3</p>
                    <p class="text-gray-600 font3"><strong>Harga:</strong> Rp50.000</p>
                    <p class="text-gray-600 font3"><strong>Total:</strong> Rp150.000</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
