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
    /*
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
}