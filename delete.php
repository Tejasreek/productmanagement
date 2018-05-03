<?php

include("config.php");
$deleteid = $_REQUEST['id'];
$query = mysql_query("DELETE FROM category WHERE id='$deleteid'");
echo "<script>window.location.href='productlist.php';</script>";
?>