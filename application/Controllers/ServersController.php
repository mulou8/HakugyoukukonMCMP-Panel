<?php
/**
 * ProjectName: HakugyokuSoulMcServerPanel.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2018/10/27
 * Time: 7:50
 *
 * Copyright © 2018 SaigyoujiYuyuko. All rights reserved.
 */

namespace application\controllers;

use application\models\ServersModel;
use HakugyokuSoulMVC\base\Controller;

class ServersController extends Controller{
    public function __construct($controller, $action, $urlParam)
    {
        parent::__construct($controller, $action, $urlParam);
        (new ServersModel())->userVerification(@$_COOKIE['remember_token']);
    }

    public function Daemon(){
        $this->assign("DaemonList",(new ServersModel())->DaemonList());

        $this->rander();
    }

    public function DaemonAdd(){
        echo (new ServersModel())->AddDaemon($_POST);
    }
}