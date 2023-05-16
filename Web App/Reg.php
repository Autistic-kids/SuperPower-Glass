<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/Reg_style.css" />
  <link rel="icon" type="image/x-icon" href="img/icons/fav.ico" />
  <title>Sign in & Sign up Form</title>

</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form class="sign-in-form" action="api/api.php" method="post">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Email" id="email" name="email"/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="pass" name="pass"/>
          </div>
          <input type="submit" value="Login" class="btn solid" id="login"/>
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fa fa-google-plus"></i>
            </a>
          </div>
        </form>
        <form class="sign-up-form" action="api/register.php" method="post">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" id="username"name="name"/>
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input  type="email" placeholder="Email" id="email" name="email"/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="pass" name="pass"/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Repeat Password" id="r_pass" name="r_pass"/>
          </div>
          <input type="submit" class="btn" value="Sign up" id="signUp"/>
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fa fa-google-plus"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Hello Parents</h3>
          <p>
            Welcome to our project today..
            We offer you the best program for the care and education of children with autism with electronic glasses.
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="img/icons/glass.svg" class="image" alt="" />
        <a href="index.php">
          <button class="btn back" id="baack-btn" style="width: 100px; margin-left: 900px; margin-top: -640px;">
          back
          </button>
        </a>
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>who are we ?</h3>
          <p>
            We are students in Egyptian Academy for Engineering and advanced Technology (EAEAT). This is for the
            treatment and education of autistic children.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="img/icons/register.svg" class="image" alt="" />
      </div>
    </div>
    <a href="index.php">
      <button class="btn back" id="back-btn" style="width: 100px; margin-left: 0px;">
      back
      </button>
    </a>
  </div>
  <script src="js/Reg_app.js"></script>
</body>

</html>