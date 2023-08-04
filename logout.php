<?php
include './db_connect/db.php';
session_start();
session_destroy();
header("location:login.php");

?>