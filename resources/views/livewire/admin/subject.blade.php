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
                                    {{--                                    <button wire:click="createTheme" class="btn btn-sm btn-info">Create Subjects</button>--}}
                                    <a href="{{ route('admin.subjects.create') }}" class="btn btn-sm btn-info">Create Subject</a>
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
                                                Clear search criteria
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
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Image</th>
                                    <th>Active</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subjects as $subject)
                                    <tr>
                                        <td>{{ $subject->id }}</td>
                                        <td>{{ $subject->title }}</td>
                                        <td>{!! $subject->content !!}</td>
                                        <td>
                                            <img src="{{ $subject->image ? asset($subject->image) : asset('storage/no-image.png') }}" style="width: 75px" alt="">
                                        </td>
                                        <td>
                                            <div class="custom-control custom-switch">
                                                <input wire:click="switchActive({{ $subject->id }})" type="checkbox" {{ $subject->active ? 'checked' : '' }} class="custom-control-input" id="switchActive{{ $subject->id }}">
                                                <label class="custom-control-label" for="switchActive{{ $subject->id }}"></label>
                                            </div>

{{--                                            <div>--}}
{{--                                                <label class="switch">--}}
{{--                                                    <input type="checkbox">--}}
{{--                                                    <span class="slider round"></span>--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="m-1">
                                                    <a href="{{ route('admin.subjects.edit', ['subject' => $subject]) }}" class="btn btn-info btn-sm">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </div>
                                                <div class="m-1">
                                                    <form action="{{ route('admin.subjects.delete', ['subject' => $subject->id]) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('confirm deleting')">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>


{{--                                            <div class="d-flex">--}}
{{--                                                <div class="m-1">--}}
                                            {{--                                                    <button wire:click="updateTheme({{ $subject->id }})" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="m-1">--}}
                                            {{--                                                    <button wire:click="delete({{ $subject->id }})" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="m-3">
                                {{ $subjects->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
