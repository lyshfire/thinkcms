<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    	if(!file_exists("./Application/Runtime/install.lock")){
    		$step = empty($_POST['step']) ? 1 : $_POST['step']; 	//安装的第几步骤
			$install = A('User','Install');
			$data = $install->exeStep($step);
			$this->assign('data',$data);
			if ($step < 6){
				$this->display('Install/index');
				exit();
			}
    	}
    	
    	  		
    	$data = 'xiaoming';
        $title = 'CMS前台页面';
        $this->assign('title',$title);
    	$this->assign('username',$data);
    	$this->display('Index/index');
    }
}