@extends("admin.layout")

@section('main')
<h2>Mirage Boared</h2>
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
        <a class="btn btn-primary" href=""><i class="fas fa-user-edit"></i></a>
        <a class="btn btn-danger" href=""> <i class="fas fa-trash"></i></a>
      </td>

    </tr>
    @endforeach
  
  </tbody>

  
</table>
@endsection