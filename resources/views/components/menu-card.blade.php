<div class="{!! $attributes->merge(['class' => 'flex flex-wrap-mx-2']) !!}">
  <img class="object-contain" src="https://i0.wp.com/sitn.hms.harvard.edu/wp-content/uploads/2019/02/dna_spiral_dark_lines_figure_38174_1920x1080.jpg?fit=1920%2C1080&ssl=1" alt="Sunset in the mountains">
  <div class="px-6 py-4 dark:bg-blue-100">
    <div class="font-bold text-xl mb-2 dark:text-gray-700">{{ $cardHeading }}</div>
    <p class="text-gray-700 text-base">
      {{ $slot }}
    </p>
  </div>
</div>