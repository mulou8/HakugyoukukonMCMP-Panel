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

        return $info;
    }
}