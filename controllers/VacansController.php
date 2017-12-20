<?php
	include_once ROOT.'/models/Vacans.php';

	class VacansController
	{
		public function actionList(){
			$vacansList=array();
			$vacansList=Vacans::getVacansList();
			require_once(ROOT.'/view/vacans/index.php');
		}
	}
?>