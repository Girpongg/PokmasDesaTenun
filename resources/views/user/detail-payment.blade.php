@extends('user.layout')

@section('style')
    <style>
        .form-cont * {
            color: #5c4033;
        }
    </style>
@endsection
@section('content')
    <div class="w-screen pt-24">
        <h1 class="w-full text-center font-[Satisfy] text-5xl font-bold text-[#5c4033]">PEMBAYARAN</h1>
        <div class="w-full justify-center flex">
            <form id="payment-form" class="contents">
                <div class="w-[500px] shadow-xl h-fit p-8 form-cont gap-y-4 flex flex-col mb-16">
                    <div class="w-full">
                        <p class="font-semibold">Nama</p>
                        <input type="text" name="customer_name"
                            class="w-full h-[35px] border-2 rounded border-[#5c4033] pl-1">
                    </div>
                    <div class="w-full">
                        <p class="font-semibold">Nomor HP</p>
                        <input type="text" name="customer_wa"
                            class="w-full h-[35px] border-2 rounded border-[#5c4033] pl-1">
                    </div>
                    <div class="w-full">
                        <p class="font-semibold">Alamat</p>
                        <input type="text" name="address" class="w-full h-[35px] border-2 rounded border-[#5c4033] pl-1">
                    </div>
                    <div class="w-full">
                        <p class="font-semibold">Bukti Transfer</p>
                        <input
                            class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border-2 border-[#5c4033] bg-transparent bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-surface transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:me-3 file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-e file:border-solid file:border-inherit file:bg-transparent file:px-3  file:py-[0.32rem] file:text-surface focus:border-primary focus:text-gray-700 focus:shadow-inset focus:outline-none"
                            type="file" name="image" />
                    </div>
                    <button type="button" data-te-ripple-init data-te-ripple-color="light" id="submit"
                        class="w-full h-[40px] bg-[#5c4033] !text-white font-semibold rounded mt-4">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('#submit').on('click', function() {
                Swal.fire({
                    icon: 'warning',
                    title: 'Konfirmasi Pembayaran',
                    text: 'Apakah anda yakin ingin memproses pembayaran ini?',
                    showDenyButton: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        const data = new FormData($('#payment-form')[0]);
                        fetch(`{{ route('katalog.store') }}`, {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                },
                                body: data
                            }).then(response => response.json())
                            .then(response => {
                                if (response.success) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Berhasil',
                                        text: 'Pembayaran berhasil'
                                    }).then(() => {
                                        window.location.reload();
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Gagal',
                                        text: response.message
                                    });
                                }
                            }).catch(error => {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal',
                                    text: 'Terjadi kesalahan pada sistem. Silahkan coba lagi'
                                });
                            });
                    }
                });
            });
        });
    </script>
@endsection
