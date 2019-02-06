<?php
	$Connect_Host	=	mssql_connect("agrdb01","dev","dev@agrdb01"); //AGRDB01
	$Connect_DB		=	mssql_select_db("INTRANET");
	mssql_query("SET NAMES utf8");

?>