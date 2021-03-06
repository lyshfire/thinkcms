<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html"/>
  <meta charset="utf-8"/>  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="/thinkcms/Public/Resource/css/bootstrap-3.3.5.min.css" />
  <link rel="stylesheet" href="/thinkcms/Application/Admin/Resource/css/header.css" />
  <title><?php echo ($title); ?></title>
</head>
<body>
  <!--
      作者：1083014960@qq.com
      时间：2016-09-27
      描述：头部开始
    -->
  <section>
    <nav class="nav navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target="#header-collapse">
            <span class="sr-only">切换导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">前台页面</a>
        </div>
        <div class="collapse navbar-collapse" id="header-collapse">
          <ul class=" nav  navbar-nav mynavbar navbar-right">
            <li><a>欢迎您!&nbsp;&nbsp;<span><?php echo ($username); ?></span></a></li>
            <li><a href="/thinkcms/">首页</a></li>
            <li><a href="/thinkcms/">退出</a></li>
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
    <div class="container-fluid">
      <div class="row">
        <div class="tabbable col-md-3">
          <ul class="nav nav-tabs">
            <li class="li_tabs"><a href="#systemManager" data-toggle="tab">系统管理</a></li>
            <li class="li_tabs"><a href="#contentManager" data-toggle="tab">内容管理</a></li>
            <li class="li_tabs"><a href="#userManager" data-toggle="tab">用户管理</a></li>
          </ul>
          <div class="tab-content">           
            <div id="systemManager" class="tab-pane active">                          
              <ul class="nav nav-tabs nav-stacked firstmenu">
                <li class="li_tabs">          
                  <a href="#commonManager" class="nav-header collapsed" data-toggle="collapse" >
                    <i class="glyphicon glyphicon-cog"></i>
                    常规管理
                    <span class="pull-right glyphicon glyphicon-chevron-toggle"></span>
                  </a>
                  <ul id="commonManager" class="nav nav-list collapse secondmenu" style="height: 0px;">
                                  <li><a href="#systemInfo" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>&nbsp;系统信息</a></li>
                                  <li><a href="#basicSetting" data-toggle="tab"><i class="glyphicon glyphicon-th-list"></i>&nbsp;基本设置</a></li>
                                  <li><a href="#updateCache" data-toggle="tab"><i class="glyphicon glyphicon-asterisk"></i>&nbsp;更新缓存</a></li>
                              </ul>
                </li>
                <li class="li_tabs">          
                  <a href="#annourmentManager" class="nav-header collapsed" data-toggle="collapse">
                    <i class="glyphicon glyphicon-cog"></i>
                    公告管理
                    <span class="pull-right glyphicon glyphicon-chevron-toggle"></span>
                  </a>
                  <ul id="annourmentManager" class="nav nav-list collapse secondmenu" style="height: 0px;">
                                  <li><a href="#annourmentAdd" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>&nbsp;添加公告</a></li>
                                  <li><a href="#annourmentList" data-toggle="tab"><i class="glyphicon glyphicon-th-list"></i>&nbsp;公告列表</a></li>                            
                              </ul>
                </li>
                <li class="li_tabs">          
                  <a href="#friendLinkManager" class="nav-header collapsed " data-toggle="collapse">
                    <i class="glyphicon glyphicon-cog"></i>
                    友情链接管理
                    <span class="pull-right glyphicon glyphicon-chevron-toggle"></span>
                  </a>
                  <ul id="friendLinkManager" class="nav nav-list collapse secondmenu" style="height: 0px;">
                                  <li><a href="#friendLinkAdd" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>&nbsp;添加友情链接</a></li>
                                  <li><a href="#friendLinkList" data-toggle="tab"><i class="glyphicon glyphicon-th-list"></i>&nbsp;管理友情链接</a></li>                            
                              </ul>
                </li>
              </ul>
            </div>

            <div id="contentManager" class="tab-pane ">           
              <ul class="nav nav-tabs nav-stacked firstmenu">
                <li class="li_tabs">          
                  <a href="#photoAblumManager" class="nav-header collapsed" data-toggle="collapse">
                    <i class="glyphicon glyphicon-cog"></i>
                    相册管理
                    <span class="pull-right glyphicon glyphicon-chevron-toggle"></span>
                  </a>
                  <ul id="photoAblumManager" class="nav nav-list collapse secondmenu" style="height: 0px;">
                                  <li><a href="#photoAblumAdd" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>&nbsp;添加相册</a></li>
                                  <li><a href="#photoAblumList" data-toggle="tab"><i class="glyphicon glyphicon-th-list"></i>&nbsp;相册列表</a></li>
                              </ul>
                </li>
                <li class="li_tabs">          
                  <a href="#imagesManager" class="nav-header collapsed" data-toggle="collapse">
                    <i class="glyphicon glyphicon-cog"></i>
                    图片管理
                    <span class="pull-right glyphicon glyphicon-chevron-toggle"></span>
                  </a>
                  <ul id="imagesManager" class="nav nav-list collapse secondmenu" style="height: 0px;">
                                  <li><a href="#imagesAdd" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>&nbsp;添加图片</a></li>
                                  <li><a href="#imagesList" data-toggle="tab"><i class="glyphicon glyphicon-th-list"></i>&nbsp;图片列表</a></li>                            
                              </ul>
                </li>
                <li class="li_tabs">          
                  <a href="#articleManagger" class="nav-header collapsed" data-toggle="collapse">
                    <i class="glyphicon glyphicon-cog"></i>
                    文章管理
                    <span class="pull-right glyphicon glyphicon-chevron-toggle"></span>
                  </a>
                  <ul id="articleManagger" class="nav nav-list collapse secondmenu" style="height: 0px;">
                                  <li><a href="#articleAdd" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>&nbsp;添加文章</a></li>
                                  <li><a href="#articleList" data-toggle="tab"><i class="glyphicon glyphicon-th-list"></i>&nbsp;文章列表</a></li>                             
                              </ul>
                </li>
              </ul>
            </div>

            <div id="userManager" class="tab-pane ">            
              <ul class="nav nav-tabs nav-stacked firstmenu">
                <li class="li_tabs">          
                  <a href="#userGroup" class="nav-header collapsed" data-toggle="collapse">
                    <i class="glyphicon glyphicon-cog"></i>
                    用户组
                    <span class="pull-right glyphicon glyphicon-chevron-toggle"></span>
                  </a>
                  <ul id="userGroup" class="nav nav-list collapse secondmenu" style="height: 0px;">              
                                  <li><a href="#userGroupAdd" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>&nbsp;添加用户组</a></li>
                                  <li><a href="#userGroupList" data-toggle="tab"><i class="glyphicon glyphicon-th-list"></i>&nbsp;用户组列表</a></li>
                              </ul>
                </li>
                <li class="li_tabs">          
                  <a href="#user" class="nav-header collapsed" data-toggle="collapse">
                    <i class="glyphicon glyphicon-cog"></i>
                    用户
                    <span class="pull-right glyphicon glyphicon-chevron-toggle"></span>
                  </a>
                  <ul id="user" class="nav nav-list collapse secondmenu" style="height: 0px;">               
                                  <li><a href="#userAdd" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>&nbsp;添加用户</a></li>
                                  <li><a href="#userList" data-toggle="tab"><i class="glyphicon glyphicon-th-list"></i>&nbsp;用户列表</a></li>
                              </ul>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
         
      </div>
    </div>
  </section>
  
</body>
  <script type="text/javascript" src="/thinkcms/Public/Resource/js/jquery-2.1.4.min.js" ></script>
  <script type="text/javascript" src="/thinkcms/Public/Resource/js/bootstrap-3.3.5.min.js" ></script>
  <script type="text/javascript" src="/thinkcms/Public/Resource/ckeditor_4.5.11_full/ckeditor.js" ></script>
  <script type="text/javascript" src="/thinkcms/Application/Admin/Public/Resource/js/loginout.js"></script>
  <script type="text/javascript">
    $('.tabbable a[data-toggle="tab"]').eq(0).tab('show');
        $('.tabbable a[data-toggle="tab"]').on('click', function (e) {
 
            $('.tabbable a[data-toggle="tab"]').parent('li').removeClass('active');
            $('.tabbable a[data-toggle="tab"]').removeClass('active');
            $(this).addClass('active');
 
        });
        
        $('.li_tabs a').click(function(){  
          tarId = $(this).attr("href").substring(1);
          tarDiv = $("div[id = " + tarId + "]");
          tarDiv.addClass('active');
          tarDiv.siblings('div').removeClass('active');         
        });
        
  </script>
</html>