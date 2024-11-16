<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project Manpro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.4.5"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<style>
    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background: rgb(23, 24, 56);
        background: linear-gradient(180deg, #7B4B3A 0%, rgba(69, 69, 86, 1) 100%);
        border-radius: 8px;
    }

    ::-webkit-scrollbar-track {
        width: 0;
        background: #454556;
        /* background-color: transparent !important; */
    }
</style>

<body>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            corePlugins: {
                preflight: false,
            },
        };
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @include('user.includes.navbar')
    @yield('style')
    @yield('content')
    @yield('script')
    @include('user.includes.footer')
</body>

</html>

<style>
    .custom-span {

        font-family: "Satisfy", cursive;
        font-weight: 400;
        font-style: normal;

    }

    .font2 {
        font-family: "Bona Nova SC", serif;
        font-weight: 400;
        font-style: normal;
    }

    .font3 {
        font-family: "Ubuntu", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
    .font4 {
        font-family: "Ubuntu", sans-serif;
        font-weight: bold;
        font-style: normal;
    }
</style>
