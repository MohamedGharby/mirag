@extends('admin.layout')

@section("main")

<h2>All {{$company->name}} Investmentts</h2>

<div>
  <div class="card-header">
    <div class="card-tools">
      <div class="input-group input-group-sm" style="width: 150px;">
        <button id="add-btn" data-compId="{{$company->id}}" type="button" data-toggle="modal" data-target="#modal-xl" class="btn btn-success">Add new invest</button>
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
      <th scope="col">Actions</th>
    </tr>
  </thead>

  <tbody>
    @foreach($invests as $invest)


    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$invest->project_name}}</td>
      <td>
        <button type="button" class="btn btn-primary edit-btn" data-desc="{{$invest->desc}}" data-id="{{$invest->id}}" data-name="{{$invest->project_name}}"  data-toggle="modal" data-target="#modal-xl-edit"><i class="fas fa-user-edit"></i></button>
        <a class="btn btn-danger" href="{{ url("dashboard/investments/delete/$invest->id")}}"> <i class="fas fa-trash"></i></a>
        <a href="" class="btn btn-success"><i class="fas fa-images"></i></a>
      </td>

    </tr>
    @endforeach

  </tbody>


</table>

<div class="d-flex justify-content-center">
    {{ $invests->links() }}
</div>

<div class="modal fade show" id="modal-xl" style="display: none; padding-right: 16px;" aria-modal="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add New investment</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        @include('admin.inc.errors')
        <form method="POST" action="{{url('dashboard/investments/add')}}" class="form-horizontal">
          @csrf
          <div class="card-body">
            <div class="form-group row">
                <input id="add-form-id" type="hidden" name="company_id">
              <label for="name" class="col-sm-2 col-form-label">project Name</label>
              <div class="col-sm-10">
                <input type="text" name="project_name" class="form-control" id="name" placeholder="Enter the project Name">
              </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">project description</label>
                <div class="col-sm-10">
                  <textarea name="desc" id="" cols="120" rows="10" placeholder="enter description"></textarea>
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
        <h4 class="modal-title">Edit Investment </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        @include('admin.inc.errors')
        <form method="POST" action="{{url('dashboard/investments/edit')}}" class="form-horizontal">
            @method("PUT")
          @csrf
          <div class="card-body">
            <div class="form-group row">
              <input type="hidden" name="id" id="edit-form-id">
              <label for="name" class="col-sm-2 col-form-label">project Name</label>
              <div class="col-sm-10">
                <input type="text" name="project_name" class="form-control" id="edit-form-name" placeholder="Enter your company name">
              </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">project description</label>
                <div class="col-sm-10">
                  <textarea name="desc" id="edit-form-desc" cols="120" rows="10" placeholder="enter description"></textarea>
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
    let desc = $(this).attr("data-desc")
    console.log(desc);

    $("#edit-form-id").val(id)
    $("#edit-form-name").val(name)
    $("#edit-form-desc").val(desc)
  })
  $("#add-btn").click(function(){
      let id = $(this).attr("data-compId")
      $("#add-form-id").val(id)
  })
</script>

@endsection
