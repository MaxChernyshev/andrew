@extends('front.layouts.layout')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('contact.store') }}" method="POST" multiple="">
{{--                <form action="" method="POST" multiple="">--}}
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="name">@lang('contact.name')</label>
                        <input name="name" type="text" class="form-control @error('name') border-danger @enderror" id="name" placeholder="@lang('contact.enter_name')">
                        @if ($errors->has('name'))
                            <div class="error text-danger">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">@lang('contact.email')</label>
                        <input name="email" type="email" class="form-control @error('email') border-danger @enderror" id="email" placeholder="email@example.com">
                        @if ($errors->has('email'))
                            <div class="error text-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">@lang('contact.phone')</label>
                        <input name="phone" type="text" class="form-control @error('phone') border-danger @enderror" id="phone" placeholder="@lang('contact.enter_phone')">
                        @if ($errors->has('phone'))
                            <div class="error text-danger">
                                {{ $errors->first('phone') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="message">@lang('contact.message')</label>
                        <textarea class="form-control @error('message') border-danger @enderror" id="message" rows="4" name="message"></textarea>
                        @if ($errors->has('message'))
                            <div class="error text-danger">
                                {{ $errors->first('message') }}
                            </div>
                        @endif
                    </div>
{{--                    <div class="form-group mt-4 mb-4">--}}
{{--                        <div class="captcha">--}}
{{--                            <span>{!! captcha_img() !!}</span>--}}
{{--                            <a class="btn btn-danger reload" onClick="history.go(0);">↻</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group mb-4">--}}
{{--                        <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">--}}
{{--                    </div>--}}

                    <!-- TODO display Captha errors-->

                    <button type="submit" class="btn btn-primary mb-2">Send message</button>
                </form>
            </div>
        </div>
    </div>

@endsection
