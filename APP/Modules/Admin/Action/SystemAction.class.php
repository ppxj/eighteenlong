/<?php 
	Class SystemAction extends CommonAction{
		/**
		总后台用户管理
		**/
		//总后台用户列表
		Public function adminuser()
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
		//修改密码模板
		Public function modified(){
			$this->display();
		}
		//修改管理员密码
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
		Public function addAdminuser(){
		// p($_POST);
		$this->display();
		}

		//添加总后台用户
		Public function addAdminuserHandle(){
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
		//在职人员
		Public function adminuserWork(){
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
		//离职人员
		Public function adminUserDimission(){
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

		/**
		权限动作管理
		**/
			Public function adminaction()
		{
			$data=M('adminactions');
			$this->list=$list=$data->select();
			// p($a);
			$this->display();
		}
		Public function addAminaction(){
			$this->display();
		}
		Public function addAminactionHandle(){
			p($_POST);
			$dao=M('adminactions');
			$data['Name']=trim($_POST['Name']);
			$data['ActionKey']=trim($_POST['ActionKey']);
			if($dao->field('Name,ActionKey')->add($data)){
				$this->success('添加成功');
			}else{
				$this->error('添加失败');
			}

		}

		/**
		权限模块管理
		*/
		Public function adminModule(){
			$dao=M('adminmodules');
			$this->list=$dao->select();
			$this->display();
		}
		Public function addAdminmodules(){
			$this->display();
		}
		Public function addAdminmodulesHandle(){
			p($_POST);
		}

		/**
		权限角色管理
		*/
		Public function adminRole(){
			$dao=M('adminroles');
			$this->list=$dao->select();
			$this->display();

		}
		Public function addAdminRole(){
			$this->display();
		}
		Public function addAdminroleHandle(){
			p($_POST);
		}
		/**
		省份管理
		*/
		Public function province(){
			$dao=M('provinces');
			$this->list=$dao->select();
			$this->display();
		}
		Public function addProvince(){
			$this->display();
		}
		Public function addProvinceHandle(){
			p($_POST);
		}
		/**
		城市管理
		*/
		Public function city(){
			p($_GET);
			$ProvinceId=$_GET['ProvinceId'];
			$data['ProvinceId']=$ProvinceId;
			$dao=M('Cities');
			$this->list=$dao->where("ProvinceId=$ProvinceId")->select();
			$this->provinces=M('provinces')->select();
			$this->$a=M('provinces')->field('ProvinceName')->select();
			$this->display();
		}
		Public function addCity(){
			$this->display();
		}
		Public function addCityHandle(){
			p($_POST);
		}
		/**
		区县管理
		*/
		Public function district(){
		$dao=M('districts');

		p($_GET);
		$ProvinceId=$_GET['ProvinceId'];
		$data['ProvinceId']=$ProvinceId;
		$dao=M('Cities');
		$this->list=$dao->where("ProvinceId=$ProvinceId")->select();
		$this->provinces=M('provinces')->select();
		$this->$a=M('provinces')->field('ProvinceName')->select();
		$this->display();


		$this->list=$dao->limit(10)->select();
		$this->display();

		}
		Public function addDistrict(){
			$this->display();
		}
		Public function addDistrictHandle(){
			p($_POST);
		}
		/**
		房屋类型管理
		*/
		Public function categoryApartment(){
			$dao=M('categoryapartments');
			$this->list=$dao->select();
			$this->display();
		}
		Public function addCategoryApartment(){
			$this->display();
		}
		Public function addCategoryApartmentHandle(){
			p($_POST);
		}
		/**
		造价预算管理
		*/
		Public function categoryCost(){
			$dao=M('categorycosts');
			$this->list=$dao->select();
			$this->display();
		}
		Public function addCategoryCost(){
			$this->display();
		}
		Public function addCategoryCostHandle(){
			p($_POST);
		}
		/**
		设计风格管理
		*/
		Public function categoryStyle(){
			$dao=M('categorystyles');
			$this->list=$dao->select();
			$this->display();
		}
		Public function addCategoryStyle(){
			$this->display();
		}
		Public function addCategoryStyleHandle(){
			p($_POST);
		}
		/**
		设计专长管理
		*/
		Public function categoryExpertise(){
			$dao=M('categoryexpertises');
			$this->list=$dao->select();
			$this->display();
		}
		Public function addCategoryExpertise(){
			$this->display();
		}
		Public function addCategoryExpertiseHandle(){
			p($_POST);
		}
		/**
		系统管理结束
		*/

		// //系统管理员列表,后期优化有必要时候加上
		// Public function adminUser()
		// {
		// 	$data=M('adminactions');
		// 	$this->list=$list=$data->select();
		// 	// p($a);
		// 	$this->display();
		// }
		// Public function adminUserAdd(){
		// 	$this->display();
		// }
		// Public function adminUserAddHandle(){
		// 	p($_POST);
		// 	$dao=M('adminactions');
		// 	$data['Name']=trim($_POST['Name']);
		// 	$data['ActionKey']=trim($_POST['ActionKey']);
		// 	if($dao->field('Name,ActionKey')->add($data)){
		// 		$this->success('添加成功');
		// 	}else{
		// 		$this->error('添加失败');
		// 	}

		// }

	}
 ?>