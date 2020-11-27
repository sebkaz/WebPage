<?php
$sql_pub = "Select p1.id,p1.chapter, p1.title, p1.authors, p2.state, p1.journal, p1.editors, p1.data, p1.href, p1.info, p1.bookt
From monography p1 join publications_state  p2 on  p1.state = p2.id";
echo show_monography($file_db, $sql_pub);
?>