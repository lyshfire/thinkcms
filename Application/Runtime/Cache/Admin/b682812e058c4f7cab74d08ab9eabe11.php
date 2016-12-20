<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"/>
	<meta charset="utf-8"/>  
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="/thinkcms/Public/Resource/css/bootstrap-3.3.5.min.css" />
	<link rel="stylesheet" href="/thinkcms/Application/Admin/Resource/css/header.css" />
	<link rel="stylesheet" href="/thinkcms/Public/Resource/css/component.css">
	<link rel="stylesheet" href="/thinkcms/Public/Resource/css/jquery.slinky.css">
	<link rel="stylesheet" href="/thinkcms/Public/Resource/css/jquery.page.css">
	<title><?php echo ($title); ?></title>
</head>
<body class="cbp-spmenu-push">
	<!--
    	作者：1083014960@qq.com
    	时间：2016-09-27
    	描述：头部开始
    -->
	<section>
		<nav class="nav navbar-default navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header-collapse">
						<span class="sr-only">切换导航</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div id="showLeftPush" class="div_img"><img src="/thinkcms/Application/Admin/Resource/images/header.png"></div>
					<a id="div_a" class="navbar-brand">后台管理系统</a>

				</div>
				<div class="collapse navbar-collapse" id="header-collapse">
					<ul class="nav nav-pills nav-stacked navbar-nav mynavbar navbar-right">
						<li>
							<a class="dropdown-toggle" data-toggle="dropdown">
								<span>欢迎您!&nbsp;&nbsp;</span>
								<span><?php echo ($username); ?></span>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
						        <li>
						            <a href="#" >个人信息</a>
						        </li>
						        <li>
						            <a href="#">切换帐号</a>
						        </li>						        
						        <li>
						            <a href="/thinkcms/admin.php/Login/userLogout">退出</a>
						        </li>
						    </ul>
						</li>

						<li>
							<a href="#"> 
								<!-- 徽章 -->
								消息<span class="badge"></span>
							</a>
						</li>

						<li>
							<a class="dropdown-toggle" data-toggle="dropdown">
								<span>换肤</span>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu skin" role="menu">
						        <li>
						            <a>默认(浅灰)</a>
						        </li>
						        <li>
						            <a>红色</a>
						        </li>
						        <li>
						            <a>绿色</a>
						        </li>
						        <li>
						            <a>蓝色</a>
						        </li>
						        <li>
						            <a>灰色</a>
						        </li>	
						        <li>
						            <a>黑色</a>
						        </li>
						    </ul>
						</li>
					</ul>
				</div>				
			</div>
		</nav>
	</section>
	
	<!--
    	作者：1083014960@qq.com
    	时间：2016-09-28
    	描述：中间部分分左右两列 
    -->
	<section>
		<div class="container">	
			<div id="cbp-spmenu-s1" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left "> 
				<div id="menu" class="slinky-menu scrollable-y">
					<ul class="nav-pills nav-stacked">
						<li class="li_tabs">
							<a href="#systemManager" >系统管理</a>
							<ul>
								<li class="li_tabs">				
									<a href="#commonManager">
										<i class="glyphicon glyphicon-cog"></i>
										常规管理
									</a>
									<ul id="commonManager" >
		                            	<li id="li_systemInfo">
		                            		<a href="#systemInfo">
		                            			<i class="glyphicon glyphicon-user"></i>&nbsp;系统信息
		                            		</a>
		                            	</li>
		                            	<li>
		                            		<a href="#basicSetting">
		                            			<i class="glyphicon glyphicon-th-list"></i>&nbsp;基本设置
		                            		</a>
		                            	</li>
		                            	<li>
		                            		<a href="#updateCache">
		                            			<i class="glyphicon glyphicon-asterisk"></i>&nbsp;更新缓存
		                            		</a>
		                            	</li>
		                        	</ul>
								</li>
								<li class="li_tabs">					
									<a href="#annourmentManager">
										<i class="glyphicon glyphicon-cog"></i>
										公告管理
									</a>
									<ul id="annourmentManager">
		                            	<li>
		                            		<a href="#annourmentAdd">
		                            			<i class="glyphicon glyphicon-user"></i>&nbsp;添加公告
		                            		</a>
		                            	</li>
		                            	<li>
		                            		<a href="#annourmentList" >
		                            			<i class="glyphicon glyphicon-th-list"></i>&nbsp;公告列表
		                            		</a>
		                            	</li>                           	
		                        	</ul>
								</li>
								<li class="li_tabs">					
									<a href="#friendLinkManager" >
										<i class="glyphicon glyphicon-cog"></i>
										友情链接管理
									</a>
									<ul id="friendLinkManager">
		                            	<li>
		                            		<a href="#friendLinkAdd">
		                            			<i class="glyphicon glyphicon-user"></i>&nbsp;添加友情链接
		                            		</a>
		                            	</li>
		                            	<li>
		                            		<a href="#friendLinkList">
		                            			<i class="glyphicon glyphicon-th-list"></i>&nbsp;管理友情链接
		                            		</a>
		                            	</li> 
		                        	</ul>
								</li>
							</ul>
						</li>

						<li class="li_tabs">
							<a href="#contentManager">内容管理</a>
							<ul>
								<li class="li_tabs">					
									<a href="#photoAblumManager">
										<i class="glyphicon glyphicon-cog"></i>
										相册管理
										<span class="pull-right glyphicon glyphicon-chevron-toggle"></span>
									</a>
									<ul id="photoAblumManager" >
		                            	<li>
			                            	<a href="#photoAblumAdd" >
			                            		<i class="glyphicon glyphicon-user"></i>&nbsp;添加相册
			                            	</a>
		                            	</li>
		                            	<li>
		                            		<a href="#photoAblumList" data-toggle="tab">
		                            			<i class="glyphicon glyphicon-th-list"></i>&nbsp;相册列表
		                            		</a>
		                            	</li>
		                        	</ul>
								</li>
								<li class="li_tabs">					
									<a href="#imagesManager">
										<i class="glyphicon glyphicon-cog"></i>
										图片管理
									</a>
									<ul id="imagesManager">
								        <li>
								        	<a href="#imagesAdd">
								        		<i class="glyphicon glyphicon-user"></i>&nbsp;添加图片
								        	</a>
								        </li>
								        <li>
								        	<a href="#imagesList">
								        		<i class="glyphicon glyphicon-th-list"></i>&nbsp;图片列表
								        	</a>
								        </li>                           	
								    </ul>
								</li>
								<li class="li_tabs">					
									<a href="#articleManagger" >
										<i class="glyphicon glyphicon-cog"></i>
										文章管理
									</a>
									<ul id="articleManagger">
								        <li>
								        	<a href="#articleAdd">
								        		<i class="glyphicon glyphicon-user"></i>&nbsp;添加文章
								        	</a>
								        </li>
								        <li>
								        	<a href="#articleList">
								        		<i class="glyphicon glyphicon-th-list"></i>&nbsp;文章列表
								        	</a>
								        </li>                           	
								    </ul>
								</li>
							</ul>
						</li>

						<li class="li_tabs">
							<a href="#userManager">用户管理</a>
							<ul>
								<!-- <li class="li_tabs">					
									<a href="#userGroup">
										<i class="glyphicon glyphicon-cog"></i>
										用户组
									</a>
									<ul id="userGroup">		           
								        <li>
								        	<a href="#userGroupAdd">
								        		<i class="glyphicon glyphicon-user"></i>&nbsp;添加用户组
								        	</a>
								        </li>
								    	<li>
								    		<a href="#userGroupList">
								    			<i class="glyphicon glyphicon-th-list"></i>&nbsp;用户组列表
								    		</a>
								    	</li>
								    </ul>
								</li> -->
								<li class="li_tabs">					
									<a href="#user">
										<i class="glyphicon glyphicon-cog"></i>
										用户
									</a>
									<ul id="user" >		           
								        <li id="li_userAdd">
								        	<a href="#userAdd">
								        		<i class="glyphicon glyphicon-user"></i>&nbsp;添加用户
								        	</a>
								        </li>
								        <li id="li_userList">
								        	<a href="#userList">
								        		<i class="glyphicon glyphicon-th-list"></i>&nbsp;用户列表
								        	</a>
								        </li>
								    </ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>	 
		<div class="container-fluid">
			<div class="row">			
				<div class="col-md-12" >
					<div class="tab-content ">			
					<div id="systemManager" class="tab-pane active">
							<!--带标题面板 -->
							<div class="panel panel-default">
							  <div class="panel-heading">
							  	<div class="container-fluid style_a">
								    <a>
								    	<i class="glyphicon glyphicon-th"></i>
								    	后台首页
								    </a>
								</div>
							  </div>
							  <div class="panel-body">
							    <p>《细说PHP》信息发布系统是一套中小型企业网站建设、信息发布、资料存储管理的系统平台
							  	它操作简单,易于维护,采用了WEB开发领先技术。后台采用了ThinkPHP框架，前台才用
							  	bootstrap框架实现。
							  	</p>
							  	<h4>系统特点:</h4>
							  	<ul>
							  		<li>使用流行脚本语言PHP写,搭配性能稳定的MySQL数据库</li>
							  		<li>系统可以跨平台,运行在Window、Linux等操作系统中</li>
							  		<li>使用最新的ck编译器,发布文件排版像使用WORD一样简单</li>
							  		<li>采用Smarty模版引擎页面高速缓存技术</li>
							  		<li>采用完全的PHP5面向对象设计</li>
							  		<li>支持无限极的分类与子分类</li>
							  	</ul>
							  </div>
							</div>
							<!-- 缩略图 -->
							<div class="row">
							  <div class="col-xs-6 col-md-3">
							    <a href="#" class="thumbnail">
							      <img src="/thinkcms/Application/Admin/Resource/images/xsphp_f.png" alt="细说PHP">
							    </a>
							  </div>
							  <div class="col-xs-6 col-md-3">
							    <a href="#" class="thumbnail">
							      <img src="/thinkcms/Application/Admin/Resource/images/xsphp_f.png" alt="细说PHP">
							    </a>
							  </div>
							  <div class="col-xs-6 col-md-3">
							    <a href="#" class="thumbnail">
							      <img src="/thinkcms/Application/Admin/Resource/images/xsphp_f.png" alt="细说PHP">
							    </a>
							  </div>
							  <div class="col-xs-6 col-md-3">
							    <a href="#" class="thumbnail">
							      <img src="/thinkcms/Application/Admin/Resource/images/xsphp_f.png" alt="细说PHP">
							    </a>
							  </div>
							</div>
						</div>
						
						<div id="contentManager" class="tab-pane">
							<!--带标题面板 -->
							<div class="panel panel-default">
							  <div class="panel-heading">
							  	<div class="container-fluid">
								    <a>
								    	<i class="glyphicon glyphicon-th"></i>
								    	后台首页
								    </a>
								</div>
							  </div>
							  <div class="panel-body">
							    <p>《细说PHP》信息发布系统是一套中小型企业网站建设、信息发布、资料存储管理的系统平台
							  	它操作简单,易于维护,采用了WEB开发领先技术。后台采用了ThinkPHP框架，前台才用
							  	bootstrap框架实现。
							  	</p>
							  	<h4>系统特点:</h4>
							  	<ul>
							  		<li>使用流行脚本语言PHP写,搭配性能稳定的MySQL数据库</li>
							  		<li>系统可以跨平台,运行在Window、Linux等操作系统中</li>
							  		<li>使用最新的ck编译器,发布文件排版像使用WORD一样简单</li>
							  		<li>采用Smarty模版引擎页面高速缓存技术</li>
							  		<li>采用完全的PHP5面向对象设计</li>
							  		<li>支持无限极的分类与子分类</li>
							  	</ul>
							  </div>
							</div>
							<!-- 缩略图 -->
							<div class="row">
							  <div class="col-xs-6 col-md-3">
							    <a href="#" class="thumbnail">
							      <img src="/thinkcms/Application/Admin/Resource/images/xsphp_f.png" alt="细说PHP">
							    </a>
							  </div>
							  <div class="col-xs-6 col-md-3">
							    <a href="#" class="thumbnail">
							      <img src="/thinkcms/Application/Admin/Resource/images/xsphp_f.png" alt="细说PHP">
							    </a>
							  </div>
							  <div class="col-xs-6 col-md-3">
							    <a href="#" class="thumbnail">
							      <img src="/thinkcms/Application/Admin/Resource/images/xsphp_f.png" alt="细说PHP">
							    </a>
							  </div>
							  <div class="col-xs-6 col-md-3">
							    <a href="#" class="thumbnail">
							      <img src="/thinkcms/Application/Admin/Resource/images/xsphp_f.png" alt="细说PHP">
							    </a>
							  </div>
							</div>
						</div>
						
						<div id="userManager" class="tab-pane">
							<!--带标题面板 -->
							<div class="panel panel-default">
							  <div class="panel-heading">
							  	<div class="container-fluid">
								    <a>
								    	<i class="glyphicon glyphicon-th"></i>							后台首页
								    </a>
								</div>
							  </div>
							  <div class="panel-body">
							    <p>《细说PHP》信息发布系统是一套中小型企业网站建设、信息发布、资料存储管理的系统平台
							  	它操作简单,易于维护,采用了WEB开发领先技术。后台采用了ThinkPHP框架，前台才用
							  	bootstrap框架实现。
							  	</p>
							  	<h4>系统特点:</h4>
							  	<ul>
							  		<li>使用流行脚本语言PHP写,搭配性能稳定的MySQL数据库</li>
							  		<li>系统可以跨平台,运行在Window、Linux等操作系统中</li>
							  		<li>使用最新的ck编译器,发布文件排版像使用WORD一样简单</li>
							  		<li>采用Smarty模版引擎页面高速缓存技术</li>
							  		<li>采用完全的PHP5面向对象设计</li>
							  		<li>支持无限极的分类与子分类</li>
							  	</ul>
							  </div>
							</div>
							<!-- 缩略图 -->
							<div class="row">
							  <div class="col-xs-6 col-md-3">
							    <a href="#" class="thumbnail">
							      <img src="/thinkcms/Application/Admin/Resource/images/xsphp_f.png" alt="细说PHP">
							    </a>
							  </div>
							  <div class="col-xs-6 col-md-3">
							    <a href="#" class="thumbnail">
							      <img src="/thinkcms/Application/Admin/Resource/images/xsphp_f.png" alt="细说PHP">
							    </a>
							  </div>
							  <div class="col-xs-6 col-md-3">
							    <a href="#" class="thumbnail">
							      <img src="/thinkcms/Application/Admin/Resource/images/xsphp_f.png" alt="细说PHP">
							    </a>
							  </div>
							  <div class="col-xs-6 col-md-3">
							    <a href="#" class="thumbnail">
							      <img src="/thinkcms/Application/Admin/Resource/images/xsphp_f.png" alt="细说PHP">
							    </a>
							  </div>
							</div>
						</div>
						
						<div id="commonManager" class="tab-pane">
							<div class="container-fluid">
								<a>
									<i class="glyphicon glyphicon-th"></i>系统管理
									<i class="glyphicon glyphicon-chevron-right"></i>
									常规管理
								</a>
							</div>
						</div>
						
						<div id="annourmentManager" class="tab-pane">
							<div class="container-fluid">
								<a>
									<i class="glyphicon glyphicon-th"></i>系统管理
									<i class="glyphicon glyphicon-chevron-right"></i>
									公告管理
								</a>
							</div>
						</div>
						
						<div id="friendLinkManager" class="tab-pane">
							<div class="panel panel-default">
								<div class="panel-heading">
									<a>
										<i class="glyphicon glyphicon-th"></i>
										系统管理
										<i class="glyphicon glyphicon-chevron-right"></i>
										友情链接管理
									</a>
								</div>
								<div class="panel-body">
								    Panel content
								 </div>
							</div>
						</div>
						
						<div id="systemInfo" class="tab-pane ">				
						<div class="panel panel-default">
								<div class="panel-heading">
									<a>
										<i class="glyphicon glyphicon-th"></i>			
										系统管理
										<i class="glyphicon glyphicon-chevron-right"></i>
										常规管理
										<i class="glyphicon glyphicon-chevron-right"></i>
										系统信息
									</a>
								</div>
								<div class="panel-body">
								    
								</div>
								<!--响应式表格,数据在js中生成-->
								<div id="systeminfo_div" class="table-responsive">

	  							</div>
							</div>							
						</div>
						
						<div id="basicSetting" class="tab-pane ">
							<div class="panel panel-default">
								<div class="panel-heading">
									<a>
										<i class="glyphicon glyphicon-th"></i>											
										系统管理
										<i class="glyphicon glyphicon-chevron-right"></i>
										常规管理
										<i class="glyphicon glyphicon-chevron-right"></i>
										基本设置
									</a>
								</div>
								<div class="panel-body">
									
								</div>	
								
								<div class="container-fluid">
									<form role="form">
									    <div class="form-horizontal">
									    	<div class="form-group">
									    		<label class="col-sm-2 control-label">前台显示风格</label>
									    		<div class="col-sm-2">
									    			<select class="form-control">
												        <option>默认风格</option>
												        <option>简约风格</option>
												        <option>夜间模式</option> 
												    </select>
									    		</div>
									    	</div>
									    	
									    	<div class="form-group">
									    		<label class="col-sm-2 control-label">文章每页显示数目</label>
									    		<div class="col-sm-2">
									    			<input type="text" class="form-control">
									    		</div>
									    		<label class="control-label" style="padding-left: 15px;">条/页</label>
									    	</div>
									    	
									    	<div class="form-group">
									    		<label class="col-sm-2 control-label">图片每页显示数目</label>
									    		<div class="col-sm-2">
									    			<input type="text" class="form-control">
									    		</div>
									    		<label class="control-label" style="padding-left: 15px;" >条/页</label>
									    	</div>
									    	
									    	<div class="form-group">
									    		<label class="col-sm-2 control-label">水印图片</label>
									    		<div class="col-sm-2">
												   <div class="thumbnail">
												    	<img src="/thinkcms/Application/Admin/Resource/images/xsphp_f.png" alt="细说PHP">	
												    </div>	
												</div>
												
												
									    	</div>
									    	
									    	<div class="form-group">
									    		<label class="col-sm-2 control-label">水印位置</label>
									    		<div class="col-sm-2">
									    			<select class="form-control">
										    			<option>居中显示</option>
										    			<option>居中显示</option>
										    			<option>居中显示</option>
										    		</select>
									    		</div>
									    	</div>
									    	
									    	<div class="form-group">
									    		<label class="col-sm-2 control-label">缩略图尺寸</label>								    		
									    		<div class="col-sm-2">										    			
											      	<input type="text" class="form-control">										      	
											    </div>
											    <label class="control-label" style="padding-left: 15px;">px</label>
									    	</div>
									    	
									    	<div class="form-group">
									    		<label class="col-sm-2 control-label">缓存时间</label>
									    		<div class="col-sm-2">										      	
											      	<input type="text" class="form-control"> 	
											    </div>
											    <label class="control-label" style="padding-left: 15px;">秒</label>
									    	</div>
									    	<div class="form-group">
									    		<label class="col-sm-2 control-label">缓存设置</label>
									    		<label class="checkbox-inline">
												    <input type="radio" name="optionsRadiosinline" id="optionsRadios3" value="option1" checked>&nbsp;&nbsp;开启
												</label>
												<label class="checkbox-inline">
													<input type="radio" name="optionsRadiosinline" id="optionsRadios4" value="option2">&nbsp;&nbsp;关闭
												</label>
									    	</div>
									    	<div class="form-group">
											    <label class="col-sm-2 control-label">网站标题</label>
											    <div class="col-sm-6">
											      <input type="text" class="form-control" placeholder="ThinkPHP CMS内容管理系统">
											    </div>
											</div>
									    	<div class="form-group">
											    <label for="firstname" class="col-sm-2 control-label">关键字</label>
											    <div class="col-sm-6">
											      <input type="text" class="form-control" id="firstname" placeholder="linux,php,java,cms">
											    </div>
											</div>
											<div class="form-group">
											    <label class="col-sm-2 control-label">网站描述</label>
											    <div class="col-sm-6">
											      <textarea  type="text" class="form-control" rows="3"></textarea>
											    </div>										    
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label"></label>
												<div class="col-sm-4">
													<button class="btn btn-default">修改</button>
													<button class="col-sm-offset-1 btn btn-default">重置</button>	
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						
						<div id="updateCache" class="tab-pane">
							<div class="panel panel-default">
								<div class="panel-heading">
									<a>
										<i class="glyphicon glyphicon-th"></i>											
										系统管理
										<i class="glyphicon glyphicon-chevron-right"></i>
										常规管理
										<i class="glyphicon glyphicon-chevron-right"></i>
										更新缓存
									</a>
								</div>
								<div class="panel-body">
									<span class="glyphicon glyphicon-ok-circle"
										style="color:#C0C0C0;">&nbsp;更新所有缓存成功</span>
									
								</div>
							</div>
						</div>
						
						<div id="annourmentAdd" class="tab-pane">
							<div class="panel panel-default">
								<div class="panel-heading">
									<a>
										<i class="glyphicon glyphicon-th"></i>											
										系统管理
										<i class="glyphicon glyphicon-chevron-right"></i>
										公告管理
										<i class="glyphicon glyphicon-chevron-right"></i>
										添加公告
									</a>
								</div>
								<div class="panel-body">
									
								</div>	
								<div class="container-fluid">			
									<form role="form">
										<div class="form-horizontal">
											<div class="form-group">
												<label class="col-sm-2 control-label">公告标题*</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" placeholder="ThinkPHP CMS内容管理系统" />
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">起始时间*</label>
												<div class="col-sm-5">
													<input type="text" class="form-control" value="2012-05-15 21:05" id="datetimepicker" data-date-format="yyyy-mm-dd hh:ii" />
												</div>
											</div>
											
										<div class="form-group">
												<label class="col-sm-2 control-label">截止时间*</label>
												<div class="col-sm-5">
												    <input type="text" class="form-control" value="2012-05-15 21:05" id="datetimepicker" data-date-format="yyyy-mm-dd hh:ii">
												</div>
												    
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">公告内容*</label>
												<div class="col-sm-5">
													<textarea type="text" class="form-control" rows="3"></textarea>
												</div>	
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">显示方式</label>
												<label class="checkbox-inline">
													<input type="radio" name="radosoption" checked/>网站名称
												</label>
												<label class="checkbox-inline">
													<input type="radio" name="radosoption" />网址
												</label>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label"></label>
												<div class="col-sm-5">
													<button type="button" class="btn btn-default">添加</button>
													<button type="button" class="col-sm-offset-3 btn btn-default">重置</button>
												</div>
											</div>
										</div>
									</form>								
								</div>
							</div>
						</div>
						
						<div id="annourmentList" class="tab-pane">
							<div class="container-fluid">
								<a>
									<i class="glyphicon glyphicon-th"></i>											
									系统管理
									<i class="glyphicon glyphicon-chevron-right"></i>
									公告管理
									<i class="glyphicon glyphicon-chevron-right"></i>
									公告列表
								</a>								
							</div>
						</div>
						
						<div id="friendLinkAdd" class="tab-pane">
							<div class="panel panel-default">
								<div class="panel-heading">
									<a>
										<i class="glyphicon glyphicon-th"></i>											
										系统管理
										<i class="glyphicon glyphicon-chevron-right"></i>
										友情链接
										<i class="glyphicon glyphicon-chevron-right"></i>
										添加友情链接
									</a>
								</div>
								<div class="panel-body">
									
								</div>
								<div class="container-fluid">			
									<form role="form">
										<div class="form-horizontal">
											<div class="form-group">
												<label class="col-sm-2 control-label">网站名称*</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" />
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">网址*</label>
												<div class="col-sm-5">
													<input type="text" class="form-control" />
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">网站描述*</label>
												<div class="col-sm-5">
													<textarea type="text" class="form-control" rows="3"></textarea>
												</div>	
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">显示方式</label>
												<label class="checkbox-inline">
													<input type="radio" name="radosoption" checked/>网站名称
												</label>
												<label class="checkbox-inline">
													<input type="radio" name="radosoption" />网址
												</label>
											</div>
											
										</div>
									</form>								
								</div>	
							</div>
						</div>
						
						<div id="friendLinkList" class="tab-pane">
							<div class="container-fluid">
								<a>
									<i class="glyphicon glyphicon-th"></i>											
									系统管理
									<i class="glyphicon glyphicon-chevron-right"></i>
									友情链接
									<i class="glyphicon glyphicon-chevron-right"></i>
									友情链接列表
								</a>								
							</div>
						</div>
						
						<div id="photoAblumManager" class="tab-pane">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="container-fluid">
										<a>
											<i class="glyphicon glyphicon-th"></i>
											内容管理
											<i class="glyphicon glyphicon-chevron-right"></i>
											相册管理
										</a>
									</div>
								</div>
								
								<div class="panel-body">
									
								</div>	
							</div>
						</div>
						
						<div id="photoAblumAdd" class="tab-pane">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="container-fluid">
										<a>
											<i class="glyphicon glyphicon-th"></i>
											内容管理
											<i class="glyphicon glyphicon-chevron-right"></i>
											相册管理
										</a>
									</div>
								</div>
								
								<div class="panel-body">
									
								</div>
								
								<div class="container-fluid">
									<form role="form">
										<div class="form-horizontal">
											<div class="form-group">
												<label class="col-sm-2 control-label">上级相册</label>
												<div class="col-sm-2">
													<select class="form-control">
														<option>根目录</option>
													</select>
												</div>
												<label class="control-label" style="padding-left: 15px;">
													<input type="checkbox" />&nbsp;记住选项
												</label>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">相册名称*</label>
												<div class="col-sm-2">
													<input type="text" />
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">相册描述*</label>
												<div class="col-sm-4">
													<textarea class="form-control" rows="3"></textarea>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label"></label>
												<div class="col-sm-5">
													<button type="button" class="btn btn-default">添加</button>
													<button type="button" class="btn btn-default col-sm-offset-3">重置</button>
												</div>
											</div>
											
										</div>
									</form>
								</div>
								
							</div>
						</div>
						
						<div id="photoAblumList" class="tab-pane">
							photoAblumlist
						</div>
						
						<div id="imagesManager" class="tab-pane">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="container-fluid">
										<a>
											<i class="glyphicon glyphicon-th"></i>
											内容管理
											<i class="glyphicon glyphicon-chevron-right"></i>
											图片管理
										</a>
									</div>
								</div>
								<div class="panel-body">
									
								</div>
								
								<div class="container-fluid">
									<form role="form">
										<div class="form-horizontal">
											
										</div>
									</form>
								</div>
							</div>
						</div>
						
						<div id="imagesAdd" class="tab-pane">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="container-fluid">
										<a>
											<i class="glyphicon glyphicon-th"></i>
											内容管理
											<i class="glyphicon glyphicon-chevron-right"></i>
											图片管理
											<i class="glyphicon glyphicon-chevron-right"></i>
											添加图片
										</a>
									</div>
								</div>
								
								<div class="panel-body">
									
								</div>
								
								<div class="container-fluid">
									<form role="form">
										<div class="form-horizontal">
											<div class="form-group">
												<label class="col-sm-2 control-label">添加到相册</label>								
												<div class="col-sm-2">
													<select class="form-control">
														<option>根目录</option>
													</select>
												</div>
											</div>	
										
											<div class="form-group">
												<label class="col-sm-2 control-label"></label>
												<div class="col-sm-4">
													<label class="checkbox-inline">
														<input type="checkbox" >&nbsp;生成缩略图
													</label>
													<label class="checkbox-inline">
														<input type="checkbox" >&nbsp;水印
													</label>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">上传图片</label>
												<div class="col-sm-3">
													<input type="file" style="width: 100%;"/>	
												</div>
												<a style="padding-left: 15px;">添加</a>
												<a style="padding-left: 15px;">删除</a>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label"></label>
												<div class="col-sm-5 ">
													<button type="button" class="btn btn-default">添加</button>												
													<button type="button" class="btn btn-default col-sm-offset-3">重置</button>
												</div>
											</div>
										</div>
									</form>
								</div>
								
							</div>
						</div>
						
						<div id="imagesList" class="tab-pane">
							imageslist
						</div>
						
						<div id="articleManagger" class="tab-pane">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="container-fluid">
										<a>
											<i class="glyphicon glyphicon-th"></i>
											内容管理
											<i class="glyphicon glyphicon-chevron-right"></i>
											文章管理
										</a>
									</div>
								</div>
								<div class="panel-body">
									
								</div>
							</div>
						</div>
						
						<div id="articleAdd" class="tab-pane">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="container-fluid">
										<a>
											<i class="glyphicon glyphicon-th"></i>
											内容管理
											<i class="glyphicon glyphicon-chevron-right"></i>
											文章管理
											<i class="glyphicon glyphicon-chevron-right"></i>
											添加文章
										</a>
									</div>
								</div>
								
								<div class="panel-body">
									
								</div>
								<div class="container-fluid">
									<form role="form">
										<div class="form-horizontal">
											<div class="form-group">
												<label class="col-sm-2 control-label">文章类别</label>
												<div class="col-sm-2">
													<select class="form-control">
														<option>根目录</option>
													</select>
												</div>
												<label class="control-label" style="padding-left: 15px;">
													<input type="checkbox" />&nbsp;记住选项
												</label>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">文章标题*</label>
												<div class="col-sm-2">
													<input type="text" />
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">文章摘要</label>
												<div class="col-sm-10">
													<textarea id="TextArea" class="form-control ckeditor" rows="3" cols="20"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">文章来源</label>
												<div class="col-sm-2">
													<input type="text" />
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">关键字*</label>
												<div class="col-sm-2">
													<input type="text" />
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						
						<div id="articleList" class="tab-pane">
							articleList
						</div>
						
						<!-- <div id="userGroup" class="tab-pane">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="container-fluid">
										<a>
											<i class="glyphicon glyphicon-th"></i>
											用户管理
											<i class="glyphicon glyphicon-chevron-right"></i>
											用户组
										</a>
									</div>
								</div>
								<div class="panel-body">
									
								</div>
							</div>
						</div>
						
						<div id="userGroupAdd" class="tab-pane">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="container-fluid">
										<a>
											<i class="glyphicon glyphicon-th"></i>
											用户管理
											<i class="glyphicon glyphicon-chevron-right"></i>
											用户组
											<i class="glyphicon glyphicon-chevron-right"></i>
											添加用户组
										</a>
									</div>
								</div>
								
								<div class="panel-body">
									
								</div>
							</div>
						</div>
						
						<div id="userGroupList" class="tab-pane">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="container-fluid">
										<a>
											<i class="glyphicon glyphicon-th"></i>
											用户管理
											<i class="glyphicon glyphicon-chevron-right"></i>
											用户组列表
											<i class="glyphicon glyphicon-chevron-right"></i>
											用户组列表
										</a>
									</div>
								</div>
								
								<div class="panel-body">
									
								</div>
							</div>
						</div> -->
						
						<div id="user" class="tab-pane">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="container-fluid">
										<a>
											<i class="glyphicon glyphicon-th"></i>
											用户管理
											<i class="glyphicon glyphicon-chevron-right"></i>
											用户
										</a>
									</div>
								</div>
								<div class="panel-body">
									
								</div>
							</div>
						</div>
						
						<div id="userAdd" class="tab-pane">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="container-fluid">
										<a>
											<i class="glyphicon glyphicon-th"></i>
											用户管理
											<i class="glyphicon glyphicon-chevron-right"></i>
											用户
											<i class="glyphicon glyphicon-chevron-right"></i>
											添加用户
										</a>
									</div>
								</div>
								
								<div class="panel-body">
									
								</div>

								<div id="logindev">
									<form  class="form" >		
										<div class="form-horizontal">						
											<div class="form-group">
												<label for="inputUsername" class="col-sm-3 control-label">
													<span class="pull-right">用户名</span>
												</label>
												<div class="col-sm-3">	
													<input type="text" class="form-control" id="inputUsername" name="username" placeholder="请输入用户名" />
												</div>
												<div class="col-sm-offset-3 col-sm-9">
								  					<span class="usernameinfo"></span>
								  				</div>
											</div>	
								  			
								  			<div class="form-group"> 
												<label for="inputPassword" class="col-sm-3 control-label">
													<span class="pull-right">用户密码</span>
												</label>
								    			<div class="col-sm-3">
								    				<input type="password" class="form-control" id="inputPassword" name="userpwd" placeholder="请输入密码">
								    			</div>
								    			<div class="col-sm-offset-3 col-sm-9">
								  					<span class="userpwdinfo"></span>
								  				</div>
								  			</div>

								  			<div class="form-group"> 
												<label for="inputRePassword" class="col-sm-3 control-label">
													<span class="pull-right">确认密码</span>
												</label>
								    			<div class="col-sm-3">
								    				<input type="password" class="form-control" id="inputRePassword" name="userrepwd" placeholder="请输入密码">
								    			</div>
								    			<div class="col-sm-offset-3 col-sm-9">
								  					<span class="userrepwdinfo"></span>
								  				</div>
								  			</div>

								  			<div class="form-group"> 
												<label for="inputEmail" class="col-sm-3 control-label">
													<span class="pull-right">邮箱地址</span>
												</label>
								    			<div class="col-sm-3">
								    				<input type="email" class="form-control" id="inputEmail" name="useremail" placeholder="请输入邮箱地址">
								    			</div>
								    			<div class="col-sm-offset-3 col-sm-9">
								  					<span class="useremailinfo"></span>
								  				</div>
								  			</div>

								        	<div class="form-group">
								  				<div class="col-sm-offset-3 col-sm-1">
								  					<button id="regsubmit" type="button" class="btn  btn-default btn-block">确定</button>
								  				</div>
								  				<div class="col-sm-1 ">
								  					<button id="reset" type="button" class="btn  btn-default btn-block">重置</button>
								  				</div>	
								        	</div>			
								        </div>
									</form>
								</div>
							</div>
						</div>
						
						<div id="userList" class="tab-pane">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="container-fluid">
										<a>
											<i class="glyphicon glyphicon-th"></i>
											用户管理
											<i class="glyphicon glyphicon-chevron-right"></i>
											用户
											<i class="glyphicon glyphicon-chevron-right"></i>
											用户列表
										</a>
									</div>
								</div>
								
								<div class="panel-body">
									
								</div>

								<!--响应式表格,数据在js中生成-->
								<div id="userlist_div" class="table-responsive">

	  							</div>
	  							<!-- 分页 -->
	  							<div class="tcdPageCode"></div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	
</body>
	<script type="text/javascript" src="/thinkcms/Public/Resource/js/jquery-2.1.4.min.js" ></script>
	<script type="text/javascript" src="/thinkcms/Application/Admin/Resource/js/admin_main.js"></script> 
	<script type="text/javascript" src="/thinkcms/Public/Resource/js/bootstrap-3.3.5.min.js" ></script>
	<script type="text/javascript" src="/thinkcms/Public/Resource/js/classie.js"></script>
	<script type="text/javascript" src="/thinkcms/Public/Resource/js/jquery.slinky.js"></script>
	<script type="text/javascript" src="/thinkcms/Public/Resource/js/modernizr.custom.js"></script>
	<script type="text/javascript" src="/thinkcms/Public/Resource/js/hammer.min.js"></script>
	<script type="text/javascript" src="/thinkcms/Public/Resource/js/jquery.hammer.js"></script> 
	<script type="text/javascript" src="/thinkcms/Public/Resource/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="/thinkcms/Public/Resource/js/jquery.page.js"></script>
	<script type="text/javascript" src="/thinkcms/Public/Resource/ckeditor_4.5.11_full/ckeditor.js" ></script>
	

</html>