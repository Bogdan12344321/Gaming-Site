<?php

$page = isset($_GET['page'] )? (int)$_GET['page'] : 1;

$perPage = 6;

$page="";
if(isset($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page = 1;
}
$start_from = ($page-1)*$perPage;



?>