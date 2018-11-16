<?php
/**
 * ProjectName: HakugyokuSoulMcServerPanel.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2018/11/16
 * Time: 21:33
 *
 * Copyright © 2018 SaigyoujiYuyuko. All rights reserved.
 */

if (count($argv) < 4){
    die("[Usage] php UserAdd.php Username Password mail");
}

$username = $argv[1];
$pass = password_hash($argv[2],PASSWORD_BCRYPT);
$mail = $argv[3];

$config = parse_ini_file("Conf/Conf.ini",true);

$conn = mysqli_connect($config['Mysql']['Host'],$config['Mysql']['Username'],$config['Mysql']['Password'],$config['Mysql']['Dbname'],$config['Mysql']['Port']);

$sql = "INSERT INTO `user`(`username`,`password`,`email`) VALUES ('$username','$pass','$mail')";

mysqli_query($conn,$sql);

mysqli_close($conn);

echo "User add successfully";