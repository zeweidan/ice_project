<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>登录</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style type="text/css">
		.main{width:400px;border:#CCC solid 1px;margin:200px auto;background-color:#FFF;border-radius:4px;box-shadow:0 0 8px rgba(0,0,0,.1);padding:20px 30px 0px 0;}
		ul{list-style:none;}
	</style>

	<script type="text/javascript">
		function check(){
			var email = document.getElementById("email").value;
			var password = document.getElementById("password").value;

			var msg1 = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>* 邮箱不能为空</div>";
			var msg2 = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>* 邮箱格式不正确</div>";
			var msg3 = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>* 密码不能为空</div>";
			var msg4 = "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>* 密码不能少于6位</div>";

			if(!email){
				$("li#msg").html(msg1);
				return false;
			}
			else if(email.indexOf("@") == -1){
				$("li#msg").html(msg2);
				return false;
			}
			else if(email.indexOf(".com",email.length-4) == -1){
				$("li#msg").html(msg2);
				return false;
			}

			if(!password){
				$("li#msg").html(msg3);
				return false;
			}
			else if(password.length <= 6){
				$("li#msg").html(msg4);
				return false;
			}
            return true;
		}
	</script>
</head>
<body>
	<div class="main">
		<form class="form-horizontal" action="check_user" onSubmit="return check()" method="get" role="form">
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