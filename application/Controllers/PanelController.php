<?php
/**
 * ProjectName: YuyukoMcPanel.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2018/10/13
 * Time: 14:54
 *
 * Copyright © 2018 SaigyoujiYuyuko. All rights reserved.
 */

namespace application\controllers;

use application\models\PanelModel;
use HakugyokuSoulMVC\base\Controller;

class PanelController extends Controller{
    public function __construct($controller, $action, $urlParam){
        parent::__construct($controller, $action, $urlParam);

        (new PanelModel())->userVerification(@$_COOKIE['remember_token']);
    }

    public function Main(){
        $this->loadLanguageFile();

        //信息
        $info = (new PanelModel())->getInfo();
        $this->assign("id",$info['user']['id']);
        $this->assign("username",$info['user']['username']);
        $this->assign("emailMd5",md5($info['user']['email']));

        //语言
        $this->assign("title",$this->language['WebInfo']["Title"]);
        $this->assign("home",$this->language['Items']["Home"]);
        $this->assign("systemInfo",$this->language['Items']["SystemInfo"]);
        $this->assign("systemSetting",$this->language['Items']["SystemSetting"]);
        $this->assign("serverList",$this->language['Items']["ServerList"]);
        $this->assign("addServer",$this->language['Items']["AddServer"]);
        $this->assign("userManagement",$this->language['Items']["UserManagement"]);

        $this->rander();
    }

    public function Home(){
        //数据变量
        $info = (new PanelModel())->getInfo();

        $this->assign("loginTimes",$info['login']['times']);
        $this->assign("loginFailureTimes",$info['login']['failure_times']);
        $this->assign("authenticationFailure",$info['login']['AuthenticationFailure']);

        //用户
        $this->assign("id",$info['user']['id']);
        $this->assign("username",$info['user']['username']);
        $this->assign("email",$info['user']['email']);
        $this->assign("loginTimes",$info['user']['login_times']);
        $this->assign("loginFailure",$info['user']['login_failure']);

        //版本
        $info = (new PanelModel())->Version();
        $this->assign("newVersion",$info['Version']);
        $this->assign("type",$info['type']);
        $this->assign("releaseDate",$info['ReleaseDate']);


        //语言
        $this->loadLanguageFile();

        $this->assign("MainInfoTitle",$this->language['Home']['MainInfo']['Title']);
        $this->assign("DeamonNumber",$this->language['Home']['MainInfo']['DeamonNumber']);
        $this->assign("McServerNumber",$this->language['Home']['MainInfo']['McServerNumber']);
        $this->assign("LoginTimes",$this->language['Home']['MainInfo']['LoginTimes']);
        $this->assign("FailureTimes",$this->language['Home']['MainInfo']['FailureTimes']);
        $this->assign("TokenFailureTimes",$this->language['Home']['MainInfo']['TokenFailureTimes']);

        $this->assign("UserTitle",$this->language['Home']['User']['Title']);
        $this->assign("UserID",$this->language['Home']['User']['UserID']);
        $this->assign("Username",$this->language['Home']['User']['Username']);
        $this->assign("mail",$this->language['Home']['User']['mail']);

        $this->assign("VerTitle",$this->language['Home']['Version']['Title']);
        $this->assign("NewVer",$this->language['Home']['Version']['NewVer']);
        $this->assign("VerType",$this->language['Home']['Version']['VerType']);
        $this->assign("ReleaseDate",$this->language['Home']['Version']['ReleaseDate']);
        $this->assign("NowVer",$this->language['Home']['Version']['NowVer']);


        $this->rander();
    }


    public function SystemInfo(){
        $this->rander();
    }
}