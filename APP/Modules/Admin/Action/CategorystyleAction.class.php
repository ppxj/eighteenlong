<?php 
	Class CategorystyleAction extends CommonAction{
		Public function index(){
			$dao=M('categorystyles');
			$this->list=$dao->select();
			$this->display();
		}
		Public function categorystyle(){
			$this->display();
		}
		Public function add(){
			p($_POST);
		}
	}

 ?>