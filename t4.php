<?php

$string="hey ! nice to meet you";
print_r(str_word_count($string,2,'!'));
echo '<br>'.str_shuffle($string).'<br>';
echo substr(str_shuffle($string),0,7).'<br>';
echo strrev($string);
?>
