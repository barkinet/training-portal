@extends('layouts.main')

@section('content')

<div class="col-sm-9">

    <!-- CONTENT -->

    <a href="#"><strong><i class="fa fa-dashboard"></i> Vendor Admin</strong></a>
    <hr>

    <div class="row">
        <!-- center left-->
        <div class="col-md-12">

          <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><a data-toggle="collapse" href="#create">Add a vendor</a></h4></div>
                    <div class="panel-collapse collapse" id="create">
                      <div class="panel-body">
                        <small>
                          Enter a name, website link, and short description for a new Vendor you wish to add.
                          <br> <strong>NOTE: The vendor name should be unique</strong>
                        </small>

                        <hr>

                        {!! Form::open(['action' => 'AdminVendorController@store']) !!}

                        <div class="form-group">
                          {!! Form::label('name', 'Name:', ['class'=>''] ) !!}
                          {!! Form::text('name', '', ['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                          {!! Form::label('link', 'Website Link:' ) !!}
                          {!! Form::url('link', '', ['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                          {!! Form::label('description', 'Short Description:' ) !!}
                          {!! Form::textarea('description', null, ['rows'=>'5', 'placeholder'=>'Enter a short description about what sort of products this vendor provides', 'class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                          {!! Form::submit('Add Vendor', ['class'=>'form-control btn btn-primary']) !!}
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
                          View and manipulate Vendor records
                        </small>

                        <hr>

                        <table class="table table-striped" id="vendors">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Link</th>
                              <th>Description</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @if($vendors)
                              @foreach($vendors as $vendor)
                                <tr>
                                  <td>{{$vendor->name}}</td>
                                  <td><a href="{{$vendor->link}}">{{$vendor->link}}</a></td>
                                  <td>{{$vendor->description}}</td>
                                  <td>{{-- TODO add actions and editing --}}</td>
                                </tr>
                              @endforeach
                            @endif()
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
