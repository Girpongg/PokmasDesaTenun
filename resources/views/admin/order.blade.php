@extends('admin.layout')

@section('content')

<style>
    \\\\@keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .animated-input {
        animation: fadeIn 1s ease-in-out;
    }


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

<div>
    <button
        class="btn-detail rounded bg-primary px-6 pb-2 pt-2.5 text-xs text-center font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgb(59,113,202)],0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgb(59,113,202)],0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgb(59,113,202)],0_4px_18px_0_rgba(20,164,77,0.2)rgb(59,113,202)]rgba(20,164,77,0.1)]"
        data-te-toggle="modal" data-te-target="#Modal">Add Order Manually</button>
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

<!-- Modal order manual -->
<div data-te-modal-init
    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="Modal"
    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div data-te-modal-dialog-ref
        class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
        <div
            class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
            <div
                class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                <!--Modal title-->
                <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                    id="exampleModalLabel">
                    Add Order
                </h5>
                <!--Close button-->
                <button type="button"
                    class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                    data-te-modal-dismiss aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <!--Modal body-->
            <div class="relative flex-auto p-4" data-te-modal-body-ref>
                <div class="h-[400px] p-2 overflow-hidden overflow-y-scroll" id="inputContainer">
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input type="text"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="customer_name" name="customer_name" placeholder="name" />
                    <label for="name"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">
                        Nama Customer
                    </label>
                </div>

                <div class="flex gap-x-4">
                    <div class="mb-4 w-full">
                        <label for="customer_wa" class="ml-1">Nomor WA</label>
                        <input class="rounded-md w-full animated-input" name="customer_wa" id="customer_wa">
                    </div>
                    <div class="mb-4 w-full">
                        <label for="price" class="ml-1">Address</label>
                        <input class="rounded-md w-full animated-input" id="address">
                    </div>
                </div>

                <div class="mb-4 w-full">
                    <label for="price" class="ml-1">Judul pesan</label>
                    <input class="rounded-md w-full" id="title">
                </div>

                <div class="w-full mb-2">
                    <label for="price" class="ml-1">Upload foto request</label>
                    <div class="relative z-0 mt-0.5 flex w-full -space-x-px">
                        <input id="photobutton" type="file"
                            class="block w-full cursor-pointer appearance-none rounded-l-md border border-gray-200 bg-white px-3 py-2 text-sm transition focus:z-10 focus:border-blue-600 focus:outline-none focus:ring-1 focus:ring-blue-600 disabled:cursor-not-allowed disabled:bg-gray-200 disabled:opacity-75">
                        <button type="submit"
                            class="inline-flex w-auto cursor-pointer select-none appearance-none items-center justify-center space-x-1 rounded-r border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 transition hover:border-gray-300 hover:bg-gray-100 focus:z-10 focus:border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300">Save</button>
                    </div>
                </div>

                <div class="mb-4 w-full">
                    <label for="desc" class="ml-1">Deskripsi</label>
                    <input type="text" class="rounded-md w-full" id="desc">
                </div>

                <div class="flex gap-x-4">
                    <div class="mb-4 w-full">
                        <label for="customer_wa" class="ml-1">Quantity</label>
                        <input class="rounded-md w-full animated-input" name="quantity" id="quantity">
                    </div>
                    <div class="mb-4 w-full">
                        <label for="price" class="ml-1">Price</label>
                        <input class="rounded-md w-full animated-input" id="price">
                    </div>
                </div>

                <div class="flex gap-x-4">
                    <div class="mb-4 w-full">
                        <label for="customer_wa" class="ml-1">Order Date</label>
                        <input type="date" class="rounded-md w-full animated-input" name="order_date" id="order_date">
                    </div>
                    <div class="mb-4 w-full">
                        <label for="price" class="ml-1">Done Date</label>
                        <input type="date" class="rounded-md w-full animated-input" id="done_date
                        ">
                    </div>
                </div>

                </div>
            </div>
            <!--Modal footer-->
            <div
                class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                <button type="button"
                    class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                    data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                    Close
                </button>
                <button type="button" id="submit"
                    class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init data-te-ripple-color="light">
                    Save changes
                </button>
            </div>
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
        document.body.classList.add('overflow-hidden');
    }


    function closeModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
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