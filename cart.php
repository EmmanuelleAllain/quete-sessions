<?php 
session_start();
require 'inc/data/products.php';

if(!isset($_SESSION['login'])) {
    header('Location:login.php');
}

if($_SERVER['REQUEST_METHOD'] === "GET"){
    foreach($catalog as $id => $cookie) {
        if($_GET['add_to_cart'] === $id) {
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $cookie['name'];
    }
}
}
?>   
 
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <ul>
        <li><?=$_SESSION['name']?></li>
    </ul>
<?php
?>
</section>
<?php require 'inc/foot.php'; ?>