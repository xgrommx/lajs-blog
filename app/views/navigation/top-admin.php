<div class="container" ng-controller="NavigationController">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Another Blog</a>
	</div>
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li class="active"><a href="#home" ng-click="active='home'" ui-sref="postList">Home</a></li>
			<li><a href="#about" ng-click="active='about'">About</a></li>
			<li><a href="#about" ng-click="active='projects'">Projects</a></li>
			<li><a href="#contact" ng-click="active='contact'">Contact</a></li>
		</ul>

		<button type="button" class="btn btn-default navbar-btn pull-right" ng-click="logout()">Logout</button>

	</div><!-- /.nav-collapse -->
</div><!-- /.container -->