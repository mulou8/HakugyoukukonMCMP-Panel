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
    public function __construct($controller, $action, $urlParam){
        parent::__construct($controller, $action, $urlParam);
        (new ServersModel())->userVerification(@$_COOKIE['remember_token']);
    }

    /**
     * Daemon==============================
     */
    public function Daemon(){
        $this->assign("DaemonList",(new ServersModel())->DaemonList());

        $this->rander();
    }

    public function DaemonAdd(){
        echo (new ServersModel())->AddDaemon($_POST);
    }

    public function DaemonInfo(){
        echo((new ServersModel())->DaemonInfo($_POST));
    }

    public function DaemonUpdate(){
        echo((new ServersModel())->DaemonUpdate($_POST));
    }

    public function DeleteDaemon(){
        echo((new ServersModel())->DeleteDaemon($_POST));
    }


    /**
     * Server====================================
     */

    public function Server(){
        $this->assign("daemon",((new ServersModel())->GetDaemon()));
        $this->assign("ServerList",(new ServersModel())->GetServer());

        $this->rander();
    }

    public function ServerAdd(){
        echo((new ServersModel())->ServerAdd($_POST));
    }

    public function GetServerList(){
        echo (new ServersModel())->GetServerList();
    }

    public function ServerInfo(){
        echo((new ServersModel())->ServerInfo($_POST));
    }

    public function ServerUpdate(){
        echo((new ServersModel())->ServerUpdate($_POST));
    }

    public function DeleteServer(){
        echo((new ServersModel())->DeleteServer($_POST));
    }
}