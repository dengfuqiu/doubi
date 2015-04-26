<div id="post-page">

	<!-- 帖子标题 -->
	<div id="post-page-title" class="border-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="post-title"><span class="fa fa-tags"></span>&nbsp;&nbsp;<?php echo $post->title?></h2>
				</div>
			</div>
		</div>
	</div>
	
	<!-- 帖子内容 -->
	<div class="container">

		<!-- 用户信息 -->
		<div class="row user-info-all">
			<div class="col-md-3">
				<div class="user-info border">
					<h3 class="user-name border-bottom">dengfuqiu</h3>
					<div class="user-portrait padding-tb-10 border-bottom">
						<img class="img-responsive center-block" src="/doubi/public/img/user/github_portrait.png" alt="">
					</div>
					<div class="user-evinfo">
						<ul class="clearfix">
							<li class="user-lv">
								<span>玩家等级</span>
								<span>高级玩家</span>
							</li>
							<li class="user-register-time">
								<span>玩家注册时间</span>
								<span>2011-09-07</span>
							</li>
							<li class="user-integral">
								<span>积分</span>
								<span>904</span>
							</li>
							<li class="user-essence">
								<span>精华</span>
								<span>10</span>
							</li>
							<li class="user-post">
								<span>帖子</span>
								<span>14</span>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- 帖子内容 -->
			<div class="col-md-9">
				<div class="post-content border">
					<h3 class="margin-0 padding-10 border-bottom"><span class="fa fa-user "></span>&nbsp;&nbsp;发表于：2014-05-05</h3>
					<div class="post-content-height padding-10">
						<?php echo $text->text;?>
					</div>
				</div>
			</div>
		</div>
		
		<h2>评论</h2>
		<!-- 评论内容 -->
		<?php foreach ($comments as $c) { ?>
			<div class="row user-info-all">			
				<div class="col-md-3">
					<div class="user-info border">
						<h3 class="user-name border-bottom">dengfuqiu</h3>
						<div class="user-portrait padding-tb-10 border-bottom">
							<img class="img-responsive center-block" src="/doubi/public/img/user/github_portrait.png" alt="">
						</div>
						<div class="user-evinfo">
							<ul class="clearfix">
								<li class="user-lv">
									<span>玩家等级</span>
									<span>高级玩家</span>
								</li>
								<li class="user-register-time">
									<span>玩家注册时间</span>
									<span>2011-09-07</span>
								</li>
								<li class="user-integral">
									<span>积分</span>
									<span>904</span>
								</li>
								<li class="user-essence">
									<span>精华</span>
									<span>10</span>
								</li>
								<li class="user-post">
									<span>帖子</span>
									<span>14</span>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-9">
					<div class="post-content border">
						<h3 class="margin-0 padding-10 border-bottom"><span class="fa fa-user "></span>&nbsp;&nbsp;发表于：2014-05-05</h3>
						<div class="post-content-height padding-10">
							<?php echo $c['user_id'];?>
							<?php echo $c['text'];?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>

		<!-- 发表评论 -->
		<div id="comment" class="row">
			<div class="col-md-12">
				<div>
					<h2>发表评论</h2>
					<script id="editor" type="text/plain" style=""></script>
				</div>
				<div id="comment-btn">
					<form action="/doubi/index.php/comment/publish" method="post" id='comment-form'>
						<input hidden="hidden" name="post" value="<?php echo $post->id;?>"/>
						<input hidden="hidden" name="text-id" value=""/>
						<input hidden="hidden" name="type" value="2"/>
					</form>
					<button id='text-submit' class="btn btn-success">发表评论</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	var ue = UE.getEditor('editor');

	$('#text-submit').click(function(e) {
		e.preventDefault();

		var text = ue.getContent();

		$.ajax({
			method: 'POST',
			data: {text: text},
			dataType: "json",
			url: "/doubi/index.php/post/save",
			success: function($result) {
				$('input[name=text-id]').val($result.text_id);
				$("#comment-form").submit();
			},
			error: function($result) {

			}
		});
	});
</script>