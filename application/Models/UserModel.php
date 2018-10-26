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

/**
 * 亲爱的维护者：
 *
 * 如果你尝试了对这段程序进行'优化'
 * 下面这个计数器的个数用来对后来人进行警告
 *
 * 浪费在这里的总时间 = 8h
 */

/**
 * You may think you know what the following code does.
 * But you dont. Trust me.
 * Fiddle with it, and youll spend many a sleepless
 * night cursing the moment you thought youd be clever
 * enough to "optimize" the code below.
 * Now close this file and go play with something else.
 */

namespace application\models;

use HakugyokuSoulMVC\base\Model;

class UserModel extends Model{
    public function Register($url){

    }

    public function Login($username,$password){
        // This code sucks, you know it and I know it.
        // Move on and call me an idiot later.


        //get info
        $ip = $_SERVER['REMOTE_ADDR'];

        date_default_timezone_set("PRC");
        $date = date("Y/m/d H:i:s",time());

        // Set table
        // Magic. Do not touch.
        $this->setTable("user");

        // Get password
        $password_mysql = $this->searchContant("password","username='$username'");
        $id = $this->searchContant("id","username='$username'");


        // Verification
        if (password_verify($password,$password_mysql) == false){
            //Write in to the login_data
            $this->setTable("login_data");
            $this->insert(array("user_id","last_login_ip","last_login_date","status","login_password","login_username"),array($id,$ip,$date,-1,$password,$username));

            return "-1";
        }

        $yjt = base64_encode($this->makeLoginYJT("Login",3600*4,$username,$password));
        setcookie("remember_token",$yjt,time() + 3600*4,"/");

        //Write in to the login_data
        $this->setTable("login_data");
        $this->insert(array("user_id","last_login_ip","last_login_date","login_password","login_username"),array($id,$ip,$date,"********",$username));

        return "0";
    }

    public function LoginOut(){
        setcookie("remember_token","",-999,"/");
        echo "<script>window.location.href = '/'</script>";
    }

}