<div class="panel panel-default " ng-controller="LoginController">
	<div class="panel-heading">
		<h3 class="panel-title">Login</h3>
	</div>
	<div class="panel-body">
		<form novalidate class="form-horizontal" role="form">
			<div class="form-group">
				<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
				<div class="col-lg-10">
					<input type="email" class="form-control" placeholder="Email" ng-model="user.email">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword1" class="col-lg-2 control-label">Password</label>
				<div class="col-lg-10">
					<input type="password" class="form-control" placeholder="Password" ng-model="user.password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
					<button type="submit" class="btn btn-default" ng-click="login(user)">Sign in</button>
				</div>
			</div>
		</form>

	</div>
</div>