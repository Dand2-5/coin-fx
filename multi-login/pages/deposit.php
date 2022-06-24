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
  <title>Deposit</title>
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
            <a href="#"><i class="lni lni-mastercard"></i>Deposit Funds</a>
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
            <a href="#" class="sci-link">
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
      <div class="container">
        <div class="pro-card deposit-card">
          <div class="pro-head">
            <h2>Deposit</h2>
          </div>
          <div class="pro-body">
            <div class="text-info"><span id="deposit-note">Scan QR Payment code or Copy wallet address below.</span>
            </div>
            <img src="" alt="" id="qrcode">
            <div>
              <div class="input-group mb-4">
                <input type="text" class="form-control" placeholder="Generate wallet address" disabled
                  style="height:30px">
                <div class="input-group-append" style="margin-left: -3px">
                  <button class="copy-wallet input-group-text"
                    style="height: 30px; cursor: pointer; font-size: 10pt; font-weight: 500;"><i
                      class="lni lni-folder"></i>&nbsp;Copy Wallet</button>
                </div>
              </div>
            </div>
            <form action="">
              <div class="form-group">
                <label for="">Select Gateaway</label>
                <select id="pay_method" class="form-control" name="pay_method" title="Select Gateway" required="">
                  <option value="">--SELECT PAYMENT GATEWAY--</option>
                  <option value="bitcoin">BITCOIN</option>
                  <option value="ethereum">ETHEREUM</option>
                  <option value="ethereum">Dodge</option>
                  <option value="ethereum">Tron</option>
                  <option value="ethereum">USDT</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Deposit Amount</label>
                <input type="text" class="form-control" id="deposit_amount" name="deposit_amount"
                  title="Enter Deposit Amount" placeholder="Enter Deposit Amount" required="">
              </div>
              <div class="form-group mb-0">
                <button type="submit" class="btn btn-primary text-uppercase"><i class="mdi mdi-briefcase-download"></i>
                  Deposit</button>
              </div>
            </form>
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