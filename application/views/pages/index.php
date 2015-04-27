<div id="site-container">
	<div class="container">
		<div id="site-container-row" class="row">
			<div id="index-title" class="col-md-8">
				<h1 class="color-w">欢迎来到逗比论坛</h1>
				<h2 class="color-w">这里有你想要的任何游戏</h2>
				<p class="color-w">逗比论坛，欢迎你的到来，欢迎加入逗比论坛</p>
				<p class="color-w">pc游戏，xbox游戏，ps游戏应有尽有</p>
			</div>
			<div class="col-md-4">
				<form id="navbar-form" action="/doubi/index.php/pages/register" method="post">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="请输入用户名" />
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="请输入邮箱" />
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="请输入密码" />
						<p class="help-block">请使用数字和字符组合的密码</p>
					</div>
					<div class="form-group">
						<button class="form-control btn btn-success">注册成为逗比</button>
						<p class="help-block">通过点击“注册成为逗比”,同意我们的服务条款和隐私政策。我们将送你偶尔账户相关的电子邮件。</p>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div id="body" class="clearfix">
	<div class="container">	
		<div class="row">

			<!-- 各类板块 -->
			<div class="col-md-8">

				<!-- pc游戏 -->
				<div id="pc-game" class="block-item">
					<h2><span class="fa fa-paragraph fa-3"></span>&nbsp;PC游戏</h2>
					<?php foreach ($boardOne as $p) {?>
						<div class="block-item-border clearfix">
							<div class="col-md-5">
								<div class="block-img">
									<span class="fa fa-user-secret fa-5x"></span>
								</div>
							</div>
							<div class="col-md-7">
								<div>
									<a class="block-item-a" href='/doubi/index.php/pages/post/<?php echo $p->id;?>'>
										<span><?php echo $p->title;?></span>
									</a>
								</div>
								<ul class="clearfix block-icon">
									<li>
										<span class="fa fa-comments"></span>
										<?php echo $p->comment_count;?>
									</li>
									<li>
										<span class="fa fa-search"></span>
										<?php echo $p->view_count;?>
									</li>
								</ul>
							</div>
						</div>
					<?php } ?>
				</div>
				
				<!-- xbox游戏 -->
				<div id="xbox-game" class="block-item">
					<h2><span class="fa fa-paragraph fa-3"></span>&nbsp;XBOX游戏</h2>
					<?php
						foreach ($boardTwo as $p) {
					?>
						<div class="block-item-border clearfix">
							<div class="col-md-5">
								<div class="block-img">
									<span class="fa fa-user-secret fa-5x"></span>
								</div>
							</div>
							<div class="col-md-7">
								<div>
									<a class="block-item-a" href='/doubi/index.php/pages/post/<?php echo $p->id;?>'>
										<span><?php echo $p->title?></span>
									</a>
								</div>
								<ul class="clearfix block-icon">
									<li>
										<span class="fa fa-comments"></span>
										<?php echo $p->comment_count;?>
									</li>
									<li>
										<span class="fa fa-search"></span>
										<?php echo $p->view_count;?>
									</li>
								</ul>
							</div>
						</div>
					<?php
						}
					?>
				</div>
				
				<!-- ps游戏 -->
				<div id="ps-game" class="block-item">
					<h2><span class="fa fa-paragraph fa-3"></span>&nbsp;PS游戏</h2>
					<?php
						foreach ($boardThree as $p) {
					?>
						<div class="block-item-border clearfix">
							<div class="col-md-5">
								<div class="block-img">
									<span class="fa fa-user-secret fa-5x"></span>
								</div>
							</div>
							<div class="col-md-7">
								<div>
									<a class="block-item-a" href='/doubi/index.php/pages/post/<?php echo $p->id;?>'>
										<span><?php echo $p->title?></span>
									</a>
								</div>
								<ul class="clearfix block-icon">
									<li>
										<span class="fa fa-comments"></span>
										<?php echo $p->comment_count;?>
									</li>
									<li>
										<span class="fa fa-search"></span>
										<?php echo $p->view_count;?>
									</li>
								</ul>
							</div>
						</div>
					<?php
						}
					?>
				</div>
			</div>
			
			<!-- 热门帖子 -->
			<div class="col-md-4">
				<h2 id="hot-post-title" class="padding-bottom-20"><span class="fa fa-slideshare"></span>&nbsp;热门话题</h2>
				<div id="hot-post">
					<?php foreach ($hot as $p) { ?>
						<div class="hot-post-block clearfix">
							<span class="fa fa-mars-double fa-2x hot-post-icon pull-left"></span>
							<a href='/doubi/index.php/pages/post/<?php echo $p->id;?>' class="pull-left">
								<span><?php echo $p->title?></span>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>