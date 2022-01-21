@extends("admin.layout")

@section('main')
<h2>Mirage Boared</h2>

<div>
  <div class="card-header">
    <div class="card-tools">
      <div class="input-group input-group-sm" style="width: 150px;">
        <button type="button" data-toggle="modal" data-target="#modal-xl" class="btn btn-success">Add new user</button>
      </div>
    </div>
  </div>
</div>
@include('admin.inc.message')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>

  <tbody>
    @foreach($users as $person)

    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$person->name}}</td>
      <td>{{$person->email}}</td>
      @foreach ($roles as $role)
      @if($role->id == $person->role_id)
      <td>{{$role->name}}</td>
      @endif
      @endforeach
      <td>
        <button type="button" class="btn btn-primary edit-btn" data-id="{{$person->id}}" data-name="{{$person->name}}" data-email="{{$person->email}}" data-toggle="modal" data-target="#modal-xl-edit"><i class="fas fa-user-edit"></i></button>
        <a class="btn btn-danger" href="{{ url("dashboard/user/delete/$person->id")}}"> <i class="fas fa-trash"></i></a>
      </td>

    </tr>
    @endforeach

  </tbody>


</table>

<div class="d-flex justify-content-center">
    {{ $users->links() }}
</div>

<div class="modal fade show" id="modal-xl" style="display: none; padding-right: 16px;" aria-modal="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Register New User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        @include('admin.inc.errors')
        <form method="POST" action="{{url('dashboard/user/add')}}" class="form-horizontal">
          @csrf
          <div class="card-body">
            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name">
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-primary">Register</button>
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
        <h4 class="modal-title">Edit User </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        @include('admin.inc.errors')
        <form method="POST" action="{{url('dashboard/user/edit')}}" class="form-horizontal">
          @csrf
          <div class="card-body">
            <div class="form-group row">
              <input type="hidden" name="id" id="edit-form-id">
              <label for="name" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="edit-form-name" placeholder="Enter Your Name">
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="edit-form-email" placeholder="Email">
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
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


@endsection


@section("scripts")

<script>

  $(".edit-btn").click(function(){
    let id = $(this).attr("data-id")
    let name = $(this).attr("data-name")
    let email = $(this).attr("data-email")

    $("#edit-form-id").val(id)
    $("#edit-form-name").val(name)
    $("#edit-form-email").val(email)
  })
</script>

@endsection
