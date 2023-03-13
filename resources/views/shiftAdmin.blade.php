<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore the Milky Way</title>
    @vite('public/css/output.css')
    <link rel="icon" type="DLOR" href="{{ asset('/assets/homepage/DLOR_2023.svg') }}" />
</head>


<body class="bg-dark-space bg-cover bg-center h-screen">
    @include('partials.sidebarAdm')
    <h1 class="font-arcade text-white text-3xl text-center pt-10">SHIFT</h1>
    <div class="flex justify-center mt-10">
        <div class="flex justify-between w-[53%]">
            <!-- Stats -->
            <div class="flex flex-col font-arcade text-xl w-2/5 text-white">
                <div class="flex text-white"><h1>TOTAL SHIFT : &nbsp</h1><h1 id="totalShift">{{$countshift}}</h1></div>
                <div class="flex text-white"><h1>TOTAL KUOTA : &nbsp</h1><h1 id="totalKuota">{{$totalquota}}</h1></div>
            </div>
            <!-- buttons -->
            <div class="flex justify-between font-arcade text-lg w-[24rem]">
                <button class="w-32 h-12 bg-[#426006] shadow-[inset_0px_0px_8px_2px_#FFFFFF] rounded-[8px] text-[#D5ECCA]"><h1>Tambah Shift</h1></button>
                <button class="w-28 h-12 bg-[#BF262F] shadow-[inset_0px_0px_8px_2px_#FFFFFF] rounded-[8px] text-[#FFCECB]"><h1>Reset Plot</h1></button>
                <button class="w-32 h-12 bg-[#BF262F] shadow-[inset_0px_0px_8px_2px_#FFFFFF] rounded-[8px] text-[#FFCECB]"><h1>Reset Shift</h1></button>
            </div>
        </div>
    </div>
    <!-- table of caas -->
    <div class="flex justify-center mt-2">
        <table class="shadow-lg bg-white border-collapse font-arcade">
            <tr class="bg-[#00111E] text-[#E1F2FF] text-center">
              <th class="border border-[#E1F2FF]">NO</th>
              <th class="border border-[#E1F2FF]">SHIFT</th>
              <th class="border border-[#E1F2FF]">TANGGAL</th>
              <th class="border border-[#E1F2FF]">WAKTU</th>
              <th class="border border-[#E1F2FF]">KUOTA</th>
              <th class="border border-[#E1F2FF]">OPSI</th>
            </tr>
            <?php $no = 1;?>
            @foreach($shift as $s)
            <tr class="text-[#00111E] text-center">
              <td class="border border-[#00111E] px-2">{{$no++}}</td>
              <td class="border border-[#00111E] px-10">{{$s->shiftname}}</td>
              <td class="border border-[#00111E] px-10">{{$s->day}}</td>
              <td class="border border-[#00111E] px-10">{{$s->time_start}}-{{$s->time_end}}</td>
              <td class="text-[#426006] border border-[#00111E] px-10">{{$s->quota}}</td>
              <td class="border border-[#00111E] px-10">
                <button class="duration-200 hover:underline active:text-[#00111e6b]"><h1>Edit</h1></button>
              </td>
            </tr>
            @endforeach
        </table>
        @include('partials.footer')
    </div>
</body>
</html>
