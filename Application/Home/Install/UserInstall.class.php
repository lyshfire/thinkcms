<?php	
	/*==================================================================*/
	/*		文件名:Install_class.php                            */
	/*		概要: 系统安装类，用于安装内容的处理和表单内容的验证*/
	/*		作者: 高洛峰                                        */
	/*		创建时间: 2009-05-01                                */
	/*		最后修改时间:2009-05-01                             */
	/*		copyright (c)2009 lampteacher@gmail.com             */
	/*==================================================================*/
	namespace Home\Install;
	class UserInstall {
		private $process;   
		private $ifrom;
		private $messageList;

		//==========================================
		// 函数:  __construct()
		// 功能: 构造方法用于初使化对象的成员属性
		// 参数: 无
		// 返回: 无
		//==========================================
		function __construct(){
			$configFile = dirname($_SERVER['SCRIPT_NAME']).'/Home/Common/Conf/config.php';
			$sqlFile = dirname(__FILE__).'/'.'brocms.sql';
			$this->process=new ProcessInstall($configFile, $sqlFile);
			$this->ifrom = new FormInstall();
			$this->messageList="";
		}
		
		//==========================================
		// 函数: exeStep($step)
		// 功能: 用于设置安装的执行步骤
		// 参数: step是当前安装步骤的数字
		// 返回: 无
		//==========================================
		public function exeStep($step){
			switch($step) {
				case 1:
					return $this->ifrom->getAgreement();
					break;
				case 2:
					return $this->ifrom->check();
					break;
				case 3:
					$this->messageList='请在下面的表单中正确填写数据库连接的配置信息';
					$inputs=array(
						"DRIVER"=>C('DB_TYPE'),
						"HOST"=>C('DB_HOST'),
						"USER"=>C('DB_USER'),
						"PASS"=>C('DB_PWD'),
						"DBNAME"=>C('DB_NAME'),
						"TABPREFIX"=>C('DB_PREFIX'),
						"APP_NAME"=>C('APP_NAME')
						);
					return $this->ifrom->getDbFrom($this->messageList, $inputs);
					break;
				case 4:
					if(!$this->validateDbFrom($_POST)){
						return $this->ifrom->getDbFrom($this->messageList, $_POST, "error");
					}else{
						if($this->process->configSYS($_POST)){
							$this->messageList='请在下面的表单中正确填写管理员账号信息';
							$inputs=array(
								"ADMIN_USER"=>"admin",
								"ADMIN_PWD"=>"",
								"ADMIN_REPWD"=>"",
								"ADMIN_MAIL" =>""
							);
							return $this->ifrom->getAdminFrom($this->messageList, $inputs);
						}else{
							return "写入配置文件失败!!";
						}	
					}	
					break;
				case 5:
					if(!$this->validateAdminFrom($_POST)){
						return $this->ifrom->getAdminFrom($this->messageList, $_POST, "error");
					}else{
						$inputs=array(
						"HOST"=>C('DB_HOST'),
						"USER"=>C('DB_USER'),
						"PASS"=>C('DB_PWD'),
						"DBNAME"=>C('DB_NAME'),
						"TABPREFIX"=>C('DB_PREFIX')
						);
						if($this->process->createDb($_POST,$inputs)){
							$installStats=true;
						}else{
							$installStats=false;
						}
						return $this->ifrom->getInstallMessage($this->process->getInstallInfo(), $installStats);
					}
					break;
				case 6:
					//$this->delDir('./Application/Runtime');
					if(file_put_contents ("__ROOT__/Application/Runtime/install.lock", "BroCMS INATALL OK ...")){
						//return '<script>window.location="../index.php"</script>';
						return 'install ok';
					}else{
						return 'install false';
					}
					break;

			}	
			
		}
		private function delDir($directory) {         
			if(file_exists($directory)) {      
				if($dir_handle=@opendir($directory)) {      
					while($filename=readdir($dir_handle)) {  
						if($filename!="." && $filename!="..") {   
							$subFile=$directory."/".$filename;   
							if(is_dir($subFile))                
								$this->delDir($subFile);             
							if(is_file($subFile))               
								unlink($subFile);             
						}
					}
					closedir($dir_handle);  
				     
		       			if($directory!="./Application/Runtime")			
						rmdir($directory);                          
				}
			}
		}
		//==========================================
		// 函数: validateDbFrom($post)
		// 功能: 对输入数据库配置信息的表单进行验证
		// 参数: $post是表单中用户输入的数据库信息的数据数组
		// 返回: true或false
		//==========================================
		function validateDbFrom($post){
			$result=true;
			if(trim(($post['HOST'])=="")){
				$this->messageList.="数据库主机名不能为空!!<br>";
				$result=false;
			}
			if(trim(($post['USER'])=="")){
				$this->messageList.="数据库用户名不能为空!!<br>";
				$result=false;
			}

			if(trim(($post['DBNAME'])=="")){
				$this->messageList.="数据库名称不能为空!!<br>";
				$result=false;
			}
			if(trim(($post['TABPREFIX'])=="")){
				$this->messageList.="表名的前缀不能为空!!<br>";
				$result=false;
			}
			if(trim(($post['APP_NAME'])=="")){
				$this->messageList.="网站名称不能为空!!<br>";
				$result=false;
			}
			if(!$result){
				return false;
			}
			$con = @mysqli_connect($post['HOST'],$post['USER'],$post['PASS']);
			if(!$con) {
				$this->messageList.="数据库连接失败,请检查用户名密码!!<br>";	
				$result=false;
			}
			if(!@mysqli_select_db($con,$post['DBNAME'])) {
				$this->messageList.="数据库<b>".$post['DBNAME']."</b>不存在，请先创建数据库!<br>";	
				$result=false;
			}
			return $result;
		} 
		//==========================================
		// 函数: validateAdminFrom($post)
		// 功能: 对输入管理员配置信息的表单进行验证
		// 参数: $post是表单中用户输入的管理员信息的数据数组
		// 返回: true或false
		//==========================================
		function validateAdminFrom($post){
			$result=true;
			if(trim(($post['ADMIN_USER'])=="")){
				$this->messageList.="管理员帐号不能为空!!<br>";
				$result=false;
			}
			if(trim(($post['ADMIN_PWD'])=="")){
				$this->messageList.="管理员密码不能为空!!<br>";
				$result=false;
			}
			if(trim(($post['ADMIN_REPWD'])=="")){
				$this->messageList.="重复输出的密码不能为空!!<br>";
				$result=false;
			}
			if(trim($post['ADMIN_PWD'])!=trim($post['ADMIN_REPWD'])){
				$this->messageList.="两次密码输入不一致!!<br>";
				$result=false;
			}
			if(trim(($post['ADMIN_MAIL'])=="")){
				$this->messageList.="管理员邮箱不能为空!!<br>";
				$result=false;
			}elseif(!preg_match("/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/", $post['ADMIN_MAIL'])){
				$this->messageList.="不是合法的电子邮箱格式!!<br>";
				$result=false;
			}
			return $result;
		}

	}
?>

