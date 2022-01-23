@extends('admin.layout')

@section('main')
    <div class="card-header">
        <h2 class="card-title">All Projects</h2>

        <div class="card-tools ">

            <div class="input-group">
                <div class="input-group-append">
                    <form class="d-flex" method="GET" action="">
                        <input type="text" name="search" class="form-control float-right" placeholder="Search">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="input-group input-group-sm mt-2">
        <a href="{{ url('dashboard/projects/create') }}" class="btn btn-success">Add New Project</a>
    </div>

    <!-- /.card-header -->
    @include('admin.inc.message')


    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Index</th>
                    <th>Project Name</th>
                    <th>Image</th>
                    <th>Best</th>
                    <th>Actions</th>
                    <th>Updated at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)


                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $project->title }}</td>
                        @php
                            $project->img = str_replace('public/', 'storage/', $project->img);
                        @endphp
                        <td><img src="{{ asset("$project->img") }}" style="height: 50px; width:50px"></td>
                        <td>
                            @if ($project->best)
                                <span class="badge bg-success">Best</span>
                            @else
                                <span class="badge bg-secondary">Regular</span>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ url("dashboard/projects/edit/$project->id") }}"><i
                                    class="fas fa-user-edit"></i></a>
                            <a class="btn btn-danger" href="{{ url("dashboard/projects/delete/$project->id") }}"><i
                                    class="fas fa-trash"></i></a>

                            @if ($project->best)
                                <a class="btn btn-success" href="{{ url("dashboard/projects/toggle/$project->id") }}"><i
                                        class="fas fa-toggle-on"></i></a>
                            @else
                                <a class="btn btn-dark" href="{{ url("dashboard/projects/toggle/$project->id") }}"><i
                                        class="fas fa-toggle-off"></i></a>
                            @endif

                            <a class="btn btn-warning" href="{{ url("dashboard/project/images/$project->id") }}"><i
                                    class="fas fa-images"></i></a>
                        </td>


                        <td>{{ $project->updated_at->format('d M Y') }}</td>
                    </tr>


                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $projects->links() }}
        </div>
    </div>
    <!-- /.card-body -->

@endsection
