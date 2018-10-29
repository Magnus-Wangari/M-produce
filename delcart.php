<?php
session_start();
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    unset($_SESSION['cart'][$id]);
    header('location: checkout.php');
}else{
    $id = $_GET['id'];
    unset($_SESSION['cart'][$id]);
    header('location: checkout.php');
}