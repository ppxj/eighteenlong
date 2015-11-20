<?php 	

	Class PublisherAction extends CommonAction{
		Public function sitearticle(){
			$this->list=M('sitearticles')->limit(6)->select();
			$this->display();
		}
		Public function addsitecase(){
			// p($_POST);
			  //如果不为空

              //如果不为空
            if(!empty($_FILES))
            {
                $this->upload();
            }


            echo "请选择图片";
			$this->display();

			
		}

		Public function upload(){
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath =  './Uploads/';// 设置附件上传目录
		 if(!$upload->upload()) {// 上传错误提示错误信息
		$this->error($upload->getErrorMsg());
		 }else{// 上传成功 获取上传文件信息
		$info =  $upload->getUploadFileInfo();
		 }
		 // 保存表单数据 包括附件数据
		$User = M("User"); // 实例化User对象
		$User->create(); // 创建数据对象
		$User->photo = $info[0]['savename']; // 保存上传的照片根据需要自行组装
		$User->add(); // 写入用户数据到数据库
		$this->success('数据保存成功！');
		 }
	}
 ?>