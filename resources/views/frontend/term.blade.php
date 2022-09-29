@extends('frontend.main.main')
@section('content')
<style>
    p{
        hyphens: auto
    }
</style>
<section class="pt-top pb-20 mb-60">
    <div class="container text-left">
        <div class=" w-100">
            <div class="card-header text"><h2>Term & Conditions<h2></div>
                <div class="card-body">
                    <p class="text-left">
                    {!!$term->description!!}    
                    </p></div>
        </div>
    </div>
</section>
@endsection