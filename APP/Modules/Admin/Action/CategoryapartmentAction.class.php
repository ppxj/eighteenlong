<?php 
	Class CategoryapartmentAction extends CommonAction{
		Public function index(){
			$dao=M('categoryapartments');
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