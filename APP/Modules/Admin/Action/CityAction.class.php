<?php 
	Class CityAction extends CommonAction{
		Public function index(){
			p($_GET);
			$ProvinceId=$_GET['ProvinceId'];
			$data['ProvinceId']=$ProvinceId;
			$dao=M('Cities');
			$this->list=$dao->where("ProvinceId=$ProvinceId")->select();
			$this->provinces=M('provinces')->select();
			$this->$a=M('provinces')->field('ProvinceName')->select();
			$this->display();
		}
		Public function city(){
			$this->display();
		}
		Public function add(){
			p($_POST);
		}
	}

 ?>