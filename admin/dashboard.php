<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Dashboard</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
		<link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
		<link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
		<link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
		<link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
		<link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body class="skin-blue">
		
		<?php include('includes/header.php'); ?>

		<div class="wrapper row-offcanvas row-offcanvas-left">
			
			<?php include('includes/sidebar.php'); ?>

			<aside class="right-side">
				<section class="content-header">
					<h1>Dashboard</h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
						<li class="active">Dashboard</li>
					</ol>
				</section>

				<section class="content">
					<div class="row">
						<div class="col-lg-3 col-xs-6">
							<div class="small-box bg-aqua">
								<div class="inner">
									<h3>150</h3>
									<p>New Orders</p>
								</div>
								<div class="icon"><i class="ion ion-bag"></i></div>
								<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="row"><div class="col-xs-12 connectedSortable"></div></div>
				</section>
			</aside>
		</div>



		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
		<script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
		<script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
		<script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
		<script src="js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
		<script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
		<script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
		<script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
		<script src="js/AdminLTE/app.js" type="text/javascript"></script>
		<script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>     
		<script src="js/AdminLTE/demo.js" type="text/javascript"></script>

	</body>
</html>