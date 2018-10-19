<?php
namespace HakugyokuSoulMVC\base;

class Controller {
    protected $controller;
    protected $urlParam = array();
    protected $action;
    protected $view;
    public $language;


	function __construct($controller,$action,$urlParam) {
		$this->action = $action;
		$this->controller = $controller;
		$this->urlParam = $urlParam;
		
		$arr = array();
		for($i = 0; $i < count($urlParam); $i++){
			$arr[$i] = urldecode($urlParam[$i]);
		}
		$this->urlParam = $arr;
		
		$this->view = new View($controller,$action);
	}

	public function loadLanguageFile(){
        //Read the language file
        $language =  APP_PATH."static/Language/".$this->controller."/".$this->action."/".$this->action.".php";

        if(is_file($language)){
            $this->language = require($language);
        }else{
            exit("无法找到语言文件");
        }
    }
	
	public function assign($name,$value){
		$this->view->assign($name,$value);
	} 
	
	// 渲染视图
    public function rander(){
        $this->view->rander();
    }
}