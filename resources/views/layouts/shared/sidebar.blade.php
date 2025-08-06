<div x-data="{ open: true }" class="flex h-screen w-screen ">

  <!-- Sidebar -->
  <div :class="open ? 'w-64' : 'w-20'" class="bg-white border-r border-gray-200 transition-all duration-300 overflow-hidden h-[100vh]">
    <div class="flex items-center p-4"
    :class="open ? 'justify-between' : 'justify-center'"
    >
    <span x-show="open" class="text-lg font-semibold flex items-start justify-start">
     <img class="w-[140px] h-[45px]" src="{{ asset('assets/images/logo.svg') }}" alt="" srcset="">
    </span>
      <button @click="open = !open" class="text-gray-600 focus:outline-none">
        <i class="ph ph-list text-xl"></i>
      </button>
    </div>
    <nav class="mt-4 space-y-2">
      <a href="{{ url('admin/dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'bg-[#13694C] text-white hover:bg-[#13694C]':'bg-white text-black hover:bg-[#13694C] hover:text-white' }} flex items-center p-3 "
      :class="open ? 'justify-start' : 'justify-center'"
      >
        <i class="ph ph-house text-xl"></i>
        <span x-show="open" class="ml-3">Dashboard</span>
      </a>
    <div
      x-data="{
    submenuOpen: {{ request()->is(['admin/product-list', 'admin/product-list/create']) ? 'true' : 'false' }},
    init() {
      this.$watch('open', value => {
        if (!value) this.submenuOpen = false;
      });
    }
  }"
>
        <button @click="submenuOpen = !submenuOpen" class="{{ request()->is(['admin/product-list', 'admin/product-list/create']) ? 'bg-[#13694C] text-white hover:bg-[#13694C]' : 'bg-white text-black' }} flex items-center p-3 w-full hover:bg-[#13694C] hover:text-white"
          :class="open ? 'justify-start' : 'justify-center'">
          <i class="ph ph-rows-plus-bottom text-xl"></i>
          <span x-show="open" class="ml-3 flex-1 text-left">Product List</span>
          <i x-show="open" class="ph text-sm ml-auto" :class="submenuOpen ? 'ph-caret-up' : 'ph-caret-down'"></i>
        </button>

        <!-- Submenu -->
        <div x-show="submenuOpen" x-collapse x-cloak>
          <a href="{{ url('admin/product-list') }}" class="block text-sm ml-10 my-2 p-2 rounded-l {{ request()->is('admin/product-list') ? 'bg-[#13694C] text-white ' : 'text-black' }} hover:bg-[#13694C] hover:text-white">
            All Products
          </a>
          <a href="{{ url('admin/product-list/create') }}" class="block text-sm ml-10 my-2 p-2 rounded-l {{ request()->is('admin/product-list/create') ? 'bg-[#13694C] text-white ' : 'text-black' }} hover:bg-[#13694C] hover:text-white">
            Add Product
          </a>
        </div>
      </div>
      <a href="#" class="flex items-center p-3 hover:bg-[#13694C] hover:text-white"
      :class="open ? 'justify-start' : 'justify-center'"
      >
        <i class="ph ph-user text-xl"></i>
        <span x-show="open" class="ml-3">Profile</span>
      </a>
      <a href="#" class="flex items-center p-3 hover:bg-[#13694C] hover:text-white"
      :class="open ? 'justify-start' : 'justify-center'"
      >
        <i class="ph ph-gear text-xl"></i>
        <span x-show="open" class="ml-3">Settings</span>
      </a>
    </nav>
  </div>
