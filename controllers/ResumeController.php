<?php
	include_once ROOT.'/models/Resume.php';
	class ResumeController
	{		
		public function actionShow(){
			$a=0;
			$name="";
			$mail="";
			$resume="";
			$errors=false;
			if(isset($_POST['submit'])){
				$name= $_POST['name'];
				$mail= $_POST['mail'];
				$resume= $_POST['resume'];
				$errors=false;
				if(!Resume::checkName($name)){
					$errors[]="Имя должно быть больше трёх символов";
				}
				if($errors==false){
					Resume::makeQuerry($name,$mail,$resume);
					$errors[]="Запрос отпрален";
				}
			}			
			require_once(ROOT.'/view/resume/index.php');
		}
	}
?>