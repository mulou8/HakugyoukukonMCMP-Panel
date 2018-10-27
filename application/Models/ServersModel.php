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
}
