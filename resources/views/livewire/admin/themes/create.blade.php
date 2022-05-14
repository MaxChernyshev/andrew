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
                            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                                @foreach( localization()->getSupportedLocalesKeys() as $lang )
                                    <li class="nav-item">
                                        <a class="nav-link {{ localization()->getCurrentLocale() == $lang ? 'active' : ''}}" href=" #tab-{{ $lang }}" data-toggle="pill" role="tab" aria-controls="custom-content-below-home"
                                           aria-selected="true">{{ $lang }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <!-- END Languages TABS -->
                            <div class="tab-content" id="custom-content-below-tabContent">
                                @foreach( localization()->getSupportedLocalesKeys() as $lang )
                                    <div id="tab-{{ $lang }}"
                                         class="tab-pane {{ localization()->getCurrentLocale() == $lang ? 'active' : ''}}">
                                        <div class="panel-body card-body">
                                            <!-- title -->
                                            <div class="form-group">
                                                <label for="title_{{ $lang }}">Title</label>
                                                <input wire:model="title.{{ $lang }}" type="text" name="{{ $lang }}[title]" class="form-control @error('title') is-invalid @enderror" id="title_{{ $lang }}" placeholder="Enter Title">
                                            </div>
                                            <!-- END title -->
                                        </div>
                                        <div class="panel-body card-body">
                                            <!-- content -->
                                            <div class="form-group">
                                                <label for="content_{{ $lang }}">Content</label>
                                                <input wire:model="content.{{ $lang }}" type="text" name="{{ $lang }}[content]" class="form-control @error('content') is-invalid @enderror" id="content_{{ $lang }}" placeholder="Enter Content">
                                            </div>
                                            <!-- END content -->
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Submit -->
                            <div class="form-group col-12">
                                <button wire:click.prevent="saveTheme()" class="btn btn-sm btn-primary" type="submit">Save Theme</button>
                            </div>
                            <!-- END Submit -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
