<?php
/**
 * ProjectName: HakugyokuSoulMCSM.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2018/10/14
 * Time: 13:05
 *
 * Copyright © 2018 SaigyoujiYuyuko. All rights reserved.
 */

define("APP_KEY","SaigyoujiYuyuko-HakugyokuSoulMVC&HMCP::2018107100337");

include_once __DIR__."/HakugyokuSoulMVC/tools/CookieYJT.php";
$yjt = new \HakugyokuSoulMVC\tools\CookieYJT();
echo base64_encode($yjt->makeLoginYJT("Login","3600","SaigyoujiYuyuko","123123a"));
