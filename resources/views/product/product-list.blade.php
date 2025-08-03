@extends('layouts.master')
@section('main_content')
<div class="m-4 p-4 bg-white rounded-xl shadow-sm">
    <div class="flex items-center justify-between pb-3 border-b-1 border-b-gray-300">
        <h2 class="text-xl font-semibold text-gray-800  ">Product List</h2>
        <a class="bg-[#13694C] text-white p-2 px-3 rounded-md"  href="{{ route('product-list.create') }}">Add Product</a>
    </div>
    <div class="mt-6">
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100 text-gray-700 text-left text-sm uppercase font-semibold">
                <tr>
                    <th class="px-6 py-3">#</th>
                    <th class="px-6 py-3">Image</th>
                    <th class="px-6 py-3">Name</th>
                    <th class="px-6 py-3">Price</th>
                    <th class="px-6 py-3">Discount</th>
                    <th class="px-6 py-3">Stock</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Description</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-sm text-gray-700">
                @forelse ($products as $key => $product)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4">{{ $key + 1 }}</td>
                        <td class="px-6 py-4">
                            @if($product->product_image)
                                <img src="{{ asset($product->product_image) }}" alt="{{ $product->name }}" class="h-12 w-12 rounded object-cover">
                            @else
                                <span class="text-gray-400 italic">N/A</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 font-medium">{{ $product->name }}</td>
                        <td class="px-6 py-4">{{ $product->price }}</td>
                        <td class="px-6 py-4">
                            @if($product->discount_price)
                                <span class="text-green-600">{{ $product->discount_price }}</span>
                            @else
                                <span class="text-gray-400 italic">N/A</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">{{ $product->stock }}</td>
                        <td class="px-6 py-4">
                            <span class="inline-block px-2 py-1 rounded text-xs font-semibold
                                {{ $product->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ ucfirst($product->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4">{{ Str::limit($product->description, 50) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="px-6 py-4 text-center text-gray-400">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection
