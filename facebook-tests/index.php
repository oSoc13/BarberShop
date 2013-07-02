<?php
include 'getid.php';
//$userId = "mraets";
//$url = "http://graph.facebook.com/".$userId;
$url = "http://graph.facebook.com/".$yourID;
$pageContent = file_get_contents($url);
$parsedJson  = json_decode($pageContent);
$theName = $parsedJson->name; // Romanos Fessas

echo "You, <b>" . $theName . "</b> are AWESOME!";

?>
