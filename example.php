<?php
/***************************************************************************************
			Examples Using Class Utf8DecodeFrenchAccentsEncoded
***************************************************************************************/

 require_once 'Utf8DecodeFrenchAccentsEncoded.php';


$classDecodeUtf8Fr = new Utf8DecodeFrenchAccentsEncoded();

$example1 ="PHPCLASSES est dÃ©jÃ  le meilleur site.";

$example2 ="PHPCLASSES est déjà le meilleur site.";

$example3 ="PHPCLASSES est d&eacute;j&agrave;  le meilleur site.";

$example4 ="PHPCLASSES est d0233j0225  le meilleur site.";

echo "-------------------------------- <b>Before using Class Utf8DecodeFrenchAccentsEncoded</b> ---------------------------<br><br>";

echo "<b>Example1</b> ::  ".$example1."<br><br>";

echo "<b>Example2</b> ::  ".$example2."<br><br>";

echo "<b>Example3</b> ::  ".$example3."<br><br>";

echo "<b>Example4</b> ::  ".$example4."<br><br>";

echo "-------------------------------- <b>After	using Class Utf8DecodeFrenchAccentsEncoded</b> -----------------------------<br><br>";

echo "<b>Example1 with preg_replace</b> ::  ".$classDecodeUtf8Fr->fr_utf8_decode_with_preg_replace($example1)."<br><br>";

echo "<b>Example1 with str_replace</b> ::  ".$classDecodeUtf8Fr->fr_utf8_decode_str_replace($example1)."<br><br>";

echo "<b>Example2</b> ::  ".$classDecodeUtf8Fr->fr_utf8_decode_with_preg_replace($example2)."<br><br>";

echo "<b>Example3</b> ::  ".$classDecodeUtf8Fr->fr_utf8_decode_with_preg_replace($example3)."<br><br>";

echo "<b>Example4</b> ::  ".$classDecodeUtf8Fr->fr_utf8_decode_with_preg_replace($example4)."<br><br>";


