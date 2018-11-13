<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>用户数据表</title>
	<link rel="stylesheet" href="">
</head>
<body>
	@foreach ($lists as $list)
	<p>姓名：<input type="text" value="{{ $list->username }}">
	年龄：<input type="text" value="{{ $list->age }}"></p>
	<button data-id="{{ $list->id }}">提交</button>
	@endforeach
</body>
<script type='text/javascript' src='https://imgxz.3z.cc/ldy_js/aly6/jquery-3.1.0.min.js'></script>
<script>
	$(function(){
		$('button').on('click',function(){
			$this = $(this);
			//alert($this.prev().find('input').eq(1).val());
			var username = $this.prev().find('input').eq(0).val();
			var age = $this.prev().find('input').eq(1).val();
			var id = $this.attr('data-id');
			$.get('/post/edit',{username:username,age:age,id:id},function(data){
				if(data.status==1){
					alert(data.msg+' : '+data.data.age);
				}
			})
		})
	})
</script>
</html>