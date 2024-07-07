<?php

$path = 'files/user.txt';
//echo filesize($path);

$path = 'files/Beginning PHP and MySQL_ From Novice to Professional ( PDFDrive ).pdf';
$mb = filesize($path)/1024/1024;
echo round($mb, 2) . " MB";

?>