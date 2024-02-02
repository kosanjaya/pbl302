  @extends('master.Layout_master')
  @section('content')

        <!-- Content Start -->
        <div class="border-b border-primary">
          <h3
            class="text-white text-[2.5rem] font-sans font-normal tracking-wider"
          >
            Search Finding
          </h3>
          <p class="text-white text-[1rem] font-sans font-thin tracking-wider">
            Explore the discovered bug findings
          </p>
          <div class="flex justify-start items-center pt-6 pb-4">
            <form action="{{ url('/Search_Finding') }}" method="get">
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
          </div>
          <p
            class="text-primary text-[1rem] font-sans font-thin tracking-wider my-2"
          >
            Results
          </p>
        </div>
        <!-- Content End -->
        <!-- Header Start -->
        <div class="flex justify-between items-center w-full py-4 px-4">
          <div
            class="w-[16%] text-white text-[1rem] font-sans font-medium tracking-wider pr-3"
          >
            Title
          </div>
          <div
            class="w-[12%] text-white text-[1rem] font-sans font-medium tracking-wider pr-3"
          >
            Asset Name
          </div>
          <div
            class="w-[12%] text-white text-[1rem] font-sans font-medium tracking-wider pr-3"
          >
            Severity
          </div>
          <div
            class="w-[25%] text-white text-[1rem] font-sans font-medium tracking-wider pr-3"
          >
            Submitted By
          </div>
          <div
            class="w-[13%] text-white text-[1rem] font-sans font-medium tracking-wider pr-3"
          >
            Date Issued
          </div>
          <div
            class="w-[10%] text-white text-[1rem] font-sans font-medium tracking-wider pr-3"
          >
            Status
          </div>
        </div>
        <!-- Header End -->

        <!-- Results Start -->
        <div class="flex flex-col">
        @foreach($data as $d)
          <div id="container-report_results">
          <!-- <a href="{{ url('/api/Search_Finding/'.$d->id) }}"> -->
            <button
              type="submit"
              class="btn--resReport flex justify-between items-center w-full bg-secondary rounded-md hover:shadow-[0_0_15px_0_rgba(24,209,203,.65)_inset] outline-none focus:outline-1 focus:outline-offset-4 focus:outline-primary transition-all duration-300 ease-out py-6 px-4 mb-4"
              data-report-id="{{ $d->id }}"
              >
              <div
                class="w-[16%] text-white text-[1rem] text-start font-sans font-light tracking-wider truncate pr-3"
              >
              {{ $d->title }}
              </div>
              <div
                class="w-[12%] text-white text-[1rem] text-start font-sans font-light tracking-wider truncate pr-3"
              >
              {{ $d->asset_name }}
              </div>
              <div
                class="w-[12%] text-white text-[1rem] text-start font-sans font-light tracking-wider truncate pr-3"
              >
              {{ $d->severity }}
              </div>
              <div
                class="w-[25%] text-white text-[1rem] text-start font-sans font-light tracking-wider truncate pr-3"
              >
              {{ $d->submitted_by }}
              </div>
              <div
                class="w-[13%] text-white text-[1rem] text-start font-sans font-light tracking-wider truncate pr-3"
              >
              {{ $d->created_at }}
              </div>
              <div
                class="w-[10%] text-white text-[1rem] text-start font-sans font-light tracking-wider truncate pr-3"
              >
              {{ $d->status }}
              </div>
            </button>
        <!-- </a> -->
          </div>
          @endforeach
      </div>
  
    <section
      id="finding--overview"
      class="absolute top-0 right-0 z-[9999] w-2/5 h-full translate-x-[100%] transition-all duration-500 ease-out overflow-x-hidden overflow-y-scroll bg-[#202120] text-white font-sans px-8 pt-24 pb-6"
    >
      <!-- Overview Header Start -->
      <div
        class="absolute top-0 left-0 flex justify-between items-center w-full bg-[#171717] text-[1.25rem] font-medium px-8 py-4"
      >
        <div id="id--headerOverview">#BUG Report {1}</div>
        <div id="btn--closeOverview" class="relative w-8 h-8">
          <div
            class="absolute top-[50%] -translate-y-1/2 left-0 w-full h-1 bg-white origin-center rotate-45"
          ></div>
          <div
            class="absolute top-[50%] -translate-y-1/2 right-0 w-full h-1 bg-white origin-center -rotate-45"
          ></div>
        </div>
      </div>
      <!-- Overview Header End -->
      <section id="overview--content" class="w-full">
        <h3 class="text-[1.2rem] font-sans font-bold mb-4">Overview</h3>
        <div class="flex flex-col gap-6 mb-10">
          <div>
            <div class="w-full flex text-[.875rem] mb-1 tracking-wider">
              <p class="w-[12rem] text-white">Date Issued</p>
              <p class="w-[calc(100%-14rem)] text-white">October, 30 2023</p>
            </div>
            <div class="w-full flex text-[.875rem] mb-1 tracking-wider">
              <p class="w-[12rem] text-white">Title</p>
              <p class="w-[calc(100%-14rem)] text-white">Login Page</p>
            </div>
            <div class="w-full flex text-[.875rem] mb-1 tracking-wider">
              <p class="w-[12rem] text-white">Asset Name</p>
              <p class="w-[calc(100%-14rem)] text-white">E-Learning</p>
            </div>
            <div class="w-full flex text-[.875rem] mb-1 tracking-wider">
              <p class="w-[12rem] text-white">Submitted By</p>
              <p class="w-[calc(100%-14rem)] text-white">ruben@gmail.com</p>
            </div>
          </div>
          <div>
            <div class="w-full flex text-[.875rem] mb-1 tracking-wider">
              <p class="w-[12rem] text-white font-bold">CVSSv3 Score</p>
              <p class="w-[calc(100%-14rem)] font-semibold">9.0 CRITICAL</p>
            </div>
            <div class="w-full flex text-[.875rem] mb-1 tracking-wider">
              <p class="w-[12rem] text-white">POC Video URL</p>
              <p class="w-[calc(100%-14rem)] text-white">https://youtube.com</p>
            </div>
          </div>
        </div>
        <div class="mb-10">
          <h3 class="text-[1.2rem] font-sans font-semibold mb-4">
            Description
          </h3>
          <p class="text-[.85rem] leading-7 tracking-wide">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt
            illum sed, consectetur corporis cumque voluptates laudantium nobis
            at sapiente. Itaque aliquid temporibus velit ut quas, corporis qui
            voluptas sequi, saepe consequatur voluptatibus adipisci, asperiores
            accusamus! Pariatur natus repellat quas error qui consequatur
            veritatis deserunt tenetur perspiciatis consequuntur? Nam libero vel
            magni maiores, dolor laboriosam eum perspiciatis, dolores esse nobis
            voluptatibus illum sit eligendi cupiditate sapiente reiciendis
            corrupti! Qui dolorem magni tenetur in eligendi autem ipsam
            temporibus inventore at ipsa unde vel corrupti quos delectus
            pariatur neque, aliquam quidem quisquam laboriosam vero voluptatibus
            magnam! Vitae asperiores ducimus id necessitatibus, sit impedit.
          </p>
        </div>
        <div class="mb-10">
          <h3 class="text-[1.2rem] font-sans font-semibold mb-4">POC Image</h3>
          <div>
            <!-- IMG Tag -->
          </div>
        </div>
        <!-- Loader start -->
        <div class="content--loader hidden">
          <div
            class="w-full h-full flex justify-center items-center bg-transparent mt-12"
          >
            <div
              class="w-12 h-8 flex justify-between items-center animate-pulse"
            >
              <div class="w-3 h-3 bg-primary rounded-full"></div>
              <div class="w-3 h-3 bg-primary rounded-full"></div>
              <div class="w-3 h-3 bg-primary rounded-full"></div>
            </div>
          </div>
        </div>
      </section>
    </section>
  </body>
</html>
@endsection 