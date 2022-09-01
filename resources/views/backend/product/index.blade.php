@extends('layouts.new_app')
@section('new_content')
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">All Products</h5>
            <button class="btn btn-outline-warning" style="float:right"><a href="{{ route('product.create') }}"
                    class="text-dark">Add Product</a></button>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Standard price</th>
                                <th>Custom Price</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($product as $products)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $products->product }}</td>
                                    <td>{{ $products->standard_price }}</td>
                                    <td>{{ $products->custom_price }}</td>
                                    <td><img src="{{ asset('Product/' . $products->product_image) }}" height="150px" width="150px"
                                            alt=""></td>
                                   
                                    <td>
                                        <form action="{{ route('product.destroy', $products->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <a href="{{ route('product.edit', $products->id) }}" class="btn btn-success"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <button type="submit" class="btn btn-dark"><i
                                                    class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
