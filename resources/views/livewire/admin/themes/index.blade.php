<div>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if (session()->has('message'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <p>
                                {{ session('message') }}
                            </p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Subjects</h3>
                        </div>
                        <div class="card-header">
                            <div class="row">
                                <div class="col-3">
                                    <button wire:click="createTheme" class="btn btn-sm btn-info">Create Subject</button>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="search" wire:model.debounce.300ms="search" placeholder="Search">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <form>
                                            <button wire:model="resetPage" class="btn btn-sm btn-info">
                                                Skip search
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th># <br>
                                        <span wire:click="sortBy('id')" class="" style="cursor: pointer;">
                                            <i class="fas fa-arrow-up   {{ $sortColumnName === 'id' && $sortDirection === 'asc'  ? '' : 'text-muted' }}"></i>
                                            <i class="fas fa-arrow-down {{ $sortColumnName === 'id' && $sortDirection === 'desc' ? '' : 'text-muted' }}"></i>
                                        </span>
                                    </th>
                                    <th>Title <br>
{{--                                        <span wire:click="sortBy('{{ localization()->getCurrentLocale() }}.title')" class="" style="cursor: pointer;">--}}
{{--                                        <span wire:click="sortBy('{{ translate('en')->title }}')" class="" style="cursor: pointer;">--}}
{{--                                            <i class="fas fa-arrow-up   {{ $sortColumnName === 'id' && $sortDirection === 'asc'  ? '' : 'text-muted' }}"></i>--}}
{{--                                            <i class="fas fa-arrow-down {{ $sortColumnName === 'id' && $sortDirection === 'desc' ? '' : 'text-muted' }}"></i>--}}
{{--                                        </span>--}}

                                    </th>
                                    <th>Content</th>
                                    <th>Image</th>
                                    <th>Active</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($themes as $theme)
                                    <tr>
                                        <td>{{ $theme->id }}</td>
                                        <td>{{ $theme->title }}</td>
                                        <td>{{ $theme->content }}</td>
                                        <td>
                                            <img src="{{ $theme->image ? asset('storage/'.$theme->image) : asset('storage/no-image.png') }}" style="width: 75px" alt="">
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input wire:click="switchActive({{ $theme->id }})" type="checkbox" {{ $theme->active ? 'checked' : '' }}>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="m-1">
                                                    <button wire:click="updateTheme({{ $theme->id }})" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                                                </div>
                                                <div class="m-1">
                                                    <button wire:click="deleteTheme({{ $theme->id }})" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="m-3">
                                {{ $themes->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
