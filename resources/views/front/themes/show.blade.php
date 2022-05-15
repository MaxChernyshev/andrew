@extends('front.layouts.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-10 m-3 p-3">
                <h3 style="color: blue">Subject Title</h3>
                <h3 style="color: green" class="text-uppercase">{{ $theme->title }}</h3>
            </div>
            <div class="col-10 m-3 p-3">
                <h3>Subject Description</h3>
                <p class="text-uppercase">{{ $theme->content }}</p>
            </div>
            <div class="col-10 m-3 p-3">
                <h3 style="color: red">Questions</h3>
                @foreach($theme->questions as $item)
                    <h5 class="text-uppercase" style="color: blue">{{ $item->title }}</h5>
                    <h6>Answer</h6>
                    <h5 style="color: #00d25c">{{ $item->content }}</h5>
                @endforeach

            </div>
        </div>
    </div>

@endsection
