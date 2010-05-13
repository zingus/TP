#!/usr/bin/env php
<?php
$fp=fopen('php://stdout','w');
ob_start();
echo "ECHO!\n";
fwrite($fp,"FWRITE!\n");
ob_end_clean();
fclose($fp);

// looks like this works...
