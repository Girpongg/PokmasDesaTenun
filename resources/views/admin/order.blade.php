@extends('admin.layout')

@section('content')

<style>
    #inputContainer::-webkit-scrollbar {
        width: 0;
        height: 0;
    }
    
    #inputContainer:hover::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }
    
    #inputContainer::-webkit-scrollbar-thumb {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 4px;
    }
</style>

<!-- Order from catalog -->
<div class="flex flex-col w-full py-8 rounded-lg shadow-xl items-center justify-center mb-10">
    <h1 class="text-center text-4xl uppercase font-bold mb-2">Incoming Order</h1>
</div>

<!-- From Catalog -->
<div class="text-left lg:mt-[40px]">
    <h1 class="text-xl font-medium">From Catalog</h1>
</div>

<div class="flex flex-row flex-wrap lg:mt-[20px] gap-7">
    <!-- Cards -->
    <div class="p-2 w-[250px] h-[300px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] bg-white rounded-xl grid grid-rows-7">
        <div class="row-span-6 flex flex-col gap-1">
            <img src="{{ asset('img/ulos.jpg') }}" alt="Description of the image"
                class="w-full h-[45%] rounded-xl object-cover">
            <h1 class="text-lg font-medium">Kain Sarung Ulos</h1>
            <p class="text-sm font-medium">Kuantitas: <span class="text-sm font-normal">2</span> </p>
            <p class="text-sm font-medium">Harga: <span class="text-sm font-normal">Rp. 120.000</span> </p>
            <p class="text-sm font-medium">Pembeli: <span class="text-sm font-normal">Agung Salvatoni</span> </p>
        </div>
        <button class="bg-black text-white w-full rounded-lg py-2" onclick="openModal('modalCatalog')">Details</button>
    </div>
</div>

<div class="text-left lg:mt-[20px]">
    <h1 class="text-xl font-medium">By Request</h1>
</div>

<div class="flex flex-row flex-wrap lg:mt-[20px]">
    <!-- Cards -->
    <div class="p-2 w-[250px] h-[300px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] bg-white rounded-xl grid grid-rows-7">
        <div class="row-span-6 flex flex-col gap-1">
            <img src="{{ asset('img/ntt.jpg') }}" alt="Description of the image"
                class="w-full h-[45%] rounded-xl object-cover">
            <h1 class="text-lg font-medium">Kain Sarung Motif Kelelawar</h1>
            <p class="text-sm font-medium">Kuantitas: <span class="text-sm font-normal">2</span> </p>
            <p class="text-sm font-medium">Harga: <span class="text-sm font-normal">Menunggu konfirmasi</span> </p>
            <p class="text-sm font-medium">Pembeli: <span class="text-sm font-normal">Agung Salvatoni</span> </p>
        </div>
        <button class="bg-black text-white w-full rounded-lg py-2" onclick="openModal('modalRequest')">Details</button>
    </div>
</div>

<!-- Modals -->

<!-- Choose Barang Modal -->
<div id="chooseBarangModal" class="hidden fixed inset-0 z-[55] bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-[90%] md:w-[50%] relative">
        <!-- Close Icon Button -->
        <button class="absolute top-2 right-2 text-gray-500" onclick="closeModal('chooseBarangModal')">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <h2 class="text-xl font-bold mb-4">Choose Barang</h2>
        <div class="flex flex-col gap-3">
            <!-- List Barang Dummy -->
            <div onclick="selectBarang('Benang Lusi Merah')"
                class="cursor-pointer flex items-center gap-2 p-2 hover:bg-gray-100 rounded">
                <img src="{{ asset('img/ulos.jpg') }}" class="w-12 h-12 object-cover rounded">
                <span>Benang Lusi Merah</span>
            </div>
            <div onclick="selectBarang('Benang Pakan Hitam')"
                class="cursor-pointer flex items-center gap-2 p-2 hover:bg-gray-100 rounded">
                <img src="{{ asset('img/ntt.jpg') }}" class="w-12 h-12 object-cover rounded">
                <span>Benang Pakan Hitam</span>
            </div>
        </div>
    </div>
</div>

<!-- Catalog Modal -->
<div id="modalCatalog" class="hidden fixed inset-0 z-50 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-[90%] md:w-[50%] relative">
        <!-- Close Icon Button -->
        <button class="absolute top-2 right-2 text-gray-500" onclick="closeModal('modalCatalog')">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <h2 class="text-xl font-bold mb-4">Order Details - From Catalog</h2>
        <p class="mb-2"><strong>Product:</strong> Kain Sarung Ulos</p>
        <p class="mb-2"><strong>Quantity:</strong> 2</p>
        <p class="mb-2"><strong>Price:</strong> Rp. 120.000</p>
        <p class="mb-4"><strong>Buyer:</strong> Agung Salvatoni</p>

        <!-- Footer for Accept and Reject -->
        <div class="flex justify-end mt-6 gap-3">
            <button class="bg-red-500 text-white px-4 py-2 rounded" onclick="rejectOrder()">Reject</button>
            <button class="bg-green-500 text-white px-4 py-2 rounded" onclick="acceptOrder()">Accept</button>
        </div>
    </div>
</div>

<!-- Request Modal -->
<div id="modalRequest" class="hidden fixed inset-0 z-50 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-[90%] md:w-[50%] relative">
        <button class="absolute top-2 right-2 text-gray-500" onclick="closeModal('modalRequest')">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="grid grid-cols-2">
            <div class="flex flex-row flex-wrap gap-1">
                <!-- Image -->
                <img src="{{ asset('img/ntt.jpg') }}" alt="Description of the image"
                    class="w-auto h-auto rounded-xl object-cover">
                <h1 class="font-bold text-xl mt-4">
                    Kain Sarung Motif Kelelawar
                </h1>
                <h1 class="text-sm font-medium">Pembeli: <span class="text-sm font-normal">Agung Salvatoni</span> </h1>
                <h1 class="text-sm font-medium">Alamat: <span class="text-sm font-normal">Royal Park 1 C12/09,
                        Citraland, Surabaya</span> </h1>
                <h1 class="text-sm font-medium">Kuantitas: <span class="text-sm font-normal">2</span> </h1>
            </div>
            <div>
                <h1 class="text-xl font-bold">Rincian</h1>
                <div class="flex flex-col space-y-2 mt-3">
                    <div class="flex items-center space-x-2">
                        <h1 class="text-sm font-medium">Sisir:</h1>
                        <input type="text" class="border rounded-lg p-1 max-w-xs w-full" placeholder="Enter Sisir">
                    </div>
                    <div class="flex items-center space-x-2">
                        <h1 class="text-sm font-medium">Panjang:</h1>
                        <input type="text" class="border rounded-lg p-1 max-w-xs w-full" placeholder="Enter Panjang">
                    </div>
                    <div class="flex items-center space-x-2">
                        <h1 class="text-sm font-medium">Lebar:</h1>
                        <input type="text" class="border rounded-lg p-1 max-w-xs w-full" placeholder="Enter Lebar">
                    </div>
                </div>
                <h1 class="text-xl font-bold mt-4">Bahan</h1>
                <div id="inputContainer" class="space-y-2 mt-3 h-[100px] overflow-hidden overflow-y-scroll">
                    <!-- Tambah Inputform Baru -->
                </div>
                <button type="button" id="addMoreButton" class="bg-blue-500 text-white px-2 py-1 rounded-lg mt-3"
                    onclick="addInput()">+ Add More</button>
            </div>
        </div>

        <div class="flex justify-end mt-6 gap-3">
            <button class="bg-red-500 text-white px-4 py-2 rounded" onclick="rejectOrder()">Reject</button>
            <button class="bg-green-500 text-white px-4 py-2 rounded" onclick="acceptOrder()">Accept</button>
        </div>
    </div>
</div>

<script>

    function openModal(modalId) {
        document.getElementById(modalId).classList.remove('hidden');
    }


    function closeModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
    }

    //tambah input barang
    function addInput() {
        const inputContainer = document.getElementById('inputContainer');

        const newInput = document.createElement('input');
        newInput.type = 'text';
        newInput.classList.add('border', 'rounded-lg', 'p-1', 'max-w-xs', 'w-full', 'cursor-pointer');
        newInput.placeholder = 'Choose Barang';

        newInput.onclick = function () {
            document.querySelectorAll('.active-input').forEach(el => el.classList.remove('active-input'));
            newInput.classList.add('active-input');
            openModal('chooseBarangModal');
        };

        inputContainer.appendChild(newInput);
    }

    //pilih barang dan masukkan ke input
    function selectBarang(barangName) {
        const activeInput = document.querySelector('.active-input');
        if (activeInput) {
            activeInput.value = barangName;
            activeInput.classList.remove('active-input');
        }
        closeModal('chooseBarangModal');
    }

</script>

@endsection