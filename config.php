<?php

define('DB_SERVER', 'ec2-52-70-15-120.compute-1.amazonaws.com');
define('DB_USERNAME', 'wkvuncwgqlgdqd');
define('DB_PASSWORD', '742b848c49a358e4d449b68af070c7aec89ecaa93d30f294dcf8372802181599');
define('DB_NAME', 'drjusr443eib0');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
