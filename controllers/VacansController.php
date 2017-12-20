<?php
	include_once ROOT.'/models/Vacans.php';
	class VacansController
	{
		public function actionList($parametrs){
			$vacansList=array();
			if($parametrs[0]){
				$vacansList=Vacans::getVacansList($parametrs[0]);
			}
			require_once(ROOT.'/view/vacans/index.php');
		}
	}
?>