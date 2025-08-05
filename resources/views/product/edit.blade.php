@extends('layouts.master')
@section('main_content')
<div class="m-4 p-4 bg-white rounded-xl shadow-sm">
    <section class="min-h-screen">
        <div class="flex items-center justify-between pb-3 border-b-1 border-b-gray-300 mb-6">
            <h2 class="text-xl font-semibold text-gray-800">Edit Product</h2>
        </div>

        <div class="w-full bg-white p-2 rounded-2xl">
            <form action="{{ route('product-list.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf
                @method('PATCH') {{-- Update method --}}

                <!-- Product Name -->
                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Product Name</label>
                    <input type="text" name="name" value="{{ $product->name }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#13694D] outline-none" required>
                </div>

                <!-- Price -->
                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Price (৳)</label>
                    <input type="number" name="price" step="0.01" value="{{ $product->price }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#13694D] outline-none" required>
                </div>

                <!-- Discount Price -->
                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Discount Price (৳)</label>
                    <input type="number" name="discount_price" step="0.01" value="{{ $product->discount_price }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#13694D] outline-none">
                </div>

                <!-- Stock -->
                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Stock</label>
                    <input type="number" name="stock" value="{{ $product->stock }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#13694D] outline-none" required>
                </div>

                <!-- Product Image -->
                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Product Image</label>
                    <input type="file" name="file"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#13694D] outline-none">
                    <div class="mt-2">
                        <img src="{{ asset($product->product_image) }}" alt="Current Image" class="w-24 h-24 object-cover rounded">
                    </div>
                </div>

                <!-- Status -->
                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Status</label>
                    <select name="status"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#13694D] outline-none" required>
                        <option value="active" {{ $product->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ $product->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <!-- Description (Full Width) -->
                <div class="md:col-span-2">
                    <label class="block mb-1 text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#13694D] outline-none" required>{{ $product->description }}</textarea>
                </div>

                <!-- Submit Button -->
                <div class="md:col-span-2">
                    <button type="submit"
                        class="w-50 bg-[#13694C] hover:bg-[#13694C] text-white font-medium py-3 px-6 rounded-lg shadow transition duration-300">
                        Update Product
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection
