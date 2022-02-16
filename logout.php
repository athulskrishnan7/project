<?php
setcookie("logined",NULL);
echo"<script>alert('Logged out')</script>";
header("location:login.php");
?>