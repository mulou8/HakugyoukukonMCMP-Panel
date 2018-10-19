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

namespace application\models;

use HakugyokuSoulMVC\base\Model;

class PanelModel extends Model{
    public function getInfo(){
        /**
         * 获取登录信息
         */

        //登录次数
        $this->setTable("login_data");
        $info['login']['times'] = $this->searchRow("*","1=1");

        //登录失败次数
        $info['login']['failure_times'] = $this->searchRow("*","status=-1");

        //token验证失败
        $this->setTable("failure_token_data");
        $info['login']['AuthenticationFailure'] = $this->searchRow("*","1=1");


        /**
         * 用户
         */

        //信息
        $tokenInfo = $this->getYjtInfo($_COOKIE['remember_token']);

        //用户名
        $this->setTable("user");
        $info['user']['id'] = $this->searchContant("id","username='".$tokenInfo['token']['key']['username']."'");
        $info['user']['username'] = $tokenInfo['token']['key']['username'];
        $info['user']['email'] = $this->searchContant("email","username='".$tokenInfo['token']['key']['username']."'");

        $this->setTable("login_data");
        $info['user']['login_times'] = $this->searchRow("*","login_username='".$tokenInfo['token']['key']['username']."'");
        $info['user']['login_failure'] = $this->searchRow("*","login_username='".$tokenInfo['token']['key']['username']."' AND status=-1");




        return $info;
    }
}