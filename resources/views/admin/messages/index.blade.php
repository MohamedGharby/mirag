@extends("admin.layout")


@section("main")

<table class="table">
    <h3>All messages</h3>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">message</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>

  <tbody>
    @foreach($messages as $message)

    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$message->name}}</td>
      <td>{{$message->email}}</td>
      <td>{{$message->body}}</td>
      <td>
        <a class="btn btn-danger" href="{{ url("dashboard/messages/delete/$message->id") }}"> <i class="fas fa-trash"></i></a>
      </td>

    </tr>
    @endforeach

  </tbody>


</table>

@endsection