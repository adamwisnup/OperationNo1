<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Explore the Milky Way</title>
    @vite('public/css/output.css')
    <link rel="icon" type="DLOR" href="{{ asset('/assets/homepage/DLOR_2023.svg') }}" />
 </head>
  <body class="bg-dark-space bg-black bg-cover cursor-space-ship">
    <div class="container">
        @include('partials.sidebarCaas')
        <div class="flex justify-center pt-16 md:pt-36">
            <div class="flex justify-center pt-12 rounded-lg w-64 md:w-130 h-124 bg-dark-sky shadow-semi-lg shadow-yellow-300 text-white align-middle">
              <div>
                <div>
                  <div class="mt-5">
                    <h1 class="font-arcade text-2xl text-center pb-10">SELAMAT KAMU LULUS TAHAP UPGRADING</h1>

                    <p class="font-pixel text-lg text-center mx-8">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut error dolorum, tempora, quis repellendus aliquid veritatis illum debitis libero hic praesentium architecto assumenda reprehenderit quam molestias doloremque cum
                      minima natus.
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        @include('partials.footer')
    </div>
    <script src="{{ asset('/js/sidebar.js') }}"></script>
  </body>
</html>





