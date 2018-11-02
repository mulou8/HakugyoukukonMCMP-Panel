<?php
/**
 * ProjectName: HakugyokuSoulMcServerPanel.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2018/11/2
 * Time: 22:10
 *
 * Copyright © 2018 SaigyoujiYuyuko. All rights reserved.
 */

namespace HakugyokuSoulMVC\tools;

class UuidMaker{
    public function makeUUID(){
        $letterArr = array("a","b","c","d","e","f");

        $uuid = "";
        for ($i = 0; $i < 4; $i++){
            for ($j = 0; $j < 6; $j++){
                $numOrLetter = rand(0,4);

                if ($numOrLetter <= 2){
                    $letter = $letterArr[rand(0,5)];
                    $uuid .= $letter;
                }

                if ($numOrLetter > 2){
                    $uuid .= rand(0,9);
                }

            }

            $uuid .= "-";
        }

        $uuid = substr($uuid,0,strlen($uuid) - 1);

        return array($uuid,substr($uuid,0,6));
    }
}