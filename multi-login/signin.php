<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
    <link
      rel="shortcut icon"
      href="../assets/images/logo/icon.svg"
      type="image/x-icon"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../styles/style.css" />
    <link rel="stylesheet" href="../styles/sub.css" />
  </head>
  <body>
    <header class="container p-3">
      <a href="../index.html">
        <img
          class="su-logo"
          src="../assets/images/logo/bistrominers.svg"
          alt=""
        />
      </a>
    </header>
    <section class="signup-form">
      <div class="suf-desc text-center">
        <h1 class="title si-title">Sign in</h1>
        <p class="sub">
          You less than one minute away from trading with Bistro-Miners
        </p>
      </div>
      <div class="suf">
        <form method="post" action="signin.php" class="suf-form">
          <div class="errors">
            <?php echo display_error(); ?>
          </div>
        <div class="row">
            <div class="col-12 suf-item">
              <input
                class="form-control"
                type="text"
                placeholder="Username"
                name="username"
              />
            </div>
            <div class="col-12 suf-item">
              <input class="form-control" type="password" placeholder="Password" 
              name="password"/>
            </div>
            <div class="col-12 suf-item">
              <p>
                Don't have an account?
                <a href="./signup.php">Sign up</a>
              </p>
            </div>
            <div class="col-12 suf-item">
              <button href="#" class="cta-btn cf-cta" type="submit" name="login_btn">Sign in</button>
            </div>
          </div>
        </form>
      </div>
    </section>
    <footer class="footer su-footer">
      <div class="footer-bottom text-center p-4">
        <p>Copyright © 2022. Bistrominers. All Rights Reserved</p>
      </div>
    </footer>
    <script src="./js/script.js"></script>
  </body>
</html>
