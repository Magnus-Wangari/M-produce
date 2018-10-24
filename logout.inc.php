<?php

session_start();
session_unset();

if (session_destroy() == true){
    header("Location: index.php");
    exit();
}
