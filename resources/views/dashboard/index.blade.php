@extends('layouts.main')

@section('content')

<div class="col-sm-9">

    <!-- CONTENT -->

    <a href="#"><strong><i class="fa fa-dashboard"></i> My Dashboard</strong></a>
    <hr>

    <div class="row">
        <!-- center left-->
        <div class="col-md-12">
            <div class="well">Training Exams to complete <span class="badge pull-right">3</span></div>

            <hr>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Notices</h4></div>
                <div class="panel-body">

                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                  dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                  anim id est laborum.

                </div>
                <!--/panel-body-->
            </div>
            <!--/panel-->


            <hr>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>New Content</h4></div>
                <div class="panel-body">
                  <div class="row">
                      <div class="col-md-12">
                          <ul class="list-group">
                              <li class="list-group-item"><a href="#"><i class="fa fa-file-text"></i> <small>(3 mins ago)</small> The exciting world of Hisense Fridges..</a></li>
                              <li class="list-group-item"><a href="#"><i class="fa fa-file-text"></i> <small>(1 hour ago)</small> TCL and you. What you need to know to sell TVs real good like..</a></li>
                              <li class="list-group-item"><a href="#"><i class="fa fa-frown-o"></i> <small>(2 hrs ago)</small> Paul. That document you posted yesterday doesn't seem to contain the over..</a></li>
                              <li class="list-group-item"><a href="#"><i class="fa fa-frown-o"></i> <small>(4 hrs ago)</small> The map service on c243 is down today. I will be fixing the..</a></li>
                              <li class="list-group-item"><a href="#"><i class="fa fa-frown-o"></i> <small>(yesterday)</small> I posted a new document that shows how to install the services layer..</a></li>
                              <li class="list-group-item"><a href="#"><i class="fa fa-file-text"></i> <small>(yesterday)</small> ..</a></li>
                          </ul>
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
