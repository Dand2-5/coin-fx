<?php
	include('../functions.php');
	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: signin.php');
	}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Profile</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="../../assets/images/logo/icon.svg" type="image/x-icon" />
  <title>Bistrominers</title>
  <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>

<body>
  <header class="fixed-top">
    <div class="navbar">
      <div class="hamburger" onclick="hamburgerClick()">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <div class="logo">
        <img src="../../assets/images/logo/bistrominers.svg" alt="">
      </div>
    </div>
    <div id="profile" onclick="showPnav()">
      <div class="profile-img">
        <img class="pi" src="../images/avatar.png" alt="">
        <h4 class="pi-name"><?php echo ucfirst($_SESSION['user']['username']); ?></h4>
        <div id="profile-nav" class="pn-gone">
          <div class="pn-head">
            <div>
              <img src="../images/avatar.png" alt="">
            </div>
            <div>
              <?php  if (isset($_SESSION['user'])) : ?>
              <p class="pnh-name">
                <?php echo ucfirst($_SESSION['user']['username']); ?>
              </p>
              <p class="pnh-type">
                <?php echo ucfirst($_SESSION['user']['user_type']); ?>
              </p>
              <?php endif ?>
            </div>
          </div>
          <div class="pn-body">
            <a href="./deposit.php"><i class="lni lni-mastercard"></i>Deposit Funds</a>
            <a href="./profile.php"><i class="lni lni-consulting"></i>Profile</a>
            <a href="../index.php?logout='1'"><i class="lni lni-exit"></i>logout</a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="separate"></div>
  <section class="layout">
    <aside class="sidebar">
      <div class="sidebar-container">
        <ul class="sc-items">
          <li class="sci-header">
            <span classs="scih-text">
              main
            </span>
          </li>
          <li class="sci-text">
            <a href="../index.php" class="sci-link">
              <i class="lni lni-cloud-check"></i>
              <span class="scit-text">
                Dashboard
              </span>
            </a>
          </li>
          <li class="sci-header">
            <span classs="scih-text">
              Finances
            </span>
          </li>
          <li class="sci-text">
            <a href="./deposit.php" class="sci-link">
              <i class="lni lni-mastercard"></i>
              <span class="scit-text">
                Deposit Funds
              </span>
            </a>
          </li>
          <li class="sci-text">
            <a href="./withdraw.php" class="sci-link">
              <i class="lni lni-mastercard"></i>
              <span class="scit-text">
                Withdraw Funds
              </span>
            </a>
          </li>
          <li class="sci-header">
            <span classs="scih-text">
              Account Review
            </span>
          </li>
          <li class="sci-text">
            <a href="#" class="sci-link">
              <i class="lni lni-wallet"></i>
              <span class="scit-text">
                Deposit History
              </span>
            </a>
          </li>
          <li class="sci-text">
            <a href="#" class="sci-link">
              <span class="scit-text">
                <i class="lni lni-book"></i>
                Withdraw History
              </span>
            </a>
          </li>
          <li class="sci-text">
            <a href="#" class="sci-link">
              <i class="lni lni-revenue"></i>
              <span class="scit-text">
                Refferal Commisions
              </span>
            </a>
          </li>
          <li class="sci-header">
            <span classs="scih-text">
              Refferals
            </span>
          </li>
          <li class="sci-text">
            <a href="#" class="sci-link">
              <i class="lni lni-customer"></i>
              <span class="scit-text">
                Refferals
              </span>
            </a>
          </li>
          <li class="sci-header">
            <span classs="scih-text">
              My Account
            </span>
          </li>
          <li class="sci-text">
            <a href="./profile.php" class="sci-link">
              <i class="lni lni-consulting"></i>
              <span class="scit-text">
                Profile
              </span>
            </a>
          </li>
          <li class="sci-text">
            <a href="../index.php?logout='1'" class="sci-link">
              <i class="lni lni-exit"></i>
              <span class="scit-text">
                Logout
              </span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <div class="dt-drawer" onclick="hamburgerClick()"></div>
    <section class="layout-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="pro-card">
              <div class="pro-head">
                <h2>User Profile</h2>
              </div>
              <div class="pro-body">
                <form action="">
                  <div class="form-group">
                    <label for="">Fullname</label>
                    <input type="text" class="form-control" id="fullname" disabled>
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="email" disabled>
                  </div>
                  <div class="form-group">
                    <label for="">Plan</label>
                    <input type="text" class="form-control" id="plan" disabled>
                  </div>
                  <div class="form-group">
                    <label for="">Refferer ID</label>
                    <input type="text" class="form-control" id="refferal" disabled>
                  </div>
                  <div class="form-group">
                    <label for="">Wallet Address</label>
                    <input type="text" class="form-control" id="wallet" disabled>
                  </div>
                  <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="text" class="form-control" id="phone-number" disabled>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="pro-btn btn btn-primary text-uppercase">Update
                      Profile</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="row">
              <div class="col-md-12">
                <div class="pro-card">
                  <div class="pro-head">
                    <h2>Update Password</h2>
                  </div>
                  <div class="pro-body">
                    <form action="">
                      <div class="form-group">
                        <label for="">Old Password</label>
                        <input type="password" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">New Password</label>
                        <input type="password" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Confirm New Password</label>
                        <input type="password" class="form-control">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="pro-btn btn btn-primary text-uppercase">Update
                          Password</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="pro-card">
                  <div class="pro-head">
                    <h2>Update Wallet</h2>
                  </div>
                  <div class="pro-body">
                    <form action="">
                      <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Wallet-Address</label>
                        <input type="password" class="form-control">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="pro-btn btn btn-primary text-uppercase">Update
                          Wallet</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom text-center p-3 mt-5">
        <p>Copyright © 2022. Bistrominers. All Rights Reserved</p>
      </div>
    </section>
  </section>
  <script src="../scripts/script.js"></script>
</body>

</html>