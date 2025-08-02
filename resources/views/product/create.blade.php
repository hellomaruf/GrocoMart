@extends('layouts.master')
@section('main_content')
<div class="m-4 p-4 bg-white rounded-xl shadow-sm">
    <section class="min-h-screen  ">
    <div class="flex items-center justify-between pb-3 border-b-1 border-b-gray-300 mb-6">
        <h2 class="text-xl font-semibold text-gray-800  ">Add Products</h2>
    </div>
    <div class=" w-full bg-white p-2 rounded-2xl ">
    <form action="{{ route('product-list.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @csrf
      <!-- Product Name -->
      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Product Name</label>
        <input type="text" name="name" placeholder="Enter product name"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border focus:border-[#13694D] outline-none" required>
      </div>


      <!-- Price -->
      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Price (৳)</label>
        <input type="number" name="price" step="0.01" placeholder="Enter price"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border focus:border-[#13694D] outline-none" required>
      </div>

      <!-- Discount Price -->
      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Discount Price (৳)</label>
        <input type="number" name="discount_price" step="0.01" placeholder="Optional"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border focus:border-[#13694D] outline-none">
      </div>

      <!-- Stock -->
      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Stock</label>
        <input type="number" name="stock" placeholder="Available stock"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border focus:border-[#13694D] outline-none" required>
      </div>

      <!-- Product Image -->
    <div>
  <label class="block mb-1 text-sm font-medium text-gray-700">Product Image</label>
  <input
    type="file"
    name="file"
    accept="image/*"
    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border focus:border-[#13694D] outline-none"
    required
  >
</div>

      <!-- Status -->
      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Status</label>
        <select name="status"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border focus:border-[#13694D] outline-none" required>
          <option value="active">Active</option>
          <option value="inactive">Inactive</option>
        </select>
      </div>

      <!-- Description (Full Width) -->
      <div class="md:col-span-2">
        <label class="block mb-1 text-sm font-medium text-gray-700">Description</label>
        <textarea name="description" rows="4" placeholder="Write product description"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border focus:border-[#13694D] outline-none" required></textarea>
      </div>

      <!-- Submit Button (Full Width) -->
      <div class="md:col-span-2">
        <button type="submit"
          class="w-50 bg-[#13694C] hover:bg-[#13694C] text-white font-medium py-3 px-6 rounded-lg shadow transition duration-300">
          Submit Product
        </button>
      </div>
    </form>
  </div>
</section>


</div>
@endsection
