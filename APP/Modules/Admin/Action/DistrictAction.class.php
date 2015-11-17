<?php 
	Class DistrictAction extends CommonAction{
		Public function index(){
			$dao=M('districts');
			$this->list=$dao->select();
			$this->display();

		}
		Public function districts(){
			$this->display();
		}
		Public function  add(){
			p($_POST);
		}
	}

 ?>