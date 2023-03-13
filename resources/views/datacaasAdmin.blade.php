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


<body class="bg-dark-space bg-cover  h-screen w-screen flex flex-col items-center">
    @include('partials.sidebarAdm')
        <h1 class="font-arcade text-white text-3xl text-center py-4">DATA CAAS</h1>
  
        <div class="items-center h-32 w-2/4 bg-white bg-opacity-10">

           <div class="grid justify-items-center my-4">
            <button class="w-48 h-14 bg-[#00172B] font-arcade text-center text-white shadow-[inset_0px_0px_8px_2px_#FFFFFF] rounded-[8px] duration-200 hover:shadow-[inset_0px_0px_8px_2px_#f3964a] active:shadow-[inset_0px_0px_8px_2px_#ffd0a9]">
                <h1 class="duration-200 buttonText flex justify-center items-center h-[48px] hover:text-lg active:text-base">BUAT AKUN CAAS</h1>
            </button>
           </div>

            <div class="flex justify-around w-full font-arcade text-white text-xl">
                <div class="flex"><h1>TOTAL CAAS : &nbsp</h1><h1 id="totalCaas">{{  $countcaas}}</h1></div>
                <div class="flex"><h1>TOTAL LULUS : &nbsp</h1><h1 class="text-green-700" id="totalLulus">{{ $countcaaslolos }}</h1></div>
                <div class="flex"><h1>TOTAL GAGAL : &nbsp</h1><h1 class="text-red-700" id="totalGagal">{{ $countcaasnotlolos }}</h1></div>
            </div>
        </div>
        <!-- search bar name caas -->
        <div class="pt-8 relative text-white font-arcade py-4">
            <input class="searchBar w-72 border-2 border-gray-300 bg-opacity-10 bg-gray-100 h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
              type="search" name="search" placeholder="Cari  Nama  CAAS">
            <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
              <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                width="512px" height="512px">
                <path
                  d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
              </svg>
            </button>
        </div>
        <!-- table of caas -->
  
        <table class="shadow-lg bg-white border-collapse font-pixel mt-4 mb-8">
            {{ $datacaas->links() }}
          <thead>
            <tr class="bg-dream-dark text-white text-center">
                <th class="border border-white">NO</th>
                <th class="border border-white">NAMA</th>
                <th class="border border-white">NIM</th>
                <th class="border border-white">STATUS</th>
                <th class="border border-white">TAHAP</th>
                <th class="border border-white">OPSI</th>
              </tr>
          </thead>
          <tbody>
            <?php $no = 1;?>
            @foreach ($datacaas as $caas)
            <tr class="text-dream-dark text-center">

                <td class="border border-dream-dark px-2">{{ $no++ }}</td>
                <td class="border border-dream-dark px-10">{{ $caas->name }}</td>
                <td class="border border-dream-dark px-10">{{ $caas->nim }}</td>
                @if($caas->isPass==1)
                <td class="text-green-700 border border-dream-dark px-10">Lolos</td>
                @else
                <td class="text-red-700 border border-dream-dark px-10">Tidak lolos</td>
                @endif
                <td class="border border-[#00111E] px-10">{{ $stagesname->stagesname }}</td>
                <td class="border border-[#00111E] px-10 pt-2">
                  <button class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-2 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 duration-200 active:text-[#00111e6b]"><h1>Edit</h1></button>
                  <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 duration-200 active:text-[#00111e6b]"><h1>Hapus</h1></button>
                </td>
              </tr>
              @endforeach
          </tbody>

        </table>


         @include('partials.footerAdm')

    </body>
</html>
