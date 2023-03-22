<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore the Milky Way</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/output.css') }}">
    <link rel="icon" type="DLOR" href="{{ asset('/assets/homepage/DLOR_2023.svg') }}" />
</head>


<body class="bg-dark-space bg-cover  h-screen w-screen flex flex-col items-center">
    @include('partials.sidebarAdm')
        <h1 class="font-arcade text-white text-3xl text-center py-4">DATA CAAS</h1>
        <div class="text-dark bg-gray-700 text-center font-pixel text-2xl p-20 rounded-lg">
            <p class="px-10 text-white">Nama</p>
            <img class="w-96" src="{{ asset('/assets/dasboardcaas/Underline_Dashed.png') }}" alt="" />
            <p class="px-10 mb-5">{{ $name }}</p>
            <p class="px-10 text-white">NIM</p>
            <img class="w-96" src="{{ asset('/assets/dasboardcaas/Underline_Dashed.png') }}" alt="" />
            <p class="px-10 mb-5">{{ $nim }}</p>
            <p class="px-10 text-white">Status</p>
            <img class="w-96" src="{{ asset('/assets/dasboardcaas/Underline_Dashed.png') }}" alt="" />
                @if($isPass==1)
                <p class="text-green-700 px-10 mb-5">Lolos</p>
                @else
                <p class="text-red-700 px-10 mb-5">Tidak lolos</p>
                @endif
                <p class="px-10 text-white">Tahap</p>
                <img class="w-96" src="{{ asset('/assets/dasboardcaas/Underline_Dashed.png') }}" alt="" />
                <p class="px-10">{{ $stagesname }}</p>
            </div>
        <div class="grid justify-items-center my-4">
            <button class="w-48 h-14 bg-[#00172B] font-arcade text-center text-white shadow-[inset_0px_0px_8px_2px_#FFFFFF] rounded-[8px] duration-200 hover:shadow-[inset_0px_0px_8px_2px_#f3964a] active:shadow-[inset_0px_0px_8px_2px_#ffd0a9]" id="tambahCaas-popup">
                <h1 class="duration-200 buttonText flex justify-center items-center h-[48px] hover:text-lg active:text-base" >DELETE AKUN CAAS</h1>
            </button>
        </div>


        <script src="{{ asset('/js/dataCaas_popup.js') }}"></script>
    </body>
</html>
