  @extends('master.Layout_master')
  @section('content')
  @if(Auth()->user()->role == 'admin')
        <!-- Content Start -->
        <div class="border-b border-primary">
          <h3
            class="text-white text-[2.5rem] font-sans font-normal tracking-wider"
          >
            Add User
          </h3>
          <p class="text-white text-[1rem] font-sans font-thin tracking-wider">
            Modify User Role for Advanced Actions
          </p>
          <div class="relative flex justify-start items-center pt-6 pb-4">
            <form action="{{ url('/Add_User') }}" method="get">
              @csrf
              <div class="relative flex gap-4">
                <input
                  class="w-[40rem] input-bundle py-3 pl-14 pr-8"
                  type="text"
                  name="search_user"
                  id="search_user"
                  spellcheck="false"
                  placeholder="Search by User ID or username"
                  value="{{ $keyword }}"
                />
                <div class="absolute top-[.67rem] left-[.9rem]">
                  <svg width="24" height="24" viewBox="0 0 28 28">
                    <path
                      d="M12.5236 0C13.0268 0.0720382 13.5341 0.124638 14.0327 0.218973C16.4574 0.679789 18.5321 1.80496 20.2597 3.5596C21.8312 5.15531 22.8697 7.05174 23.3157 9.25062C23.8767 12.0149 23.4873 14.6506 22.104 17.1114C21.6602 17.8998 21.0992 18.6219 20.5914 19.3743L20.4473 19.4315C20.5376 19.4778 20.6463 19.5052 20.7155 19.5727C23.0102 21.8245 25.3018 24.08 27.5904 26.3391C27.7534 26.5009 27.8655 26.7147 28.001 26.904V27.2865C27.7151 27.8948 27.2816 28.1338 26.7806 27.932C26.6154 27.857 26.466 27.7512 26.3403 27.6204C24.0311 25.3548 21.7246 23.0869 19.4208 20.8168C19.3505 20.7476 19.2773 20.6807 19.2029 20.6109C18.8318 20.8648 18.4795 21.1221 18.1118 21.3542C16.0485 22.6543 13.7874 23.2626 11.3587 23.1717C8.15629 23.0517 5.42508 21.8207 3.19768 19.5126C1.52099 17.7734 0.482491 15.7049 0.1348 13.3214C-0.315826 10.2254 0.357826 7.38049 2.2158 4.85C4.00286 2.41328 6.39553 0.885041 9.35147 0.253849C9.81297 0.155511 10.287 0.117205 10.7554 0.0491689C10.8349 0.0371626 10.9127 0.0165802 10.991 0L12.5236 0ZM1.80692 11.5318C1.82808 11.9372 1.82694 12.2751 1.86411 12.6101C2.1163 14.7255 2.9209 16.5997 4.39059 18.1513C6.96396 20.8659 10.1384 21.887 13.7794 21.1815C16.9709 20.5606 19.3562 18.7231 20.7704 15.7724C22.1955 12.7959 22.1091 9.78748 20.5136 6.91052C18.8787 3.96267 16.2984 2.28235 12.9519 1.87014C10.3099 1.54539 7.87951 2.18745 5.7499 3.80087C3.1771 5.75048 1.89499 8.3793 1.80692 11.5318Z"
                      fill="#18D1CB"
                    />
                  </svg>
                </div>
                <button class="button-bundle rounded-md px-8" type="submit">
                  Search
                </button>
              </div>
            </form>
              
            <div class="absolute bottom-0 right-0">
              <div
                class="flex items-center gap-4 w-[18rem] h-[6.5rem] bg-secondary rounded-md pr-2"
              >
                <div
                  class="flex justify-center items-center w-[6.5rem] h-full rounded-l-lg bg-[#21a49f]"
                >
                  <svg width="44" height="47" viewBox="0 0 44 47">
                    <path
                      d="M22 0C19.5827 0 17.2196 0.725395 15.2097 2.08445C13.1998 3.44351 11.6332 5.3752 10.7081 7.63523C9.78307 9.89526 9.54103 12.3821 10.0126 14.7814C10.4842 17.1806 11.6483 19.3845 13.3576 21.1142C15.0669 22.844 17.2447 24.0219 19.6156 24.4992C21.9864 24.9764 24.4439 24.7315 26.6772 23.7954C28.9106 22.8592 30.8194 21.2739 32.1624 19.2399C33.5054 17.206 34.2222 14.8147 34.2222 12.3684C34.2222 9.08811 32.9345 5.94216 30.6424 3.62263C28.3503 1.3031 25.2415 0 22 0ZM22 19.7895C20.5496 19.7895 19.1318 19.3542 17.9258 18.5388C16.7199 17.7234 15.7799 16.5644 15.2249 15.2083C14.6698 13.8523 14.5246 12.3602 14.8076 10.9206C15.0905 9.4811 15.789 8.1588 16.8145 7.12094C17.8401 6.08309 19.1468 5.37631 20.5693 5.08996C21.9919 4.80362 23.4664 4.95058 24.8063 5.51226C26.1463 6.07394 27.2916 7.02512 28.0974 8.2455C28.9032 9.46589 29.3333 10.9007 29.3333 12.3684C29.3333 14.3366 28.5607 16.2242 27.1855 17.6159C25.8102 19.0076 23.9449 19.7895 22 19.7895ZM44 47V44.5263C44 39.9339 42.1972 35.5295 38.9883 32.2822C35.7793 29.0349 31.427 27.2105 26.8889 27.2105H17.1111C12.573 27.2105 8.22068 29.0349 5.01173 32.2822C1.80277 35.5295 0 39.9339 0 44.5263V47H4.88889V44.5263C4.88889 41.246 6.17658 38.1 8.4687 35.7805C10.7608 33.461 13.8696 32.1579 17.1111 32.1579H26.8889C30.1304 32.1579 33.2392 33.461 35.5313 35.7805C37.8234 38.1 39.1111 41.246 39.1111 44.5263V47H44Z"
                      fill="#EBF0F9"
                    />
                  </svg>
                </div>
                <div class="mt-2">
                  <p
                    class="text-white text-[1.2rem] font-sans font-light tracking-wider"
                  >
                    Total Users
                  </p>
                  <p
                    class="text-white text-[1.8rem] font-sans font-medium tracking-wider truncate"
                  >
                  {{ count($users) }}
                  </p>
                </div>
              </div>
            </div>
          </div>
          <p
            class="text-primary text-[1rem] font-sans font-thin tracking-wider my-2"
          >
            Results
          </p>
        </div>
        <!-- Content End -->
        <!-- Header Start -->
        <div class="flex justify-start items-center gap-4 w-full py-4 px-4">
          <div
            class="w-[8rem] text-white text-[1rem] font-sans font-medium tracking-wider pr-3"
          >
            ID
          </div>
          <div
            class="w-[18rem] text-white text-[1rem] font-sans font-medium tracking-wider pr-3"
          >
            Username
          </div>
          <div
            class="w-[10rem] text-white text-[1rem] font-sans font-medium tracking-wider pr-3"
          >
            Role
          </div>
        </div>
        <!-- Header End -->
        <!-- Results Start -->
        <div id="container-user_results" class="flex flex-col gap-2">
        @foreach($users as $user)
          <div
            class=" flex justify-between items-center w-full bg-secondary rounded-md py-6 px-4"
          >
            <div class="flex gap-4">
              <div
                class="w-[8rem] text-white text-[1rem] font-sans font-light tracking-wider truncate pr-3"
              >
              {{ $user->id }}
              </div>
              <div
                class="w-[18rem] text-white text-[1rem] font-sans font-light tracking-wider truncate pr-3"
              >
              {{ $user->email }}
              </div>
              <div
                class="w-[10rem] text-white text-[1rem] font-sans font-light tracking-wider truncate pr-3"
              >
              {{ $user->role }}
              </div>
            </div>
            <!-- button modify -->
            <div class="flex gap-4 mr-20">
              <form action="{{ url('/update/role/'.$user->id) }}" method="POST">
                @method('put')
                @csrf
                <select
                  class="cursor-pointer bg-secondary rounded-md text-[#D4F40E] focus:text-white text-[.9rem] font-sans font-light tracking-wider outline outline-1 outline-[#D4F40E] transition-all duration-300 ease-out py-1 px-2"
                  name="role"
                  id="role"
                  title="edit role"
                  onchange="this.form.submit()">
                  <option value="" disabled selected hidden>Edit</option>
                  <option value="admin">admin</option>
                  <option value="user">user</option>
                </select> 
              </form>


              <form action="{{ url('delete/user/'.$user->id) }}" method="POST" onsubmit="return confirm('Yakin Hapus User??')">
                @method('delete')
                @csrf
                <button
                  class="bg-secondary border border-[#EC7A28] hover:bg-[#EC7A28] hover:border-none rounded-md text-[#EC7A28] hover:text-secondary py-1 px-3"
                  type="submit"
                >
                  Delete
                </button>
              </form>
            </div>
          </div>
          @endforeach
        </div>
@endif
@endsection