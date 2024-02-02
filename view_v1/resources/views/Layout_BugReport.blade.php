@extends('master.layoutMaster')

@section('content')
        <!-- Content Start -->
        <!-- //////////// Buat File Baru karna ini hanya template untuk halaman yang lain //////////// -->
        <div class="flex w-full border-b border-[#52B788] pb-3">
          <div class="w-[12rem] border-r border-[#52B788] ml-4">
            <h2
              class="text-[#52B788] text-[1.5rem] font-['Montserrat'] font-medium tracking-wider mb-4"
            >
              Bug Report
            </h2>

            <!-- BAGIAN FITUR ROLE USER -->
            <a href="{{ url('addFinding') }}">
            <button
              class="w-[10rem] bg-[#52B788] rounded-md focus:scale-95 text-white text-[.85rem] font-['Montserrat'] font-normal tracking-wide py-2"
            >
              Add Finding
            </button></a>
          </div>

          <!-- search start -->
          <div class="ml-8">
            <h2
              class="text-[#52B788] text-[1.3rem] font-['Montserrat'] font-light tracking-wide mb-2"
            >
              Search Report
            </h2>
            <div class="relative flex">
              <input
                class="w-[35rem] bg-[#121312] rounded-lg outline-none text-[#d8d8d8] text-[.85rem] font-['Montserrat'] tracking-wide py-2 pl-12 pr-6 mb-2 border-[#202220] border-2 focus:border-[#52B788] transition-all duration-200 ease-out"
                type="text"
                name="search_report"
                id="search_report"
                spellcheck="false"
                placeholder="Search Report by keywords"
              /><img
                class="absolute top-[.3rem] left-[.8rem] scale-[.6]"
                src="src/img/app/Bug_Report/icon_search.png"
                alt=""
              />
              <button
                class="w-[7rem] rounded-lg bg-[#52B788] text-white text-[1rem] font-['Montserrat'] tracking-wide py-2 active:scale-95 mb-2 ml-2"
              >
                Search
              </button>
            </div>
          </div>
          <!-- search end -->
        </div>

        <!-- Header start -->
        <div class="flex w-full py-4 px-3">
          <div
            class=" w-[8rem] text-[#d8d8d8] text-[.85rem] font-['Montserrat'] font-medium tracking-wider pr-3"
          >
            Title
          </div>
          <div
            class="w-[8rem] text-[#d8d8d8] text-[.85rem] font-['Montserrat'] font-medium tracking-wider pr-3"
          >
            Asset Name
          </div>
          <div
            class="w-[6.5rem] text-[#d8d8d8] text-[.85rem] font-['Montserrat'] font-medium tracking-wider pr-3"
          >
            Severity
          </div>
          <div
            class="w-[11.5rem] text-[#d8d8d8] text-[.85rem] font-['Montserrat'] font-medium tracking-wider pr-3"
          >
            Submitted by
          </div>
          <div
            class="w-[5.8rem] text-[#d8d8d8] text-[.85rem] font-['Montserrat'] font-medium tracking-wider pr-3"
          >
            Status
          </div>
        </div>
        <!-- Header end -->

        <!-- Result Start -->
        <div class="flex flex-col gap-2">
          @foreach ($data as $item)
            <div class="bg-[#121312] flex w-full justify-between items-center rounded-lg py-5 px-3">
              <div class="flex">
                <div
                  class="w-[8rem] text-[#d8d8d8] text-[.85rem] truncate font-['Montserrat'] font-normal tracking-wider pr-3"
                >
                  {{ $item->title }}
                </div>
                <div
                  class="w-[8rem] text-[#d8d8d8] text-[.85rem] truncate font-['Montserrat'] font-normal tracking-wider pr-3"
                >
                {{ $item->asset_name }}
                </div>
                <div
                  class="w-[6.5rem] text-[#d8d8d8] text-[.85rem] truncate font-['Montserrat'] font-normal tracking-wider pr-3"
                >
                {{ $item->severity }}
                </div>
                <div
                  class="w-[11.5rem] text-[#d8d8d8] text-[.85rem] truncate font-['Montserrat'] font-normal tracking-wider pr-3"
                >
                {{ $item->submitted_by }}
                </div>
                <div
                  class="w-[5.8rem] text-[#d8d8d8] text-[.85rem] truncate font-['Montserrat'] font-bold tracking-wider pr-3"
                >
                {{ $item->status }}
                </div>
              </div>
              <div class="flex items-center px-3">
                <div class="mr-4">
                  <button
                    class="active:scale-95 border border-[#D4F40E] rounded-md text-[#D4F40E] text-[.85rem] font-['Montserrat'] font-normal tracking-wide py-1 px-3 mr-1"
                    type="button"
                  >
                    Edit
                  </button>
                  <button
                    class="active:scale-95 border border-[#EC7A28] rounded-md text-[#EC7A28] text-[.85rem] font-['Montserrat'] font-normal tracking-wide py-1 px-3"
                    type="button"
                  >
                    Delete
                  </button>
                </div>
                <div>
                  <button
                    class="active:scale-95 border border-[#52B788] rounded-md text-[#52B788] text-[.85rem] font-['Montserrat'] font-normal tracking-wide py-1 px-3 mr-1"
                    type="button"
                  >
                    Approve
                  </button>
                  <button
                    class="active:scale-95 border border-[#D04121] rounded-md text-[#D04121] text-[.85rem] font-['Montserrat'] font-normal tracking-wide py-1 px-3"
                    type="button"
                  >
                    Reject
                  </button>
                  <a href="{{ url('/export/'.$item->id) }}" target="_blank">
                    <button
                      class="active:scale-95 bg-[#D9D9D9] rounded-md text-[#2F2C2B] text-[.85rem] font-['Montserrat'] font-normal tracking-wide py-1 px-3 ml-1"
                      type="button"
                    >
                      Export
                      <img
                        class="inline-block scale-75 pb-1"
                        src="src/img/app/Bug_Report/icon_export.png"
                        alt=""
                      />
                    </button>
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <!-- Content End -->
@endsection