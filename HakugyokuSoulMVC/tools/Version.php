<?php
/**
 * ProjectName: HakugyokuSoulMcServerPanel.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2018/10/21
 * Time: 9:37
 *
 * Copyright © 2018 SaigyoujiYuyuko. All rights reserved.
 */

namespace HakugyokuSoulMVC\tools;

class Version{
    public function getVersion(){
        $json = file_get_contents("https://version.saigyoujiyuyuko.top:9000/MCSMP/Version.json");
        $json = json_decode($json,true);

        return $json;
    }
}