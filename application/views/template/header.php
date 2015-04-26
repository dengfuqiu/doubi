<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>逗比论坛</title>
	<link rel="stylesheet" href="/doubi/public/css/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/doubi/public/css/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="/doubi/public/css/header.css">
	<link rel="stylesheet" href="/doubi/public/css/index.css">
	<link rel="stylesheet" href="/doubi/public/css/public.css">
	<link rel="stylesheet" href="/doubi/public/css/footer.css">
</head>
<script src="/doubi/public/js/jquery/jquery-1.11.2.min.js"></script>
<script src="/doubi/public/js/bootstrap.min.js"></script>
<script src="/doubi/public/js/jquery.validate.js"></script>
<script src="/doubi/public/js/main.js"></script>
<body>
	<nav class="navbar navbar-default" id="nav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				    <span class="sr-only">Toggle navigation</span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
			    </button>
			    <a class="navbar-brand" id="navbar-brand" href="#">逗比游戏论坛</a>
			</div>
			<form class="navbar-form navbar-left" role="search">
		        <div class="form-group">
		        	<input type="text" class="form-control" id="navbar-input" placeholder="在论坛中搜索">
		        </div>
	        </form>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<div class="navbar-right">
					<ul class="nav navbar-nav" id="navbar-ul">
						<li>
							<a href="/doubi/index.php/pages/index">首页</a>
						</li>
						<li>
							<a href="">PS游戏</a>
						</li>
						<li>
							<a href="">XBOX游戏</a>
						</li>
						<li>
							<a href="">PC游戏</a>
						</li>
						<li>
							<a href=""></a>
						</li>
					</ul>

					<?php
						if(!isset($this->session->userdata['id'])){
					?>	
							<a href="/doubi/index.php/pages/register" class="btn btn-success navbar-btn">注册</a>
							<a href="/doubi/index.php/pages/login" class="btn btn-default navbar-btn">登录</a>
					<?php
						}else{
					?>
							<ul class="nav navbar-nav">
								<li id="dropdown-menu" class="dropdown">
							        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							        	欢迎你，<?php echo $this->session->userdata['username'];?>
							        	<span class="caret"></span>
						        	</a>
									<ul class="dropdown-menu" role="menu">
										<li>
											<a href="#">个人中心</a>
										</li>
										<li>
											<a href="/doubi/index.php/pages/publish">发布新话题</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="/doubi/index.php/user/logout">退出</a>
										</li>
									</ul>
						        </li>
							</ul>
					<?php
						}
					?>	
				</div>
			</div>
		</div>
	</nav>