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


<body class="bg-dark-space bg-cover h-screen w-screen flex flex-col items-center">
    <h1 class="font-arcade text-white text-3xl text-center pt-20">PILIH SHIFT</h1>
        <div class="mt-6 mx-3 text-white bg-gray-700 text-center font-pixel text-2xl p-20 rounded-lg">
            <p>Apakah Anda yakin untuk memilih shift ini?</p>
        </div>
        <div class="flex justify-items my-4">
            <form class="font-arcade text-white" method="POST" action="/fixtakePlot/{{ $shift->id }}">
                @csrf
                <button type="button-submit" method="POST" class="bg-green-700 hover:bg-green-800 rounded-lg w-32 py-2 px-4 m-4">Pilih Shift</button>
            </form>
            <a href="/listplot"><button class="font-arcade text-white bg-red-700 hover:bg-red-800 rounded-lg w-32 py-2 px-4 m-4">Kembali</button></a>
        </div>
    @include('partials.footer')
</body>
</html>
