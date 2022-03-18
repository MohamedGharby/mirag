@extends('admin.layout')

@section('main')

    <div class="card-header d-flex align-items-center justify-content-between">
        <h2 class="card-title">All Experts</h2>

        <div class="card-tools ">
            <div class="input-group input-group-sm" style="width: 150px;">
                <button data-target="#modal-xl" data-toggle="modal" type="submit" class="btn btn-success">Add New
                    Expert</button>
            </div>
            </form>

        </div>
    </div>

    <div class="container-fluid">
        @include('admin.inc.errors')
        @include('admin.inc.message')
        <div class="row mt-4">
            @foreach ($experts as $expert)
                <div class="col-md-4">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="{{ asset("uploads/experts/$expert->img") }}"alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{ $expert->name }}</h3>

                            <p class="text-muted text-center">{{ $expert->title }}</p>

                            <ul class="list-group list-group-unbordered flex-row justify-content-center">
                                @foreach ($expert->socialMedia as $social)
                                    @if ($social->facebook)

                                    <li class="list-group-item mx-2">
                                        <a href="{{ $social->facebook }}" target="_blank"><i class="fab fa-facebook fa-2x  "></i></a>
                                    </li>
                                    @endif

                                    @if ($social->instagram)

                                    <li class="list-group-item mx-2">
                                        <a href="{{ $social->instagram }} " target="_blank"><i
                                                class="fab fa-instagram-square fa-2x"></i></a>
                                    </li>
                                    @endif

                                    @if ($social->gmail)

                                    <li class="list-group-item mx-2">
                                        <a href="{{ $social->gmail }}" target="_blank"><i class="fas fa-mail-bulk fa-2x"></i></a>
                                    </li>
                                    @endif

                                    @if ($social->linkedin)

                                    <li class="list-group-item mx-2">
                                        <a href="{{ $social->linkedin }}" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
                                    </li>
                                    @endif

                                    @if ($social->twitter)

                                    <li class="list-group-item mx-2">
                                        <a href="{{ $social->twitter }}" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
                                    </li>
                                    @endif
                                @endforeach
                            </ul>


                            <div class="d-flex justify-content-around">
                                <button data-image="{{ $expert->img }}" data-id="{{ $expert->id }}"
                                    data-name="{{ $expert->name }}" data-title="{{ $expert->title }}"
                                    data-target="#modal-xl-edit" data-toggle="modal" type="button"
                                    class="btn btn-success edit-btn">Edit Expert</button>
                                <form method="POST" action="{{ url("dashboard/experts/delete/$expert->id") }}">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger ">Delete</button>
                                </form>
                                <button  data-expert-id="{{ $expert->getExpertId($expert->id) }}" data-toggle= "modal" data-target="#modal-xl-social" type="button" class="btn btn-primary social-btn">add socials</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $experts->links() }}
    </div>


    <div class="modal fade show" id="modal-xl" style="display: none; padding-right: 16px;" aria-modal="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Expert</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('admin.inc.errors')
                    <form method="POST" action="{{ url('dashboard/experts/add') }}" class="form-horizontal"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Expert Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Enter Expert Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="email"
                                        placeholder="Enter expert Title">
                                </div>
                            </div>

                            <div class="form-group d-flex">
                                <label for="img"> Image</label>
                                <div class="input-group w-75 ml-auto">
                                    <div class="custom-file">
                                        <input name="img" type="file" class="custom-file-input" id="img">
                                        <label id="imgName" class="custom-file-label" for="img"></label>
                                    </div>

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


    <div class="modal fade show" id="modal-xl-edit" style="display: none; padding-right: 16px;" aria-modal="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Expert </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="{{ url('dashboard/experts/edit') }}" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="card-body">
                            <div class="form-group row">
                                <input type="hidden" name="id" id="edit-form-id">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="edit-form-name"
                                        placeholder="Enter Expert Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Tilte</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="edit-form-title"
                                        placeholder="Enter title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Facebook</label>
                                <div class="col-sm-10">
                                    <input type="text" name="facebook" class="form-control" id="password"
                                        placeholder="Enter facebook link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Instagram</label>
                                <div class="col-sm-10">
                                    <input type="text" name="instagram" class="form-control" id="password"
                                        placeholder="Enter instagram link">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Gmail</label>
                                <div class="col-sm-10">
                                    <input type="text" name="gmail" class="form-control" id="password"
                                        placeholder="Enter gmail link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Twitter</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Twitter" class="form-control" id="password"
                                        placeholder="Enter twitter link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Linkedin</label>
                                <div class="col-sm-10">
                                    <input type="text" name="linkedin" class="form-control" id="password"
                                        placeholder="Enter Linkedin link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="img"> Image</label>
                                <div class="input-group w-75 ml-auto">
                                    <div class="custom-file">
                                        <input name="img" type="file" class="custom-file-input" id="img">
                                        <label id="imgName2" class="custom-file-label" for="img"></label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                </div>
                </form>
            </div>

            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade show" id="modal-xl-social" style="display: none; padding-right: 16px;" aria-modal="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add socials</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('admin.inc.errors')
                    <form method="POST" action="{{ url('dashboard/experts/socials') }}" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                            <input id="social" type="hidden" name="expert_id" >
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Facebook</label>
                                <div class="col-sm-10">
                                    <input type="text" name="facebook" class="form-control" id="password"
                                        placeholder="Enter facebook link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Instagram</label>
                                <div class="col-sm-10">
                                    <input type="text" name="instagram" class="form-control" id="password"
                                        placeholder="Enter instagram link">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Gmail</label>
                                <div class="col-sm-10">
                                    <input type="text" name="gmail" class="form-control" id="password"
                                        placeholder="Enter gmail link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Twitter</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Twitter" class="form-control" id="password"
                                        placeholder="Enter twitter link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Linkedin</label>
                                <div class="col-sm-10">
                                    <input type="text" name="linkedin" class="form-control" id="password"
                                        placeholder="Enter Linkedin link">
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
    <script>
        $('input[type="file"]').change(function(e) {
            let fileName = e.target.files[0].name
            $("#imgName2").text(fileName)
        })
    </script>


    <script>
        $(".edit-btn").click(function() {
            let id = $(this).attr("data-id")
            let name = $(this).attr("data-name")
            let title = $(this).attr("data-title")

            $("#edit-form-id").val(id)
            $("#edit-form-name").val(name)
            $("#edit-form-title").val(title)

        })


        $(".social-btn").click(function() {
            let id = $(this).attr("data-expert-id")
             console.log(id)
            $("#social").val(id)
        })
    </script>
@endsection
