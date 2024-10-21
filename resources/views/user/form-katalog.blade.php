@extends('user.layout')
@include('user.includes.navbar')
@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="block max-w-md rounded-lg bg-white p-6 shadow-4 w-1/2">
        <h1 class="text-3xl my-4">
            Form Data Pembeli
        </h1>
      <form>
          <!-- First name input -->
          <div class="relative mb-6">
            <input
              type="text"
              class="peer block min-h-[auto] w-full rounded border border-black bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
              id="exampleInput123"
              aria-describedby="emailHelp123"
              placeholder="First name" />
            <label
              for="exampleInput123"
              class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary">
              Nama Pembeli
            </label>
          </div>

          <!-- Last name input -->
          <div class="relative mb-6">
            <input
              type="text"
              class="peer block min-h-[auto] w-full rounded border border-black bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
              id="exampleInput124"
              aria-describedby="emailHelp124"
              placeholder="Last name" />
            <label
              for="exampleInput124"
              class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary">
              Nomor WhatsApp
            </label>
          </div>

        <!-- Email input -->
        <div class="relative mb-6">
          <input
            type="email"
            class="peer block min-h-[auto] w-full rounded border border-black bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
            id="exampleInput125"
            placeholder="Email address" />
          <label
            for="exampleInput125"
            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary">
            Alamat
          </label>
        </div>

        <!-- Submit button -->
        <div class="flex justify-center">
          <button
            type="button"
            class="w-4/5 inline-block !bg-[#dfdfdf] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-2xl transition duration-150 ease-in-out hover:bg-[#C29545] hover:shadow-md focus:bg-[#C29545] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#B1833F] active:shadow-primary-2">
            Pay Now
          </button>
        </div>
      </form>
    </div>
  </div>
  </div>
  
@endsection