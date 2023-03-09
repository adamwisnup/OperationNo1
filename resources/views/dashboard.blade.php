<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Explore the Milky Way</title>
    @vite('public/css/output.css')
    <link rel="icon" type="DLOR" href="{{ asset('/assets/favicon.ico') }}" />
 </head>
  <body class="bg-dark-space bg-black bg-cover cursor-space-ship">
    <div class="container">

        @include('partials.sidebarCaas')

        <div class="flex justify-center pt-16">
            <div class="flex justify-center pt-12 rounded-lg w-64 h-96 md:w-120 md:h-130 bg-dark-sky shadow-semi-lg shadow-yellow-300 text-white align-middle">
              <div>
                <div class="flex justify-center">
                  <img class="w-24 md:w-64 rounded-xl" src="{{ asset('assets/dasboardcaas/REY.png') }}" />
                </div>
                {{-- @foreach ($datacaas as $caas) --}}

                <div class="mx-2">
                    <div class="mt-5">
                    <h1 class="font-pixel">NAMA</h1>
                    <img src="{{ asset('/assets/dasboardcaas/Underline_Dashed.png') }}" alt="" />
                    <p class="font-arcade text-sm md:text-xl">{{ $datacaas->name }}</p>
                  </div>
                  <div class="mt-5">
                    <h1 class="font-pixel">NIM</h1>
                    <img src="{{ asset('/assets/dasboardcaas/Underline_Dashed.png') }}" alt="" />
                    <p class="font-arcade md:text-xl">{{ $datacaas->nim }}</p>
                  </div>
                  <div class="mt-5">
                    <h1 class="font-pixel">JURUSAN</h1>
                    <img src="{{ asset('/assets/dasboardcaas/Underline_Dashed.png') }}" alt="" />
                    <p class="font-arcade md:text-xl">{{ $datacaas->major }}</p>
                  </div>
                </div>
                {{-- @endforeach --}}
              </div>
            </div>
          </div>

        @include('partials.footer')
    </div>
    <script src="{{ asset('/js/sidebar.js') }}"></script>
  </body>
</html>







