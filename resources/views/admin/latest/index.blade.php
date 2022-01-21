@extends('admin.layout')


@section('main')

   <div>
    <div class="card-header">
        <h2 class="card-title">All News</h2>
        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <a href="{{ url("dashboard/news/create") }}"  class="btn btn-success">Add a New </a>
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


@endsection






