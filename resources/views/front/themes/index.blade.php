@extends('front.layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10">
                @foreach($themes as $theme)
                    <div class="m-2 p-2" style="border: 1px solid green">
                        <h4 style="color: red">
                            <a href="{{ route('theme.answer', ['slug' => $theme->slug]) }}">
                                {{ $theme->title }}
                            </a>
                        </h4>
                        <h6 style="color: red">Short description</h6>
                        <p>{{ $theme->content }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
