<!doctype html>
<html lang="en" ng-app="BlogModule">

	<head>
		<link href="<?php echo URL::asset('assets/css/app.css'); ?>" media="all" type="text/css" rel="stylesheet">
		<link href="<?php echo URL::asset('assets/css/bootstrap.min.css'); ?>" media="all" type="text/css" rel="stylesheet">

		<title>flakron.net</title>
	</head>

	<body>

		<div class="navbar navbar-fixed-top navbar-inverse" role="navigation" ui-view="top-nav">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">flakron.net</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#home" ng-click="active='home'" ui-sref="postList">Home</a></li>
						<li><a href="#about" ng-click="active='about'">About</a></li>
						<li><a href="#about" ng-click="active='projects'">Projects</a></li>
						<li><a href="#contact" ng-click="active='contact'">Contact</a></li>
					</ul>

					<button type="button" class="btn btn-default navbar-btn pull-right" ui-sref="login">Sign in</button>

				</div><!-- /.nav-collapse -->
			</div><!-- /.container -->
		</div><!-- /.navbar -->

		<div class="container">

			<div class="row row-offcanvas row-offcanvas-right">

				<div class="col-xs-12 col-sm-9" ui-view="content">

				</div><!--/span-->

				<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
					<div class="well sidebar-nav" ui-view="side-navigation">
						<ul class="nav">
							<li>Sidebar</li>
							<li class="active"><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li>Sidebar</li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li>Sidebar</li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
						</ul>
					</div><!--/.well -->
				</div><!--/span-->
			</div><!--/row-->

			<hr>

			<footer>
				<p>&copy; Flakron Bytyqi 2013</p>
			</footer>

		</div><!--/.container-->

        <script src="<?php echo URL::asset('assets/js/lib/jquery.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo URL::asset('assets/js/lib/bootstrap.min.js'); ?>" type="text/javascript"></script>

		<script src="<?php echo URL::asset('assets/js/lib/angular.min.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo URL::asset('assets/js/lib/angular/angular-ui-router.min.js') ?>" type="text/javascript"></script>

		<script src="<?php echo URL::asset('assets/js/app/app.js'); ?>" type="text/javascript"></script>

		<script src="<?php echo URL::asset('assets/js/app/controllers/PostControllers.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo URL::asset('assets/js/app/controllers/LoginController.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo URL::asset('assets/js/app/controllers/NavigationController.js'); ?>" type="text/javascript"></script>

		<script src="<?php echo URL::asset('assets/js/app/services/PostService.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo URL::asset('assets/js/app/services/UserService.js'); ?>" type="text/javascript"></script>

	</body>

</html>