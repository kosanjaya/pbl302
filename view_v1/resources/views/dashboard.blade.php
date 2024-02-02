@extends('master.layoutMaster')

@section('content')
    <!-- PARENT -->
    <section class=" fixed flex flex-row w-[calc(100%-13.5rem)] h-[calc(100vh-3.6rem)] p-4 right-0 bottom-0 gap-4 2xl:gap-8"> <!-- border border-red-600 border-solid -->

        <!-- SEBELAH KIRI -->
        <div class=" w-[70%] space-y-[3rem] 2xl:space-y-[7rem]">

          <!-- CONTENT ATAS KIRI -->
          <div class=" flex flex-row space-x-3 text-[#52B788] h-[6rem] 2xl:h-[10rem]">
            <div class=" flex-auto bg-[#52B788] rounded-xl shadow-md shadow-[rgba(56,61,58,0.47)]">
              <div class="flex items-center justify-center space-x-4 h-full"><!-- w-[9rem] ml-3-->
                <img src="src/img/dashboard/user.png" alt="" class="w-[30%]">
                <div class=" text-white">
                  <p class=" text-lg 2xl:text-2xl text-center font-light tracking-wider">USER</p>
                  <p class=" text-4xl 2xl:text-5xl font-semibold">240</p>
                </div>
              </div>
            </div>

            <div class=" flex flex-col justify-center flex-auto bg-[#121312] rounded-xl shadow-md shadow-[rgba(56,61,58,0.47)]"><!--- w-40 border border-white -->
              <div class="space-x-3  flex justify-center ">
                <img src="src/img/dashboard/bug.png" alt="" class="w-[13.5%]">  
                <p class=" font-light text-lg 2xl:text-2xl tracking-wider">Total Bug</p>
              </div>
              <p class=" text-white font-semibold text-4xl 2xl:text-5xl pl-[calc(45%)]">50</p>
            </div>

            <div class=" flex flex-col justify-center flex-auto bg-[#121312] rounded-xl shadow-md shadow-[rgba(56,61,58,0.47)]"><!--- w-40 -->
              <div class="space-x-3 flex justify-center">
                <img src="src/img/dashboard/centang.png" alt="" class="w-[15%]">
                <p class=" font-light text-lg 2xl:text-2xl tracking-wider ">Approved</p>
              </div>
              <p class="text-white font-semibold text-4xl 2xl:text-5xl pl-[calc(45%)]">24</p>
            </div>

            <div class=" flex flex-col justify-center flex-auto bg-[#121312] rounded-xl shadow-md shadow-[rgba(56,61,58,0.47)] w-[8.8rem] 2xl:w-[12rem]"><!--- w-40 -->
              <div class="space-x-3 flex justify-center">
                <img src="src/img/dashboard/x.png" alt="" class="w-[17%]">
                <p class="font-light text-lg 2xl:text-2xl tracking-wider">Rejected</p>
              </div>
                <p class="text-white font-semibold text-4xl 2xl:text-5xl pl-[calc(50%)]">13</p>
            </div>
          </div>

          <!-- CONTENT BAWAH KIRI -->
          <div class="py-4 rounded-xl bg-[#121312] shadow-md shadow-[rgba(56,61,58,0.47)]">
            <div class="border-b mx-8">
              <p class="tracking-wider text-base 2xl:text-2xl text-[#52B788] ">Analisis Data / Hari</p>
            </div>
            
            <!-- CHART LINE -->
            <div class="mt-4 px-3 "> <!-- md:max-mt-5 md:mx-5 -->
              <canvas id="myChart" class="text-2xl"></canvas><!-- md:min-h-[20rem] lg:max-h-full xl:max-h-full w-full-->
            </div>
          </div>
          
        </div>
    
        <!-- SEBELAH KANAN -->
        <div class=" w-2/5 space-y-6 2xl:space-y-10"><!-- w-2/6 -->

          <!-- CONTENT -->
          <div class="p-2 bg-[#121312] rounded-xl shadow-md shadow-[rgba(56,61,58,0.47)]">

            <div class="flex flex-row border-b mx-[calc(15%)]"><!--mx-14 -->
              <button class=" pr-[calc(23%)] w-full z-10 text-base 2xl:text-2xl text-[#52B788] tracking-wider" type="button" id="dropdown"><!-- pr-16  2xl:pr-[calc(35%)] -->
                Analisis Data / Minggu
              </button> 
              <img id="rotate-Icon" src="src/img/icon/chevron-down-regular-24.png" alt="drop down" class="absolute cursor-pointer ml-[calc(21.5%)] "><!-- ml-[15.6rem] 2xl:ml-[calc(25%)]-->
              <div id="dropdown--Content" class="absolute hidden rounded-lg w-[calc(23.5%)] mt-8 2xl:mt-10 bg-black shadow-md shadow-[rgba(56,61,58,0.47)]"><!--w-[17rem]-->
                <div class="flex flex-col gap-1 text-white p-2" role="none">
                  <a href="#" onclick="selectOption('Analisis data Minggu 1')" class=" hover:bg-[#52B788]">Analisis data 'Minggu 1'</a>
                  <a href="#" onclick="selectOption('Analisis data Minggu 2')" class=" hover:bg-[#52B788]">Analisis data 'Minggu 2'</a>
                  <a href="#" onclick="selectOption('Analisis data Minggu 3')" class=" hover:bg-[#52B788]">Analisis data 'Minggu 3'</a>
                  <a href="#" onclick="selectOption('Analisis data Minggu 4')" class=" hover:bg-[#52B788]">Analisis data 'Minggu 4'</a>
                </div>
              </div>
            </div>

            <canvas id="bar" class="mt-5"></canvas>
  
          </div>

          <!-- KANAN BAWAH -->
          <div class="bg-[#121312] text-[#52B788] rounded-md shadow-md shadow-[rgba(56,61,58,0.47)]">
            <h2 class="p-2 2xl:p-5 text-lg 2xl:text-3xl font-medium border-b border-[#52B788]">Recent Update</h2>
            <div class=" flex-col space-y-3 2xl:space-y-7 pt-2 2xl:pt-5 h-[14.5rem] 2xl:h-[24rem] overflow-y-auto">

              <!-- IMAGE CONTENT -->
              <div class="flex gap-5 2xl:gap-8 items-center">
                <div class="border border-slate-500 ml-6 w-34px h-34px 2xl:w-50px 2xl:h-50px rounded-full overflow-hidden">
                  <img src="src/img/dashboard/pp.png" alt="" class="w-full h-full object-cover">
                </div>
                <h2 class="font- tracking-wider text-base 2xl:text-2xl">asep@gmail.com</h2>
              </div>

              <div class="flex gap-5 2xl:gap-8 items-center">
                <div class="border border-slate-500 ml-6 w-34px h-34px 2xl:w-50px 2xl:h-50px rounded-full overflow-hidden">
                  <img src="src/img/dashboard/women.png" alt="" class="w-full h-full object-cover">
                </div>
                <h2 class="font-mono tracking-wider text-base 2xl:text-2xl">women@gmail.com</h2>
              </div>

              <div class="flex gap-5 2xl:gap-8 items-center">
                <div class="border border-slate-500 ml-6 w-34px h-34px 2xl:w-50px 2xl:h-50px rounded-full overflow-hidden">
                  <img src="src/img/dashboard/women2.png" alt="" class="w-full h-full object-cover">
                </div>
                <h2 class="font-mono tracking-wider text-base 2xl:text-2xl">Naon@gmail.com</h2>
              </div>

              <div class="flex gap-5 2xl:gap-8 items-center">
                <div class="border border-slate-500 ml-6 w-34px h-34px 2xl:w-50px 2xl:h-50px rounded-full overflow-hidden">
                  <img src="src/img/dashboard/cool-profile.png" alt="" class="w-full h-full object-cover">
                </div>
                <h2 class="font-mono tracking-wider text-base 2xl:text-2xl">mamangGarox2@gmail.com</h2>
              </div>

              <div class="flex gap-5 2xl:gap-8 items-center">
                <div class="border border-slate-500 ml-6 w-34px h-34px 2xl:w-50px 2xl:h-50px rounded-full overflow-hidden">
                  <img src="src/img/dashboard/pp.png" alt="" class="w-full h-full object-cover">
                </div>
                <h2 class="font-mono tracking-wider text-base 2xl:text-2xl">asep@gmail.com</h2>
              </div>

              <div class="flex gap-5 2xl:gap-8 items-center">
                <div class="border border-slate-500 ml-6 w-34px h-34px 2xl:w-50px 2xl:h-50px rounded-full overflow-hidden">
                  <img src="src/img/dashboard/pp-2.png" alt="" class="w-full h-full object-cover">
                </div>
                <h2 class="font-mono tracking-wider text-base 2xl:text-2xl">u@gmail.com</h2>
              </div>

              <div class="flex gap-5 2xl:gap-8 items-center">
                <div class="border border-slate-500 ml-6 w-34px h-34px 2xl:w-50px 2xl:h-50px rounded-full overflow-hidden">
                  <img src="src/img/dashboard/pp-3.png" alt="" class="w-full h-full object-cover">
                </div>
                <h2 class="font-mono tracking-wider text-base 2xl:text-2xl">n@gmail.com</h2>
              </div>

            </div>
          </div>
        </div>

    </section>
      
      <script src="script/js/chart.js"></script>
      <script src="script/js/index.js"></script>
      <!-- <script>
        const dropdownButton = document.getElementById('dropdown');
        const dropdownContent = document.getElementById('dropdown--Content');
        const iconImage = document.getElementById('rotate-Icon');

        // // ini untuk test logout aja
        //   const dropdown = document.querySelector('#btn-logout');
        //   const droplogout = document.querySelector('#logout'); 
          
        //   dropdown.addEventListener('click', function(){
        //     droplogout.classList.toggle('hidden');
        //   });

        //   document.addEventListener('click', function(event) {
        //     if (!dropdown.contains(event.target) && !droplogout.contains(event.target)) {
        //       droplogout.classList.add('hidden');
        //     };
        //   });
        // //sampai sini

        // dropdownButton.addEventListener('click', function() { 
        //   dropdownContent.classList.toggle('hidden');
        //   iconImage.classList.toggle('rotate-180');
        // });

        document.addEventListener('click', function(event) {
          if (!dropdownButton.contains(event.target) && !dropdownContent.contains(event.target)) {
            dropdownContent.classList.add('hidden');
            iconImage.classList.remove('rotate-180');
          }
        });

        function selectOption(option) {
          dropdownButton.innerText = option;
          dropdownContent.classList.add('hidden');
          iconImage.classList.remove('rotate-180');
        }
      </script> -->
@endsection