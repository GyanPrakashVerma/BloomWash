@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text">Terms & Conditions </h5>
    </div>
    <div class="card-block">
       <form action="{{route('term.update',$term->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          {{-- <div class="form-group">
             <label for="title" class="form-control-label">Title</label>
             <input type="text" name="title" class="form-control" id="title" placeholder="Enter name">
          </div> --}}
          <div class="form-group">
            <label for="title" class="form-control-label">Description</label>
            <textarea name="desc" class="form-control summernote" id="" cols="30" rows="10">{{$term->description}}</textarea>
            {{-- <input type="number" name="sprice" class="form-control" id="title" placeholder="Enter price"> --}}
         </div>
          <button type="submit" class="btn btn-primary">Update</button>
       </form>
    </div>
 </div>
 @endsection