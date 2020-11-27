<?php
$sql_cert = "Select * from certificates order by year";
echo show_certificates($file_db, $sql_cert);
?>
