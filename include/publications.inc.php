<?php
$sql_pub = "Select p1.id, p1.title, p1.authors, p2.state, p1.journal, p1.vol , p1.no, p1.data, p1.href, p1.info
From publications  p1 join publications_state  p2 on  p1.state = p2.id";
echo show_publications($file_db, $sql_pub);
?>
