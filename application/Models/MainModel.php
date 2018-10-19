<?php
/**
 * ProjectName: YuyukoMcPanel.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2018/10/5
 * Time: 19:07
 *
 * Copyright © 2018 SaigyoujiYuyuko. All rights reserved.
 */

/**
 * 写在前面..
 */

// This code sucks, you know it and I know it.
// Move on and call me an idiot later.

/* You are not expected to understand this */

namespace application\models;

use HakugyokuSoulMVC\base\Model;

class MainModel extends Model{

    public function init(){
        //if the user already login
        if (@$_COOKIE['remember_token'] == null || isset($_COOKIE['remember_token']) == false){
            return;
        }

        //verification the token
        $status = $this->verifyLoginYJT(@$_COOKIE['remember_token']);

        if ($status != 0){
            return;
        }

        echo "<script>window.location.href='/Panel/Main'</script>";
    }

}