<div
  x-data="{categories: {{ json_encode($categories) }} }"
  :class="selectedTab == 'all' || categories.includes(selectedTab) ? 'block' : 'hidden' "
  class="w-full md:w-1/2 xl:w-1/3 px-4"
>
  <div class="relative mb-12">
    <a href="{{$github}}" target="_blank">
      <div class="rounded-lg overflow-hidden ease-in duration-100 hover:scale-105">
        <picture>
          <source  srcset="{{ $image }}" type="image/avif" >
          <source  srcset="{{ $image }}" type="image/webp" >
          <img class="max-w-full lg:ml-auto rounded-lg" loading="lazy" width="700" height="700" src="{{ $image }}" alt="hero-image" >
          </picture>

        
      </div>
    </a>
    <div
      class="text-center bg-white dark:bg-slate-800 relative z-10 py-9 px-3 rounded-lg shadow-2xl mx-7 -mt-10 h-[260px]">
      <span class=" font-semibold text-zinc-300 block text-lg  mb-2">
        {{ implode(", ", $categories) }}
      </span>
      <h3 class="font-bold text-xl text-zinc-300 dark:text-gray-300 mb-2 mt-3">
        {{ $title }}
      </h3>
      <x-button-link class="mt-4" target="blank" :href="$github" variant="primary">View Details</x-button-link>
    </div>
  </div>
</div>







