<!DOCTYPE html>

<html>
    <head>
    <style>
        h1 {
            padding-left: 0px;
            font-family: verdana
                ;
            text-align: left;
            font-size: 30px;
            color: white;
            background: linear-gradient(to right, black, white);
        }
            </style>

        </head>

<?php

echo "<h1>Pune</h1>";


$doc = new DOMDocument();
$doc->load('http://weather.yahooapis.com/forecastrss?p=INXX0102&u=c');
$channel = $doc->getElementsByTagName("channel");
foreach($channel as $chnl)
{
$item = $chnl->getElementsByTagName("item");
foreach($item as $itemgotten)
{
$describe = $itemgotten->getElementsByTagName("description");
$description = $describe->item(0)->nodeValue;
echo $description;
}
}
?>

</html>