@extends("admin.layout")


@section('main')

@include('admin.inc.errors')
<div class=" mt-3 card">
<form method="post" action="{{ url("dashboard/news/edit/$latests->id") }}" class="form-horizontal" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input value="{{$latests->title}}" type="text" name="title" class="form-control" id="name"
                    placeholder="Enter a news name">
            </div>
        </div>
        <div class="form-group row">
            <label for="desc" class="col-sm-2 col-form-label">description</label>
            <div class="col-sm-10">
                <textarea  name="desc" id="desc" cols="100" rows="10"
                    placeholder="Enter news details">{{$latests->desc}}</textarea>
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
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </div>
</form>
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
