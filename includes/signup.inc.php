<?php

var_dump("test");

  if (isset($_POST["submit"])) {

      $name = $_POST["name"];
      $email = $_POST["email"];
      $username = $_POST["uid"];
      $pwd = $_POST["pwd"];
      $pwdRepeat = $_POST["pwdrepeat"];
      $imgPath = $_POST["imagepath"];

      require_once 'dbh.inc.php';
      require_once 'functions.inc.php';


      if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat)) {
          header("location: ../signup.php?error=emptyinput");
          exit();
      }
      if (invalidUid($username)) {
          header("location: ../signup.php?error=invaliduid");
          exit();
      }
      if (invalidEmail($email)) {
          header("location: ../signup.php?error=invalidemail");
          exit();
      }
      if (!pwdMatch($pwd, $pwdRepeat)) {
          header("location: ../signup.php?error=passwordsdontmatch");
          exit();
      }
      if (uidExists($conn, $username, $email)) {
          header("location: ../signup.php?error=usernametaken");
          exit();
      }

      createUser($conn, $name, $email, $username, $pwd, $imgPath);
        echo "It works";
        die;
  } else {
      header("location: ../signup.php");
      exit();
  }


