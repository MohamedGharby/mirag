@extends("admin.layout")


@section('main')
    <div class="row p-5">
        <div class="col-md-6">
            <h4>Name :</h4>
            <p>{{ $message->name }}</p>
        </div>
        <div class="col-md-6">
            <h4>Email :</h4>
            <p>{{ $message->email }}</p>
        </div>
        <div class="col-12 p-3 border">
            <p>{{ $message->body }}</p>
        </div>
        <a href="{{ url("dashboard/messages") }}">Back to all Messages -></a>
    </div>
@endsection