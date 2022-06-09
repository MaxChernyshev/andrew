@extends('front.layouts.layout')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-10">
                <h2 class="m-3 text-uppercase">{{ $subject->title }}</h2>
                <div class="m-5">
                    {!! $subject->content !!}
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($questions as $question)
                <div class="col-10">
                    <h3 class="m-3 text-uppercase">{{ $question->title }}</h3>
                    <div class="m-5">
                        {!! $question->content !!}
                    </div>
                    <div class="m-5">
                        {!! $question->answer !!}
                    </div>
                </div>
            @endforeach
        </div>
        {{--        @foreach($questions as $item)--}}
        {{--            @dump($item->title)--}}
        {{--        @endforeach--}}
    </div>
@endsection
