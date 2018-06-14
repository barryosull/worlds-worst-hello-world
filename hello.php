<?php

require_once __DIR__."/vendor/autoload.php";

class PerfectlyFineClass {

}

function fuckupStored($stored): string
{
	return str_replace("PerfectlyFineClass", "TrulyFuckedUpClass", $stored);
}

$stored = serialize(new PerfectlyFineClass());

$value = unserialize($stored);

$fuckedUpstored = fuckupStored($stored);

$uhoh = unserialize($fuckedUpstored);

$name = strtolower(str_replace("_", " ", get_class($uhoh)));

$parts = str_split($name);

ob_start();

echo $parts[3];
echo $parts[13];
echo $parts[12];
echo $parts[18];
echo $parts[9];
echo $parts[0];

$html = file_get_contents("https://en.wikipedia.org/wiki/2018_FIFA_World_Cup");

$pos = strpos($html, "Worl");

echo strtolower(substr($html, $pos, 5));

$string = ob_get_contents();

ob_clean();

echo ucfirst($string);



