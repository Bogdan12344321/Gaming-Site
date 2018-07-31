<?php
$per_page = 15;
$offset = 0;
$num_rows = $all_data->num_rows;
$page_data = $database->query("SELECT * FROM products LIMIT".$per_page." OFFSET ".$offset);

?>