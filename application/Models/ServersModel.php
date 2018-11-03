<?php
/**
 * ProjectName: HakugyokuSoulMcServerPanel.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2018/10/27
 * Time: 7:51
 *
 * Copyright © 2018 SaigyoujiYuyuko. All rights reserved.
 */

namespace application\models;

use HakugyokuSoulMVC\base\Model;

class ServersModel extends Model{
    /**
     * @param array $url
     * @return string
     *
     * DAEMON==============================
     */
    public function AddDaemon(array $url){
        $url = array_values($url);

        if (count($url) != 5){
            return "-1";
        }

        for ($i = 0; $i < count($url); $i++){
            if (@$url[$i] == "" || @$url[$i] == null || @$url[$i] ==  " "){
                return "-1";
            }
        }

        $name = $url[0];
        $key = $url[1];
        $fqdn = $url[2];
        $ajaxHost = $url[3];
        $OS_type = $url[4];

        $this->setTable("daemon");
        $this->insert(array("name","key","fqdn","ajax_host","OS_type"),array($name,$key,$fqdn,$ajaxHost,$OS_type));

        return "0";
    }


    public function DaemonList(){
        $this->setTable("daemon");
        $arr = $this->searchFullArr("*","1=1");

        $html = "";
        for ($i = 0; $i < count($arr); $i++){
            $id = $arr[$i][0];

            $html = $html."<div class=\"daemon-list\" onclick='EditDaemon($id);'>";
            $html = $html."<p>".$arr[$i][1]."</p>";
            $html = $html."<p>".$arr[$i][3]."&nbsp;|&nbsp;OS:&nbsp;".$arr[$i][5]."&nbsp;x64/86</p>";
            $html = $html."</div>";
        }

        return $html;
    }


    public function DaemonInfo($url){
        $id = $url['id'];

        if ($url['id'] == null){
            return "-1";
        }

        $this->setTable("daemon");
        $json = $this->searchArr("*","id=$id");
        $json = json_encode($json);

        return $json;
    }


    public function DaemonUpdate(array $url){
        $url = array_values($url);

        if (count($url) != 6){
            return "-1";
        }

        for ($i = 0; $i < count($url); $i++){
            if (@$url[$i] == "" || @$url[$i] == null || @$url[$i] ==  " "){
                return "-1";
            }
        }

        $id = $url[5];
        $name = $url[0];
        $key = $url[1];
        $fqdn = $url[2];
        $ajaxHost = $url[3];
        $OS_type = $url[4];

        $this->setTable("daemon");
        $this->upDate("id=$id",array("name","key","fqdn","ajax_host","OS_type"),array($name,$key,$fqdn,$ajaxHost,$OS_type));

        return "0";
    }


    public function DeleteDaemon(array $url){
        $id = @$url['id'];

        if ($id == null || $id == "" || $id == " "){
            return "-1";
        }

        $this->setTable("servers");
        $response = $this->searchRow("*","deamon_id=$id");

        if ($response != 0){
            return "-2";
        }

        $this->setTable("daemon");
        $this->delete("id=$id");

        return 0;
    }


    /**
     * @param array $url
     * @return string
     *
     * Server==============================
     */

    public function GetDaemon(){
        $this->setTable("daemon");
        $arr = $this->searchFullArr("*","1=1");

        $html = "";
        for ($i = 0; $i < count($arr); $i++){
            $id = $arr[$i][0];
            $name = $arr[$i][1];
            $ip = $html.$arr[$i][3];

            $html = $html."<option id='$id'>";
            $html = $html."$name&nbsp;($ip)";
            $html = $html."</option>";
        }

        return $html;
    }


    public function ServerAdd(array $url){
        $url = array_values($url);

        if (count($url) != 8){
            return "-1";
        }

        for ($i = 0; $i < count($url); $i++){
            if (@$url[$i] == "" || @$url[$i] == null || @$url[$i] ==  " "){
                return "-1";
            }
        }

        if (is_numeric($url[1]) == false){
            return "-2";
        }

        if (is_numeric($url[5]) == false){
            return "-2";
        }

        if ($url[5] <= 1 || $url[5] > 65534){
            return "-4";
        }

        //条件判断
        $this->setTable("servers");
        $daemon_id = $url[7];
        $port = $url[5];

        $row = $this->searchRow("*","daemon_id='$daemon_id' AND port='$port'");

        if ($row >= 1){
            return "-3";
        }

        $uuid = $this->makeUUID();

        //获取daemon-ip
        $this->setTable("daemon");
        $ip = $this->searchContant("fqdn","id='".$url[7]."'");

        $this->setTable("servers");

        $this->insert(
            array("uuid","name","daemon_id","uuid_short","port","max_memory","run_cmd","stop_cmd","jar_name","ftp_pass","daemon_ip"),
            array($uuid[0],$url[0],$url[7],$uuid[1],$url[5],$url[1],$url[3],$url[4],$url[2],$url[6],$ip)
        );

        return "0";
    }


    public function GetServer(){
        $this->setTable("servers");
        $arr = $this->searchFullArr("*","1=1");

        $html = "";
        for ($i = 0; $i < count($arr); $i++){
            $id = $arr[$i][0];

            $html = $html."<div class=\"daemon-list\" onclick='EditServer($id);'>";
            $html = $html."<p>ID:&nbsp;".$arr[$i][0]."&nbsp;名称: ".$arr[$i][3]."</p>";
            $html = $html."<p>".$arr[$i][11].":".$arr[$i][5]."&nbsp;|&nbsp;Memory:&nbsp;".$arr[$i][6]."MB</p>";
            $html = $html."</div>";
        }

        return $html;
    }

    public function ServerInfo(array $url){
        if ($url['id'] == null){
            return "-1";
        }

        $id = $url['id'];

        $this->setTable("servers");
        $json = $this->searchArr("*","id=$id");
        $json = json_encode($json);

        return $json;
    }

    /**
     * @param array $url
     * @return string
     */
    public function ServerUpdate(array $url){
        $urlNum = array_values($url);

        if (count($urlNum) != 7){
            return "-1";
        }

        for ($i = 0; $i < count($urlNum); $i++){
            if (@$urlNum[$i] == "" || @$urlNum[$i] == null || @$urlNum[$i] ==  " "){
                return "-1";
            }
        }

        if (is_numeric($url["port"]) == false){
            return "-2";
        }

        if (is_numeric($url["memory"]) == false){
            return "-2";
        }

        if ($url["port"] <= 1 || $url["port"] > 65534){
            return "-4";
        }

        $id = $url['id'];

        $this->setTable("servers");
        $this->upDate("id=$id",array("name","port","max_memory","run_cmd","stop_cmd","jar_name"),array($url['name'],$url['port'],$url['memory'],$url['start'],$url['stop'],$url['core']));

        return "0";
    }


    public function DeleteServer(array $url){
        if ($url['id'] == null || $url['id'] == "undefined"){
            return "-1";
        }

        //删除数据库里面的服务器
        $this->setTable("servers");
        $this->delete("id='".$url['id']."'");

        /**
         * 重头戏!   远程Daemon删除服务器
         */


        //返回yes!
        return "0";
    }
}
