@extends('front.layouts.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-8">
                <ol>
                    @foreach($themes as $theme)
                        <li>
                            {{ $theme->title }}
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>

@endsection
