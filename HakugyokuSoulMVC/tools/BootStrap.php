<?php
/**
 * ProjectName: YuyukoMcPanel.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2018/10/13
 * Time: 12:38
 *
 * Copyright © 2018 SaigyoujiYuyuko. All rights reserved.
 */
namespace HakugyokuSoulMVC\tools;

use HakugyokuSoulMVC\tools\CookieYJT;

$dir = scandir(APP_PATH."HakugyokuSoulMVC/tools");

for ($i = 3;$i < count($dir); $i++){
    require_once APP_PATH."HakugyokuSoulMVC/tools/".$dir[$i];
}

class BootStrap extends CookieYJT {
    protected function load(){

    }
}

