<?php 
	Class AdminroleAction extends CommonAction{
		Public function index(){
			$dao=M('adminroles');
			$this->list=$dao->select();
			$this->display();

		}
		Public function adminrole(){
			$this->display();
		}
		Public function add(){
			p($_POST);
		}
	}

 ?>