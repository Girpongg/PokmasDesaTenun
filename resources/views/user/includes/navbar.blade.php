<!-- Main navigation container -->
<nav
  class="relative flex w-full flex-nowrap items-center justify-between bg-[#5C4033] py-2 shadow-dark-mild dark:bg-neutral-700 lg:flex-wrap lg:justify-start lg:py-4">
  <div class="flex w-full flex-wrap items-center justify-between px-3">
    <!-- Collapsible navbar container -->
    <div class="!visible mt-2 hidden flex-grow basis-[100%] items-center justify-center lg:mt-0 lg:!flex lg:basis-auto">
      <!-- Left links -->
      <ul class="list-style-none flex flex-col ps-0 lg:mt-1 lg:flex-row">
        <!-- Home link -->
        <li class="my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2">
          <a class="font2 text-[#F5E9D3] lg:px-2" href="#">HOME</a>
        </li>
        <!-- Katalog with Dropdown -->
        <li class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0 relative">
          <a
            class="p-0 font2 text-[#F5E9D3] transition duration-200 hover:text-[#C29545] focus:text-black/80 active:text-black/80 lg:px-2 cursor-pointer flex items-center"
            id="dropdownKatalogButton"
            aria-expanded="false">
            KATALOG
            <!-- Arrow icon -->
            <span class="ml-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" class="w-4 h-4">
                <path
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"/>
              </svg>
            </span>
          </a>
          <!-- Dropdown menu -->
          <ul class="absolute z-[1000] hidden min-w-max list-none bg-[#5C4033] text-[#F5E9D3] rounded-lg shadow-lg">
            <li><a class="block px-4 py-2 font2 hover:bg-[#4A3325] hover:text-[#C29545]" href="#">SARUNG</a></li>
            <li><a class="block px-4 py-2 font2 hover:bg-[#4A3325] hover:text-[#C29545]" href="#">SELENDANG</a></li>
            <li><a class="block px-4 py-2 font2 hover:bg-[#4A3325] hover:text-[#C29545]" href="#">SELIMUT</a></li>
          </ul>
        </li>
        <!-- Other links -->
        <li class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0">
          <a class="font2 text-[#F5E9D3] lg:px-2 hover:text-[#C29545]" href="#">KERANJANG</a>
        </li>
        <li class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0">
          <a class="font2 text-[#F5E9D3] lg:px-2 hover:text-[#C29545]" href="#">TENTANG KAMI</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  document.querySelector('#dropdownKatalogButton').addEventListener('click', function () {
    const dropdownMenu = this.nextElementSibling;
    dropdownMenu.classList.toggle('hidden');
  });
</script>
