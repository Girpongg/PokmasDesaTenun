    @extends('user.layout')
    @include('user.includes.navbar')
    <div class="flex justify-center">
        <hr class="h-px w-[1200px] mt-10 mb-5 bg-gray-700 border-0">
    </div>
    <div class="grid grid-cols-5 px-20 place-items-center">
        @foreach ($catalog as $item)
            <div class=" bg-gray-200 w-[220px] h-[385px] my-5 cursor-pointer" onclick="window.location.href='{{ route('detail-barang', $item->id) }}'">
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
                    <a href="{{ route('add-cart', $item->id)}}">
                        <button class="w-4/5 inline-block !bg-[#dfdfdf] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-2xl transition duration-150 ease-in-out hover:bg-[#C29545] hover:shadow-md focus:bg-[#C29545] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#B1833F] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                            Masukkan ke Tas
                        </button>
                    </a>
                </div>
            </div>            
        @endforeach
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>
