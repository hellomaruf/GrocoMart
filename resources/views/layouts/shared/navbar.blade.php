<nav class="bg-white border-b border-gray-200 px-4 py-3 sticky top-0 flex items-center justify-between ">
  <!-- Left: Logo or Title -->
  <div class="flex items-center space-x-2">
    <i class="ph ph-app-window text-2xl text-green-600"></i>
    <span class="text-xl font-semibold text-gray-700">Dashboard</span>
  </div>

  <!-- Center: (Optional search or nav items) -->
  <div class="hidden md:block">

  </div>

  <!-- Right: Icons and profile -->
  <div class="flex items-center space-x-4">
    <!-- Notification bell -->
    <button class="relative">
      <i class="ph ph-bell text-2xl text-gray-600"></i>
      <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
    </button>

    <!-- Profile image (with dropdown trigger) -->
    <div class="relative">
       <div x-data="{ open: false }" class="relative inline-block text-left">
    <!-- Trigger -->
    <div @click="open = !open" class="flex items-center gap-2 cursor-pointer">
        <p>{{ Auth::user()->name }}</p>
        <i class="ph ph-caret-down"></i>
    </div>

    <!-- Dropdown -->
    <div
        x-show="open"
        @click.away="open = false"
        x-transition
        class="absolute right-0 mt-2 w-40 bg-white shadow-lg rounded-md z-10"
    >
        <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            Profile
        </a>

        <a href="{{ route('account.logout') }}" type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            Logout
        </a>
    </div>
</div>
    </div>
  </div>
</nav>
