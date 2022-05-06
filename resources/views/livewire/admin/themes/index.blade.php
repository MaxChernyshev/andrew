<div>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Themes</h3>
                        </div>
                        <div class="card-header">
                            <button wire:click="createTheme" class="btn btn-sm btn-info">Create Theme</button>
                            {{--                            <button wire:click="createTheme({{ $product->id }})" class="btn btn-success">Додати</button>--}}
                            {{--                            <a wire:model class="btn btn-info">Create Theme</a>--}}
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Content</th>
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
                                        <td>{{ $theme->active }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="m-1">
                                                    {{--                                                    <a type="button" class="btn btn-block btn-info btn-sm"><i class="fas fa-edit"></i></a>--}}
                                                    <button wire:click="updateTheme({{ $theme->id }})" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                                                </div>
                                                <div class="m-1">
                                                    {{--                                                    <a type="button" class="btn btn-block btn-danger btn-sm"><i class="fas fa-trash"></i></a>--}}
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
