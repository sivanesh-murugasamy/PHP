<?php
session_start();

$_SESSION["userid"]="33";
$_SESSION["pass"]="#456siva";

echo "User Id is".$_SESSION["userid"]."<br>";
echo "Password is".$_SESSION["pass"];
?>