@extends('master.layoutMaster')
@section('content')
@if(Auth()->user()->role == 'admin')
        <div
          class="w-full flex items-center border-b border-[#52B788] pb-8 mt-4"
        >
          <div
            class="flex justify-evenly items-center w-[14rem] h-[7rem] bg-[#52b788] rounded-lg mr-16"
          >
            <div class="w-[3.5rem] h-[3.5rem]">
              <img class="" src="src/img/app/Add_User/icon-user.png" alt="" />
            </div>
            <div>
              <p
                class="text-[#d8d8d8] text-[1.2rem] font-['Montserrat'] font-medium tracking-wide"
              >
                USER
              </p>
              <p
                class="text-[#d8d8d8] text-[2rem] font-['Montserrat'] font-semibold text-center  tracking-wider"
              >
                {{ count($users) }}
              </p>
            </div>
          </div>
          <div class="z-50">
            <x-notify::notify />
            @notifyJs
          </div>
          @if(session()->has('status'))

          @endif

          <!-- search start -->
          <form action="{{ url('/Layout_AddUser') }}" method="get">
            <div>
              <h2
                class="text-[#52B788] text-[1.3rem] font-['Montserrat'] font-light tracking-wide mb-2"
              >
                Search user
              </h2>
              <div class="relative flex">
                <input
                  class="w-[35rem] bg-[#121312] rounded-lg outline-none text-[#d8d8d8] text-[.85rem] font-['Montserrat'] tracking-wide py-2 pl-12 pr-6 mb-2 border-[#202220] border-2 focus:border-[#52B788] transition-all duration-200 ease-out"
                  type="text"
                  name="keyword"
                  id="keyword"
                  spellcheck="false"
                  placeholder="Search Username"
                  value = "{{ $keyword }}" 
                /><img
                  class="absolute top-[.3rem] left-[.8rem] scale-[.6]"
                  src="src/img/app/Add_User/icon_search.png"
                  alt=""
                />
                <button type="submit"
                  class="w-[7rem] rounded-lg bg-[#52B788] text-white text-[1rem] font-['Montserrat'] tracking-wide py-2 active:scale-95 mb-2 ml-2"
                >
                  Search
                </button>
              </div>
            </div>
          </form>
          <!-- search end -->
        </div>

        <!-- header start -->
        <div class="flex w-full">
          <div
            class="w-[7.5rem] text-[#d8d8d8] text-[.8rem] font-['Montserrat'] font-bold py-2 pl-3"
          >
            ID
          </div>
          <div
            class="w-[15rem] text-[#d8d8d8] text-[.8rem] font-['Montserrat'] font-bold py-2 pl-3"
          >
            Username
          </div>
          <div
            class="w-[12rem] text-[#d8d8d8] text-[.8rem] font-['Montserrat'] font-bold py-2 pl-3"
          >
            Role
          </div>
        </div>
        <!-- header end -->

        <!-- Result start -->
        <div class="container--result flex flex-col gap-2">
          @foreach($users as $user)
          <div class="flex justify-between bg-[#121312] w-full rounded-lg py-3">
            <div class="flex">
              <div
                class="w-[7.5rem] text-[#d8d8d8] text-[.8rem] font-['Montserrat'] font-normal tracking- py-2 px-3"
              >
                {{ $user->id }}
              </div>
              <div
                class="w-[15rem] truncate text-[#d8d8d8] text-[.8rem] font-['Montserrat'] font-normal tracking- py-2 pl-3 pr-5"
              >
              {{ $user->email }}
              </div>
              <div
                class="w-[16rem] text-[#d8d8d8] text-[.8rem] font-['Montserrat'] font-normal tracking-wide py-2 px-3"
              >
              {{ $user->role }}
              </div>
            </div>

            <!-- Btn start -->
            <div class="flex mr-10">
              <!-- btn Edit start -->
              <div class="relative mt-[.15rem] mr-6">
                <button
                  class="btn--edit active:scale-95 flex bg-transparent rounded-md border-2 border-[#D4F40E] text-[#D4F40E] text-[.8rem] font-['Montserrat'] font-normal tracking-wide pl-2 pr-6 py-1"
                >
                  Edit
                </button>
                <img
                  class="absolute top-[.35rem] right-[.4rem] scale-[.6]"
                  src="src/img/app/Add_User/icon-edit.png"
                  alt=""
                />
                <div
                  class="dropdown--role absolute right-0 -bottom-[5rem] hidden"
                >
                  <button
                    class="w-[8rem] bg-[#282a28] hover:bg-[#45916e] text-[#d8d8d8] py-2 px-3"
                  >
                    Root Admin
                  </button>
                  <button
                    class="w-[8rem] bg-[#282a28] hover:bg-[#45916e] text-[#d8d8d8] py-2 px-3"
                  >
                    User Only
                  </button>
                </div>
              </div>
              <!-- btn Edit end -->
              <form action="{{ url('/test/'.$user->id) }}" method="post" onsubmit="return confirm('Yakin Hapus User??')">
                @method('delete')
                @csrf
                <div class="relative mt-[.15rem]">
                  <button
                    class="flex active:scale-95 bg-transparent rounded-md border-2 border-[#EC7A28] text-[#EC7A28] text-[.8rem] font-['Montserrat'] font-normal tracking-wide pl-2 pr-5 py-1"
                  >
                    Delete
                  </button>
                  <img
                    class="absolute top-[.4rem] right-[.4rem] scale-[.8]"
                    src="src/img/app/Add_ User/icon-delete.png"
                    alt=""
                  />
                </div>
              </form>
            </div>
            <!-- Btn end -->
          </div>
          @endforeach
        </div>
        <!-- Result end -->
@endif

        <!-- Content End -->
@endsection
