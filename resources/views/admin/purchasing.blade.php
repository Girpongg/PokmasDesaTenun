@extends('admin.layout')

@section('content')

<style>
    .status-pending {
        font-weight: bold;
        color: red;
    }

    .status-done {
        font-weight: bold;
        color: green;
    }
</style>

<div class="flex flex-col w-full py-8 rounded-lg shadow-xl items-center justify-center mb-10">
    <h1 class="text-center text-4xl uppercase font-bold mb-2">PURCHASE ORDERS</h1>
</div>

<div class="flex flex-col w-full  rounded-lg shadow-xl items-center justify-center mb-2">
    <div class="w-full flex flex-col items-end mb-3 px-8 pt-5">
        <div>
            <button
                class="btn-detail mb-7 rounded bg-primary px-6 pb-2 pt-2.5 text-xs text-center font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgb(59,113,202)],0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgb(59,113,202)],0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgb(59,113,202)],0_4px_18px_0_rgba(20,164,77,0.2)rgb(59,113,202)]rgba(20,164,77,0.1)]"
                data-te-toggle="modal" data-te-target="#Modal">New Purchase Order
            </button>
        </div>

        <div class="relative mb-4 flex w-full flex-wrap items-stretch">
            <input id="datatable-search-input" type="search"
                class="relative m-0 -mr-0.5 block w-[1px] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                placeholder="Search" aria-label="Search" aria-describedby="button-addon1" />
            <!--Search button-->
            <button
                class="relative z-[2] flex items-center rounded-r bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
                type="button" id="advanced-search-button" data-te-ripple-init data-te-ripple-color="light">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd"
                        d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>
    <div id="datatable-kategori" class="w-full px-5 py-5" data-te-max-height="460"></div>
</div>


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
                    Add Purchase Orders
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
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input type="text"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="title" name="title" placeholder="name" />
                    <label for="name"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">
                        Title
                    </label>
                </div>
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input type="date"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="orderDate" name="orderDate" placeholder="Order Date" />
                    <label for="name"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">
                        Order Date
                    </label>
                </div>
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input type="date"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="deliveryDate" name="deliveryDate" placeholder="Arrived Date" />
                    <label for="name"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">
                        Arrived Date
                    </label>
                </div>
                <div class="relative mb-3">
                    <select name="supplier_id" id="supplier"
                        class="peer block min-h-[auto] w-full rounded border-[0.1px] border-slate-200 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0">
                        <option value="">Select Supplier</option>
                        @forelse ($suppliers as $supplier)
                            <option value="{{ $supplier->id }}">{{ $supplier->name}}</option>
                        @empty
                            <option value="">No Supplier</option>
                        @endforelse
                    </select>
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
@endsection()
@section('script')
<script>
    $(document).ready(function () {
        $('#submit').click(async function () {
            var title = $('#title').val();
            var orderDate = $('#orderDate').val();
            var deliveryDate = $('#deliveryDate').val();
            var supplier = $('#supplier').val();
            var status = '0';
            $.ajax({
                url: "{{route('purchase.store')}}",
                type: 'POST',
                data: {
                    title: title,
                    orderDate: orderDate,
                    deliveryDate: deliveryDate,
                    supplier_id: supplier,
                    status: status,
                    _token: '{{ csrf_token() }}'
                },
                success: async function (data) {
                    if (data.success) {
                        await $('#Modal').modal('hide');
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
                error: function (err) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: err.responseJSON.message,
                    })
                }
            });
        });
    });


    const customDatatable = document.getElementById('datatable-kategori');
    var data = JSON.parse(@json($purchase));

    var table = new te.Datatable(
        customDatatable, {
        columns: [{
            label: 'Judul',
            field: 'title',
            width: 200,
        },
        {

            label: 'Order Date',
            field: 'orderDate',
            width: 200,
        },
        {

            label: 'Delivery Date',
            field: 'deliveryDate',
            width: 200,
        },
        {

            label: 'Supplier',
            field: 'supplier_id',
            width: 200,
        },
        {

            label: 'Status',
            field: 'status',
            width: 100,
        },
        {
            label: 'Action',
            field: 'action',
            width: 400,
        },


        ],
        rows: data.map((item, i) => {
            return {
                ...item,
                status: item.status ? '<span style="font-weight: bold; color: green;">Diterima</span>' : '<span style="font-weight: bold; color: red;">Pending</span>',

                action: `
                                                    ${item.status ? '' : `<button id="status-${item.id}" class="btn-edit bg-primary text-white px-4 py-2 rounded-md" onclick="validatePurchase(${item.id})">Validasi</button>`}
                                                    <button id="edit-${item.id}" class="btn-edit bg-primary text-white px-4 py-2 rounded-md">Edit</button>
                                                    <button id="update-${item.id}" class="btn-update bg-primary text-white px-4 py-2 rounded-md" style="display:none;">Update</button>
                                                    <button id="cancel-${item.id}" class="btn-cancel bg-primary text-white px-4 py-2 rounded-md" style="display:none;">Cancel</button>
                                                    <button id="delete-${item.id}" class="btn-delete bg-primary text-white px-4 py-2 rounded-md">Delete</button>`


            };
        }),

    }, {
        hover: true,
        striped: true,
    }
    );
</script>

<script>
function validatePurchase(id) {
    $.ajax({
        url: `{{ route('purchase.editStatus', '') }}/${id}`,
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        success: function (data) {
            if (data.success) {
                const statusButton = $(`#status-${id}`);
                const statusText = $(`#status-text-${id}`);

                if (statusButton.length) {
                    statusButton.hide();
                }

                if (statusText.length) {
                    statusText.text('Sudah sampai');
                }

                // Show SweetAlert2 alert
                Swal.fire({
                    icon: 'success',
                    title: 'Status Updated',
                    text: 'The status has been successfully updated.',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Refresh the page when "OK" is clicked
                        location.reload();
                    }
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Failed to Update Status',
                    text: 'There was an error updating the status.',
                    confirmButtonText: 'OK'
                });
            }
        },
        error: function (xhr, status, error) {
            console.error('Error:', error);
            Swal.fire({
                icon: 'error',
                title: 'Failed to Update Status',
                text: 'There was an error updating the status.',
                confirmButtonText: 'OK'
            });
        }
    });
}
</script>
@endsection