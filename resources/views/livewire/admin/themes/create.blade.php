<div>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Creating Theme
                            </h3>
                        </div>
                        <div class="card-body">
                            <!-- Languages TABS -->
{{--                            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">--}}
{{--                                @foreach( localization()->getSupportedLocalesKeys() as $lang )--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link {{ localization()->getCurrentLocale() == $lang ? 'active' : ''}}" href="#tab-{{ $lang }}" data-toggle="pill" role="tab" aria-controls="custom-content-below-home"--}}
{{--                                           aria-selected="true">{{ $lang }}</a>--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
                            <!-- END Languages TABS -->

                            <div class="form-group col-12">
                                <ul class="nav nav-tabs">
                                    @foreach( localization()->getSupportedLocalesKeys() as $lang )
                                        <li>
                                            <a class="nav-link {{ localization()->getCurrentLocale() == $lang ? 'active' : ''}}" href="#tab-{{ $lang }}" data-toggle="tab">{{ $lang }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="tab-content">
                                    @foreach( localization()->getSupportedLocalesKeys() as $lang )
                                        <div id="tab-{{ $lang }}"
                                             class="tab-pane {{ localization()->getCurrentLocale() == $lang ? 'active' : ''}}">
                                            <div class="panel-body card-body">

                                                <!-- name -->
                                                <div class="form-group">
{{--                                                    <label for="title_{{ $lang }}">Найменування товару</label>--}}
{{--                                                    <input wire:model.lazy="title:{{ $lang }}" id="title_{{ $lang }}" type="text" class="form-control @error('title') is-invalid @enderror">--}}
                                                    <input wire:model="{{ $lang }}_title" id="title_{{ $lang }}" type="text" class="form-control @error('title') is-invalid @enderror">
{{--                                                    <input wire:model.lazy="{{ $lang }}_title" id="title_{{ $lang }}" type="text" class="form-control @error('title') is-invalid @enderror">--}}
                                                </div>
                                                <!-- END name -->

                                                <!-- description -->
                                                <div class="form-group ">
{{--                                                    <label for="content_{{ $lang }}" class="control-label col-lg-2">Опис товару</label>--}}
                                                    <div class="form-controls row">
                                                        <div class="col-lg-12 m-b-sm">
{{--                                                              <textarea wire:model.lazy="content:{{ $lang }}" id="content{{ $lang }}" cols="30" rows="10" class="summernote form-control @error('content') is-invalid @enderror"></textarea>--}}
                                                              <textarea wire:model="{{ $lang }}_content" id="content{{ $lang }}" cols="30" rows="10" class="summernote form-control @error('content') is-invalid @enderror"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END description -->


                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>






{{--                            <div class="tab-content">--}}
{{--                                @foreach( localization()->getSupportedLocalesKeys() as $lang )--}}
{{--                                    <div id="tab-{{ $lang }}"--}}
{{--                                         class="tab-pane {{ localization()->getCurrentLocale() == $lang ? 'active' : ''}}">--}}
{{--                                        <div class="panel-body card-body">--}}

{{--                                            <!-- name -->--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label for="{{ $lang }}_title">Title</label>--}}
{{--                                                <input type="text"--}}
{{--                                                       name="{{ $lang }}[title]"--}}
{{--                                                       class="form-control @error('title') is-invalid @enderror"--}}
{{--                                                       id="title_{{ $lang }}">--}}
{{--                                            </div>--}}
{{--                                            <!-- END name -->--}}

{{--                                            <!-- description -->--}}
{{--                                            <div class="form-group ">--}}
{{--                                                <label for="content_{{ $lang }}" class="control-label col-lg-2">Content</label>--}}
{{--                                                <div class="form-controls row">--}}
{{--                                                    <div class="col-lg-12 m-b-sm">--}}
{{--                                                              <textarea--}}
{{--                                                                  name="{{ $lang }}[content]"--}}
{{--                                                                  id="description_{{ $lang }}"--}}
{{--                                                                  cols="30" rows="10"--}}
{{--                                                                  class="summernote form-control--}}
{{--                                                                  @error('content') is-invalid @enderror">--}}
{{--                                                              </textarea>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- END description -->--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}


{{--                            <div class="tab-content" id="custom-content-below-tabContent">--}}
{{--                                @foreach( localization()->getSupportedLocalesKeys() as $lang )--}}

{{--                                    <div id="tab-{{ $lang }}" class="tab-pane {{ localization()->getCurrentLocale() == $lang ? 'active' : ''}}" role="tabpanel">--}}
{{--                                        <div class="panel-body card-body">--}}
{{--                                            <!-- title -->--}}
{{--                                                <label for="{{ $lang }}_title">Title</label>--}}
{{--                                                <input wire:model.lazy="{{ $lang }}_title" type="text"--}}
{{--                                                       class="form-control--}}
{{--                                                       @error("{{ $lang }}_title") is-invalid @enderror"--}}

{{--                                                       id="{{ $lang }}_title">--}}
{{--                                            <!-- END title -->--}}
{{--                                        </div>--}}
{{--                                        <div class="panel-body card-body">--}}
{{--                                            <!-- content -->--}}
{{--                                                <label for="{{ $lang }}_content">Content</label>--}}
{{--                                                <input wire:model.lazy="{{ $lang }}_content" type="text"--}}
{{--                                                       class="form-control--}}
{{--                                                       @error("{{ $lang }}_content") is-invalid @enderror"--}}
{{--                                                       id="{{ $lang }}_content">--}}
{{--                                            <!-- END content -->--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}

{{--                            </div>--}}

                        </div>

                        <!-- image -->
                        <div class="panel-body card-body">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input wire:model="image" type="file" class="form-control @error("image") is-invalid @enderror" id="image">
                            </div>
                            @if($image)
                                <img src="{{ $image->temporaryUrl() }}" style="width: 150px" alt="">
                            @endif
                        </div>
                        <!-- END image -->

                        <!-- Submit -->
                        <div class="form-group col-12">
                            <button wire:click="save" class="btn btn-sm btn-primary" type="submit">Save Theme</button>
                        </div>
                        <!-- END Submit -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

