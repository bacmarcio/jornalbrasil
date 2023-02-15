<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true" mysql02-farm70.uni5.net
$hostname_conexao = "localhost";
$database_conexao = "jornalbrasil";
$username_conexao = "root";
$password_conexao = "";
$conexao = new PDO("mysql:host=$hostname_conexao;dbname=$database_conexao", $username_conexao, $password_conexao);
//$conexao = mysql_connect($hostname_conexao, $username_conexao, $password_conexao)or trigger_error(mysql_error(),E_USER_ERROR); 
