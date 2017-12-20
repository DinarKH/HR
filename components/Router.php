<?php

	/**
	* 
	*/
	class Router
	{
		private $routes;
		
		public function __construct()
		{
			$routesPath=ROOT.'\configs\routes.php';
			$this->routes=include($routesPath);
		}

		private function getURI(){
			if(!empty($_SERVER['REQUEST_URI'])){
				return trim($_SERVER['REQUEST_URI'],'/');
			}
		}

		public function run(){
			$uri=$this->getURI();

			foreach ($this->routes as $uriPattern => $path) {
				if(preg_match("~$uriPattern~", $uri))	{
					//определить контроллер и action
					$segment=explode('/',$path);
					$controllerName=array_shift($segment).'Controller';
					$controllerName=ucfirst($controllerName);
					$actionName='action'.ucfirst(array_shift($segment));
					//подлючение
					$controllerFile=ROOT.'/controllers/'.$controllerName.'.php';
					if(file_exists($controllerFile)){
						include_once($controllerFile);
					}
					//создать объект и вызвать
					$controllerObject=new $controllerName;
					$result=$controllerObject->$actionName();
					echo $result;
				}	
			}
		}
	}