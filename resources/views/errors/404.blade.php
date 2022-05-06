@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
<div>
    <a href="{{ route('main.page') }}">Main Page</a>
</div>
@section('message', __('Not Found'))
