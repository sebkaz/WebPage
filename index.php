<?php
require_once 'include/arrays.inc.php';
require_once 'include/functions.inc.php';

// Set default timezone
date_default_timezone_set('UTC');

// For my info only
$ip = $_SERVER['REMOTE_ADDR'];
$agent = "X".$_SERVER['HTTP_USER_AGENT'];
$data_czas=date("Y-m-d, H:i");
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
$hostname=gethostbyaddr($ip);

foreach ($system as $nazwa => $id)
    if (strpos($agent, $id)) $system = $nazwa;

foreach ($browser as $nazwa => $id)
    if (strpos($agent, $id)) $browser = $nazwa;

// wykonaj zapis do bazy o uzytkowniku
include 'include/infosave.inc.php';
include 'main.html.php';

?>