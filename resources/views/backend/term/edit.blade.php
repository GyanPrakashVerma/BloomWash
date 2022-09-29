@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text">Edit products</h5>
    </div>
    <div class="card-block">
       <form action="{{route('term.update',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="form-group">
             <label for="title" class="form-control-label">Product Name</label>
             <input type="text" name="pname" class="form-control" id="title" value="{{$product->product}}">
          </div>
          <div class="form-group">
            <label for="title" class="form-control-label">Standard Price</label>
            <input type="number" name="sprice" class="form-control" id="title"value="{{$product->standard_price}}">
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Custom Price</label>
            <input type="number" name="cprice" class="form-control" id="title"value="{{$product->custom_price}}">
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Image</label>
            <input type="file" name="image" class="form-control" >
            <img src="{{ asset('Product/'. $product->product_image) }}" height="150px" width="150px"
                                        alt="">
         </div>
       
          <button type="submit" class="btn btn-primary">Update</button>
       </form>
    </div>
 </div>
 @endsection