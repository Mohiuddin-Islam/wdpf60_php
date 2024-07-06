<?php 

$line = "vim is the greatest word processor ever created! Oh vim, how I
love thee!";
if (preg_match_all("/\bVim\b/i", $line, $match));

print "Match found!";
print_r($match);




?>