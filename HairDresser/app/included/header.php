<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
<!--    <style><?php //require_once 'app/styling/styling.css'; ?></style>-->
    <link rel="stylesheet" href="<?php echo URL; ?>public/styling/styling.css">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL; ?>public/graphics/logo-HairDesigner.png" />
    <link href="<?php echo URL; ?>public/styling/vivify.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
</head>
<body>
<nav>
    <a><img class="logo" src="<?php echo URL; ?>public/graphics/B_Logo.svg"></a>
    <div class="navbar">
        <div>
            <a href="<?php echo URL; ?>page/home">Home</a>
            <a href="<?php echo URL; ?>page/galeries">Galeries</a>
        </div>
        <div>
            <a href="<?php echo URL; ?>page/about">About us</a>
            <a href="<?php echo URL; ?>page/contact">Contact</a>
        </div>
    </div>
    <img class="openMenu" onclick="menu()" src="<?php echo URL; ?>public/graphics/menuO.svg">
    <div class="navbarSmall">
        
            <a href="<?php echo URL; ?>page/home">Home</a><br>
            <a href="<?php echo URL; ?>page/galeries">Galeries</a><br>   
            <a href="<?php echo URL; ?>page/about">About us</a><br>
            <a href="<?php echo URL; ?>page/contact">Contact</a>
        
    </div>
<!--
    <form class="loginForm" method="post">
        <input type="text" name="user" placeholder="user name" >
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="login" value="login">
         <a id="signUp" href="<?php echo URL; ?>shop/createaccount">No account? Sign up.</a>
    </form>
-->
   
</nav> 
