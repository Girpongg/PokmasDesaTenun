@extends('user.layout')
@section('style')
    <style>
        .custom-shape-divider-bottom-1725791922 .shape-fill {
            fill: #FFFFFF;
        }

        .custom-shape-divider-bottom-1725791922 {
            position: absolute;
            bottom: 0;
            top: 10px;
            width: 100%;
            height: auto;
            z-index: 5;
            transform: rotate(180deg);
        }

        .swiper {
            width: 50%;
            height: 70%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }



        .swiper-container-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }


        .swiper-button-prev,
        .swiper-button-next {
            position: relative;
            top: auto;
        }

        .custom-shape-divider-bottom-1725791922 img {
            position: relative;
            display: block;
            width: 100%;
            margin-top: -1px;
            transform: scale(-1);
        }

        .swiper-pagination {
            position: absolute;
            z-index: 1000;
            left: 0;
            right: 0;
            text-align: center;
        }
    </style>
@section('content')

    <div class="bg-[#e9ded7]">
        <div class="relative z-1 w-full">
            <div class="swiper2 !w-full !h-full mySwiper2 relative overflow-x-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide relative">
                        <img class="relative z-0 filter brightness-75 h-full w-full" src="{{ asset('assets/promofix.png') }}"
                            alt="">
                        <a href="#"
                            class="absolute bottom-10 transform -translate-x-1/2 bg-[#7B4B3A] text-[#e9ded7] hover:text-[#C29545] px-4 py-2 border border-[#7B4B3A] rounded-lg text-lg font-bold z-10">BELI
                            SEKARANG</a>
                    </div>
                    <div class="swiper-slide relative">
                        <img class="relative z-0 filter brightness-75 h-full w-full"
                            src="{{ asset('assets/promofix.png') }}" alt="">
                        <a href="#"
                            class="absolute bottom-10 transform -translate-x-1/2 bg-[#7B4B3A] text-[#e9ded7] hover:text-[#C29545] px-4 py-2 border border-[#7B4B3A] rounded-lg text-lg font-bold z-10">BELI
                            SEKARANG</a>
                    </div>
                    <div class="swiper-slide relative">
                        <img class="relative z-0 filter brightness-75 h-full w-full"
                            src="{{ asset('assets/promofix.png') }}" alt="">
                        <a href="#"
                            class="absolute bottom-10 transform -translate-x-1/2 bg-[#7B4B3A] text-[#e9ded7] hover:text-[#C29545] px-4 py-2 border border-[#7B4B3A] rounded-lg text-lg font-bold z-10">BELI
                            SEKARANG</a>
                    </div>
                    <div class="swiper-slide relative">
                        <img class="relative z-0 filter brightness-75 h-full w-full"
                            src="{{ asset('assets/promofix.png') }}" alt="">
                        <a href="#"
                            class="absolute bottom-10 transform -translate-x-1/2 bg-[#7B4B3A] text-[#e9ded7] hover:text-[#C29545] px-4 py-2 border border-[#7B4B3A] rounded-lg text-lg font-bold z-10">BELI
                            SEKARANG</a>
                    </div>
                    <div class="swiper-slide relative">
                        <img class="relative z-0 filter brightness-75 h-full w-full"
                            src="{{ asset('assets/promofix.png') }}" alt="">
                        <a href="#"
                            class="absolute bottom-10 transform -translate-x-1/2 bg-[#7B4B3A] text-[#e9ded7] hover:text-[#C29545] px-4 py-2 border border-[#7B4B3A] rounded-lg text-lg font-bold z-10">BELI
                            SEKARANG</a>
                    </div>
                </div>
                <div class="swiper-pagination max-sm:hidden"></div>
            </div>
        </div>
    </div>


    {{-- <div class="relative w-full h-[400px]">
        <img class="w-full h-full object-cover" src="{{ asset('assets/wayang2.jpg') }}" alt="">
        <div class="absolute inset-0 bg-black opacity-50"></div> 
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center">
            <div class="text-2xl font-bold"><u>SELAMAT DATANG DI DESA TENUN</u></div>
            <div class="text-lg">Selamat menikmati keindahan budaya kami!</div> 
        </div>
    </div>
    
    <div> --}}

    {{-- </div> --}}

    <div class=" w-[70%] h-auto mx-auto my-[70px] ">
        <h1 data-aos="fade-up" class=" text-[80px] custom-span text-[#5C4033]">Desa Tenun</h1>
        <p data-aos="fade-up" class=" font3 text-[#5C4033]">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Similique eveniet aperiam ut animi expedita reprehenderit, deserunt dolor odio, commodi sunt molestias. Quam
            eligendi eum dicta asperiores nobis exercitationem eos odio.</p>
    </div>

    <div class="">
        <div
            class=" w-[70%] h-auto mx-auto my-[70px] flex flex-row max-lg:flex-col max-lg:justify-center maxlg items-center max-lg:w-[100%]">
            <div data-aos="fade-right" class=" flex flex-col w-[50%] items-start justify-center max-lg:mb-5">
                <div class="flex justify-center">
                    <img class=" w-[500px] h-[300px] max-sm:w-full" src="{{ asset('assets/batik.jpg') }}" alt="">
                </div>
                <div class=" flex text-center justify-center bg-[#5C4033] w-[500px] h-[50px] max-sm:w-full ">
                    <button
                        class=" w-[500px] font2 text-lg text-[#F5E9D3] shadow-2xl transition duration-150 ease-in-out hover:bg-[#C29545] hover:shadow-md focus:bg-[#d8d8d8] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#bfbfbf] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                        Benang Impor</button>
                </div>
            </div>

            <div data-aos="fade-left" class=" flex flex-col w-[50%] items-end justify-center">
                <div class="flex justify-center">
                    <img class=" w-[500px] h-[300px] max-sm:w-full" src="{{ asset('assets/batik2.jpg') }}" alt="">
                </div>
                <div class=" flex text-center justify-center bg-[#5C4033] w-[500px] h-[50px] max-sm:w-full">
                    <button
                        class=" w-[500px] font2 text-lg text-[#F5E9D3] shadow-2xl transition duration-150 ease-in-out hover:bg-[#C29545] hover:shadow-md focus:bg-[#d8d8d8] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#bfbfbf] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                        Benang Lokal</button>
                </div>
            </div>
        </div>
    </div>

    <div class=" w-[70%] h-auto mx-auto mt-[150px]">
        <h1 data-aos="fade-up" class=" text-[54px] custom-span text-[#5C4033]">Apa bedanya benang lokal dan impor?</h1>
        <p data-aos="fade-up" class=" font3 text-[#5C4033]">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Similique eveniet aperiam ut animi expedita reprehenderit, deserunt dolor odio, commodi sunt molestias. Quam
            eligendi eum dicta asperiores nobis exercitationem eos odio.</p>
    </div>
    <div class=" flex justify-center">
        <div class=" h-auto w-[70%] flex justify-center">
            <img data-aos="fade-up" src="{{ asset('assets/beda (1).png') }}" alt="">
        </div>
    </div>

    <div class=" mb-20 py-20">
        <div class=" w-[80%] h-auto flex justify-end mx-auto mb-20">
            <h1 data-aos="fade-right" class=" text-[50px] custom-span text-[#5C4033]"><b>BEST SELLER</b></h1>
        </div>
        <div data-aos="fade-up" class="swiper-container-wrapper mb-10">
            <div class="swiper-button-prev mx-auto"></div>
            <div class="w-[80%] sm:w-[80%] sm:h-[90%] swiper mySwiper4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class=" bg-gray-200 w-[222px] h-[386px] mt-5 border border-[#5C4033]">
                            <div class="">
                                <img src="{{ asset('assets/sarung.jpeg') }}" alt="" class=" w-full h-[200px]" />
                            </div>

                            <div class="bg-[#5C4033] w-[220px] h-[185px]">
                                <div class="p-4">
                                    <h1 class=" custom-span text-[#F5E9D3] font-semibold text-[20px]">Sarung Tenun Biru</h1>
                                    <h1 class=" custom-span text-[#F5E9D3] font-bold text-[20px] leading-4">Rp. 120.000</h1>
                                    <h1 class=" custom-span text-[#F5E9D3] leading-5 mt-2 text-[16px]">Stok Tersisa 20 buah
                                    </h1>
                                    <h1 class=" custom-span text-[#F5E9D3] leading-4 text-[16px]">10 Terjual</h1>
                                </div>
                                <div class="flex justify-center">
                                    <button type="button"
                                        class="w-4/5 inline-block bg-[#dfdfdf] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-2xl transition duration-150 ease-in-out hover:bg-[#C29545] hover:shadow-md focus:bg-[#d8d8d8] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#bfbfbf] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                                        Masukkan ke Tas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class=" w-[222px] h-[386px] mt-5 border border-[#5C4033]">
                            <div class="">
                                <img src="{{ asset('assets/sarung.jpeg') }}" alt="" class=" w-full h-[200px]" />
                            </div>

                            <div class="bg-[#5C4033] w-[220px] h-[185px]">
                                <div class="p-4">
                                    <h1 class=" custom-span text-[#F5E9D3] font-semibold text-[20px]">Sarung Tenun Biru
                                    </h1>
                                    <h1 class=" custom-span text-[#F5E9D3] font-bold text-[20px] leading-4">Rp. 120.000
                                    </h1>
                                    <h1 class=" custom-span text-[#F5E9D3] leading-5 mt-2 text-[16px]">Stok Tersisa 20 buah
                                    </h1>
                                    <h1 class=" custom-span text-[#F5E9D3] leading-4 text-[16px]">10 Terjual</h1>
                                </div>
                                <div class="flex justify-center">
                                    <button type="button"
                                        class="w-4/5 inline-block bg-[#dfdfdf] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-2xl transition duration-150 ease-in-out hover:bg-[#C29545] hover:shadow-md focus:bg-[#d8d8d8] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#bfbfbf] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                                        Masukkan ke Tas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class=" w-[222px] h-[386px] mt-5 border border-[#5C4033]">
                            <div class="">
                                <img src="{{ asset('assets/sarung.jpeg') }}" alt="" class=" w-full h-[200px]" />
                            </div>

                            <div class="bg-[#5C4033] w-[222px] h-[185px]">
                                <div class="p-4">
                                    <h1 class=" custom-span text-[#F5E9D3] font-semibold text-[20px]">Sarung Tenun Biru
                                    </h1>
                                    <h1 class=" custom-span text-[#F5E9D3] font-bold text-[20px] leading-4">Rp. 120.000
                                    </h1>
                                    <h1 class=" custom-span text-[#F5E9D3] leading-5 mt-2 text-[16px]">Stok Tersisa 20 buah
                                    </h1>
                                    <h1 class=" custom-span text-[#F5E9D3] leading-4 text-[16px]">10 Terjual</h1>
                                </div>
                                <div class="flex justify-center">
                                    <button type="button"
                                        class="w-4/5 inline-block bg-[#dfdfdf] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-2xl transition duration-150 ease-in-out hover:bg-[#C29545] hover:shadow-md focus:bg-[#d8d8d8] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#bfbfbf] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                                        Masukkan ke Tas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class=" bg-gray-200 w-[222px] h-[386px] mt-5 border border-[#5C4033]">
                            <div class="">
                                <img src="{{ asset('assets/sarung.jpeg') }}" alt="" class=" w-full h-[200px]" />
                            </div>

                            <div class="bg-[#5C4033] w-[220px] h-[185px]">
                                <div class="p-4">
                                    <h1 class=" custom-span text-[#F5E9D3] font-semibold text-[20px]">Sarung Tenun Biru
                                    </h1>
                                    <h1 class=" custom-span text-[#F5E9D3] font-bold text-[20px] leading-4">Rp. 120.000
                                    </h1>
                                    <h1 class=" custom-span text-[#F5E9D3] leading-5 mt-2 text-[16px]">Stok Tersisa 20 buah
                                    </h1>
                                    <h1 class=" custom-span text-[#F5E9D3] leading-4 text-[16px]">10 Terjual</h1>
                                </div>
                                <div class="flex justify-center">
                                    <button type="button"
                                        class="w-4/5 inline-block bg-[#dfdfdf] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-2xl transition duration-150 ease-in-out hover:bg-[#C29545] hover:shadow-md focus:bg-[#d8d8d8] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#bfbfbf] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                                        Masukkan ke Tas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class=" bg-gray-200 w-[222px] h-[386px] mt-5 border border-[#5C4033]">
                            <div class="">
                                <img src="{{ asset('assets/sarung.jpeg') }}" alt="" class=" w-full h-[200px]" />
                            </div>

                            <div class="bg-[#5C4033] w-[222px] h-[185px]">
                                <div class="p-4">
                                    <h1 class=" custom-span text-[#F5E9D3] font-semibold text-[20px]">Sarung Tenun Biru
                                    </h1>
                                    <h1 class=" custom-span text-[#F5E9D3] font-bold text-[20px] leading-4">Rp. 120.000
                                    </h1>
                                    <h1 class=" custom-span text-[#F5E9D3] leading-5 mt-2 text-[16px]">Stok Tersisa 20 buah
                                    </h1>
                                    <h1 class=" custom-span text-[#F5E9D3] leading-4 text-[16px]">10 Terjual</h1>
                                </div>
                                <div class="flex justify-center">
                                    <button type="button"
                                        class="w-4/5 inline-block bg-[#dfdfdf] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-2xl transition duration-150 ease-in-out hover:bg-[#C29545] hover:shadow-md focus:bg-[#d8d8d8] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#bfbfbf] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                                        Masukkan ke Tas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="swiper-button-next mx-auto"></div>
        </div>

        <div class="mt-20 mb-20 py-20">
            <div class=" w-[80%] h-auto flex justify-end mx-auto mb-20">
                <h1 data-aos="fade-right" class=" text-[50px] custom-span text-[#5C4033]"><b>TESTIMONI</b></h1>
            </div>
            <div data-aos="fade-up" class="swiper-container-wrapper mb-10">
                <div class="swiper-button-prev mx-auto"></div>
                <div class="w-[80%] sm:w-[80%] sm:h-[90%] swiper mySwiper3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="max-w-sm mx-auto bg-white rounded-xl hover:shadow-md overflow-hidden md:max-w-2xl">
                                <div class="flex">
                                    <div class="shrink-0 h-20 md:h-48">
                                        <img class="" src="{{ asset('assets/merch1.png') }}"
                                            alt="Chery Dunia Palmerah">
                                    </div>
                                    <div class="p-8 w-full">
                                        <div class="w-[77px] mb-2 h-[57px]">
                                            <img src="{{ asset('assets/petik.png') }}" alt="">
                                        </div>
                                        <p
                                            class="max-md:text-sm text-sm text-justify leading-tight font-medium text-black">
                                            Toko kain ini benar-benar luar biasa! Pilihan sarungnya sangat beragam dengan
                                            kualitas bahan yang lembut dan nyaman digunakan. Desainnya pun elegan, cocok
                                            untuk segala kesempatan.
                                        </p>
                                        <p class="mt-4 text-black text-start text-xs"><i>— Ivan Gunawan (Owner of Kedjora
                                                Coffee)</i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="max-w-sm mx-auto bg-white rounded-xl hover:shadow-md overflow-hidden md:max-w-2xl">
                                <div class="flex">
                                    <div class="shrink-0 h-20 md:h-48">
                                        <img class="" src="{{ asset('assets/merch2.jpeg') }}"
                                            alt="Chery Dunia Palmerah">
                                    </div>
                                    <div class="p-8 w-full">
                                        <div class="w-[77px] mb-2 h-[57px]">
                                            <img src="{{ asset('assets/petik.png') }}" alt="">
                                        </div>
                                        <p
                                            class="max-md:text-sm text-sm text-justify leading-tight font-medium text-black">
                                            Pelayanan dari toko ini juga sangat ramah dan membantu, membuat pengalaman
                                            berbelanja menjadi menyenangkan. Harga yang ditawarkan sepadan dengan kualitas
                                            produknya. Sangat direkomendasikan bagi siapa saja yang mencari kain atau sarung
                                            berkualitas tinggi!
                                        </p>
                                        <p class="mt-4 text-black text-start text-xs"><i>— Michimomo (Owner of Bamsae)</i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="max-w-sm mx-auto bg-white rounded-xl hover:shadow-md overflow-hidden md:max-w-2xl">
                                <div class="flex">
                                    <div class="shrink-0 h-20 md:h-48">
                                        <img class="" src="{{ asset('assets/merch3.jpeg') }}"
                                            alt="Chery Dunia Palmerah">
                                    </div>
                                    <div class="p-8 w-full">
                                        <div class="w-[77px] mb-2 h-[57px]">
                                            <img src="{{ asset('assets/petik.png') }}" alt="">
                                        </div>
                                        <p
                                            class="max-md:text-sm text-sm text-justify leading-tight font-medium text-black">
                                            Luar biasa! Toko ini menyediakan sarung dengan berbagai pilihan motif yang
                                            menarik dan bahan yang berkualitas tinggi. Selain itu, pelayanannya sangat
                                            profesional dan cepat tanggap.
                                        </p>
                                        <p class="mt-4 text-black text-start text-xs"><i>— Ayam Goreng Ny Suharti</i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="max-w-sm mx-auto bg-white rounded-xl hover:shadow-md overflow-hidden md:max-w-2xl">
                                <div class="flex">
                                    <div class="shrink-0 h-20 md:h-48">
                                        <img class="" src="{{ asset('assets/merch4.jpeg') }}"
                                            alt="Chery Dunia Palmerah">
                                    </div>
                                    <div class="p-8 w-full">
                                        <div class=" w-[77px] mb-2 h-[57px]">
                                            <img src="{{ asset('assets/petik.png') }}" alt="">
                                        </div>
                                        <p
                                            class="max-md:text-sm text-sm text-justify leading-tight font-medium text-black">
                                            Pengalaman berbelanja di toko kain ini sangat memuaskan. Sarung-sarung yang
                                            mereka tawarkan memiliki motif yang unik dan kainnya terasa sangat halus. Saya
                                            terkesan dengan kualitas produk yang ditawarkan dengan harga yang cukup
                                            terjangkau.
                                        </p>
                                        <p class="mt-4 text-black text-start text-xs"><i>— Enno Lerian (Owner of Luma
                                                Scarf)</i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="swiper-button-next mx-auto"></div>
            </div>

        </div>


@endsection

@section('script')
        <script>
            var swiper4 = new Swiper(".mySwiper4", {
                slidesPerView: 4,
                spaceBetween: 200,
                freeMode: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    1500: {
                        slidesPerView: 4,
                        spaceBetween: 35,
                    },
                    1200: {
                        slidesPerView: 2,
                        spaceBetween: 5,
                    },
                    0: {
                        slidesPerView: 1,
                    }
                }
            });
            var swiper3 = new Swiper(".mySwiper3", {
                slidesPerView: 3,
                spaceBetween: 120,
                freeMode: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    1500: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1200: {
                        slidesPerView: 2,
                        spaceBetween: 5,
                    },
                    0: {
                        slidesPerView: 1,
                    }
                }
            });
            var swiper2 = new Swiper(".mySwiper2", {
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                    delay: 8000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                }
            });
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 5,
                spaceBetween: 120,
                freeMode: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    1500: {
                        slidesPerView: 5,
                        spaceBetween: 120,
                    },
                    1150: {
                        slidesPerView: 4,
                        spaceBetween: 100,
                    },
                    900: {
                        slidesPerView: 3,
                        spaceBetween: 80,
                    },
                    600: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    0: {
                        slidesPerView: 1,
                    }
                }
            });
        </script>
@endsection
