<?php
	require_once __DIR__.'/_puff/sitewide.php';
	$Page['Type']  = 'Test';
	
	$Connection = $Sitewide['Database']['Connection'];
	$Username = '__AUTOTESTING__';
	
	echo 'Puff_Runonce_Create'.PHP_EOL;
	$Result = Puff_Runonce_Create($Connection);
	var_dump($Result);
	echo 'Puff_Runonce_Exists'.PHP_EOL;
	$Result = Puff_Runonce_Exists($Connection, $Result['Runonce']);
	var_dump($Result);
	echo 'Puff_Runonce_Disable'.PHP_EOL;
	$Result = Puff_Runonce_Disable($Connection, $Result['Runonce']);
	var_dump($Result);
	echo 'Puff_Runonce_Exists'.PHP_EOL;
	$Result = Puff_Runonce_Exists($Connection, $Result['Runonce']);
	var_dump($Result);
	echo 'Puff_Runonce_Exists (not active)'.PHP_EOL;
	$Result = Puff_Runonce_Exists($Connection, $Result['Runonce'], false);
	var_dump($Result);
