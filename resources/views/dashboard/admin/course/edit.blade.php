@extends('layouts.main')

@section('content')

    <div class="col-sm-9">

        <!-- CONTENT -->

        <a href="#"><strong><i class="fa fa-dashboard"></i> Course Admin</strong></a>
        <hr>

        <div class="row">
            <!-- center left-->
            <div class="col-md-12">

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><a data-toggle="collapse" href="#create">Edit an existing course</a></h4></div>
                        <div class="panel-collapse collapse in" id="create">
                            <div class="panel-body">
                                <small>
                                    Add content to the course - {{$course->name}}
                                </small>
                                {{--TODO allow adding and editing of pages via wysiwyg--}}
                                <hr>

                                {!! Form::open(['action' => 'AdminCourseController@store']) !!}

                                <div class="form-group">
                                    {!! Form::label('name', 'Name:', ['class'=>''] ) !!}
                                    {!! Form::text('name', '', ['class'=>'form-control', 'required']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('vendor_id', 'Vendor:' ) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('description', 'Short Description:' ) !!}
                                    {!! Form::textarea('description', null, ['rows'=>'5', 'placeholder'=>'Enter a short description about this course and what sort of training it provides', 'class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Create Training Course', ['class'=>'form-control btn btn-primary']) !!}
                                </div>



                                {!! Form::close() !!}
                            </div>
                        </div>

                        <!--/panel-body-->
                    </div>
                    <!--/panel-->
                </div>

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><a data-toggle="collapse" href="#table">View and edit existing vendors</a></h4></div>
                        <div class="panel-collapse collapse" id="table">
                            <div class="panel-body">

                                <small>
                                    View and manipulate training course records.
                                </small>

                                <hr>

                                <table class="table table-striped" id="vendors">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Vendor</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!--/col-->

        </div>
        <!--/row-->
    </div>

@endsection()

@section('footer-scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#vendors').DataTable();
        });
    </script>
@endsection()
