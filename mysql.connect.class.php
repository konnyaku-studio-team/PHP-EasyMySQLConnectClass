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
	private $sqlconn;
	public function conn($server="localhost",$port=3306,$uname="root",$password,$database)
	{
		$this->$sqlconn=mysqli_connect($server,$uname,$password,$database,$port);
		// Use mysqli
		// connect server
		// sample:$connect=MySQLConn();$connect->conn("localhost","3306","root","aabbccdd","db_test23333XSWL");\\
        // Default server:localhost(127.0.0.1)
        //port:3306
        //uname:root
	}
	public function choosedb($database)
	{
		mysqli_select_db($this->$sqlconn);
        // Use mysqli
        // choose database
        // sample:$connect->choosedb("xswl2333");
	}
    public function charset($char="utf-8")
    {
        $sql="SET NAMES ".$char;
        mysqli_query($this->$sqlconn,$sql);
        // Use mysqli
        // update charset
        // sample:$connect->charset("XSWL");
        // Default:UTF-8
        // You can insert GBK,GB2312.......
    }
    public function query($sql)
    {
        mysqli_query($this->$sqlconn,$sql);
        // Use mysqli
        // query sql
        // Do not know SQL?
        // Please go to runoob.com
        // sample:$connect->query("SELECT * FROM XSWL2333");
    }
}
?>