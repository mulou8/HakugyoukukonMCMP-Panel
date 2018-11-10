<?php
/**
 * ProjectName: HakugyokuSoulMcServerPanel.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2018/11/3
 * Time: 19:44
 *
 * Copyright © 2018 SaigyoujiYuyuko. All rights reserved.
 */

namespace application\controllers;

use HakugyokuSoulMVC\base\Controller;
use application\models\ConsoleModel;

class ConsoleController extends Controller{
    public function __construct($controller, $action, $urlParam){
        parent::__construct($controller, $action, $urlParam);
        (new ConsoleModel())->userVerification(@$_COOKIE['remember_token']);
    }

    public function Main(){
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:*');

        $this->rander();
    }

    public function GetServerInfo(){
        echo (new ConsoleModel())->GetServerInfo($_POST['id']);
    }

    /*
    public function Sender(){
        print_r((new ConsoleModel())->Sender($_POST));
    }*/
}