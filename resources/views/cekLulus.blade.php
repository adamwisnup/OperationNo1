<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Explore the Milky Way</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/output.css') }}">
    <link rel="icon" type="DLOR" href="{{ asset('/assets/homepage/DLOR_2023.svg') }}" />
 </head>
  <body class="bg-dark-space bg-black bg-cover cursor-space-ship">
    <div>
        @include('partials.sidebarCaas')
        <div class="flex justify-center pt-20">
            <div class="flex justify-center pt-14 rounded-lg w-64 md:w-130 h-124 md:h-120 bg-dark-sky shadow-semi-lg shadow-yellow-300 text-white align-middle">
              <div>
                <div>
                  <div class="mt-5">
                    <h1 class="font-arcade text-2xl text-center pb-10">
                        @if($Active == 1)
                            @if ($isPass==1)
                        {{  $pass }}
                            @else {{$failed}}
                            @endif
                        @else
                            Tahap Sedang Berlangsung!!!
                        @endif
                    </h1>
                    <div class="font-pixel text-lg text-center mx-8">
                        @if($Active == 1)
                        @if ($isPass==1)
                        <p class="text-sm md:text-base">Tahap Selanjutnya: UPGRADING</p>
                        <br>
                        <p class="text-sm md:text-base">Silakan mengakses link ini</p>
                        <a href="https://bit.ly/3WiAxnf">
                          <button class="w-24 h-10 mt-4 text-xs bg-[#233B4E] text-center text-white font-arcade shadow-[inset_0px_0px_8px_2px_#FFFFFF] rounded-[8px] duration-200 hover:shadow-[0px_0px_8px_2px_#F0A164] hover:bg-[#233B4E] active:shadow-[inset_0px_0px_8px_2px_#ffd0a9]"><h1>Penugasan Upgrading</h1></button>
                      </a>
                        {{-- <p class="text-sm md:text-base">Selamat kamu lulus tahap {{ $stagesname }}</p>
                        <p class="text-sm md:text-base">Informasi selanjutnya akan disampaikan melalui OA Line DLOR 2023</p> --}}
                        {{-- <p class="text-sm md:text-base">Silahkan Join Grup dengan mengklik atau memindai QR di bawah</p>

                            <a href="https://line.me/ti/g/tuxprZuMP0" target="_blank" class="flex justify-center mt-2">
                                <img src="assets/S__7856149.jpg" class="h-40 rounded-xl m-2" alt="QR">
                            </a> --}}
                        @else
                        <p>Maaf ya kamu harus berhenti di tahap {{ $stagesname }}. Jangan menyerah ya, tetaplah semangat, jadikan ini sebagai pembelajaran untuk kedepanya.</p>
                        <br/>
                        <br/>
                        <br/>
                        <p class="hidden md:block">“You never fail until you stop trying.” – Albert Einstein</p>
                        @endif
                        @else
                            Tahap Sedang Berlangsung, silakan pantau pengumuman selanjutnya!!!
                        @endif

                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        @include('partials.footer')
    </div>
  </body>
</html>





