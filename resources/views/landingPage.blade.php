<!doctype html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laporbug</title>
    <!-- CSS -->
    <link href="src/css/final.css" rel="stylesheet" />
    <!-- Javascript -->
    <script defer src="script/js/utility.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    
  </head>
  <body
    class="bg-[#080908] overflow-x-hidden scrollbar-track-transparent scrollbar-thumb-[#282F28]"
  >
  
    <!-- Hero Section Start -->
    <section class="container px-6">
      <div
        class="section--transition section--hidden flex flex-row lg:justify-around h-[100dvh] lg:items-center"
      >
        <div class="w-full lg:w-2/5 py-14 md:py-36">
          <p
            class="w-44 lg:w-52 bg-transparent border border-[#EBF0F9] text-[#EBF0F9] text-[0.85rem] lg:text-[1rem] font-['Montserrat'] font-normal rounded-md text-center tracking-widest py-2"
          >
            PBO PBL-RKS302
          </p>
          <h1
            class="text-[#EBF0F9] text-[3rem] lg:text-[3.5rem] font-['Montserrat_Alternates'] font-semibold tracking-wider pt-3 pb-4"
          >
            Lapor Bug
          </h1>
          <p
            class="max-w-[60ch] text-[#EBF0F9] text-[1rem] lg:text-[1rem] font-['Montserrat'] font-normal tracking-wider leading-6"
          >
            Platform manajemen pelaporan bug yang dirancang khusus untuk
            memenuhi kebutuhan RKS Polibatam dalam mengelola dan memantau
            pelaporan bug dengan efisien
          </p>
          <a href="{{ url('/loginPage') }}">
            <button
              class=" bg-[#23aba6] hover:bg-blue-300 hover:shadow-[0_0_40px_0_rgba(24,209,203,1)_inset] active:scale-95 text-[#EBF0F9] transition-all duration-500 ease-out rounded-md tracking-wide py-2 px-8 mt-8"
              type="button"
            >
              Get Started
            </button>
          </a>
        </div>
        <div class="hidden lg:relative lg:w-2/5 lg:block">
          <div
            class="absolute w-[12.5rem] h-[5rem] bg-[#18D1CB] blur-[4rem] xl:blur-[6rem] scale-[2.5] xl:scale-[2.3] top-24 left-20 -z-10"
          ></div>
          <div class="relative w-full flex justify-end">
            <div class="floating">
              <img
                class="w-full scale-75"
                src="src/img/landing_page/hero-computer.png"
                width="511px"
                height="337px"
                alt=""
              />
            </div>
            <div
              class="absolute -z-[5] top-[2.5rem] -left-[.8rem] xl:top-[4.2rem] xl:left-[.1rem] spin-animation"
            >
              <img
                class="scale-[.6] xl:scale-[.7] object-contain"
                src="src/img/landing_page/hero-gir-med-kiri.png"
                alt=""
              />
            </div>
            <div
              class="absolute -z-[5] -top-[.7rem] left-[4.5rem] xl:top-[.2rem] xl:left-[6.5rem] spin-animation"
            >
              <img
                class="scale-[.6] xl:scale-[.7] object-contain"
                src="src/img/landing_page/hero-gir-med-atas.png"
                alt=""
              />
            </div>
            <div
              class="absolute -z-[5] -top-[9rem] -left-[6.5rem] xl:-top-[8.2rem] xl:-left-[5.2rem] spin-animation-cw"
            >
              <img
                class="scale-[.6] xl:scale-[.7] object-contain"
                src="src/img/landing_page/hero-big-gear.png"
                alt=""
              />
            </div>
            <div
              class="absolute -z-[5] top-[4.7rem] right-[2.5rem] xl:top-[6.5rem] xl:right-[3.2rem] spin-animation-cw"
            >
              <img
                class="scale-[.6] xl:scale-[.7] object-contain"
                src="src/img/landing_page/hero-gir-kanan-kecil.png"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
      <div
        class="absolute -z-10 overflow-x-hidden w-[10rem] h-[4.5rem] bg-[#18D1CB] blur-[4rem] lg:hidden scale-[2.5] top-64 -right-40"
      ></div>
    </section>
    <!-- Hero Section End -->

    <!-- Fitur Aplikasi Section Start -->
    <section class="section--transition container px-6 py-12 mt-20">
      <div class="">
        <h3
          class="text-[#EBF0F9] text-center text-[1.5rem] lg:text-[1.8rem] font-['Montserrat'] font-medium tracking-wider pb-4"
        >
          Fitur Aplikasi
        </h3>
        <div class="w-4/5 lg:w-2/5 mx-auto">
          <p
            class="text-[#B6B6B6] text-[1rem] font-['Montserrat'] text-center font-normal tracking-wider pb-12"
          >
            Laporbug hadir sebagai platform digital pelaporan bug yang intuitif
            dan user-friendly
            <span class="text-[#EBF0F9] font-semibold tracking-wider"
              >dengan beberapa Fitur Utama</span
            >
            yang dirancang khusus untuk kebutuhan Politeknik Negeri Batam
          </p>
        </div>
      </div>
      <div class="flex flex-wrap justify-center items-center gap-6 mb-12">
        <!-- gap -->
        <div
          class="w-full max-w-[18rem] h-[18rem] hover:scale-110 transition-all duration-300 ease-out bg-[rgba(199,199,199,0.1)] border border-[#EBF0F9] rounded-lg px-6"
        >
          <div class="w-full h-2/5 relative flex justify-center">
            <div
              class="absolute top-10 left-16 -z-10 w-14 h-14 blur-xl bg-[#18D1CB]"
            ></div>
            <img
              class="scale-[.6]"
              src="src/img/landing_page/fitur-report.png"
              alt=""
            />
          </div>
          <div class="w-full h-3/5">
            <p
              class="text-[#EBF0F9] font-['Montserrat'] text-[1rem] text-center font-semibold tracking-wider pb-2"
            >
              Pelaporan dan Monitoring
            </p>
            <p
              class="text-[#EBF0F9] font-['Libre_Franklin'] text-[.85rem] text-center font-normal tracking-wider"
            >
              Laporbug memungkinkan pengguna melaporkan bug serta melacak status
              pelaporan hingga penyelesaian, dan menghasilkan laporan analitik
              dari bug yang dilaporkan
            </p>
          </div>
        </div>
        <!-- gap -->
        <div
          class="w-full max-w-[18rem] h-[18rem] hover:scale-110 transition-all duration-300 ease-out bg-[rgba(199,199,199,0.1)] border border-[#EBF0F9] rounded-lg px-6"
        >
          <div class="w-full h-2/5 relative flex justify-center">
            <div
              class="absolute top-8 left-20 -z-10 w-14 h-14 blur-xl bg-[#18D1CB]"
            ></div>
            <img
              class="scale-[.6]"
              src="src/img/landing_page/fitur-search.png"
              alt=""
            />
          </div>
          <div class="w-full h-3/5">
            <p
              class="text-[#EBF0F9] font-['Montserrat'] text-[1rem] text-center font-semibold tracking-wider pb-2"
            >
              Pencarian Laporan Bug
            </p>
            <p
              class="text-[#cbc8c8] font-['Libre_Franklin'] text-[.85rem] text-center font-light tracking-wider"
            >
              Laporbug menyediakan fitur pencarian bug yang telah dilaporkan
              sebelumnya untuk mempermudah pengguna menemukan laporan serupa
            </p>
          </div>
        </div>
        <!-- gap -->
        <div
          class="w-full max-w-[18rem] h-[18rem] hover:scale-110 transition-all duration-300 ease-out bg-[rgba(199,199,199,0.1)] border border-[#EBF0F9] rounded-lg px-6"
        >
          <div class="w-full h-2/5 relative flex justify-center">
            <div
              class="absolute top-8 left-24 -z-10 w-14 h-14 blur-xl bg-[#18D1CB]"
            ></div>
            <img
              class="scale-[.6]"
              src="src/img/landing_page/fitur-calculator.png"
              alt=""
            />
          </div>
          <div class="w-full h-3/5">
            <p
              class="text-[#EBF0F9] font-['Montserrat'] text-[1rem] text-center font-semibold tracking-wider pb-2"
            >
              Perhitungan Tingkat Risiko Bug
            </p>
            <p
              class="text-[#cbc8c8] font-['Libre_Franklin'] text-[.85rem] text-center font-light tracking-wider"
            >
              Laporbug dilengkapi risk rating calculator yang memberikan skor
              berdasarkan standar CVSS guna mengukur tingkat risiko dari bug
              yang dilaporkan
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Fitur Aplikasi Section End -->

    <!-- Profil Pengembang Section Start -->
    <section class="container px-6 py-12">
      <div class="section--transition">
        <h3
          class="text-[#EBF0F9] text-[1.5rem] lg:text-[1.8rem] font-['Montserrat_Alternates'] text-center font-medium tracking-wider pb-4"
        >
          Profil Pengembang
        </h3>
        <div class="flex justify-center">
          <p
            class="max-w-[50ch] text-[#B6B6B6] text-[1rem] text-center font-['Montserrat'] font-normal tracking-wider pb-8"
          >
            Para Pengembang yang turut berupaya mengembangkan aplikasi ini
            terdiri atas anggota dari kelompok
            <span class="text-[#EBF0F9] font-semibold tracking-wider"
              >PBL-RKS302</span
            >
          </p>
        </div>
      </div>
      <!-- sub team section start -->
      <div class="section--transition flex flex-col justify-center mt-8 mb-12">
        <h3
          class="text-[#d4d4d4] text-[1.2rem] lg:text-[1.4rem] font-['Montserrat_Alternates'] text-center font-medium tracking-wider pb-4"
        >
          Sub-Tim Frontend
        </h3>
        <div class="flex flex-wrap justify-center gap-12 pt-8 mt-4">
          <!-- start -->
          <div
            class="w-full max-w-[15.8rem] h-[16.5rem] hover:scale-110 transition-all duration-300 ease-out bg-[rgba(199,199,199,0.1)] border border-[#EBF0F9] rounded-lg px-[1.25rem] mb-6"
          >
            <div class="relative -translate-y-12">
              <img
                class="z-10"
                src="src/img/landing_page/profile/ghiffar.png"
                alt=""
              />
              <div
                class="absolute left-0 bottom-0 w-full h-8 bg-black blur-md"
              ></div>
            </div>
            <div class="flex items-center -translate-y-14">
              <div class="h-2 w-2 rounded-full bg-white"></div>
              <div class="w-full h-[1px] bg-white"></div>
              <div class="h-2 w-2 rounded-full bg-white"></div>
            </div>
            <div
              class="text-[#EBF0F9] text-[1rem] text-center font-['Montserrat'] -translate-y-12"
            >
              <p class="tracking-wider">Ghiffar Alfin Faiz</p>
              <p class="tracking-widest">4332201010</p>
            </div>
          </div>
          <!-- gap -->
          <div
            class="w-full max-w-[15.8rem] h-[16.5rem] hover:scale-110 transition-all duration-300 ease-out bg-[rgba(199,199,199,0.1)] border border-[#EBF0F9] rounded-lg px-[1.25rem] mb-6"
          >
            <div class="relative -translate-y-12 m-2">
              <img
                class="z-10"
                src="src/img/landing_page/profile/ruben.png"
                alt=""
              />
              <div
                class="absolute left-0 bottom-0 w-full h-8 bg-black blur-md"
              ></div>
            </div>
            <div class="flex items-center -translate-y-16">
              <div class="h-2 w-2 rounded-full bg-white"></div>
              <div class="w-full h-[1px] bg-white"></div>
              <div class="h-2 w-2 rounded-full bg-white"></div>
            </div>
            <div
              class="text-[#EBF0F9] text-[1rem] text-center font-['Montserrat'] -translate-y-14"
            >
              <p class="tracking-wider">Ruben William Bakara</p>
              <p class="tracking-widest">4332201033</p>
            </div>
          </div>
          <!-- gap -->
          <div
            class="w-full max-w-[15.8rem] h-[16.5rem] hover:scale-110 transition-all duration-300 ease-out bg-[rgba(199,199,199,0.1)] border border-[#EBF0F9] rounded-lg px-[1.25rem] mb-6"
          >
            <div class="relative -translate-y-12">
              <img
                class="z-10"
                src="src/img/landing_page/profile/paskal.png"
                alt=""
              />
              <div
                class="absolute left-0 bottom-0 w-full h-8 bg-black blur-md"
              ></div>
            </div>
            <div class="flex items-center -translate-y-14">
              <div class="h-2 w-2 rounded-full bg-white"></div>
              <div class="w-full h-[1px] bg-white"></div>
              <div class="h-2 w-2 rounded-full bg-white"></div>
            </div>
            <div
              class="text-[#EBF0F9] text-[1rem] text-center font-['Montserrat'] -translate-y-12"
            >
              <p class="tracking-wider">M. Derick Pascal</p>
              <p class="tracking-widest">4332201005</p>
            </div>
          </div>
          <!-- end -->
        </div>
      </div>
      <!-- sub team section end -->
      <!-- sub team section 2 start -->
      <div class="section--transition flex flex-col justify-center mt-8 mb-12">
        <h3
          class="text-[#d4d4d4] text-[1.2rem] lg:text-[1.4rem] font-['Montserrat_Alternates'] text-center font-medium tracking-wider pb-4"
        >
          Sub-Tim Backend
        </h3>
        <div class="flex flex-wrap justify-center gap-12 pt-8 mt-4">
          <!-- start -->
          <div
            class="w-full max-w-[15.8rem] h-[16.5rem] hover:scale-110 transition-all duration-300 ease-out bg-[rgba(199,199,199,0.1)] border border-[#EBF0F9] rounded-lg px-[1.25rem] mb-6"
          >
            <div class="relative -translate-y-10 m-2">
              <img
                class="z-10"
                src="src/img/landing_page/profile/ridho.png"
                alt=""
              />
              <div
                class="absolute left-0 bottom-0 w-full h-8 bg-black blur-md"
              ></div>
            </div>
            <div class="flex items-center -translate-y-14">
              <div class="h-2 w-2 rounded-full bg-white"></div>
              <div class="w-full h-[1px] bg-white"></div>
              <div class="h-2 w-2 rounded-full bg-white"></div>
            </div>
            <div
              class="text-[#EBF0F9] text-[1rem] text-center font-['Montserrat'] -translate-y-12"
            >
              <p class="tracking-wider">M. Ridho Syahputra J</p>
              <p class="tracking-widest">4332201004</p>
            </div>
          </div>
          <!-- gap -->
          <div
            class="w-full max-w-[15.8rem] h-[16.5rem] hover:scale-110 transition-all duration-300 ease-out bg-[rgba(199,199,199,0.1)] border border-[#EBF0F9] rounded-lg px-[1.25rem] mb-6"
          >
            <div class="relative -translate-y-10">
              <img
                class="z-10"
                src="src/img/landing_page/profile/faaiz.png"
                alt=""
              />
              <div
                class="absolute left-0 bottom-0 w-full h-8 bg-black blur-md"
              ></div>
            </div>
            <div class="flex items-center -translate-y-12">
              <div class="h-2 w-2 rounded-full bg-white"></div>
              <div class="w-full h-[1px] bg-white"></div>
              <div class="h-2 w-2 rounded-full bg-white"></div>
            </div>
            <div
              class="text-[#EBF0F9] text-[1rem] text-center font-['Montserrat'] -translate-y-10"
            >
              <p class="tracking-wider">M. Faaiz Muazi</p>
              <p class="tracking-widest">4332201003</p>
            </div>
          </div>
          <!-- gap -->
          <div
            class="w-full max-w-[15.8rem] h-[16.5rem] hover:scale-110 transition-all duration-300 ease-out bg-[rgba(199,199,199,0.1)] border border-[#EBF0F9] rounded-lg px-[1.25rem] mb-6"
          >
            <div class="relative -translate-y-8">
              <img
                class="z-10"
                src="src/img/landing_page/profile/fikri.png"
                alt=""
              />
              <div
                class="absolute left-0 bottom-0 w-full h-8 bg-black blur-md"
              ></div>
            </div>
            <div class="flex items-center -translate-y-10">
              <div class="h-2 w-2 rounded-full bg-white"></div>
              <div class="w-full h-[1px] bg-white"></div>
              <div class="h-2 w-2 rounded-full bg-white"></div>
            </div>
            <div
              class="text-[#EBF0F9] text-[1rem] text-center font-['Montserrat'] -translate-y-8"
            >
              <p class="tracking-wider">Fikri Azhar Samosir</p>
              <p class="tracking-widest">4332201002</p>
            </div>
          </div>
          <!-- end -->
        </div>
      </div>
      <!-- sub team section 2 end -->
    </section>
    <!-- Profil Pengembang Section End -->
    <!-- Credits start -->
    <section class="container px-6">
      <h3
        class="text-[#EBF0F9] text-center text-[1rem] font-['Montserrat'] font-medium tracking-wider pb-4"
      >
        Copyright © PBL-RKS302 Biohazard Team, 2023
      </h3>
    </section>
    <!-- Credits end -->

    <!-- <script src="src/js/LandingPage.js"></script> -->
  </body>
</html>
