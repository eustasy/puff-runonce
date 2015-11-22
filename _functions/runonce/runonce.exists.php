<?php

function Puff_Runonce_Exists($Connection, $Runonce, $Active = true) {
	$Runonce = htmlentities($Runonce, ENT_QUOTES, 'UTF-8');
	$SQL = 'SELECT * FROM `Runonces` WHERE `Runonce`=\''.$Runonce.'\'';
	if ( $Active ) {
		$SQL .= ' AND `Active`=\'1\'';
	}
	$SQL .= ';'
	$Result = mysqli_fetch_count($Connection, $SQL);
	return $Result;
}
