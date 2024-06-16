<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1><span>F</span>lying <span>M</span>obil</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="#login">login</a></li>
            <li><a href="#register">Register</a></li>
            <li><a href="index.php">Return back</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Header -->
  
  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>WELCOME <span></span></h1>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- login Section -->
  <section id="login">
    <div id='login-form' class="login-page">
    <div><h1 class="section-title">Login <span>form</span></h1></div>
        <div class="form-box">
            <span onclick="document.getElementById('login-form').style.display='none'" class="close">&times;</span>
            <div class="form">
                <form class='login-form', action="validate.php", method="post">
				    <input type="text"name='emailid' placeholder="Email ID", required/>
				    <input type="password" name='password' placeholder="password", required/>
				    <button>LOGIN</button>
				</form>
            </div>
        </div>
    </div>
    </section>
  <!-- End Login Section -->

  <!-- Register Section -->
    <section id="register">
    <div id="register-form" class='register-page'>
    <div><h1 class="section-title">Register <span>form</span></h1></div>
         <div class="form-box1">
            <span onclick="document.getElementById('register-form').style.display='none'" class="close">&times;</span>
            <div class="form1">
                <form class='register-form', action="registration.php", method="post">
				    <input type="text" name='user'placeholder="user name" required/>
				    <input type="text" name='emailid'placeholder="email-id" required/>
				    <input type="password"name='password' placeholder="password" required/>
				    <button>REGISTER</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </section>
  <!-- End Register Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <h2>Shasaank Sridhar</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.facebook.com/nanashashank/"><img src="https://img.icons8.com/fluent/144/000000/facebook-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="https://www.instagram.com/shasaank_sridhar/"><img src="https://img.icons8.com/fluent/144/000000/instagram-new.png"/></a>
        </div>
      </div>
      <p>Copyright © 2021 Shasaank. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>
</html>