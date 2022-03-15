<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Code</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1> This is the result of a PHP Code embedded in HTML</h1>

  <header>
    <nav>
      <div>
        <h3>DANI KROSSING</h3>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="#">PRODUCT</a></li>
          <li><a href="#">CURRENT SALES</a></li>
          <li><a href="#">MEMBER</a></li>
        </ul>
      </div>
      <ul class="menu-member">
        <li><a href="#">SIGN UP</a></li>
        <li><a href="#" class="header-login-a">LOGIN</a></li>
      </ul>
    </nav>
  </header>

  <section class="index-intro">
    <div class="index-intro-bg">
      <div class="wrapper">
        <div class="index-intro-cl">
          <div class="video">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, ex.</p>
          </div>
          <div class="index-intro-c2">
            <h2>We make<br>professional<br>gear</h2>
            <a href="#">FIND OUR GEAR HERE</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="index-login">
    <div class="wrapper">
      <div class="index-login-singnup">
        <h4>SIGN UP</h4>
        <p>Don't have an account yet? Sign up here!</p>
        <form action="includes/signup.inc.php" method="post">
          <input type="text" name="uid" placeholder="Username">
          <input type="password" name="pwd" placeholder="Password">
          <input type="password" name="pwdrepeat" placeholder="Repeat password">
          <input type="text" name="email" placeholder="E-mail">
          <br>
          <button type="submit" name="submit">SIGH UP</button>
        </form>
      </div>
      <div class="index-login-login">
        <h4>LOGIN</h4>
        <p>Don't have an account yet? Sign up here!</p>
        <form action="includes/login.inc.php" method="post">
          <input type="text" name="uid" placeholder="Username">
          <input type="password" name="pwd" placeholder="Password">
          <br>
          <button type="submit" name="submit">LOGIN</button>
        </form>
      </div>
    </div>
  </section>
</body>
</html>