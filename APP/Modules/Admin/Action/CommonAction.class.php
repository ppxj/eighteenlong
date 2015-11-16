<?php
	/**
	* 
	*/
	class CommonAction extends Action
	{
		
	Public	function _initialize()
		{
			if(!isset($_SESSION['admid'])){
			$this->redirect(GROUP_NAME.'/Login/register');

			}
			
		}
	}
?>