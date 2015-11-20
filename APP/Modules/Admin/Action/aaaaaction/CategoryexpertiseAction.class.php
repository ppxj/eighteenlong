<?php 
	Class CategoryexpertiseAction extends CommonAction{
		Public function index(){
			$dao=M('categoryexpertises');
			$this->list=$dao->select();
			$this->display();
		}
		Public function categoryexpertise(){
			$this->display();
		}
		Public function add(){
			p($_POST);
		}
	}
 ?>