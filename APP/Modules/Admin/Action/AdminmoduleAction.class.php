<?php 

	Class AdminmoduleAction extends CommonAction{
		Public function index(){
			$dao=M('adminmodules');
			$this->list=$dao->select();
			$this->display();
		}
		Public function adminmodule(){
			$this->display();
		}
		Public function add(){
			p($_POST);
		}
	}
 ?>