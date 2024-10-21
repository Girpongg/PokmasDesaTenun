@extends('admin.layout')

@section('content')
<div class="flex flex-col w-full py-8 rounded-lg shadow-xl items-center justify-center mb-10">
    <h1 class="text-center text-4xl uppercase font-bold mb-2">Inventory</h1>
</div>
<div class="flex flex-col w-full py-8 rounded-lg shadow-xl items-center justify-center mb-10 px-8">
    <div class="relative w-full mb-3" data-te-input-wrapper-init>
        <input type="text"
            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
            id="name" name="name" placeholder="Name" value="" />
        <label for="name"
            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">
            Nama Barang
        </label>
    </div>
    <div class="w-full mb-3">
        <select id="category" name="category" data-te-select-init data-te-select-filter="true">
            <option value="" selected disabled hidden></option>
            @foreach ($kategori as $item)
                <option value="{{ $item->id}}">{{ $item->name }}</option>
            @endforeach
        </select>
        <label data-te-select-label-ref>Kategori</label>
    </div>
    <div class="relative w-full mb-3" data-te-input-wrapper-init>
        <input type="number"
            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
            id="quantity" name="quantity" placeholder="Quantity" value="" />
        <label for="url_ppt"
            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">
            Quantity
        </label>
    </div>
    <div class="w-full mb-3">
        <select id="unit" name="unit" data-te-select-init>
            <option value="" selected disabled hidden></option>
            @foreach ($unit as $item)
                <option value="{{$item}}">{{ $item }}</option>
            @endforeach
        </select>
        <label data-te-select-label-ref>Unit</label>
    </div>
    <div class="relative w-full mb-3" data-te-input-wrapper-init>
        <input type="text"
            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
            id="price" name="price" placeholder="Quantity" value="" />
        <label for="url_ppt"
            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">
            Price
        </label>
    </div>

    <div class="relative w-full mb-3 ">
        <div>
            <button id="submit" type="button" data-te-ripple-init data-te-ripple-color="light"
                class="save w-full inline-block rounded bg-primary px-6 pb-2 pt-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                Save Changes
            </button>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('#submit').on('click', async function () {
            var name = $('#name').val();
            var unit = $('#unit').val();
            var quantity = $('#quantity').val();
            var price = $('#price').val();
            var category = $('#category').val();
            await $.ajax({
                url: "{{ route(name: 'inventory.store') }}",
                type: "POST",
                data: {
                    name: name,
                    unit: unit,
                    quantity: quantity,
                    price: price,
                    category: category,

                    _token: "{{ csrf_token() }}"
                },
                success: async function (data) {
                    if (data.success) {
                        await Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: data.message,
                            customClass: {
                                confirmButton: 'swal2-confirm'
                            }
                        });
                        window.location.reload();
                    } else {
                        await Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: data.message,
                        })
                    }
                },
                error: async function (err) {
                    // console.log(JSON.parse(err));    
                    await Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: err.responseJSON.message,
                    })
                }
            });

        })
    });

</script>
@endsection