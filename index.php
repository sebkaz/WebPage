<?php
require_once 'include/arrays.inc.php';
require_once 'include/functions.inc.php';

// Set default timezone
date_default_timezone_set('UTC');
// require_once 'db.inc.php';
// For my info only
$ip = $_SERVER['REMOTE_ADDR'];
$agent = "X".$_SERVER['HTTP_USER_AGENT'];
$data_czas=date("Y-m-d, H:i");

foreach ($system as $nazwa => $id)
    if (strpos($agent, $id)) $system = $nazwa;

foreach ($przegladarka as $nazwa => $id)
    if (strpos($agent, $id)) $przegladarka = $nazwa;

// wykonaj zapis do bazy o uzytkowniku
include 'include/infosave.inc.php';
include 'main.html.php';

?>
