<?php 
	Class ProvinceAction extends CommonAction{
		Public function index(){
			$dao=M('provinces');
			$this->list=$dao->select();
			$this->display();
		}
		Public function province(){
			$this->display();
		}
		Public function add(){
			p($_POST);
		}
	}

 ?>