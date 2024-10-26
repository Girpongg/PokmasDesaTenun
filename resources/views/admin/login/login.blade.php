<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <title>Admin |  </title>
    {{-- sweetalert cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Open Sans", "sans-serif"],
                    body: ["Open Sans", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
                
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>
</head>
<body>
    <div class="grid grid-cols-6 h-screen w-screen">
        <div class="col-span-2 grid grid-rows-4 p-4 py-10">
            <div class="row-span-1 flex-col">
                <h1 class="text-xl font-bold text-center">Welcome To</h1>
                <h1 class="text-xl font-bold text-center">Pokmas Wastra Sejahtera Jombang</h1>
                <h1 class="text-xl font-bold text-center">Admin Page</h1>
            </div>
        </div>
        <div class="col-span-4">
            <img src="{{asset('img/foto-admin.png')}}" alt="foto-admin" class="h-full w-full object-cover shadow-[-10px_0px_15px_-10px_#0000004d]">
        </div>
    </div>
</body>
</html>