<div id="page-public">

	<!-- 帖子封面图 -->
	<div class="page-header-img border-bottom">
		<?php
			$url = $_SERVER['PHP_SELF'];
			$board = explode('/',$url);
			$num = count($board);
			switch ($board[$num-1]) {
				case '1':
					echo '<img class="img-responsive" src="/doubi/public/img/post/pcgame.jpg" />';
					break;
				case '2':
					echo '<img class="img-responsive" src="/doubi/public/img/post/xboxgame.jpg" />';
					break;
				case '3':
					echo '<img class="img-responsive" src="/doubi/public/img/post/psgame.jpg" />';
					break;
				default:
					echo '<img class="img-responsive" src="/doubi/public/img/post/pcgame.jpg" />';
					break;
			}
		?>
	</div>
	
	<div class="container">		
		<div class="row">

			<!-- 帖子内容 -->
			<div class="col-md-8">
				<div class="block-item">
					<h2>
						<?php
							switch ($board[$num-1]) {
								case '1':
									echo '<span class="fa fa-paragraph fa-3"></span>&nbsp;PC游戏';
									break;
								case '2':
									echo '<span class="fa fa-paragraph fa-3"></span>&nbsp;XBOX游戏';
									break;
								case '3':
									echo '<span class="fa fa-paragraph fa-3"></span>&nbsp;PS游戏';
									break;
							}
						?>
					</h2>
					<?php foreach ($post as $p):?>
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
					<?php endforeach;?>
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