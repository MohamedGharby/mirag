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

@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif
