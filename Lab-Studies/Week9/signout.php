<?php
    session_start();

    //session_destroy() session u yok ederken session_unset() sessionu yok etmeden atamasiz hale getirir
    session_unset();
    header("Location: index.php");
?>