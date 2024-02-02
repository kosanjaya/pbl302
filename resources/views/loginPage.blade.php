<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    @notifyCss
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
  </head>
  <body
    class="bg-[#0F0F0F] overflow-x-hidden lg:overflow-y-hidden scrollbar-track-transparent scrollbar-thumb-[#282F28]"
  >
    <x-notify::notify />
    @notifyJs

    <div
      class="relative h-screen container px-6 py-6 flex justify-center items-center"
    >
      <div
        class="absolute top-[20rem] -right-[12rem] lg:right-0 -z-10 w-[32rem] h-44 blur-[175px] bg-[#18D1CB]"
      ></div>
      <div
        class="w-[25rem] bg-[rgba(255,255,255,.05)] backdrop-blur-sm rounded-lg border border-[#d4d4d4] py-8 px-12"
      >
        <h2
          class="text-[#EBF0F9] text-[1.6rem] text-center font-['Montserrat'] font-normal tracking-wider mb-4"
        >
          Login
        </h2>

        <form action="{{ url('/api/login') }}" method="POST">
          @csrf
          <div class="relative mb-4">
            <input
              class="w-full bg-transparent outline-none border-b focus:valid:border-b focus:valid:border-b-[#52B788] focus:invalid:border-b focus:invalid:border-b-[#C52D2D] text-[#EBF0F9] font-['Montserrat'] text-[1rem] py-4 pr-2 pl-16"
              type="email"
              name="email"
              id="email"
              placeholder="Email"
              autofocus
              required
              value="{{ old('email') }}"
            />
            <img
              class="absolute top-[.7rem] left-0 scale-[.8]"
              src="src/img/Login_Register/icon-user.png"
              alt=""
            />
            @error('email')
            <div class="invalid-feedback" style="color:red">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="relative mb-8">
            <input
              class="w-full bg-transparent outline-none border-b focus:valid:border-b focus:valid:border-b-[#52B788] focus:invalid:border-b focus:invalid:border-b-[#C52D2D] text-[#EBF0F9] font-['Montserrat'] text-[1rem] py-4 pr-2 pl-16"
              type="password"
              name="password"
              placeholder="Password"
              pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"
              title="min 8 characters, include uppercase, lowercase, number and special characters"
              required
            />
            <img
              class="absolute top-[.7rem] left-0 scale-[.8]"
              src="src/img/Login_Register/icon-password.png"
              alt=""
            />
          </div>
          <div class="flex items-center mb-8">
            <input
              class="w-4 h-4 bg-transparent accent-[#18D1CB]"
              type="checkbox"
              name="checkbox"
              id="checkbox"
            />
            <label
              class="text-[#EBF0F9] text-[.85rem] font-['Montserrat'] pl-2"
              for="checkbox"
              >Remember me</label
            >
          </div>
          <div class="flex flex-col justify-center items-center">
            <p
              class="text-[#989898] text-[.8rem] font-['Montserrat'] font-normal tracking-wider mb-3"
            >
              Dont have an account yet?
              <a href="{{url('/registerPage')}}" class="text-[#EBF0F9]"
                >Register Here</a
              >
            </p>
            <button
              type="submit"
              id="login-button"
              class="w-[16rem] rounded-lg button-bundle py-1.5 my-2"
            >
              Login
            </button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
