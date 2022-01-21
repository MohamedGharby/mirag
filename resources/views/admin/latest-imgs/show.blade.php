@extends('admin.layout')

@section('main')
    <div class="card-header d-flex align-items-center justify-content-between">
        <h2 class="card-title">All {{ $latest->title }} images</h2>

        <div class="card-tools ">
            @include('admin.inc.errors')
            <form action="{{ url('dashboard/news/images') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group ">
                    <label for="img">New Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="name" type="file" class="custom-file-input" id="img">
                            <label id="imgName" class="custom-file-label" for="img"></label>
                        </div>
                    </div>
                    <input type="hidden" name="latest_id" value="{{ $latest->id }}">
                </div>
                <div class="input-group input-group-sm" style="width: 150px;">
                    <button type="submit" class="btn btn-success">Add New Image</button>
                </div>
            </form>

        </div>
    </div>
    @include('admin.inc.message')
    <div class="row p-3">

        @foreach ($imgs as $img)

            @php
                $img->name = str_replace('public/', 'storage/', $img->name);
            @endphp
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img style="height: 300px" src="{{ asset("$img->name") }}" class="card-img-top">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <form  id="delete_form" action="{{url("dashboard/news/images/$img->id")}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button  type="submit" class="btn btn-danger px-3 mx-2 form">Delete</button>
                        </form>
                        <a href="#" class="btn btn-primary px-3 mx-2">Make main</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $imgs->links() }}
    </div>
@endsection

@section('scripts')
    <script>
        $('input[type="file"]').change(function(e) {
            let fileName = e.target.files[0].name
            $("#imgName").text(fileName)
        })
    </script>
    <script >

    </script>
@endsection
