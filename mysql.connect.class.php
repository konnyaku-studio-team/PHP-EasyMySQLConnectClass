<?php
//English Edition
//MySQLConnect Class
//Easy For Connect & IUSD MySQL
//Powered by Konnyaku Studio
//Konnyaku Studio all rights reserviced ©2018-2020

//中文 简体 Chinese Simplified
//MySQL数据库连接类
//简单的链接和管理数据
//由蒟蒻工作室驱动
//蒟蒻工作室版权所有2018-2020

//中文 繁體 Chinese Taiwan
//MySQL數據庫連接類
//簡單的鏈接和管理數據
//由蒟蒻工作室驅動
//蒟蒻工作室版權所有2018-2020
class MySQLConn
{
	public $sqlconn;
	private $debug_mode;
	public function __construct($server="localhost",$port=3306,$uname="root",$password,$database,$debugmode){
		$sqlconn=mysqli_connect($server,$uname,$password,$database,$port);
		$debug_mode=$debugmode;
		if($debug_mode){
			if($sqlconn){
				echo "Mysql Connect Win!";
			}else{
				echo "Mysql Connect Failed.";
			}
		}
		// Use mysqli
		// connect server
		// sample:$connect=MySQLConn();$connect->conn("localhost","3306","root","aabbccdd","db_test23333XSWL");\\
        // Default server:localhost(127.0.0.1)
        //port:3306
        //uname:root
		//debug mode
		//Debug mode can debug~
	}
	public function conn($server="localhost",$port=3306,$uname="root",$password,$database)
	{
		$sqlconn=mysqli_connect($server,$uname,$password,$database,$port);
		if($debug_mode){
			if($sqlconn){
				echo "Mysql Connect Win!";
			}else{
				echo "Mysql Connect Failed.";
			}
		}
		// Use mysqli
		// connect server
		// sample:$connect=MySQLConn();$connect->conn("localhost","3306","root","aabbccdd","db_test23333XSWL");\\
        // Default server:localhost(127.0.0.1)
        //port:3306
        //uname:root
	}
	public function choosedb($database)
	{
		$a=mysqli_select_db($sqlconn);
		if($debug_mode){
			if($a){
				echo "Select DB Win!";
			}else{
				echo "Select DB Failed.";
			}
		}
        // Use mysqli
        // choose database
        // sample:$connect->choosedb("xswl2333");
	}
    public function charset($char="utf-8")
    {
        $sql="SET NAMES ".$char;
        $fetch=mysqli_query($sqlconn,$sql);
		if($debug_mode){
			if($fetch){
				echo "Charset Win!";
			}else{
				echo "Charset Failed.";
			}
		}
        // Use mysqli
        // update charset
        // sample:$connect->charset("XSWL");
        // Default:UTF-8
        // You can insert GBK,GB2312.......
    }
    public function query($sql)
    {
        $fetch=mysqli_query($sqlconn,$sql);
		if($debug_mode){
			if($fetch){
				echo "Query Win!";
			}else{
				echo "Query Failed.";
			}
		}
        // Use mysqli
        // query sql
        // Do not know SQL?
        // Please go to runoob.com
        // sample:$connect->query("SELECT * FROM XSWL2333");
    }
}
?>
