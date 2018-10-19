<?php
namespace HakugyokuSoulMVC\base;

use HakugyokuSoulMVC\db\HakugyokuSoulSql;
use HakugyokuSoulMVC;

include_once(APP_PATH."HakugyokuSoulMVC/db/HakugyokuSoulSql.php");
include_once(APP_PATH."HakugyokuSoulMVC/HakugyokuSoulMVC.php");

class Model extends HakugyokuSoulSql{

	function __construct() {
		$this->db = DB_NAME;
		$this->host = DB_HOST;
		$this->username = DB_USER;
		$this->password = DB_PASS;
		$this->port = DB_PORT;
		$this->load();
	}


    protected function setTable($table){
		$this->table = $table;
	}

	public function userVerification($yjt){
	    $this->verifyLoginYJT($yjt);
    }
	
}