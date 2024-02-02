<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>App Lapor Bug</title>

    @notifyCss

    <link href="src/css/final.css" rel="stylesheet" />
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
    <script src="node_modules/chart.js/dist/chart.umd.js"></script>
  </head>

  <body class="bg-[#080908]">
    <!-- Navbar Start -->
    <nav
      class="fixed w-full h-[3.6rem] py-[auto] flex justify-between items-center px-8 bg-[#080908] border-b border-[#52B788] border-solid"
    >
      <div class="flex flex-row items-center">
        <img
          class="object-contain mr-4"
          src="src/img/app/narbar/Laporbug-Logo.png"
          width="26px"
          height="28px"
          alt=""
        />
        <h2
          class="text-[#52B788] text-[1.2rem] font-['Montserrat'] font-semibold tracking-wide"
        >
          Lapor Bug
        </h2>
      </div>
      @auth
        @php
          $email = auth()->user()->email;
          $filterEmail = strstr($email, '@', true);
        @endphp
        <div id="btn-logout" class="relative cursor-pointer flex flex-row items-center">
          <h2
            class="text-white text-[1rem] font-['Montserrat'] font-extralight tracking-wider"
          >
          
            Welcome, {{ $filterEmail }}
          </h2>
          <img
            class="object-contain ml-6"
            src="src/img/app/narbar/user_profile.png"
            width="34px"
            height="34px"
            alt=""
          />
          <form action="/logout" method="post">
            @csrf
            <button type="submit">logout</button> 
            <!-- <div id="logout" class=" mt-16 w-full text-center shadow-sm shadow-[rgba(56,61,58,0.47)] bg-black text-white hover:bg-[#1d1e1d] cursor-pointer rounded-sm">
            Logout
            </div> -->
          </form>  
        </div>
      @endauth
    </nav>
    <!-- Navbar End -->

    <section class="w-full flex flex-row">
      <!-- SideBar Start -->
      <aside
        class="fixed w-[13.5rem] h-[calc(100vh-3.6rem)] left-0 bottom-0 pt-2 pb-4 px-2 border-r border-[#52B788] border-solid"
      >
        <div class="mb-14">
          <!-- start -->
          <!-- <form action="{{url('/dashboard')}}" method="GET">
            @method('get')
            @csrf -->
            <a href="{{url('/dashboard')}}">
              <button
                class="w-full bg-transparent hover:bg-[#1d1e1d] focus:bg-[#121312] px-6 py-3 mb-1 rounded-md flex items-center"
                type="submit"
              >
                <div class="w-7 h-7 mr-4">
                  <img
                    class="object-contain w-full h-full"
                    src="src/img/app/sidebar/dashboard.png"
                    alt=""
                  />
                </div>
                <p
                  class="text-[#52B788] text-[.9rem] font-['Montserrat'] tracking-wide"
                >
                  Dashboard
                </p>
              </button>
          <!-- </form> -->
          </a>

          @if(auth()->check())
            @if(auth()->user()->role === 'admin')
            <form action="{{url('/Layout_BugReport')}}" method="GET">
              @method('get')
              @csrf
              <!-- <a href="{{url('/Layout_BugReport')}}"> -->
                <button
                  class="w-full bg-transparent hover:bg-[#1d1e1d] focus:bg-[#121312] px-6 py-3 mb-1 rounded-md flex items-center"
                  type="submit"
                >
                  <div class="w-7 h-7 mr-4">
                    <img
                      class="object-contain w-full h-full"
                      src="src/img/app/sidebar/Report.png"
                      alt=""
                    />
                  </div>
                  <p
                    class="text-[#52B788] text-[1rem] font-['Montserrat'] font-normal tracking-wide"
                  >
                    Report
                  </p>
                </button>
              <!-- </a> -->
            </form>

            @elseif(auth()->user()->role === 'user')
            <form action="{{url('/addFinding')}}" method="GET">
              @method('get')
              @csrf
              <!-- <a href="{{ url('/addFinding') }}"> -->
              <button
                  class="w-full bg-transparent hover:bg-[#1d1e1d] focus:bg-[#121312] px-6 py-3 mb-1 rounded-md flex items-center"
                  type="submit"
                >
                  <div class="w-7 h-7 mr-4">
                    <img
                      class="object-contain w-full h-full"
                      src="src/img/app/sidebar/Report.png"
                      alt=""
                    />
                  </div>
                  <p
                    class="text-[#52B788] text-[1rem] font-['Montserrat'] font-normal tracking-wide"
                  >
                    Report
                  </p>
                </button>
              <!-- </a> -->
            </form>
            @endif
          @endif

          <form action="{{url('/searchFinding')}}" method="GET">
            @method('get')
            @csrf
            <!-- <a href="{{url('/searchFinding')}}"> -->
              <button
                class="w-full bg-transparent hover:bg-[#1d1e1d] focus:bg-[#121312] px-6 py-3 mb-1 rounded-md flex items-center"
                type="submit"
              >
                <div class="w-7 h-7 mr-4">
                  <img
                    class="object-contain w-full h-full"
                    src="src/img/app/sidebar/Search.png"
                    alt=""
                  />
                </div>
                <p
                  class="text-[#52B788] text-[1rem] font-['Montserrat'] font-normal tracking-wide"
                >
                  Search
                </p>
              </button>
            <!-- </a> -->
          </form>  
          
          <form action="{{url('/Riskcalculator')}}" method="GET">
            @method('get')
            @csrf
            <!-- <a href="{{url('/Riskcalculator')}}"> -->
              <button
                class="w-full bg-transparent hover:bg-[#1d1e1d] focus:bg-[#121312] px-6 py-3 mb-1 rounded-md flex items-center"
                type="submit"
              >
                <div class="w-7 h-7 mr-4">
                  <img
                    class="object-contain w-full h-full"
                    src="src/img/app/sidebar/Risk Calculator.png"
                    alt=""
                  />
                </div>
                <p
                  class="text-[#52B788] text-[.85rem] font-['Montserrat'] tracking-wide"
                >
                  Risk Calculator
                </p>
              </button>
            <!-- </a> -->
          </form>

          <button
            class="w-full bg-transparent hover:bg-[#1d1e1d] focus:bg-[#121312] px-6 py-3 mb-1 rounded-md flex items-center"
            type="button"
          >
            <div class="w-7 h-7 mr-4">
              <img
                class="object-contain w-full h-full"
                src="src/img/app/sidebar/CVE Discovery.png"
                alt=""
              />
            </div>
            <p
              class="text-[#52B788] text-[.85rem] font-['Montserrat'] tracking-wide"
            >
              CVE Discovery
            </p>
          </button>
          <!-- end -->
        </div>

        @if(auth()->check())
          @if(auth()->user()->role === 'admin')
          <form action="{{url('/Layout_AddUser')}}" method="GET">
            @method('get')
            @csrf
            <div class=" pt-2 border-t border-[#52B788] border-solid">
              <!-- <a href="{{url('/Layout_AddUser')}}"> -->
                <button
                  class="w-full bg-transparent hover:bg-[#1d1e1d] focus:bg-[#121312] px-6 py-3 mb-1 rounded-md flex items-center"
                  type="submit"
                >
                  <div class="w-7 h-7 mr-4">
                    <img
                      class="object-contain w-full h-full"
                      src="src/img/app/sidebar/Add User.png"
                      alt=""
                    />
                  </div>
                  <p
                    class="text-[#52B788] text-[1rem] font-['Montserrat'] tracking-wide"
                  >
                    Add User
                  </p>
                </button>
              <!-- </a> -->
            </div>
          </form>
          @elseif(auth()->user()->role === 'user')

          @endif
        @endif
      </aside>
      <!-- SideBar End -->

      <!-- Content Container Start -->
      <section
        class="fixed w-[calc(100%-13.5rem)] h-[calc(100vh-3.6rem)] p-4 right-0 bottom-0 overflow-y-scroll scrollbar scrollbar-track-[transparent] scrollbar-thumb-[#282F28]"
      >
        @yield('content')
      </section>
      <!-- Content Container End -->
    </section>
  </body>
</html>