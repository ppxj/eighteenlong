<?php 
	Class CategorycostAction extends CommonAction{
		Public function index(){
			$dao=M('categorycosts');
			$this->list=$dao->select();
			$this->display();

		}
		Public function (){
			$this->display();
		}
		Public function add(){
			p($_POST);
		}
	}

 ?>