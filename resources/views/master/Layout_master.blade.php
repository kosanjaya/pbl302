<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>App Lapor Bug</title>

    @notifyCss

    <link href="src/css/final.css" rel="stylesheet" />
    <!-- Javascript -->
    <script defer src="script/js/utility.js"></script>

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
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="bg-[#0F0F0F] overflow-x-hidden">
    <!-- Navbar Start -->
    <nav
      class="fixed w-full h-[3.2rem] flex justify-between items-center px-8 z-10 bg-[#333333]"
    >
      <div class="flex flex-row items-center">
        <div class="w-6 h-6 mr-4">
          <img
            class="w-full object-contain"
            src="src/img/app/navbar/Laporbug-Logo.png"
            alt=""
          />
        </div>
        <h2
          class="text-white text-[1.2rem] font-sans font-normal tracking-wider"
        >
          LaporBug
        </h2>
      </div>
      @auth
        @php
          $email = auth()->user()->email;
          $filterEmail = strstr($email, '@', true);
        @endphp
      <div class="relative items-center">
        <div id="user-profile" class="flex items-center">
          <h2
            class="text-white text-[1rem] font-sans font-extralight tracking-wider cursor-pointer"
          >
            Welcome, {{ $filterEmail }}
          </h2>
          <div class="w-6 h-6 xl:w-8 xl:h-8 ml-4 xl:ml-6 cursor-pointer">
            <img
              class="w-full object-contain"
              src="src/img/app/navbar/user_profile.png"
              alt=""
            />
          </div>
        </div>
        <form action="{{ url('/logout') }}" method="POST">
          @csrf
          <button
            id="logout-button"
            type="submit"
            class="hidden z-10 absolute right-0 -bottom-[3.2rem] w-[7rem] h-[3rem] rounded-md justify-center items-center bg-[#1e2423] text-white hover:bg-[#2e3839] active:scale-95"
          >
            Log Out
          </button>
        </form>
      </div>
      @endauth
    </nav>
    <!-- Navbar End -->

    <section class="w-full flex flex-row">
      <!-- SideBar Start -->
      <aside
        class="fixed w-[12.8rem] xl:w-[13.5rem] h-[calc(100vh-3.2rem)] left-0 bottom-0 bg-[#1B1B1B] pt-6 pb-4 px-4"
      >
      <form action="{{url('/Dashboard')}}" method="GET">
          @method('get')
          @csrf
        <!-- <a href="{{url('/Dashboard')}}"> -->
          <button
            type="submit"
            class="transition-all duration-150 ease-out group flex items-center w-full focus:shadow-[0_0_10px_0_rgba(24,209,203,1)_inset] border-2 border-[#1B1B1B] hover:border-[#18D1CB] rounded-md text-white hover:text-[#18D1CB] focus:text-[#18D1CB] text-[.9rem] font-sans font-light tracking-wider py-2 mb-2"
          >
            <div class="px-3">
              <svg
                class="fill-white group-hover:fill-primary group-focus:fill-primary"
                width="20"
                height="21"
                viewBox="0 0 20 21"
              >
                <path
                  d="M10.7127 0.300725C10.6197 0.205435 10.5092 0.129802 10.3874 0.0781878C10.2655 0.0265736 10.1349 0 10.0029 0C9.87092 0 9.74025 0.0265736 9.61842 0.0781878C9.4966 0.129802 9.38603 0.205435 9.2931 0.300725L0.295712 9.45061C0.202011 9.54513 0.127638 9.65757 0.0768846 9.78146C0.0261306 9.90535 0 10.0382 0 10.1724C0 10.3066 0.0261306 10.4395 0.0768846 10.5634C0.127638 10.6873 0.202011 10.7998 0.295712 10.8943C0.389125 10.9885 0.499909 11.063 0.621711 11.1136C0.743513 11.1642 0.873938 11.1899 1.00551 11.1891H2.00522V18.3057C2.00522 18.8449 2.21587 19.3621 2.59083 19.7434C2.9658 20.1248 3.47436 20.339 4.00463 20.339H16.0011C16.5314 20.339 17.04 20.1248 17.4149 19.7434C17.7899 19.3621 18.0006 18.8449 18.0006 18.3057V11.1891H19.0003C19.2654 11.1891 19.5197 11.082 19.7072 10.8913C19.8947 10.7007 20 10.4421 20 10.1724C20.0007 10.0386 19.9755 9.90601 19.9258 9.78214C19.876 9.65827 19.8027 9.54561 19.7101 9.45061L10.7127 0.300725ZM4.00463 18.3057V8.55596L10.0029 2.45603L16.0011 8.55596V18.3057H4.00463Z"
                />
              </svg>
            </div>
            Dashboard
          </button>
      </form>

        <div
          class="w-full border-t border-[#50605F] text-white text-[.9rem] font-sans font-normal tracking-wider py-2 px-3"
        >
          Features
        </div>

        @if(auth()->check())
          @if(auth()->user()->role === 'admin')
          <form action="{{url('/Bug_Report')}}" method="GET">
            @method('get')
            @csrf
            <button
              type="submit"
              class="transition-all duration-150 ease-out group flex items-center w-full focus:shadow-[0_0_10px_0_rgba(24,209,203,1)_inset] border-2 border-[#1B1B1B] hover:border-[#18D1CB] rounded-md text-white hover:text-[#18D1CB] focus:text-[#18D1CB] text-[.9rem] font-sans font-light tracking-wider py-2 mb-2"
            >
              <div class="px-3">
                <svg
                  class="fill-white group-hover:fill-primary group-focus:fill-primary"
                  width="16"
                  height="21"
                  viewBox="0 0 16 21"
                >
                  <path
                    d="M16 6.81348L10 0.813477H2C1.46957 0.813477 0.960859 1.02419 0.585786 1.39926C0.210714 1.77434 0 2.28304 0 2.81348V18.8135C0 19.3439 0.210714 19.8526 0.585786 20.2277C0.960859 20.6028 1.46957 20.8135 2 20.8135H14C14.5304 20.8135 15.0391 20.6028 15.4142 20.2277C15.7893 19.8526 16 19.3439 16 18.8135V6.81348ZM5 17.8135H3V8.81348H5V17.8135ZM9 17.8135H7V11.8135H9V17.8135ZM13 17.8135H11V14.8135H13V17.8135ZM10 7.81348H9V2.81348L14 7.81348H10Z"
                  />
                </svg>
              </div>
              Report
            </button>
          </form>

          @elseif(auth()->user()->role === 'user')
          <form action="{{url('/Create_Finding')}}" method="GET">
            @method('get')
            @csrf
            <button
              type="submit"
              class="transition-all duration-150 ease-out group flex items-center w-full focus:shadow-[0_0_10px_0_rgba(24,209,203,1)_inset] border-2 border-[#1B1B1B] hover:border-[#18D1CB] rounded-md text-white hover:text-[#18D1CB] focus:text-[#18D1CB] text-[.9rem] font-sans font-light tracking-wider py-2 mb-2"
            >
              <div class="px-3">
                <svg
                  class="fill-white group-hover:fill-primary group-focus:fill-primary"
                  width="16"
                  height="21"
                  viewBox="0 0 16 21"
                >
                  <path
                    d="M16 6.81348L10 0.813477H2C1.46957 0.813477 0.960859 1.02419 0.585786 1.39926C0.210714 1.77434 0 2.28304 0 2.81348V18.8135C0 19.3439 0.210714 19.8526 0.585786 20.2277C0.960859 20.6028 1.46957 20.8135 2 20.8135H14C14.5304 20.8135 15.0391 20.6028 15.4142 20.2277C15.7893 19.8526 16 19.3439 16 18.8135V6.81348ZM5 17.8135H3V8.81348H5V17.8135ZM9 17.8135H7V11.8135H9V17.8135ZM13 17.8135H11V14.8135H13V17.8135ZM10 7.81348H9V2.81348L14 7.81348H10Z"
                  />
                </svg>
              </div>
              Report
            </button>
          </form>
          @endif
        @endif

        <!-- gap -->
        <form action="{{url('/Search_Finding')}}" method="GET">
          @method('get')
          @csrf
          <button
            type="submit"
            class="transition-all duration-150 ease-out group flex items-center w-full focus:shadow-[0_0_10px_0_rgba(24,209,203,1)_inset] border-2 border-[#1B1B1B] hover:border-[#18D1CB] rounded-md text-white hover:text-[#18D1CB] focus:text-[#18D1CB] text-[.9rem] font-sans font-light tracking-wider py-2 mb-2"
          >
            <div class="px-3">
              <svg
                class="fill-white group-hover:fill-primary group-focus:fill-primary"
                width="19"
                height="20"
                viewBox="0 0 19 20"
              >
                <path
                  d="M8 16.8135C9.77498 16.8131 11.4988 16.2189 12.897 15.1255L17.293 19.5215L18.707 18.1075L14.311 13.7115C15.405 12.3131 15.9996 10.5889 16 8.81348C16 4.40248 12.411 0.813477 8 0.813477C3.589 0.813477 0 4.40248 0 8.81348C0 13.2245 3.589 16.8135 8 16.8135ZM8 2.81348C11.309 2.81348 14 5.50448 14 8.81348C14 12.1225 11.309 14.8135 8 14.8135C4.691 14.8135 2 12.1225 2 8.81348C2 5.50448 4.691 2.81348 8 2.81348Z"
                />
              </svg>
            </div>
            Search
          </button>
        </form>

        <form action="{{url('/Risk_Calculator')}}" method="GET">
          @method('get')
          @csrf
          <button
            type="submit"
            class="transition-all duration-150 ease-out group flex items-center w-full focus:shadow-[0_0_10px_0_rgba(24,209,203,1)_inset] border-2 border-[#1B1B1B] hover:border-[#18D1CB] rounded-md text-white hover:text-[#18D1CB] focus:text-[#18D1CB] text-[.9rem] font-sans font-light tracking-wider py-2 mb-2"
          >
            <div class="px-3">
              <svg
                class="fill-white group-hover:fill-primary group-focus:fill-primary"
                width="20"
                height="21"
                viewBox="0 0 20 21"
              >
                <path
                  d="M2.62602 7.69148C3.02564 6.74149 3.60645 5.87842 4.33602 5.15048C5.06398 4.42046 5.92747 3.8396 6.87802 3.44048C8.83751 2.62641 11.0378 2.61169 13.008 3.39948C13.0278 4.04695 13.2991 4.66123 13.7644 5.11194C14.2296 5.56265 14.8522 5.8143 15.5 5.81348C16.886 5.81348 18 4.69948 18 3.31348C18 1.92748 16.886 0.813477 15.5 0.813477C14.811 0.813477 14.188 1.08948 13.737 1.53848C11.306 0.565476 8.51402 0.580477 6.10202 1.59748C4.91202 2.09748 3.84202 2.81748 2.92202 3.73648C1.9931 4.66568 1.25679 5.76917 0.755361 6.98362C0.25393 8.19807 -0.002759 9.49958 2.23631e-05 10.8135H2.00002C2.00002 9.72748 2.21102 8.67748 2.62602 7.69148ZM17.373 13.9355C16.972 14.8875 16.396 15.7435 15.663 16.4765C14.93 17.2095 14.074 17.7855 13.121 18.1865C11.1615 19.0005 8.96123 19.0153 6.99102 18.2275C6.97176 17.58 6.70074 16.9656 6.23557 16.5148C5.77041 16.064 5.14778 15.8124 4.50002 15.8135C3.11402 15.8135 2.00002 16.9275 2.00002 18.3135C2.00002 19.6995 3.11402 20.8135 4.50002 20.8135C5.18902 20.8135 5.81202 20.5375 6.26302 20.0885C7.45058 20.5678 8.71936 20.814 10 20.8135C11.9666 20.8173 13.8904 20.2402 15.5302 19.1546C17.1699 18.069 18.4525 16.5233 19.217 14.7115C19.7365 13.4777 20.0028 12.1521 20 10.8135H18C18.0025 11.8857 17.7893 12.9474 17.373 13.9355Z"
                />
                <path
                  d="M9.99991 6.27539C7.49791 6.27539 5.46191 8.31139 5.46191 10.8134C5.46191 13.3154 7.49791 15.3514 9.99991 15.3514C12.5019 15.3514 14.5379 13.3154 14.5379 10.8134C14.5379 8.31139 12.5019 6.27539 9.99991 6.27539Z"
                />
              </svg>
            </div>
            Risk Calculator
          </button>
        </form>
        
            <form action="{{url('/CVE_Discovery')}}" method="GET">
                @method('get')
                @csrf
              <button
                type="submit"
                class="transition-all duration-150 ease-out group flex items-center w-full focus:shadow-[0_0_10px_0_rgba(24,209,203,1)_inset] border-2 border-[#1B1B1B] hover:border-[#18D1CB] rounded-md text-white hover:text-[#18D1CB] focus:text-[#18D1CB] text-[.9rem] font-sans font-light tracking-wider py-2 mb-2"
              >
                <div class="px-3">
                  <svg
                    class="fill-white group-hover:fill-primary group-focus:fill-primary"
                    width="19"
                    height="21"
                    viewBox="0 0 19 21"
                  >
                    <path
                      d="M16 1.81348C14.346 1.81348 13 3.15948 13 4.81348C13 5.31548 13.136 5.78148 13.354 6.19848L12.238 7.50048C11.5779 7.05207 10.798 6.81269 10 6.81348C9.261 6.81348 8.575 7.02948 7.98 7.37948L6.566 5.96548C6.84689 5.45991 6.99613 4.89182 7 4.31348C7 2.38348 5.43 0.813477 3.5 0.813477C1.57 0.813477 0 2.38348 0 4.31348C0 6.24348 1.57 7.81348 3.5 7.81348C4.101 7.81348 4.658 7.64748 5.152 7.37948L6.566 8.79348C6.19972 9.40392 6.00424 10.1016 6 10.8135C6 11.8105 6.38 12.7125 6.985 13.4145L5.293 15.1065L5.318 15.1315C4.90916 14.925 4.45801 14.8161 4 14.8135C2.346 14.8135 1 16.1595 1 17.8135C1 19.4675 2.346 20.8135 4 20.8135C5.654 20.8135 7 19.4675 7 17.8135C7 17.3375 6.879 16.8945 6.682 16.4955L6.707 16.5205L8.661 14.5665C9.082 14.7165 9.528 14.8135 10 14.8135C12.206 14.8135 14 13.0195 14 10.8135C13.9957 10.1923 13.8453 9.58081 13.561 9.02848L14.814 7.56648C15.178 7.72448 15.578 7.81348 16 7.81348C17.654 7.81348 19 6.46748 19 4.81348C19 3.15948 17.654 1.81348 16 1.81348ZM4 18.8135C3.73478 18.8135 3.48043 18.7081 3.29289 18.5206C3.10536 18.333 3 18.0787 3 17.8135C3 17.5483 3.10536 17.2939 3.29289 17.1064C3.48043 16.9188 3.73478 16.8135 4 16.8135C4.26522 16.8135 4.51957 16.9188 4.70711 17.1064C4.89464 17.2939 5 17.5483 5 17.8135C5 18.0787 4.89464 18.333 4.70711 18.5206C4.51957 18.7081 4.26522 18.8135 4 18.8135ZM2 4.31348C2 3.48648 2.673 2.81348 3.5 2.81348C4.327 2.81348 5 3.48648 5 4.31348C5 5.14048 4.327 5.81348 3.5 5.81348C2.673 5.81348 2 5.14048 2 4.31348ZM10 12.8135C8.897 12.8135 8 11.9165 8 10.8135C8 9.71048 8.897 8.81348 10 8.81348C11.103 8.81348 12 9.71048 12 10.8135C12 11.9165 11.103 12.8135 10 12.8135ZM16 5.81348C15.7348 5.81348 15.4804 5.70812 15.2929 5.52058C15.1054 5.33305 15 5.07869 15 4.81348C15 4.54826 15.1054 4.29391 15.2929 4.10637C15.4804 3.91883 15.7348 3.81348 16 3.81348C16.2652 3.81348 16.5196 3.91883 16.7071 4.10637C16.8946 4.29391 17 4.54826 17 4.81348C17 5.07869 16.8946 5.33305 16.7071 5.52058C16.5196 5.70812 16.2652 5.81348 16 5.81348Z"
                    />
                  </svg>
                </div>
                CVE Discovery
              </button>
            </form>
            
        @if(auth()->check())
            @if(auth()->user()->role === 'admin')
            <div class="w-full border-t border-[#50605F] text-white text-[.9rem] font-sans font-normal tracking-wider py-2 px-3">
              Privileges
            </div>
            @endif
        @endif
        
        @if(auth()->check())
          @if(auth()->user()->role === 'admin')
          <form action="{{url('/Add_User')}}" method="GET">
            @method('get')
            @csrf
            <button
              type="submit"
              class="transition-all duration-150 ease-out group flex items-center w-full focus:shadow-[0_0_10px_0_rgba(24,209,203,1)_inset] border-2 border-[#1B1B1B] hover:border-[#18D1CB] rounded-md text-white hover:text-[#18D1CB] focus:text-[#18D1CB] text-[.9rem] font-sans font-light tracking-wider py-2 mb-2"
            >
              <div class="px-3">
                <svg
                  class="fill-white group-hover:fill-primary group-focus:fill-primary"
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M18 0H6C5.46957 0 4.96086 0.210714 4.58579 0.585786C4.21071 0.960859 4 1.46957 4 2V14C4 14.5304 4.21071 15.0391 4.58579 15.4142C4.96086 15.7893 5.46957 16 6 16H18C18.5304 16 19.0391 15.7893 19.4142 15.4142C19.7893 15.0391 20 14.5304 20 14V2C20 1.46957 19.7893 0.960859 19.4142 0.585786C19.0391 0.210714 18.5304 0 18 0ZM12 2.5C12.663 2.5 13.2989 2.76339 13.7678 3.23223C14.2366 3.70107 14.5 4.33696 14.5 5C14.5 5.66304 14.2366 6.29893 13.7678 6.76777C13.2989 7.23661 12.663 7.5 12 7.5C11.337 7.5 10.7011 7.23661 10.2322 6.76777C9.76339 6.29893 9.5 5.66304 9.5 5C9.5 4.33696 9.76339 3.70107 10.2322 3.23223C10.7011 2.76339 11.337 2.5 12 2.5ZM17 13H7V12.75C7 10.901 9.254 9 12 9C14.746 9 17 10.901 17 12.75V13Z"
                  />
                  <path d="M2 6H0V18C0 19.103 0.897 20 2 20H14V18H2V6Z" />
                </svg>
              </div>
              Add User
            </button>
          </form>
          @elseif(auth()->user()->role === 'user')

          @endif
        @endif
      </aside>
      <!-- SideBar End -->

      <!-- Content Container Start -->
      <section
        class="fixed w-[calc(100%-12.8rem)] xl:w-[calc(100%-13.5rem)] h-[calc(100vh-3.2rem)] right-0 bottom-0 overflow-y-scroll scrollbar scrollbar-track-[transparent] scrollbar-thumb-[#282F28] p-8"
      >
      
      @yield('content')
       
      </section>
    </section>
  </body>
</html>
