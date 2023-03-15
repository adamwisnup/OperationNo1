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
  <body class="bg-dark-space bg-black bg-cover cursor-space-ship ">
    <div class="container">
      <div class="center">
        <div class="flex justify-center pt-24">
          <div class="static flex justify-center pt-12 rounded-lg w-56 h-96 md:w-110 md:h-120 bg-dark-sky shadow-semi-lg shadow-yellow-300 text-white align-middle">
            <div>
              <div class="flex justify-center">
                <img class="w-24 md:w-48 rounded-lg absolute top-12" src="{{ $sisten->ascod }}.jpg" />
              </div>

              <div class="pt-28 mx-2">
                <div class="my-5 shadow-md">
                  <p class="text-center font-arcade text-sm md:text-xl">Reynaldhi triya</p>
                </div>
                <div class="mt-2">
                  <h1 class="font-pixel">Kode Asisten</h1>
                  <img class="py-1" src="/public/assets/dasboardcaas/Underline_Dashed.png" alt="" />
                  <p class="font-arcade text-sm md:text-xl">REY</p>
                </div>
                <div class="mt-2">
                  <h1 class="font-pixel">Instagram</h1>
                  <img class="py-1" src="/public/assets/dasboardcaas/Underline_Dashed.png" alt="" />
                  <p class="font-arcade md:text-xl">reynaldhi.png</p>
                </div>
                <div class="mt-2">
                  <h1 class="font-pixel">LINE</h1>
                  <img class="py-1" src="/public/assets/dasboardcaas/Underline_Dashed.png" alt="" />
                  <p class="font-arcade md:text-xl">Reynaldhi21</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <button type="submit" class="fixed w-12 top-64 right-44 h-12 bg-dark-sky text-center shadow-in-semi-sm shadow-white rounded-lg duration-200 hover:shadow-semi-sm hover:shadow-dark-sun hover:bg-deep-sky active:shadow-in-semi-sm active:shadow-bright-sun">
        <h1 class="triangle flex justify-center items-center h-[48px] hover:text-3xl active:text-2xl">▶</h1>
      </button>
      <button type="submit" class="fixed w-12 h-12 top-64 left-44 bg-dark-sky text-center shadow-in-semi-sm shadow-white rounded-lg duration-200 hover:shadow-semi-sm hover:shadow-dark-sun hover:bg-deep-sky active:shadow-in-semi-sm active:shadow-bright-sun">
        <h1 class="triangle rotate-180 flex justify-center items-center h-[48px] hover:text-3xl active:text-2xl">▶</h1>
      </button>

      <div class="fixed bottom-0 left-0 right-0 font-pixel text-center text-white mt-12 mb-2">
        <p>OFFICIAL DASKOM RECRUITMENT 2023</p>
      </div>
    </div>
  </body>
</html>
