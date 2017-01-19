<?php
    $base = utf8_decode(file_get_contents('base.json'));
    //var_dump($base);
    //$base = json_decode($base,true);
 //var_dump($base);
/*
echo "<br>";
  $json = '{"a":"1","b":"2","c":"3","d":"4","e":"5"}';
  var_dump($json);
echo "<br>";

$json = json_decode($json, true);
    var_dump($json);
echo "<br>";
*/

$baseJson = json_decode($base, true);
    //var_dump($baseJson);
echo "<br>";



?>    