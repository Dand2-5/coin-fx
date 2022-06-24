<?php
	include('functions.php');
	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: signin.php');
	}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="../assets/images/logo/icon.svg" type="image/x-icon" />
  <title>Bistrominers</title>
  <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="./styles/style.css">
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
        <img src="../assets/images/logo/bistrominers.svg" alt="">
      </div>
    </div>
    <div id="profile" onclick="showPnav()">
      <div class="profile-img">
        <img class="pi" src="./images/avatar.png" alt="">
        <h4 class="pi-name"><?php echo ucfirst($_SESSION['user']['username']); ?></h4>
        <div id="profile-nav" class="pn-gone">
          <div class="pn-head">
            <div>
              <img src="./images/avatar.png" alt="">
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
            <a href="./pages/deposit.php"><i class="lni lni-mastercard"></i>Deposit Funds</a>
            <a href="./pages/profile.php"><i class="lni lni-consulting"></i>Profile</a>
            <a href="index.php?logout='1'"><i class="lni lni-exit"></i>logout</a>
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
            <a href="#" class="sci-link">
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
            <a href="./pages/deposit.php" class="sci-link">
              <i class="lni lni-mastercard"></i>
              <span class="scit-text">
                Deposit Funds
              </span>
            </a>
          </li>
          <li class="sci-text">
            <a href="./pages/withdraw.php" class="sci-link">
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
            <a href="./pages/profile.php" class="sci-link">
              <i class="lni lni-consulting"></i>
              <span class="scit-text">
                Profile
              </span>
            </a>
          </li>
          <li class="sci-text">
            <a href="index.php?logout='1'" class="sci-link">
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
      <section class="balance">
        <div class="balance-wrapper container">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="bal-card">
                <div class="bc-img">
                  <i class="lni lni-wallet"></i>
                </div>
                <div class="bc-body">
                  <div>
                    <span id="current-balance">$0.00</span>
                    <span id="total-profit-growth">
                      <i class="lni lni-stats-up"></i>
                      0.00%
                    </span>
                  </div>
                  <p class="bc-desc">Current Balance</p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="bal-card">
                <div class="bc-img">
                  <i class="lni lni-credit-cards"></i>
                </div>
                <div class="bc-body">
                  <div>
                    <span id="current-balance">$0.00</span>
                  </div>
                  <p class="bc-desc">Current Withdrawal</p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="bal-card">
                <div class="bc-img">
                  <i class="lni lni-revenue"></i>
                </div>
                <div class="bc-body">
                  <div>
                    <span id="current-balance">$0.00</span>
                    <span id="total-profit-growth">
                      <i class="lni lni-stats-up"></i>
                      0.00%
                    </span>
                  </div>
                  <p class="bc-desc">Today's Profit</p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <div class="bal-card">
                <div class="bc-img">
                  <i class="lni lni-invest-monitor"></i>
                </div>
                <div class="bc-body">
                  <div>
                    <span id="current-balance">$0.00</span>
                  </div>
                  <p class="bc-desc">Net Profit</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="aux">
        <div class="aux-wrapper container">
          <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-5">
              <div class="aux-card re-invest">
                <div class="aux-label">
                  Re-Invest
                </div>
                <form action="" id="reinvest-form">
                  <div class="input-group">
                    <input type="number" id="reinvest-amount" class="form-control" name="reinvest-amount"
                      placeholder="Enter Amount">
                    <div class="input-group-append">
                      <button class="form-control aux-btn">Process</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-7">
              <div class="aux-card activities">
                <div class="aux-label">Activities</div>
                <ul class="aux-activities">
                  <li class="aux-li">
                    <span id="no-refferals" class="al-num">0</span>
                    <span class="aux-desc">
                      <i class="lni lni-target-revenue"></i>
                      Refferals
                    </span>
                  </li>
                  <li class="aux-li">
                    <span id="no-deposit" class="al-num">0</span>
                    <span class="aux-desc">
                      <i class="lni lni-target-revenue"></i>
                      Deposit
                    </span>
                  </li>
                  <li class="aux-li">
                    <span id="no-withdrawal" class="al-num">0</span>
                    <span class="aux-desc">
                      <i class="lni lni-target-revenue"></i>
                      Withdrawal
                    </span>
                  </li>
                  <li class="aux-li">
                    <span id="no-investment" class="al-num">0</span>
                    <span class="aux-desc">
                      <i class="lni lni-target-revenue"></i>
                      Investment
                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="container">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container" style="width: 100%; height: 490px;">
          <iframe allowtransparency="true" frameborder="0"
            src="https://www.tradingview-widget.com/embed-widget/crypto-mkt-screener/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A%22490%22%2C%22defaultColumn%22%3A%22overview%22%2C%22screener_type%22%3A%22crypto_mkt%22%2C%22displayCurrency%22%3A%22USD%22%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Atrue%2C%22market%22%3A%22crypto%22%2C%22enableScrolling%22%3Atrue%2C%22utm_source%22%3A%22remicrypto.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22cryptomktscreener%22%7D"
            style="box-sizing: border-box; height: calc(458px); width: 100%;"></iframe>
          <div class="tradingview-widget-copyright"><a
              href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener"
              target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView</div>

          <style>
          .tradingview-widget-copyright {
            font-size: 13px !important;
            line-height: 32px !important;
            text-align: center !important;
            vertical-align: middle !important;
            /* @mixin sf-pro-display-font; */
            font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
            color: #9db2bd !important;
          }

          .tradingview-widget-copyright .blue-text {
            color: #2962FF !important;
          }

          .tradingview-widget-copyright a {
            text-decoration: none !important;
            color: #9db2bd !important;
          }

          .tradingview-widget-copyright a:visited {
            color: #9db2bd !important;
          }

          .tradingview-widget-copyright a:hover .blue-text {
            color: #1E53E5 !important;
          }

          .tradingview-widget-copyright a:active .blue-text {
            color: #1848CC !important;
          }

          .tradingview-widget-copyright a:visited .blue-text {
            color: #2962FF !important;
          }
          </style>
        </div>
        <!-- TradingView Widget END -->
      </div>
    </section>
  </section>
  <div class="footer-bottom text-center p-3 mt-5">
    <p>Copyright © 2022. Bistrominers. All Rights Reserved</p>
  </div>
  <script src="./scripts/script.js"></script>
</body>

</html>