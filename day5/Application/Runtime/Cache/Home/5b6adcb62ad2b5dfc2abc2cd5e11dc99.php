<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>登录</title>
    <!--css style-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="/day4/Public/css/main.css" rel="stylesheet"/>
    <!--javascript-->
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="/day4/Public/js/main.js"></script>

</head>
<body>
	<div class="main">
		<form id="login_form" class="form-horizontal" action="" onSubmit="" method="post" role="form">
			<ul>
				<li class="form-group">
				    <div class="col-sm-8 control-label">白熊实战登录系统</div>
				</li>
				<li class="form-group">
				    <label class="col-sm-2 control-label" for="email">邮箱</label>
				    <div class="col-sm-10">
      					<input type="text" class="form-control" name="email" id="email" placeholder="请输入邮箱">
    				</div>
				</li>
				<li class="form-group">
				    <label class="col-sm-2 control-label" for="password">密码</label>
				    <div class="col-sm-10">
      					<input type="password" class="form-control" id="password" name="password" placeholder="请输入密码">
    				</div>
				</li>
				<li class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
      					<button type="submit" class="btn btn-default">登录</button>
    				</div>
				</li>
				<li class="form-group" id="msg">
				</li>
		</form>
	</div>
</body>
</html>