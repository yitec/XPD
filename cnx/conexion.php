<?php
function conectar(){
	$_SESSION['connectid'] = mysql_connect("localhost","root","1q2w3e"); 	
	mysql_select_db("bd_xpd");
	//$_SESSION['connectid'] = mysql_connect("68.178.142.15","bdxpd2013","Bdxpd%2013"); 
	//mysql_select_db("bdxpd2013");	
}	
function desconectar(){
	mysql_close();
}
?>