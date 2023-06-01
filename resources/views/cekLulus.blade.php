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
                    <div class="font-pixel text-lg mx-8">
                        @if($Active == 1)
                        @if ($isPass==1)
                        <p class="text-sm md:text-base text-center">Tahap Selanjutnya: FINAL UPGRADING</p>
                        <br>
                        <div class="mx-10 justify-center">
                            <p class="text-sm md:text-base text-left">
                            Hari/Tanggal &emsp;: Sabtu, 3 Juni 2023
                            </p>
                            <p class="text-sm md:text-base text-left">
                            Waktu &emsp;: 08.00
                            </p>
                            <p class="text-sm md:text-base text-left">
                            Tempat &emsp;: Halaman Gedung N
                            </p>
                            <p class="text-sm md:text-base text-left">
                            Dresscode &emsp;: Kemeja bebas
                        </p>
                        </div>
                        <br>
                        <p class="text-sm md:text-base text-left">
                            Tata tertib:
                            <p>- Seluruh caas DIWAJIBKAN membawa bekal makan siang</p>
                            <p>- Seluruh caas WAJIB menggunakan name tag selama rangkaian acara</p>
                            <p>- Seluruh caas WAJIB mengikuti seluruh rangkaian acara</p>
                        </p>
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





