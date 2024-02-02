@extends('master.layoutMaster')

@section('content')
        <!-- Content Start -->
        <h2 class="text-[#52B788] pt-[1rem] text-[1.5rem] pl-8 font-['Poppins']">Search Findings</h2>
        <div class="flex">
          <div class="relative">
            <input type="search"
            placeholder="Search by Bug ID Or Title" class="mt-4 ml-8 pt-[0.5rem] pl-[3.5rem] pr-4 w-[64rem] rounded-lg bg-[#121312] hover:outline hover:outline-2 hover:outline-offset-2 hover:outline-gray-600 focus:outline-[#52B788] transition-all duration-200 ease-out text-[#52B788] text-[1rem] font-['Poppins'] font-normal tracking-wider py-1.5"/>
            <img class="absolute top-[1.3rem] left-[2.8rem] scale-[.8]" src="dist/img/app/search_finding/icon-search.png" alt="">
          </div>
          <button class="rounded-lg px-8 py-2 ml-3 mt-4 font-['Poppins'] text-white bg-[#52B788] active:scale-95">Search</button>
        </div>
        

        
      <div class="w-full border-b border-[#52B788] p-2"><p class="text-[#52B788] pt-[2rem] text-[1rem] pl-8 font-['Poppins']">Results</p> </div>

      <div class="flex space-x-[4.5rem] py-2 pl-11">
        <div class="text-white">Title</div>
        <div class="text-white pl-36">Asset Name</div>
        <div class="text-white pl-6">Severity</div>
        <div class="text-white pl-11">Submitted By</div>
        <div class="text-white pl-16">Data Issued</div>
        <div class="text-white pl-20">Status</div>
      </div>


      <div class="flex flex-col">
        @foreach($data as $d)
          <div class="flex bg-[#121312] space-x-[4.5rem] rounded-lg py-6 pl-11 mb-2">
            <div class="text-white">{{ $d->title }}</div>
            <div class="text-white pl-24">{{ $d->asset_name }}</div>
            <div class="text-white pl-3.5">{{ $d->severity }}</div>
            <div class="text-white pl-6">{{ $d->submitted_by }}</div>
            <div class="text-white pl-6">{{ $d->created_at }}</div>
            <div class="text-[#52B788] pl-16 font-bold">{{ $d->status }}</div>
          </div>
        @endforeach
      </div>

        <!-- Content End -->
@endsection
