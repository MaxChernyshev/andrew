@extends('admin.layouts.layout')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Creating Subject
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="tabs-container">
                                <form class="form-horizontal row d-flex flex-column" method="POST" action="{{ route('admin.subjects.store') }}" enctype="multipart/form-data">
                                    @csrf
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
                                                            <input type="text" name="{{ $lang }}[title]" class="form-control @error('title') is-invalid @enderror" id="title_{{ $lang }}" placeholder="Enter Title" value="{{ old('title') }}">
                                                        </div>
                                                        <!-- END title -->

                                                        <!-- content -->
                                                        <div class="form-group ">
                                                            <div class="form-controls row">
                                                                <label for="content_{{ $lang }}" class="control-label col-lg-2">Content</label>
                                                                <div class="col-lg-10 m-b-sm">
                                                                    <textarea name="{{ $lang }}[content]" id="content_{{ $lang }}" cols="30" rows="10" class="summernote form-control @error('content') is-invalid @enderror" value="{{ old('content') }}"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END content -->


                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- END Languages TABS (name, description, consist, way_to_use) -->

                                    <!-- Image -->
                                    @livewire('admin.image-loader')
                                    <!-- END Image -->

                                    <!-- File -->
                                    @livewire('admin.file-loader')
                                    <!-- END File -->

                                    <!-- Submit -->
                                    <div class="form-group col-12">
                                        <button class="btn btn-sm btn-primary" type="submit">Save</button>
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
