<?php
namespace Admin\Controller;
use Think\Controller;
//header('Content-type: application/x-www-form-urlencoded; charset=utf8');

class LoginController extends Controller {
    /* 用户登录页面 */
	public function index(){
		$this->assign('title',"CMS信息发布系统登录");	
        $this->display('Login/index');
    }

    /* 后台页面 */
    public function admin(){
        $this->assign('username',session('username'));
        $this->assign('title',"CMS信息发布系统后台");
        $this->display('Admin/index');
    }

    /* 检查验证码 */
    public function checkVerfy(){
        $VerfyCode = I('param.verfycode','');
        $user = D('User');
        $result = $user->checkVerfy($VerfyCode); 
        if ($result) {
            $data = array("ret" => true);
        }else{
            $data = array("ret" => false);
        }    
        $this->ajaxReturn($data);  

    }

    /* 用户登录 */
    public function userLogin(){
        $UserName  = trim(I('param.username',''));
        $UserPwd   = md5(I('param.userpwd',''));        

        if(!IS_AJAX){
            $this->ajaxReturn(array("ret" => false));
        }

        /* 实例化一个模型
         * new \Admin\Model\UserModel
         */
    	$user = D('User');
    	if(session('?username')){ 
            session('username',$UserName);
            $data  = array("ret"  => true);	
    	}else { 
    		$result = $user->checkUser($UserName,$UserPwd);
            if ($result == 0){
                session('username',$UserName);
                $data  = array("ret"  => true);      
            }elseif ($result == -1) {
                $data  = array("ret" => "userpwd");
            }elseif ($result == -2){
                $data  = array("ret" => "username");
            }       
    	}
        $this->ajaxReturn($data);  	
    }
    
    /* 用户退出 */
	public function userLogout(){
		session('username',null);
        $this->assign('title',"CMS信息发布系统登录");
    	$this->display('Login/index');  	
    }
    
	/* 生成验证码 */
    public function verify()
    {
    	ob_clean();
        $Verify = new \Think\Verify();
		$Verify->fontSize = 18;    /* 验证码字体大小（像素） 默认为25 */
        $Verify->imageW   = 0;     /* 验证码宽度 默认设置为0,表示自动计算 */
        $Verify->imageH   = 34;
		$Verify->length   = 4;     /* 验证码位数,默认是5 */
        $Verify->useImgBg = false; /* 是否使用背景图片 默认为false */
		$Verify->useNoise = false; /* 是否添加杂点 默认为true */
        $Verify->useCurve = false; /* 是否使用混淆曲线 默认为true */       
		$Verify->entry();
    }

    
}