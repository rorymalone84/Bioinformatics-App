<form method="GET">
    <div {!! $attributes->merge(['class' =>"w-full h-12 pl-3 pr-2 bg-white border rounded-full flex justify-end items-center relative md:w-1/2"]) !!}>
        <input type="search" name="search" id="search" placeholder="{{ $placeholder }}"
               class="appearance-none w-full outline-none focus:outline-none active:outline-none"/>
        <button type="submit" class="ml-1 outline-none focus:outline-none active:outline-none">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
               viewBox="0 0 24 24" class="w-6 h-6">
            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
          </svg>
        </button>
    </div>
</form>