<?php
session_start();

session_destroy();
header("Location: ../ACT10/010index.php");
?>