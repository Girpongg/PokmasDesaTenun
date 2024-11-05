    @extends('user.layout')

    @section('content')
        <div class="flex justify-center">
            <hr class="h-px w-[1200px] mt-10 mb-5 bg-gray-700 border-0">
        </div>
        <div class="grid grid-cols-5 px-20 place-items-center">
            @foreach ($catalog as $item)
                <div class=" bg-gray-200 w-[220px] h-[385px] my-5 cursor-pointer"
                    onclick="window.location.href='{{ route('detail-barang', $item->id) }}'">
                    <div class="">
                        <img src="{{ $item->image }}" alt="" class="w-full h-[200px]" />
                    </div>
                    <div class="bg-[#5C4033] w-[220px] h-[185px]">
                        <div class="p-4">
                            <h1 class=" font-semibold text-[16px] text-[#F5E9D3]">{{ $item->name }}</h1>
                            <h1 class=" font-bold text-[16px] leading-4 text-[#F5E9D3]">Rp. {{ $item->price }}</h1>
                            <h1 class=" leading-5 mt-2 text-[12px] text-[#F5E9D3]">Stok Tersisa {{ $item->stock }} pcs</h1>
                            <h1 class=" leading-4 text-[12px] text-[#F5E9D3]">{{ $item->description }}</h1>
                        </div>
                        <div class="flex justify-center">
                            <button type="button"
                                class="w-4/5 inline-block !bg-[#dfdfdf] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-2xl transition duration-150 ease-in-out hover:bg-[#C29545] hover:shadow-md focus:bg-[#C29545] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#B1833F] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                                onclick="event.stopPropagation(); addToCart( {{ $item->id }} );" data-twe-toggle="modal"
                                data-twe-target="#exampleModalXl" data-twe-ripple-init data-twe-ripple-color="light">
                                Masukkan ke Tas
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!--Extra large modal-->
        <div data-twe-modal-init
            class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
            id="exampleModalXl" tabindex="-1" aria-labelledby="exampleModalXlLabel" aria-modal="true" role="dialog">
            <div data-twe-modal-dialog-ref
                class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px] min-[1200px]:max-w-[1140px]">
                <div
                    class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
                    <div
                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                        <!-- Modal title -->
                        <h5 class="text-xl font-medium leading-normal text-surface dark:text-white"
                            id="exampleModalXlLabel">
                            Extra large modal
                        </h5>
                        <!-- Close button -->
                        <button type="button"
                            class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300"
                            data-twe-modal-dismiss aria-label="Close">
                            <span class="[&>svg]:h-6 [&>svg]:w-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </span>
                        </button>
                    </div>

                    <!-- Modal body -->
                    <div class="relative p-4">
                        <div class=" bg-gray-200 w-[220px] h-[385px] my-5 cursor-pointer"
                            onclick="window.location.href='{{ route('detail-barang', $item->id) }}'">
                            <div class="">
                                <img src="{{ $item->image }}" alt="" class="w-full h-[200px]" />
                            </div>
                            <div class="bg-[#5C4033] w-[220px] h-[185px]">
                                <div class="p-4">
                                    <h1 class=" font-semibold text-[16px] text-[#F5E9D3]">{{ $item->name }}</h1>
                                    <h1 class=" font-bold text-[16px] leading-4 text-[#F5E9D3]">Rp. {{ $item->price }}
                                    </h1>
                                    <h1 class=" leading-5 mt-2 text-[12px] text-[#F5E9D3]">Stok Tersisa {{ $item->stock }}
                                        pcs</h1>
                                    <h1 class=" leading-4 text-[12px] text-[#F5E9D3]">{{ $item->description }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <script>
    const array = [];
    function addInput() {
        const inputContainer = document.getElementById('inputContainers');

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

    function addToCart(id){
        array.push(id);
        console.log(array);
    }
</script> --}}

        <script>
            function addToCart(id) {
                $.ajax({
                    url: "{{ route('cart.store') }}",
                    type: "POST",
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: xhr.responseJSON ? xhr.responseJSON.message : 'Something went wrong!',
                            showConfirmButton: true
                        });
                    }
                });
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>
    @endsection
