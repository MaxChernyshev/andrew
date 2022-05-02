<div>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Bordered Table</h3>
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
                                                    <a type="button" class="btn btn-block btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                                </div>
                                                <div class="m-1">
                                                    <a type="button" class="btn btn-block btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
