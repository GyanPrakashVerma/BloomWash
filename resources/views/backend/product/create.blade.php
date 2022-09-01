@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text">Product </h5>
    </div>
    <div class="card-block">
       <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
             <label for="title" class="form-control-label">Product Name</label>
             <input type="text" name="pname" class="form-control" id="title" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="title" class="form-control-label">Standard Price</label>
            <input type="number" name="sprice" class="form-control" id="title" placeholder="Enter price">
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Custom Price</label>
            <input type="number" name="cprice" class="form-control" id="title" placeholder="Enter price">
         </div>
         
         <div class="form-group">
            <label for="title" class="form-control-label">Product Image</label>
            <input type="file" name="image" class="form-control" >
         </div>
          <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
 </div>
 @endsection