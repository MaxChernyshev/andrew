@extends('admin.layouts.layout')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Updating Question <strong>{{ $question->title }}</strong>
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="tabs-container">
                                <form class="form-horizontal row d-flex flex-column" method="POST" action="{{ route('admin.questions.update', ['question' => $question]) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <!-- Languages TABS (name, description, consist, way_to_use) -->
                                    <div class="form-group col-12">
                                        <ul class="nav nav-tabs">
                                            @foreach( localization()->getSupportedLocalesKeys() as $lang )
                                                <li>
                                                    <a class="nav-link {{ localization()->getCurrentLocale() == $lang ? 'active' : ''}}" href=" #tab-{{ $lang }}" data-toggle="tab">{{ $lang }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="tab-content">
                                            @foreach( localization()->getSupportedLocalesKeys() as $lang )
                                                <div id="tab-{{ $lang }}"
                                                     class="tab-pane {{ localization()->getCurrentLocale() == $lang ? 'active' : ''}}">
                                                    <div class="panel-body card-body">
                                                        <!-- title -->
                                                        <div class="form-group">
                                                            <label for="title_{{ $lang }}">Title</label>
                                                            <input type="text"
                                                                   name="{{ $lang }}[title]"
                                                                   class="form-control"
                                                                   id="title_{{ $lang }}"
                                                                   value="{{ $question->translate($lang)->title }}"
                                                            >
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="form-controls row">
                                                                <label for="content_{{ $lang }}" class="control-label col-lg-2">Content</label>
                                                                <div class="col-lg-10 m-b-sm">
                                                                    <textarea name="{{ $lang }}[content]"
                                                                              id="content_{{ $lang }}"
                                                                              class="summernote form-control @error('content') is-invalid @enderror"
                                                                              value="{{ old('content') }}">
                                                                        {{ $question->translate($lang)->content }}
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END content -->
                                                        <!-- answer -->
                                                        <div class="form-group ">
                                                            <div class="form-controls row">
                                                                <label for="answer_{{ $lang }}" class="control-label col-lg-2">Answer</label>
                                                                <div class="col-lg-10 m-b-sm">
                                                                    <textarea name="{{ $lang }}[answer]"
                                                                              id="answer_{{ $lang }}"
                                                                              class="summernote form-control @error('answer') is-invalid @enderror"
                                                                              value="{{ old('answer') }}">
                                                                        {{ $question->translate($lang)->content }}
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END answer -->
                                                        <!-- Subject -->

                                                        <p>Change Subject</p>
                                                        <select class="select2_demo_3 form-control select2-hidden-accessible"
                                                                name="subject_id"
                                                                tabindex="-1"
                                                                aria-hidden="true">
                                                            <option value="{{ $question->subject_id ?? 0 }}">
                                                                {{ $question->subject->title }}
                                                            </option>
                                                            @foreach($subjects as $subject)
                                                                <option value="{{ $subject->id }}">
                                                                    {{ $subject->title }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <!-- END Subject -->
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- END Languages TABS (name, description, consist, way_to_use) -->

                                    <div class="row mt-2 mb-2">
                                        <div class="col-1">
                                            <img src="{{ asset($question->image) }}" style="width: 150px" class="" alt="">
                                        </div>
                                    </div>
                                    <!-- Image -->
                                    <div class="row mt-2 mb-2">
                                        <div class="col-4">
                                            <h4>Change Image</h4>
                                            @livewire('admin.image-loader')
                                        </div>
                                    </div>
                                    <!-- END Image -->

                                    <!-- Submit -->
                                    <div class="row">
                                        <div class="form-group col-1 d-flex">
                                            <button class="btn btn-sm btn-primary mx-auto my-auto" type="submit">Save</button>
                                        </div>
                                        <div class="form-group col-1 d-flex">
                                            <a href="{{ url()->previous() }}" class="btn btn-sm btn-light mx-auto my-auto">Back</a>
                                        </div>
                                    </div>
                                    <!-- END Submit -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
