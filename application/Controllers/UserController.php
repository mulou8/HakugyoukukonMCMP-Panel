<?php
/**
 * ProjectName: YuyukoMcPanel.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2018/10/7
 * Time: 9:30
 *
 * Copyright © 2018 SaigyoujiYuyuko. All rights reserved.
 */


namespace application\controllers;

use HakugyokuSoulMVC\base\Controller;
use application\models\UserModel;

class UserController extends Controller{
    public function Register(){
        //(new UserModel())->Register($this->urlParam);
    }

    public function Login(){
        $username = @$_POST["username"];
        $password = @$_POST["password"];

        echo (new UserModel())->Login($username,$password);
    }

    public function LoginOut(){
        (new UserModel())->LoginOut();
    }

}