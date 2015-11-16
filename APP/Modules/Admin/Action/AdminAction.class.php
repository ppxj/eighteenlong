<?php 
	/**
	* 
	*/
	class AdminAction extends CommonAction
	{
		
		Public function index()
		{
			$data=M('adminactions');
			$this->list=$list=$data->select();
			// p($a);
			$this->display();
		}
		Public function admin(){
			$this->display();
		}
		Public function add(){
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
	}
 ?>