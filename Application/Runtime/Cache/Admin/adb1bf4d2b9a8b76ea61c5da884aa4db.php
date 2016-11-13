<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>	
<header>
	<meta http-equiv="Content-type" content="text/html" />	
	<meta charset="utf-8" />
	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" type="text/css" href="/thinkcms/Public/Resource/css/bootstrap-3.3.5.min.css" />
	<link rel="stylesheet" href="/thinkcms/Application/Admin/Resource/css/login.css" />

</header>
<body>
	<div class="col-lg-4 col-lg-offset-4 col-md-6 col-sm-6" id="logindev">
		<form  class="form" >		
			<div class="form-horizontal">		
				<h3 class="form-signin-heading ">注册帐号</h3>

				<div class="form-group">
					<label for="inputUsername" class="col-sm-3 control-label">
						<span class="pull-left">用户名</span>
					</label>
					<div class="col-sm-9">	
						<input type="text" class="form-control" id="inputUsername" name="username" placeholder="请输入用户名" />
					</div>
					<div class="col-sm-12">
	  					<span class="usernameinfo"></span>
	  				</div>
				</div>	
	  			
	  			<div class="form-group"> 
					<label for="inputPassword" class="col-sm-3 control-label">
						<span class="pull-left">用户密码</span>
					</label>
	    			<div class="col-sm-9">
	    				<input type="password" class="form-control" id="inputPassword" name="userpwd" placeholder="请输入密码">
	    			</div>
	    			<div class="col-sm-12">
	  					<span class="userpwdinfo"></span>
	  				</div>
	  			</div>

	  			<div class="form-group"> 
					<label for="inputRePassword" class="col-sm-3 control-label">
						<span class="pull-left">确认密码</span>
					</label>
	    			<div class="col-sm-9">
	    				<input type="password" class="form-control" id="inputRePassword" name="userrepwd" placeholder="请输入密码">
	    			</div>
	    			<div class="col-sm-12">
	  					<span class="userrepwdinfo"></span>
	  				</div>
	  			</div>

	  			<div class="form-group"> 
					<label for="inputEmail" class="col-sm-3 control-label">
						<span class="pull-left">邮箱地址</span>
					</label>
	    			<div class="col-sm-9">
	    				<input type="email" class="form-control" id="inputEmail" name="useremail" placeholder="请输入邮箱地址">
	    			</div>
	    			<div class="col-sm-12">
	  					<span class="useremailinfo"></span>
	  				</div>
	  			</div>

	        	<div class="form-group">
	  				<div class="col-sm-offset-3 col-sm-3">
	  					<button id="regsubmit" type="button" class="btn  btn-default btn-block">确定</button>
	  				</div>
	  				<div class="col-sm-3">
	  					<button id="retreset" type="button" class="btn  btn-default btn-block">重置</button>
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