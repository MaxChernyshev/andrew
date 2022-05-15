@extends('front.layouts.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <section>
                    <h2 class="title_FAQ">FAQ</h2>
                    @foreach($themes as $theme)
{{--                        @dd($theme)--}}

                    <div class="faq">
                        <div class="question">
                            <h3>
                                <a href="{{ route('theme.question', ['slug' => $theme->slug]) }}">
{{--                                <a href="#">--}}
                                    {{ $theme->title }}
                                </a>
                            </h3>

                            <svg width="15" height="10" viewBox="0 0 42 25">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="answer">
                            <p>{{ $theme->content }}</p>
                        </div>
                    </div>
                    @endforeach
                </section>
            </div>
        </div>
    </div>



@endsection
