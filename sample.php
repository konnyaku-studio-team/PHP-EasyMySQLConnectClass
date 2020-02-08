<?php
include "mysql.connect.class.php";
$conn = new MySQLConn("site",port(such as 3306),"user","password","anydb",(debug mode)true);
// connect
// MySQL连接1
$conn->conn("site",port(such as 3306),"user","password","anydb");
// connect2
// MySQL连接2
$conn->choosedb("somedb");
// choose dome db.
// 选择数据库
$conn->charset();
// charset 
// Default UTF-8
// 字符集选择
// 默认UTF8
$conn->query("some sql");
// query sql
// 执行SQL语句
?>
