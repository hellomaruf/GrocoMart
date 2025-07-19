<nav class="bg-white border-b border-gray-200 px-4 py-3 flex items-center justify-between shadow-sm">
  <!-- Left: Logo or Title -->
  <div class="flex items-center space-x-2">
    <i class="ph ph-app-window text-2xl text-green-600"></i>
    <span class="text-xl font-semibold text-gray-700">Dashboard</span>
  </div>

  <!-- Center: (Optional search or nav items) -->
  <div class="hidden md:block">
    <!-- Example search bar -->
    <input
      type="text"
      placeholder="Search..."
      class="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
    >
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
      <img
        src="https://i.pravatar.cc/40"
        alt="Profile"
        class="w-9 h-9 rounded-full cursor-pointer border-2 border-green-500"
      >
      <!-- Optional dropdown -->
       <div class="absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-md hidden">
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
      </div>
    </div>
  </div>
</nav>
