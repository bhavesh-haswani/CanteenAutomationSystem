<?php
session_start();
/*if(isset($_SESSION['username']))
{*/
    session_unset();
    session_destroy();
    header('location:../');
    //header('location:../Signinout/login.php');
/*}*/

?>