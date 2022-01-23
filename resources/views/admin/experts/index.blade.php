@extends('admin.layout')

@section('main')

<div class="card-header d-flex align-items-center justify-content-between">
    <h2 class="card-title">All Experts</h2>

    <div class="card-tools ">
            <div class="input-group input-group-sm" style="width: 150px;">
                <button type="submit" class="btn btn-success">Add New Expert</button>
            </div>
        </form>

    </div>
</div>

    <div class="container-fluid">

        <div class="row mt-4">
            @foreach ($experts as $expert)
                <div class="col-md-4">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">

                                @php
                                    $expert->img = str_replace('public/', 'storage/', $expert->img);
                                @endphp
                                <img class="profile-user-img img-fluid img-circle" src="{{ asset("$expert->img") }}"
                                    alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{ $expert->name }}</h3>

                            <p class="text-muted text-center">{{ $expert->title }}</p>

                            <ul class="list-group list-group-unbordered flex-row justify-content-between mb-3">
                                @foreach ($expert->socialMedia as $social)

                                    <li class="list-group-item">
                                        <a href="{{ $social->facebook }}"><i class="fab fa-facebook fa-2x "></i></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ $social->instagram }}"><i
                                                class="fab fa-instagram-square fa-2x"></i></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ $social->gmail }}"><i class="fas fa-mail-bulk fa-2x"></i></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ $social->linkedin }}"><i class="fab fa-linkedin fa-2x"></i></a>
                                    </li>
                                @endforeach
                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b>Edit</b></a>
                            <a href="#" class="btn btn-danger btn-block"><b>Delete</b></a>
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

@endsection
