<?php
	$nome=$_GET['nome'];
	$cognome=$_GET['cognome'];
	$eta=$_GET['eta'];
	if($eta >= 18) echo "$nome $cognome: Maggiorenne";
    else echo "$nome $cognome: Minorenne";
