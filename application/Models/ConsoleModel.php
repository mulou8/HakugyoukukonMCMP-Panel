<?php
/**
 * ProjectName: HakugyokuSoulMcServerPanel.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2018/11/3
 * Time: 19:47
 *
 * Copyright © 2018 SaigyoujiYuyuko. All rights reserved.
 */

namespace application\models;

use HakugyokuSoulMVC\base\Model;

class ConsoleModel extends Model{
    /* 没有用的中间件
    public function Sender(array $url){
        $sendUrl = $url['url'];
        array_shift($url);

        //获取
        $post = json_decode($url['Content'],true);

        $curl = curl_init();
        curl_setopt($curl,CURLOPT_URL,$sendUrl);
        curl_setopt($curl,CURLOPT_POST,1);
        curl_setopt($curl,CURLOPT_HEADER,0);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($curl,CURLOPT_POSTFIELDS,$post);
        curl_setopt($curl, CURLOPT_HTTPHEADER, "Content-Type: multipart/form-text;");
        $data = curl_exec($curl);
        curl_close($curl);

        return $post;
    }*/


    public function GetServerInfo($id){
        //info p1
        $this->setTable("servers");

        $sInfoArr = $this->searchArr("*","id='$id'");
        $uuid = $sInfoArr['uuid'];
        $daemonId = $sInfoArr['daemon_id'];

        $cmd = $sInfoArr['run_cmd'];
        $core = $sInfoArr['jar_name'];
        $stop = $sInfoArr['stop_cmd'];
        $memory = $sInfoArr['max_memory'];

        $cmd = str_replace("{maxram}",$memory,$cmd);
        $cmd = str_replace("{jar}",$core,$cmd);

        //daemon info
        $this->setTable("daemon");

        $dInfoArr = $this->searchArr("*","id='$daemonId'");
        $ajax = $dInfoArr['ajax_host'];
        $key = $dInfoArr['key'];

        $json = array(
            "uuid" => $uuid,
            "ajax" => $ajax,
            "key" => $key,
            "runcmd" => $cmd,
            "stop" => $stop
        );

        return json_encode($json);
    }
}