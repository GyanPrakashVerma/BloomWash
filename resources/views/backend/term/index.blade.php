@extends('layouts.new_app')
@section('new_content')
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">All terms</h5>
            <a href="{{ route('term.create') }}"
                    class="text-dark"><button class="btn btn-outline-warning" style="float:right">Add Product</button></a>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                {{-- <th>Description</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($term as $terms)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $terms->title }}</td>
                                    {{-- <td>{!! $terms->description !!}</td> --}}
                                   
                                   
                                    <td>
                                        <form action="{{ route('term.destroy', $terms->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <a href="{{ route('term.edit', $terms->id) }}" class="btn btn-success"><i
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
