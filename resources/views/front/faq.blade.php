@extends('front.layouts.layout')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-10">
                <div class="accordion" id="accordionExample">
                    @foreach($subjects as $subject)
                        <div class="card">
                            <div class="card-header" id="heading{{$subject->id}}">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{$subject->id}}" aria-expanded="true" aria-controls="collapse{{$subject->id}}">
                                        {{ $subject->title }}
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse{{$subject->id}}" class="collapse" aria-labelledby="heading{{$subject->id}}" data-parent="#accordionExample">
                                <div class="card-body">
                                    {!! $subject->content !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
