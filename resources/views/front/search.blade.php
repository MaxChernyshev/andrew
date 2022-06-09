@extends('front.layouts.layout')

@section('content')

    <div class="container mt-5 mb-5">
        <h2><strong><u>{{ __('front.subject_search_result') }}</u></strong></h2>
        @if($subjects->isEmpty())
            <h4><strong class="text-danger">{{ __('front.no_subject_search_result') }}</strong></h4>
        @endif

        @if($subjects)
            <div class="row">
                @foreach($subjects as $subject)
                    <div class="col-10">
                        <h3 class="m-3 text-uppercase">{{ $subject->title }}</h3>
                        <div class="m-5">
                            {!! $subject->content !!}
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    <div class="container mt-5 mb-5">
        <h2><strong><u>{{ __('front.question_search_result') }}</u></strong></h2>

        @if($questions->isEmpty())
            <h4><strong class="text-danger">{{ __('front.no_question_search_result') }}</strong></h4>
        @endif
        @if($questions)
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
        @endif
    </div>
@endsection
