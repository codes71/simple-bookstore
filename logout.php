<?php
session_start();
unset($_SESSION['username']);
session_destroy();
header("location:" . $_SESSION['currentpage'] . ".php");
exit();
