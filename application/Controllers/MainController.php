<?php
/**
 * ProjectName: YuyukoMcPanel.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2018/10/5
 * Time: 19:05
 *
 * Copyright © 2018 SaigyoujiYuyuko. All rights reserved.
 */

namespace application\controllers;

use application\models\MainModel;
use HakugyokuSoulMVC\base\Controller;

class MainController extends Controller{

    public function Show(){

        (new MainModel())->init();

        $this->rander();
    }

}