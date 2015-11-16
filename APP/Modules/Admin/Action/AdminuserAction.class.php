<?php 
	/**
	* 
	*/
	class AdminUserAction extends CommonAction
	{
		
		Public function index()
		{
			import('ORG.Util.Page');// 导入分页类
			$dao=M('adminusers');// 实例化adminusers对象
			$this->list=$dao->select();
			//用户列表
			//------分页----------
			// $count=$data->count();// 查询满足要求的总记录数
			// // p($count);
			// $page=new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
			// // p($page); 
			// // die();
			// $show=$page->show();// 分页显示输出
			// // p($show);
			// // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			// $list = $data->order('AdminUserId desc')->limit($page->firstRow.','.$page->listRows)->select();
			// $a=$page->firstRow;
			// // p($a);
			// $this->assign('list',$list);// 赋值数据集
			// $this->assign('page',$show);// 赋值分页输出
			// echo 111;
			//------分页----------
			$this->display(); // 输出模板

		}
		Public function modified(){
			$this->display();
		}
		Public function modifiedPwd($id=1){
			$db=M('user');
			$user=$db->where(array('username'=>I('username')))->find();
			if(!user||$user['password']!==I('password','','md5')){
				$this->error('账号或者密码错误',U(GROUP_NAME.'/User/modified'));
			}elseif(($_POST['modifiedPwd1']!=$_POST['modifiedPwd2'])){
					$this->error('两次密码输入不一致，请重新输入',U(GROUP_NAME.'/User/modified'));
				}elseif($_POST['modifiedPwd1']==''){
					$this->error('密码不能为空，请重新输入',U(GROUP_NAME.'/User/modified'));
				}else{
					$data['password']=md5($_POST['modifiedPwd1']);
					$db->where('id=1')->data($data)->save();
					$this->success('更改密码成功，请重新登录',U(GROUP_NAME.'/Login/logout'));
				}
			// p($_POST);
			// $user=M('user');
			// $dao=$id;
			// echo $id;
			// $this->user=$user->where($dao)->select();
			// $this->display();
		}
		Public function user(){
		// p($_POST);
		$this->display();
		}
		Public function add(){
			// p($_POST);
			// $a=uniqid();
			// $a=md5(time() . mt_rand(1,1000000));
			$username=trim($_POST['UserName']);
			$password=trim($_POST['PassWord']);
			$confirmpassword=trim($_POST['ConfirmPassWord']);
			$admuser=M('adminusers');
			$data['AdminUserToken']=trim(uuid(),'{'.'}');
			$data['UserName']=$username;
			$data['PassWord']=sha1($password);

			if($password!=$confirmpassword){

				$this->error("两次密码输入不一致，请重新输入");
			}elseif($username==''||$password==''||$confirmpassword==''){

					$this->error("用户名或密码不能为空！");
			}elseif($admuser->add($data)){					
				// p($data);
				// die();		
				$this->success('管理员添加成功!');		
			}
			
		}
		Public function work(){
			import('ORG.Util.Page');// 导入分页类
			//用户列表
			$this->list=M('adminusers')->where('IsLocked=0')->select();// 实例化adminusers对象
			
			//------分页----------
			// $count=$data->where('IsLocked=0')->count();// 查询满足要求的总记录数
			// // p($count);
			// $page=new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
			// // p($page); 
			// // die();
			// $show=$page->show();// 分页显示输出
			// // p($show);
			// // 进行分页数据查询 注意limit方法的参数要使用Page类的属性

			// $list = $data->where('IsLocked=0')->order('AdminUserId desc')->limit($page->firstRow.','.$page->listRows)->select();
			// $a=$page->firstRow;
			// // p($a);
			// $this->assign('list',$list);// 赋值数据集
			// $this->assign('page',$show);// 赋值分页输出
			//------分页----------
			$this->display(); // 输出模板

		}
		Public function dimission(){
			import('ORG.Util.Page');// 导入分页类
			//用户列表
			$this->list=M('adminusers')->where('IsLocked=1')->select();
			//------分页----------
			//$data=M('adminusers');// 实例化adminusers对象
			// $count=$data->where('IsLocked=1')->count();// 查询满足要求的总记录数
			// // p($count);
			// $page=new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
			// // p($page); 
			// // die();
			// $show=$page->show();// 分页显示输出
			// // p($show);
			// // 进行分页数据查询 注意limit方法的参数要使用Page类的属性

			// $list = $data->where('IsLocked=1')->order('AdminUserId desc')->limit($page->firstRow.','.$page->listRows)->select();
			// $a=$page->firstRow;
			// // p($a);
			// $this->assign('list',$list);// 赋值数据集
			// $this->assign('page',$show);// 赋值分页输出
			//------分页----------
			$this->display(); // 输出模板

		}
	}
 ?>