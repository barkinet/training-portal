@extends('layouts.main')

@section('content')

<div class="col-sm-9">

    <!-- CONTENT -->

    <a href="#"><strong><i class="fa fa-dashboard"></i> Invite New User</strong></a>
    <hr>

    <div class="row">
        <!-- center left-->
        <div class="col-md-12">

          <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><a data-toggle="collapse" href="#single">Send a single invite</a></h4></div>
                    <div class="panel-collapse collapse" id="single">
                      <div class="panel-body">
                        <small>
                          Enter a name and email address which you wish to send an invitation to.
                          Your should also assign a department and role at this point to make things
                          easier later on.
                        </small>

                        <hr>

                        {!! Form::open(['action' => 'UserInviteController@create']) !!}

                        <div class="form-group">
                          {!! Form::label('name', 'Name:', ['class'=>''] ) !!}
                          {!! Form::text('name', '', ['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                          {!! Form::label('email', 'E-Mail Address:' ) !!}
                          {!! Form::email('email', '', ['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                          {!! Form::label('role_id', 'Role:' ) !!}
                          {!! Form::select('role_id', $roles, 4, ['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                          {!! Form::label('department_id', 'Department:' ) !!}
                          {!! Form::select('department_id', $departments, null, ['placeholder'=>'Select', 'class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                          {!! Form::label('message', 'Message:' ) !!}
                          {!! Form::textarea('message', null, ['placeholder'=>'Enter a message to include in the invitation (optional) ...', 'class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                          {!! Form::submit('Send Invitation', ['class'=>'form-control btn btn-primary']) !!}
                        </div>



                        {!! Form::close() !!}
                      </div>
                    </div>

                <!--/panel-body-->
            </div>
            <!--/panel-->
          </div>

          <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><a data-toggle="collapse" href="#import">Bulk invite new users from CSV</a></h4></div>
                    <div class="panel-collapse collapse" id="import">
                      <div class="panel-body">

                        <small>
                          Select a CSV which contains the users you wish to invite.
                          The CSV fields should be as follows: name, email, department.
                          All users imported by this method will be assigned basic <em>User Level</em>
                          access for security reasons.
                        </small>

                        <hr>

                        {!! Form::open(['action'=>'UserInviteController@import']) !!}

                        <div class="form-group">
                          <div class="input-group">
                            <label class="input-group-btn">
                              <span class="btn btn-primary">
                                  Browse&hellip; <input type="file" style="display: none;">
                              </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                          </div>
                        </div>



                        <div class="form-group">
                          {!! Form::submit('Send Invitations', ['class'=>'form-control btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}

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
