@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif


@if (session('canNotDelete'))
    <div class="alert alert-danger">
        {{ session('canNotDelete') }}
    </div>
@endif

