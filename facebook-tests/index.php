<?php

$userId = "mraets";
$url = "http://graph.facebook.com/".$userId;
$pageContent = file_get_contents($url);
$parsedJson  = json_decode($pageContent);
$theName = $parsedJson->name; // Romanos Fessas

echo "The name: <b>" . $theName . "</b>";

?>
