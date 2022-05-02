@extends('front.layouts.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-10 m-3 p-3">
                <h3 class="text-uppercase">{{ $theme->title }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                @foreach($theme->questions as $answer)
                    <div class="m-2 p-2" style="border: 1px solid green">
                        <h4 style="color: red">Question</h4>
                        <p>{{ $answer->title }}</p>
                        <h4 style="color: red">Short description</h4>
                        <p>{{ $answer->content }}</p>
                        <h4 style="color: red">Answer</h4>
                        <p>{{ $answer->answer }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
