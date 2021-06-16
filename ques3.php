<?php
/* start third ques. */
$text = "welcome to php course";
echo "length of this text=>'".$text."' is: ".strlen($text);
echo "<br>";
echo "reverse of this text=>'".$text."' is: ".strrev($text);
echo "<br>";
echo "count of words in this text=>'".$text."' is: ".str_word_count($text);
echo "<br>";
echo "replace welcome word with hello in this text=>'".$text."' is: ".str_replace("hello","welcome",$text);
echo "<br>";
echo "position of php word in this text=>'".$text."' is: ".strpos($text,"php");


/* end third ques. */

?>