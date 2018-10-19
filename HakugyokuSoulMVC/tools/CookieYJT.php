<?php
/**
 * ProjectName: YuyukoMcPanel.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2018/10/13
 * Time: 12:49
 *
 * Copyright © 2018 SaigyoujiYuyuko. All rights reserved.
 */
namespace HakugyokuSoulMVC\tools;

// This code sucks, you know it and I know it.
// Move on and call me an idiot later.

class CookieYJT{

    // This function has been here since 1987. DON'T FXXKING TOUCH IT
    public function makeLoginYJT($location,$timeLimit,$username,$password){
        $time = time();
        $key = base64_encode($time."|".APP_KEY."|".$username."|".$password);
        $signature = "SaigyoujiYuyuko";
        $expire = $time + $timeLimit;

        $json = array(
            "time" => $time,
            "expire" => $expire,
            "key" => $key,
            "signature" => $signature,
            "location" => $location
        );

        /* Please work */
        return json_encode($json);
    }

    public function verifyLoginYJT($yjt){
        $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_PORT);

        $yjt = base64_decode($yjt);
        $yjt = json_decode($yjt,true);

        //value verification
        if ($yjt == null || $yjt == "" || isset($yjt) == false){
            setcookie("remember_token","",-999,"/");
            echo "<script>top.location.href = '/'</script>";
            return "-1";   //time out
        }

        //time verification
        /* Please work */
        if ($yjt['expire'] < time()){
            setcookie("remember_token","",-999,"/");
            echo "<script>top.location.href = '/'</script>";
            return "-1";   //time out
        }

        // key Verification
        $arr = explode(
            "|",
            base64_decode($yjt['key'])
        );

        if ($yjt['time'] != $arr[0]){
            setcookie("remember_token","",-999,"/");
            echo "<script>top.location.href = '/'</script>";
            return "-1";   //time not the same
        }

        if ($arr[1] != APP_KEY){
            setcookie("remember_token","",-999,"/");
            echo "<script>top.location.href = '/'</script>";
            return "-2";  // key is not same
        }

        $sql = "SELECT * FROM `user` WHERE username='".$arr[2]."'";

        if (mysqli_connect_error()) {
            return ("数据库连接失败");
        }

        $run = mysqli_query($conn, $sql);

        $respont = mysqli_fetch_array($run);
        $pass = $respont["password"];
        $user_id = $respont["id"];
        $username = $respont["username"];


        //get info
        $ip = $_SERVER['REMOTE_ADDR'];

        date_default_timezone_set("PRC");
        $date = date("Y/m/d H:i:s",time());


        if (password_verify($arr[3],$pass) == false){
            //write into mysql
            $sql = "INSERT INTO `failure_token_data`(`user_id`,`failure_date`,`failure_ip`,`token_context`,`reson`,`username`) VALUES ('$user_id','$date','$ip','".$_COOKIE['remember_token']."','password wrong','$username')";
            mysqli_query($conn, $sql);

            setcookie("remember_token","",-999,"/");



            //echo "<script>top.location.href = '/'</script>";
            mysqli_close($conn);
            return "-3"; // wrong password
        }

        mysqli_close($conn);
        return 0; //return 0
    }

    public function getYjtInfo($yjt){
        $yjt = base64_decode($yjt);
        $yjt = json_decode($yjt,true);

        $arr = explode(
            "|",
            base64_decode($yjt['key'])
        );


        $info['token']['time'] = $yjt['time'];
        $info['token']['expire'] = $yjt['expire'];
        $info['token']['signature'] = $yjt['signature'];
        $info['token']['location'] = $yjt['location'];
        $info['token']['key']['username'] = $arr[2];
        $info['token']['key']['password'] = $arr[3];

        return $info;
    }



}