@extends('admin.layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mt-5 text-black">
                    <h1>Welcome to the admin panel <strong class="text-cyan">{{ env('APP_NAME') }}</strong></h1>
                </div>
            </div>
        </div>
    </div>

@endsection
