<?php
session_start();
session_unset();
session_destroy();
echo"<script>window.open('adminlogin.php','_self')</script>";

?>