  @extends('master.Layout_master')
  @section('content')
  @if(Auth()->user()->role == 'admin')
        <!-- Content Start -->
        <div class="border-b border-primary">
          <h3
            class="text-white text-[2.5rem] font-sans font-normal tracking-wider"
          >
            Bug Report
          </h3>
          <p class="text-white text-[1rem] font-sans font-thin tracking-wider">
            Explore Reports for Additional Measures
          </p>
          <!-- Search Bug Finding -->
          <div class="flex justify-between items-center pt-6 pb-4">
            <form action="{{ url('/Bug_Report') }}">
              <div class="relative flex gap-4">
                <input
                  class="w-[40rem] input-bundle py-3 pl-14 pr-8"
                  type="text"
                  name="search_report"
                  id="search_report"
                  spellcheck="false"
                  placeholder="Search Report by keywords"
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

            <div class="border-l border-primary pl-4">
              <form action="{{ url('/Create_Finding') }}" method="get">
                @method('get')
                @csrf
                <button
                  class="button-bundle rounded-md px-8 py-3"
                  type="submit"
                >
                  Add Finding
                </button>
              </form>
            </div>
          </div>
        </div>

        <!-- Header Start -->
        <div class="flex w-full py-4 px-3">
          <div
            class="w-[7.5rem] text-white text-[.85rem] font-sans font-medium tracking-wider pr-3"
          >
            Title
          </div>
          <div
            class="w-[8rem] text-white text-[.85rem] font-sans font-medium tracking-wider pr-3"
          >
            Asset Name
          </div>
          <div
            class="w-[6.5rem] text-white text-[.85rem] font-sans font-medium tracking-wider pr-3"
          >
            Severity
          </div>
          <div
            class="w-[11.5rem] text-white text-[.85rem] font-sans font-medium tracking-wider pr-3"
          >
            Submitted by
          </div>
          <div
            class="w-[5.8rem] text-white text-[.85rem] font-sans font-medium tracking-wider pr-3"
          >
            Status
          </div>
        </div>
        <!-- Header End -->

        <!-- Results Start -->
        <div class="flex flex-col">
          @foreach($data as $item)
          <div
            class=" bg-secondary flex w-full justify-between items-center rounded-lg py-5 px-3 mb-2"
          >
            <div class="flex">
              <div
                class="w-[7.5rem] text-[#d8d8d8] text-[.85rem] truncate font-sans font-normal tracking-wider pr-3"
              >
              {{ $item->title }}
              </div>
              <div
                class="w-[8rem] text-[#d8d8d8] text-[.85rem] truncate font-sans font-normal tracking-wider pr-3"
              >
              {{ $item->asset_name }}
              </div>
              <div
                class="w-[6.5rem] text-[#d8d8d8] text-[.85rem] truncate font-sans font-normal tracking-wider pr-3"
              >
              {{ $item->severity }}
              </div>
              <div
                class="w-[11.5rem] text-[#d8d8d8] text-[.85rem] truncate font-sans font-normal tracking-wider pr-3"
              >
              {{ $item->submitted_by }}
              </div>
              <div
                class="w-[5.8rem] text-[#d8d8d8] text-[.85rem] truncate font-sans font-bold tracking-wider pr-3"
              >
                {{ $item->status }}
              </div>
            </div>
            <div class="flex items-center px-3">
              <div class="flex flex-nowrap mr-4">
              <form action="{{ url('Update_Finding/'.$item->id) }}" method="POST">
                  @method('post')
                  @csrf
                <button
                  class="active:scale-95 outline outline-1 outline-[#D4F40E] rounded-md text-[#D4F40E] hover:outline-none hover:bg-[#d2e45a] hover:text-secondary text-[.85rem] font-sans font-normal tracking-wide transition-all duration-300 ease-out py-1 px-3 mr-1"
                  type="submit"
                >
                  Edit
                </button>
              </form>

                <form action="{{ url('delete/data/'.$item->id) }}" method="POST" onsubmit="return confirm('Yakin Hapus User??')">
                  @method('delete')
                  @csrf
                  <button
                    class="active:scale-95 outline outline-1 outline-[#EC7A28] rounded-md text-[#EC7A28] hover:outline-none hover:bg-[#EC7A28] hover:text-secondary text-[.85rem] font-sans font-normal tracking-wide transition-all duration-300 ease-out py-1 px-3"
                    type="submit"
                  >
                    Delete
                  </button>
                </form>
              </div>
              <div class="flex flex-nowrap">
              <form action="{{ url('/update/status/'.$item->id) }}" method="POST">
                @method('put')
                @csrf
                <button
                  class="active:scale-95 outline outline-1 outline-[#52B788] rounded-md text-[#52B788] hover:outline-none hover:bg-[#52B788] hover:text-secondary text-[.85rem] font-sans font-normal tracking-wide transition-all duration-300 ease-out py-1 px-3 mr-1"
                  type="submit"
                  name="status"
                  id="status"
                  value="approved"
                >
                  Approve
                </button>
              </form>
              <form action="{{ url('/update/status/'.$item->id) }}" method="POST">
                @method('put')
                @csrf
                <button
                  class="active:scale-95 outline outline-1 outline-[#D04121] rounded-md text-[#D04121] hover:outline-none hover:bg-[#D04121] hover:text-secondary text-[.85rem] font-sans font-normal tracking-wide transition-all duration-300 ease-out py-1 px-3"
                  type="submit"
                  name="status"
                  id="status"
                  value="rejected"
                >
                  Reject
                </button>
              </form>

                <a href="{{ url('/export/'.$item->id) }}" target="_blank">
                  <button
                    class="active:scale-95 bg-[#D9D9D9] hover:bg-secondary hover:outline hover:outline-1 hover:outline-[#D9D9D9] hover:text-[#D9D9D9] rounded-md text-[#2F2C2B] text-[.85rem] font-sans font-normal tracking-wide transition-all duration-300 ease-out py-1 px-3 ml-1"
                    type="button"
                  >
                    Export
                  </button>
                </a>
              </div>
            </div>
          </div>
          @endforeach
        </div
    @endif
@endsection