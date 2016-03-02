<?php

$SQL = 'DELETE FROM `Runonces` WHERE `Active`=\'0\'';
mysqli_query($Sitewide['Database']['Connection'], $SQL);
