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
use HakugyokuSoulMVC\tools\UuidMaker;

include_once APP_PATH."HakugyokuSoulMVC/tools/UuidMaker.php";

class Version extends UuidMaker{
    public function getVersion(){
        $json = @file_get_contents("https://version.saigyoujiyuyuko.top:9000/MCSMP/Version.json");
        if ($json == null){
            $json = json_encode(array(
                'Version'=>"? [Fail to get Version]",
                'type'=>"N/A",
                'ReleaseDate'=>"N/A"
            ));
        }

        $json = json_decode($json,true);

        return $json;
    }
}