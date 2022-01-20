@extends('admin.layout')


@section ('main')

   <div>
    <div class="card-header">
        <h2 class="card-title">All News</h2>
        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <button type="button" data-toggle="modal" data-target="#modal-xl" class="btn btn-success">Add a New </button>
            </div>
        </div>
    </div>
</div>

@include('admin.inc.message')

  <table class="table">
            <thead>
                <tr>
                    <th>Index</th>
                    <th>New Name</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($latests as $latest)


                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $latest->title }}</td>
                        @php
                            $latest->main_img = str_replace('public/', 'storage/', $latest->main_img);
                        @endphp
                        <td><img src="{{ asset("$latest->main_img") }}" style="height: 50px; width:50px"></td>
                        <td>
                            <a href="{{  url("dashboard/news/edit/$latest->id")}}"  class="btn btn-primary">
                                <i class="fas fa-user-edit"></i>
                                </a>
                            <a class="btn btn-danger" href="{{ url("dashboard/news/delete/$latest->id") }}"><i
                                    class="fas fa-trash"></i></a>
                            <a class="btn btn-warning" href="{{ url("dashboard/news/images/$latest->id") }}"><i
                                    class="fas fa-images"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $latests->links() }}
        </div>

    <!-- /.card-body -->

    <div class="modal fade show" id="modal-xl" style="display: none; padding-right: 16px;" aria-modal="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add a News</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('admin.inc.errors')
                    <form method="POST" action="{{ url('dashboard/news/add') }}" class="form-horizontal"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="name"
                                        placeholder="Enter a news name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="desc" class="col-sm-2 col-form-label">description</label>
                                <div class="col-sm-10">
                                    <textarea name="desc" id="desc" cols="100" rows="10"
                                        placeholder="Enter news details"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="img">Main Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="main_img" type="file" class="custom-file-input" id="img">
                                        <label id="imgName" class="custom-file-label" for="img"></label>
                                    </div>

                                </div>
                            </div>

                            <div class="modal-footer justify-content-between">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
    </div>

@endsection






@section('scripts')
        <script>
            $('input[type="file"]').change(function(e) {
                let fileName = e.target.files[0].name
                $("#imgName").text(fileName)
            })
        </script>

@endsection
