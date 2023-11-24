<?php
session_start();
session_user();
session_destroy();

header("Localtion: ../index.php");
exit();
?>