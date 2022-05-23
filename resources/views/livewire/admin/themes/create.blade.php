<div>
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

                                                <!-- title -->
                                                <div class="form-group">
                                                    <input wire:model.defer="{{ $lang }}_title" id="title_{{ $lang }}" type="text" class="form-control @error('title') is-invalid @enderror">
                                                    {{--                                                    <input wire:model.lazy="{{ $lang }}_title" id="title_{{ $lang }}" type="text" class="form-control @error('title') is-invalid @enderror">--}}
                                                </div>
                                                <!-- END title -->

                                                <!-- content -->
                                                <div class="form-group" wire:ignore>
                                                    <textarea wire:model.defer="{{ $lang }}_content" id="content{{ $lang }}" cols="30" rows="10" class="summernote form-control @error('content') is-invalid @enderror"></textarea>
                                                </div>
                                                <!-- END content -->

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
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
                            <button wire:click="save" class="btn btn-sm btn-primary" type="submit">Save Subject</button>
                        </div>
                        <!-- END Submit -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

