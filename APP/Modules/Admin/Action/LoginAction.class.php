<?php 
	header("Content-Type:text/html; charset=utf-8");
	/**
	登录判断
	*/
	class LoginAction extends Action
	{
		
		Public function index()
		{
		$this->display();	
		}
		//登陆操作
		Public function login()
		{
			if(!IS_POST) exit('页面不存在');

			$db=M('adminusers');
			// $a=$db->select();
			// p($a);
			// die();\
			// echo I('UserName');
			// die();
			$user=$db->where(array('UserName'=>I('UserName')))->find();
			// p(I('PassWord','','sha1'));
			// $pwd=I('PassWord','','sha1');
			// p($pas);
			// die();
			// $b=sha1($a);
			// p($b);
			// die();
			// p($user);
			// die();
			if(!$user||$user['PassWord']!==I('PassWord','','sha1')){
				// p(I('password','','shal'));
				// die();
				$this->error('账号或者密码错误');
			}elseif($user['IsLocked']==1){
				
				$this->error('你的账号已经被锁定了,请联系管理员');
			}else{
				// $this->success('success');
			// p($_POST);

			//更新最后一次登录时间与IP
			// $data=array(
			// 	'id'=>$user['id'],
			// 	'logintime'=>time(),
			// 	'loginip'=>get_client_ip()
			// 	);
			// $db->save($data);


			session('admid',$user['AdminUserId']);
			session('admname',$user['UserName']);
			// session('logintime',date('Y-m-d H:i:s',$user['IsLocked']));
			// session('loginip',$user['loginip']);
			$this->redirect(GROUP_NAME.'/Index/index');
			// redirect(__GROUP__);
			// p($_SESSION);
			}
		} 
		// public function verify()
		// {
		// 	import('ORG.Util.Image');
		// 	Image::buildImageVerigy();

		// }
		/**
		退出登录
		*/

		Public function logout(){
			session_unset();
			session_destroy();
			$this->redirect(GROUP_NAME.'/Login/register');
		}
	}
 ?>
 

