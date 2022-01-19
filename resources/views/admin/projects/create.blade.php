@extends('admin.layout')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" integrity="sha512-3JRrEUwaCkFUBLK1N8HehwQgu8e23jTH4np5NHOmQOobuC4ROQxFwFgBLTnhcnQRMs84muMh0PnnwXlPq5MGjg==" crossorigin="anonymous" />
@endsection

@section('main')
    
        <div class="card-header bg-primary">
            <h3 class="card-title">Add New Project</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @include('admin.inc.errors')
        @include('admin.inc.message')
        <form method="POST" action="{{ url("dashboard/projects") }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Project Name</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Enter project name">
                </div>
                <div class="form-group">
                    <label for="client">Client</label>
                    <input name="client" type="text" class="form-control" id="client" placeholder="Enter client name">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input name="location" type="text" class="form-control" id="location" placeholder="Enter project location">
                </div>

                <div class="form-group">
                    <label for="surface_area">Surface area</label>
                    <input name="surface_area" type="text" class="form-control" id="surface_area" placeholder="Enter project Surface area">
                </div>

                <div class="form-group">
                    <label for="year">Year</label>
                    <div class="input-group date" id="datetimepicker11" data-target-input="nearest">
                        <input name="year" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker11"/>
                        <div class="input-group-append" data-target="#datetimepicker11" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Project Description</label>
                    <textarea name="desc" class="form-control" rows="10" placeholder="Enter description..."></textarea>
                </div>
                
                
                <div class="form-group">
                    <label for="img">Main Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="img" type="file" class="custom-file-input" id="img">
                            <label id="imgName" class="custom-file-label" for="img"></label>
                        </div>
                        
                    </div>
                </div>
                <div class="form-check">
                    <input name="best" type="checkbox" class="form-check-input" id="best">
                    <label class="form-check-label" for="best">Best</label>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    
@endsection


@section('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js" integrity="sha512-k6/Bkb8Fxf/c1Tkyl39yJwcOZ1P4cRrJu77p83zJjN2Z55prbFHxPs9vN7q3l3+tSMGPDdoH51AEU8Vgo1cgAA==" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker11').datetimepicker({
            viewMode: 'years',
            format: 'YYYY'
        });
    });
</script>

<script>
    $('input[type="file"]').change(function(e){
        let fileName = e.target.files[0].name
        $("#imgName").text(fileName)
    })
</script>

@endsection