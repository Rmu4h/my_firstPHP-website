<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project 01</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">
</head>
<body>
<nav>
    <div class="wrapper">
        <nav class="header__menu">
            <a href="index.php" ><img class="logo" src="img/logo-white.png" alt="Blogs logo" ></a>
            <ul class="header__list">
                <li><a href="index.php" class="header__link">Home</a></li>
                <li><a href="about-us.php" class="header__link">About us</a></li>
                <li><a href="blog.php" class="header__link">Find Blogs</a></li>
                <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<li><a href='profile.php' class='header__link'>Profile page</a></li>";
                    echo "<li><a href='includes/logout.inc.php' class='header__link'>Log out</a></li>";
                } else {
                    echo "<li><a href='signup.php' class='header__link'>Sign up</a></li>";
                    echo "<li><a href='login.php' class='header__link'>Log in</a></li>";
                }
                ?>
            </ul>
        </nav>
    </div>
</nav>
<div class="wrapper">