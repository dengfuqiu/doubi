<div id="publish">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><span class="fa fa-cloud color-3b"></span>&nbsp;新的话题</h2>
				<form action="/doubi/index.php/post/publish" method="post" id='post-form'>
					<input hidden="hidden" name='text-id' value="1"/>
					<input hidden="hidden" name='type' value="1"/>
					<div class="form-group">
						<label for="text">
							<span>版块</span>
						</label>
						<select class="form-control" name="board" id="board" style="width: 20%">
						  	<option value="1">PC游戏</option>
						  	<option value="2">XBOX游戏</option>
						  	<option value="3">PS游戏</option>
						</select>
					</div>
					<div class="form-group">
						<label for="title">
							<span>标题</span>
						</label>
						<input class="form-control" id="title" type="text" name='title' placeholder="请输入您的标题" style="width: 60%" />
					</div>
					<script id="editor" type="text/plain" style="min-height:400px;"></script>
					<button id='text-submit' class="btn btn-success margin-tb-10">发布帖子</button>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
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
				$("#post-form").submit();
			},
			error: function($result) {

			}
		});
	});
</script>