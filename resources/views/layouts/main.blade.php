<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Training Portal</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://use.fontawesome.com/a6faf19577.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="/css/styles.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.js"></script>

	</head>
	<body>
<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Training Portal</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="fa fa-user"></i> {{Auth::user()->name}} <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-sliders"></i>  My Profile</a></li>
												<li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); $('#logout-form').submit();">
													<i class="fa fa-sign-out"></i> Logout</a></li>

													<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
													</form>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <!-- Left column -->
            <a href="#"><strong><i class="fa fa-wrench"></i> Admin</strong></a>
            <hr>
            <ul class="nav nav-stacked">
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Tasks <i class="fa fa-chevron-right pull-right"></i></a>
                    <ul class="nav nav-stacked collapse" id="userMenu">
                        <!-- <li class="active"> <a href="#"><i class="fa fa-home"></i> Home</a></li> -->
                        <li><a href="{{route('invite.index')}}"><i class="fa fa-user-plus"></i> Invite Users</a></li>
                        <li><a href="#"><i class="fa fa-building"></i> Departments</a></li>
                        <li><a href="#"><i class="fa fa-id-badge"></i> Roles</a></li>
                        <li><a href="#"><i class="fa fa-user"></i> Current Users</a></li>
                        <!-- <li><a href="#"><i class="fa fa-flag"></i> Transactions</a></li>
                        <li><a href="#"><i class="fa fa-exclamation-sign"></i> Rules</a></li>
                        <li><a href="#"><i class="fa fa-off"></i> Logout</a></li> -->
                    </ul>
                </li>
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2"> Reports <i class="fa fa-chevron-right pull-right"></i></a>

                    <ul class="nav nav-stacked collapse" id="menu2">
                        <li><a href="#">Information &amp; Stats</a>
                        </li>
                        <li><a href="#">Views</a>
                        </li>
                        <li><a href="#">Requests</a>
                        </li>
                        <li><a href="#">Timetable</a>
                        </li>
                        <li><a href="#">Alerts</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">
                    <a href="#" data-toggle="collapse" data-target="#menu3"> Create <i class="fa fa-chevron-right pull-right"></i></a>
                    <ul class="nav nav-stacked collapse" id="menu3">
                        <li><a href="{{route('vendor.index')}}"><i class="glyphicon glyphicon-circle"></i> Vendor</a></li>
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Training</a></li>
												<li><a href=""><i class="glyphicon glyphicon-circle"></i> Exam</a></li>
												<li><a href=""><i class="glyphicon glyphicon-circle"></i> Notice</a></li>
                    </ul>
                </li>
            </ul>

            <hr>

            <a href="#"><strong><i class="fa fa-book"></i> Moderator</strong></a>

            <hr>

            <ul class="nav nav-pills nav-stacked">
                <li class="nav-header"></li>

								<li class="nav-header">
										<a href="#" data-toggle="collapse" data-target="#menu4"> Recent Additions <i class="fa fa-chevron-right pull-right"></i></a>
										<ul class="nav nav-stacked collapse" id="menu4">
												<li><a href=""><i class="glyphicon glyphicon-circle"></i> Latest entry</a></li>
												<li><a href=""><i class="glyphicon glyphicon-circle"></i> Latest Entry</a></li>
										</ul>
								</li>


                <li><a href="#"><i class="fa fa-users"></i> Vendors</a></li>
                <li><a href="#"><i class="fa fa-file-text"></i> Training</a></li>
                <li><a href="#"><i class="fa fa-frown-o"></i> Exams</a></li>
            </ul>

						<hr>

						<a href="#"><strong><i class="fa fa-book"></i> Training</strong></a>

            <hr>

            <ul class="nav nav-pills nav-stacked">
                <li class="nav-header"></li>

								<li class="nav-header">
										<a href="#" data-toggle="collapse" data-target="#menu4"> Recent Additions <i class="fa fa-chevron-right pull-right"></i></a>
										<ul class="nav nav-stacked collapse" id="menu4">
												<li><a href=""><i class="glyphicon glyphicon-circle"></i> Latest entry</a></li>
												<li><a href=""><i class="glyphicon glyphicon-circle"></i> Latest Entry</a></li>
										</ul>
								</li>


                <li><a href="#"><i class="fa fa-users"></i> Vendors</a></li>
                <li><a href="#"><i class="fa fa-file-text"></i> Training</a></li>
                <li><a href="#"><i class="fa fa-frown-o"></i> Exams</a></li>
            </ul>

        </div>
        <!-- /col-3 -->
        <!-- CONTENT -->

        @yield('content')

        <!--/CONTENT-->


    </div>
</div>
<!-- /Main -->

<footer class="text-center">All Aboard.</footer>

<div class="modal" id="addWidgetModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Widget</h4>
            </div>
            <div class="modal-body">
                <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dalog -->
</div>
<!-- /.modal -->
	<!-- script references -->

		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/scripts.js"></script>

		@yield('footer-scripts')

	</body>
</html>
