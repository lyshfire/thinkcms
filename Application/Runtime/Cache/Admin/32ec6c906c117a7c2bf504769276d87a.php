<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"/>
	<meta charset="utf-8"/>   
	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" type="text/css" href="/thinkcms/Public/Resource/css/bootstrap-3.3.5.min.css" />
	<link rel="stylesheet" href="/thinkcms/Application/Admin/Resource/css/login.css" />
	
</head>  
<body>	
	<div class="col-lg-4 col-lg-offset-4 col-md-6 col-sm-6" id="logindev">
		<form  class="form" >		
			<div class="form-horizontal">		
				<h3 class="form-signin-heading ">管理登录</h3>

				<div class="form-group">
					<label for="name" class="sr-only control-label">用户名：</label>
					<div class="col-sm-12">	
						<input type="text" class="form-control" id="name" name="username" placeholder="请输入用户名" />
					</div>
					<div class="col-sm-12">
	  					<span class="usernameinfo"></span>
	  				</div>
				</div>	
				
				<div class="form-group"> 
					<label for="inputPassword" class="sr-only control-label">密码：</label>	
	    			<div class="col-sm-12">
	    				<input type="password" class="form-control" id="inputPassword" name="userpwd" placeholder="请输入密码">
	    			</div>
	    			<div class="col-sm-12">
	  					<span class="userpwdinfo"></span>
	  				</div>
	  			</div>
	  			
	  			<div class="form-group">	 
	  				<label for="verfycode" class="sr-only control-label">验证码：</label>
	      			<div class="col-sm-6">
	      				<input type="text" class="form-control" id="verfycode" name="verfycode" placeholder="请输入验证码">

		  			</div>
		  			
		  			<div class="col-sm-6 text-center">
		  				<img id="verifyImg" src="<?php echo U('/Login/verify',array());?>" title="点击刷新验证码" />
		  			</div>

		  			<div class="col-sm-12">
	  					<span class="verfyinfo"></span>
	  				</div>

	  			</div>

	  			

	        	<div class="form-group">
	  				<label class="sr-only control-label"></label>
	  				<div class="col-sm-12">
	  					<button id="submit" type="button" class="btn  btn-default btn-block">登录</button>
	  				</div>	
	        	</div>	

	        	<div class="form-group">  
	          		<div class="col-sm-6">
	          			<input type="checkbox" value="remember-me">记住我 
	          		</div>   
	        	</div> 

	        	<div class="form-group">	        		  
	          		<div class="col-sm-6 ">
	          			<span><a href="/thinkcms/admin.php/Password/index">忘记密码？</a></span>
	          		</div>
	          		<div class="col-sm-6 ">
	          			<span ><a href="/thinkcms/admin.php/Register/index">注册帐号</a></span>
	          		</div>
	        	</div>  	        		
	        	 		
	        </div>
		</form>
	</div>
</body>
	<script type="text/javascript" src="/thinkcms/Public/Resource/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="/thinkcms/Application/Admin/Resource/js/loginout.js"></script>
	<script type="text/javascript" src="/thinkcms/Public/Resource/js/bootstrap-3.3.5.min.js"></script>
	
	
</html>