<div>
	<h1>新的话题</h1>
	
	<form action="/doubi/index.php/post/publish" method="post" id='post-form'>
		<input hidden="hidden" name='text-id' value="1"/>
		<input hidden="hidden" name='type' value="1"/>
		<label>
			<span>版块</span>
		</label>
		<input hidden="hidden" name='board' value="1"/>
		<label>
			<span>标题</span>
		</label>
		<input type="text" name='title' placeholder="请输入您的标题"/>
		<script id="editor" type="text/plain" style="width:1024px;height:500px;"></script>
		<button id='text-submit'>提交</button>
	</form>
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