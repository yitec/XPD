<?php
function conectar(){
	$_SESSION['connectid'] = mysql_connect("localhost","root","1q2w3e"); 	
	mysql_select_db("bd_xpd");
	//$_SESSION['connectid'] = mysql_connect("localhost","seguray1_xpd","Xpd_2013"); 
	//mysql_select_db("seguray1_bd_xpd");	
}	
function desconectar(){
	mysql_close();
}
?>