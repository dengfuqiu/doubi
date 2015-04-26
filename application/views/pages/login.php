<div id="login">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div id="login-form">
					<div id="login-form-header">
						<h1>登录</h1>
					</div>
					<div id="login-form-body">
						<form id="form-login" action="/doubi/index.php/user/login" method="post">
							<div class="form-group">
								<label for="username">用户名：</label>
								<input type="text" class="form-control" id="username" name="username" />
							</div>
							<div class="form-group">
								<label for="pwd">密码：(<a href="#">忘记密码</a>)</label>
								<input type="password" class="form-control" id="pwd" name="pwd" />
							</div>
							<button type="submit" class="btn btn-default">登录</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>
