<?php
namespace HakugyokuSoulMVC\base;

class View {
	protected $controller;
	protected $action;
	protected $variables = array();
	
	function __construct($controller,$action) {	
		$this->controller = $controller;
		$this->action = $action;
	}
	
	public function assign($name,$value){
		$this->variables[$name] = $value;
	}
	
	public function rander(){
		extract($this->variables);
		
		$defaultHeader = APP_PATH."application/Views/header.php";
		$defaultFooder = APP_PATH."application/Views/footer.php";
		
		$controllerHeader = APP_PATH."application/Views/".$this->controller."/".$this->action."/header.php";
		$controllerFooder = APP_PATH."application/Views/".$this->controller."/".$this->action."/footer.php";
		$controllerMain = APP_PATH."application/Views/".$this->controller."/".$this->action."/".$this->action.".php";
		
		if(!is_file($controllerHeader)){
			include($defaultHeader);
		}else{
			include($controllerHeader);
		}
		
		if(!is_file($controllerMain)){
			exit("无法找到视图文件".$controllerMain);
		}else{
			include($controllerMain);
		}
		
		if(!is_file($controllerFooder)){
			include($defaultFooder);
		}else{
			include($controllerFooder);
		}
	}
	
}