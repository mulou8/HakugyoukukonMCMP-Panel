<?php
namespace HakugyokuSoulMVC\db;
use HakugyokuSoulMVC\tools\BootStrap;

include_once APP_PATH."HakugyokuSoulMVC/tools/BootStrap.php";

class HakugyokuSoulSql extends BootStrap{
    protected $table;
    protected $db;
    protected $host;
    protected $password;
    protected $username;
    protected $port;


    /**
     * @param $what 搜索的项  建议*
     * @param $conditions 条件
     *
     * @return int|string 行号
     */

    protected function searchRow($what, $conditions){
        $table = $this->table;

        $sql = "SELECT $what FROM `$table` WHERE ".$conditions;

        $con = @mysqli_connect($this->host,$this->username,$this->password,$this->db,$this->port);

        if(mysqli_connect_error()){
            return("数据库连接失败");
        }

        $run = mysqli_query($con,$sql);

        $respont = @mysqli_num_rows($run);
        return $respont;

        mysqli_close($con);
    }


    /**
     * @param $what 搜索的项  建议*
     * @param $conditions 条件
     *
     * @return array|null|string 搜索到的数组
     */

    protected function searchFullArr($what, $conditions){
        $table = $this->table;

        $sql = "SELECT $what FROM `$table` WHERE " . $conditions;

        $con = @mysqli_connect($this->host, $this->username, $this->password, $this->db, $this->port);

        if (mysqli_connect_error()) {
            return ("数据库连接失败");
        }

        $run = mysqli_query($con, $sql);

        $respont = mysqli_fetch_all($run);
        return $respont;

        mysqli_close($con);
    }

    /**
     * @param $what 搜索的项  建议*
     * @param $conditions 条件
     *
     * @return array|null|string 搜索到的数组
     */

    protected function searchArr($what, $conditions){
        $table = $this->table;

        $sql = "SELECT $what FROM `$table` WHERE " . $conditions;

        $con = @mysqli_connect($this->host, $this->username, $this->password, $this->db, $this->port);

        if (mysqli_connect_error()) {
            return ("数据库连接失败");
        }

        $run = mysqli_query($con, $sql);

        $respont = mysqli_fetch_array($run);
        return $respont;

        mysqli_close($con);
    }

    /**
     * @param $what 数组元素
     * @param $conditions 条件
     *
     * @return array|null|string 查询到的列
     */

    protected function searchContant($what, $conditions){
        $table = $this->table;

        $sql = "SELECT * FROM `$table` WHERE " . $conditions;

        $con = @mysqli_connect($this->host, $this->username, $this->password, $this->db, $this->port);

        if (mysqli_connect_error()) {
            return ("数据库连接失败");
        }

        $run = mysqli_query($con, $sql);

        $respont = mysqli_fetch_array($run);
        $respont = $respont["$what"];

        return $respont;

        mysqli_close($con);
    }


    /**
     * @param array $itemArr 要插入的项名称
     * @param array $contentArr 内容
     *
     * @return bool|string 结果
     */

    protected function insert(array $itemArr, array $contentArr){
        $table = $this->table;

        $items = "";
        $contents = "";

        //分解数组
        for ($i = 0; $i < count($itemArr); $i++) {
            $itemMain = $itemArr[$i];

            $items = $items . "`$itemMain`,";
        }

        $items = substr($items, 0, strlen($items) - 1);

        //分解数组
        for ($i = 0; $i < count($contentArr); $i++) {
            $contentArrMain = $contentArr[$i];

            $contents = $contents . "'$contentArrMain',";
        }

        $contents = substr($contents, 0, strlen($contents) - 1);

        //创建mysql语句
        $sql = "INSERT INTO `$table`($items) VALUES ($contents)";


        //执行
        $con = @mysqli_connect($this->host,$this->username,$this->password,$this->db,$this->port);

        if(mysqli_connect_error()){
            return("-10");
        }

        mysqli_query($con, $sql);

        if(mysqli_affected_rows($con) == "-1"){
            mysqli_close($con);
            return FALSE;
        }

        mysqli_close($con);
        return TRUE;
    }


    /**
     * @param $content 条件
     *
     * @return bool|string 结果
     */

    protected function delete($content){
        $table = $this->table;
        $sql = "DELETE FROM `$table` WHERE $content";

        $con = @mysqli_connect($this->host,$this->username,$this->password,$this->db,$this->port);
        if(mysqli_connect_error()){
            return("数据库连接失败");
        }

        mysqli_query($con, $sql);

        if (mysqli_affected_rows($con) == "-1") {
            mysqli_close($con);
            return FALSE;
        }

        mysqli_close($con);
        return TRUE;
    }


    /**
     * @param $conditions 条件
     * @param array $itemArr 要插入的项名称
     * @param array $contentArr 更新的内容
     *
     * @return bool|string 结果
     */
    protected function upDate($conditions, array $itemArr, array $contentArr){
        $table = $this->table;

        //创建添加内容
        $upDateMain = "";
        for ($i = 0; $i < count($itemArr); $i++) {
            $item = $itemArr[$i];
            $contentFor = $contentArr[$i];

            $upDateMain = $upDateMain . "`$item`='$contentFor',";
        }

        //去除最后的分号
        $upDateMain = substr($upDateMain, 0, strlen($upDateMain) - 1);

        $sql = "UPDATE `$table` SET " . $upDateMain . " WHERE " . $conditions;

        //连接数据库
        $con = @mysqli_connect($this->host, $this->username, $this->password, $this->db, $this->port);
        if (mysqli_connect_error()) {
            return ("数据库连接失败");
        }

        //执行
        mysqli_query($con, $sql);

        if (mysqli_affected_rows($con) == "-1") {
            mysqli_close($con);
            return FALSE;
        }

        mysqli_close($con);
        return TRUE;
    }
}