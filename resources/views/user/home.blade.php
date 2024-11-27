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

    <div class="bg-[#ffff]">
        <div class="relative z-1 w-full">
            <div class="swiper2 !w-full !h-full mySwiper2 relative overflow-x-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide relative">
                        <img class="relative z-0 filter brightness-75 h-full w-full max-xl:object-cover" src="{{ asset('img/duas.png') }}"
                            alt="">
                        <a href="#"
                            class="font3 absolute bottom-28 transform right-[480px] bg-[#7B4B3A] text-[#e9ded7] hover:text-[#C29545] px-4 py-2 border border-[#7B4B3A] rounded-lg text-lg font-extrabold z-10">BELI
                            SEKARANG</a>
                    </div>
                    <div class="swiper-slide relative">
                        <img class="relative z-0 filter brightness-75 h-full w-full max-xl:object-cover" src="{{ asset('img/satus.png') }}"
                            alt="">
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
                    <img class=" w-[500px] h-[300px] max-sm:w-full rounded-t-md" src="{{ asset('img/benangimport.png') }}"
                        alt="">
                </div>
                <div class=" flex text-center justify-center w-[500px] h-[50px] max-sm:w-full " 
                style="background: linear-gradient(to right, #5C4033, #4D4C1C);">
                    <button
                        class=" w-[500px] font3 text-lg text-[#F5E9D3] shadow-2xl transition duration-150 ease-in-out hover:bg-[#5C4033] hover:shadow-md focus:bg-[#d8d8d8] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#bfbfbf] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                        Benang Impor</button>
                </div>
            </div>

            <div data-aos="fade-left" class=" flex flex-col w-[50%] items-end justify-center ">
                <div class="flex justify-center">
                    <img class=" w-[500px] h-[300px] max-sm:w-full rounded-t-md" src="{{ asset('img/benanglokal.png') }}" alt="">
                </div>
                <div class=" flex text-center justify-center w-[500px] h-[50px] max-sm:w-full"
                style="background: linear-gradient(to right, #5C4033, #4D4C1C);">
                    <button
                        class=" w-[500px] font3  text-lg text-[#F5E9D3] shadow-2xl transition duration-150 ease-in-out hover:bg-[#5C4033] hover:shadow-md focus:bg-[#d8d8d8] focus:shadow-md focus:outline-none focus:ring-0 active:bg-[#bfbfbf] active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                        Benang Lokal</button>
                </div>
            </div>
        </div>
    </div>

    <div class=" w-[70%] h-auto mx-auto mt-[150px]">
        <h1 data-aos="fade-up" class=" text-[54px] custom-span text-[#5C4033]">Apa bedanya benang lokal dan impor?</h1>
        <p data-aos="fade-up" class=" font3 text-[#5C4033]">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque provident ad vel cum suscipit!
            Necessitatibus tenetur rem ad sunt voluptates iste quo quam. Aut quod quis eos nulla, itaque quaerat.
        </p>
    </div>
    <div class=" flex justify-center">
        <div class=" h-auto w-[70%] flex justify-center">
            <img data-aos="fade-up" src="{{ asset('assets/beda (1).png') }}" alt="">
        </div>
    </div>

    <div class="container mx-auto my-10 px-5">
        <div class="text-center">
            <h1 class="text-[54px] font-bold mb-4 custom-span text-[#5C4033]" data-aos="zoom-in-up">Our Collection</h1>
            <p class="text-[#5C4033] font3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-8 place-items-center">
            @foreach ($catalog as $item)
                <div class="relative w-[250px] h-[310px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-md grid grid-rows-7 mb-8"
                    style="background: linear-gradient(to right, #5C4033, #4D4C1C);">
                    <div class="row-span-7 flex flex-col gap-1">
                        <img src="{{ asset('storage/uploads/catalog/' . $item->image) }}" alt="Image"
                            class="w-full h-[150px] object-cover rounded-sm">
                        <div class="pt-2 px-4 ">
                            <h1 class="font4 font-semibold text-[16px] text-[#F5E9D3]">{{ $item->name }}</h1>
                            <h1 class="font3 font-bold text-[14px] leading-4 text-[#F5E9D3]">Rp. {{ $item->price }}</h1>
                            <h1 class="font3 leading-5 mt-2 text-[12px] text-red-100">Stok Tersisa {{ $item->stock }} pcs
                            </h1>
                        </div>
                        <a class="flex justify-center" href="{{ route('add-cart', $item->id) }}">
                            <button
                            class="rounded-md font4 w-full inline-block !bg-[#dfdfdf] m-4 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-2xl transition duration-150 ease-in-out focus:shadow-md focus:outline-none focus:ring-0  active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                            Masukkan ke Tas
                        </button>
                    </a>
                    </div>
                </div>
            @endforeach
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
