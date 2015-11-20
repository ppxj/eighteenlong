<?php 
	Class DistrictAction extends CommonAction{
		Public function index(){
			$dao=M('districts');

			p($_GET);
			$ProvinceId=$_GET['ProvinceId'];
			$data['ProvinceId']=$ProvinceId;
			$dao=M('Cities');
			$this->list=$dao->where("ProvinceId=$ProvinceId")->select();
			$this->provinces=M('provinces')->select();
			$this->$a=M('provinces')->field('ProvinceName')->select();
			$this->display();


			$this->list=$dao->limit(10)->select();
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