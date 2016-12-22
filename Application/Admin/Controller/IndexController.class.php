<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
		//$this->display('Login/index');
		$login = A("Login");
    	$login->index();
    }

    /* 获取系统信息 */
    public function getSystemInfo(){
    	/* 获取GD库版本信息 */
    	if (function_exists('gd_info')) {
    		$gdInfo = "";
    		foreach (gd_info() as $key => $value) {
    		 	$gdInfo .= "$key <b>:</b> $value<br>";
    		 } 
    	}else{
    		$gdInfo = "Disabled";
    	}
    	$data = array(
    		"操作系统："       => php_uname(),
    		"服务器："      => $_SERVER["SERVER_SOFTWARE"],
    		"域名："   => $_SERVER['HTTP_HOST'],
    		"PHP版本："   => phpversion(),
    		"ThinkPHP版本：" => THINK_VERSION,
    		"GD库："    => $gdInfo,
    		"MySQL版本：" => mysql_get_server_info(),
    		"剩余空间："   => round((disk_free_space(".")/(1024*1024)),2)."M",
    		"最大上传："   => ini_get("file_uploads") ? ini_get("upload_max_filesize") : "Disabled",
    		"脚本最大执行时间："  => ini_get("max_execution_time")."秒", 
    		);

    	$this->ajaxReturn($data);
    }
	
	/* 返回数据库版本号 */
	private function _mysql_version(){
        $Model = M();
        $version = $Model->query("select version() as ver");
        return $version[0]['ver'];
    }

    /* 获取用户信息 */
    public function getUserList(){
        $User = D("User"); // 实例化User对象
        $page = I('param.page','');/* 获取页码 */
        $listRows = I('param.count','');/* 每页列数量 */
        $firstRow = ($page - 1) * $listRows;
        $data = $User->getUserList($firstRow,$listRows);
        $count = $User->getUserListCount();
        $this->ajaxReturn(array('count' => $count,'data' => $data));
    }

    public function deteleOneUser(){
        $User = D("User"); // 实例化User对象
        $item = I('param.item','');
        $count = $User->deleteOneUser($item);
        if($count){
            $this->ajaxReturn(array('count' => $count));
        }else{
            $this->ajaxReturn(array('count' => 0));
        }
    }

}