@extends('layouts.master')
@section('main_content')
<div class="m-4 p-4 bg-white rounded-xl shadow-sm">
    <div class="flex items-center justify-between pb-3 border-b-1 border-b-gray-300">
        <h2 class="text-xl font-semibold text-gray-800  ">Product List</h2>
        <a class="bg-[#13694C] text-white p-2 px-3 rounded-md"  href="{{ route('product-list.create') }}">Add Product</a>
    </div>
</div>
@endsection
