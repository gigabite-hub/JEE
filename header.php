<header id="header">
  <div class="navbar-fixed-top">
    <div class="info-header animated slideInDown animate-2" style="z-index:99999;position:relative;">
      <div class="container clearfix">
        <div class="logo pull-left"> <a href="index.php"> <img src="assets/images/AskMIA-logo.png" alt="" height="50" /> </a> </div>
        <nav class="navbar navbar-default navbar-right">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-drop" aria-expanded="false"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="collapse navbar-collapse" id="nav-drop">
            <ul class="nav navbar-nav text-center">
              
			  <!--<li><a href="index.php">Home</a></li> -->
              


			  
			  
			  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="features.php">Features<span class="caret"></span></a>
                <ul class="dropdown-menu">
              	  <li><a href="https://jee.jibbio.com/MAXeSites.php">MAXeSites</a></li>
				  <li><a href="https://jee.jibbio.com/increase-search-engine-rankings-and-drive-more-organic-traffic-to-website-with-jibbio-MAXeSites-4.php">Local SEO</a></li>
				  <li><a href="https://jee.jibbio.com/3-in-1-qr-codes.php">QR Codes</a></li>
				  <li><a href="https://jee.jibbio.com/online-store-ecommerce-website-marketplace-builder.php">Online Store Marketplace</a></li>
				</ul>
              </li>
              
              


              <!--<li><a href="https://jee.jibbio.com/MAXeSites.php">Features</a></li>-->
			  

			  
			  <!--<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Solutions <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="https://jee.jibbio.com/index.php">Maximize &amp; Monetize with MAXeSites</a></li>
				  
				  <li><a href="auto-service-business-and-oil-change-center-marketing-tools-to-build-customer-relationships-increase-customer-loyalty-and-drive-more-sales.php">AskMIA&trade; for Auto Service</a></li>
				  <li><a href="https://jee.jibbio.com/cosmetic-beauty-laser-dental-clinics-online-digital-marketing-customer-service-tool-to-increase-loyalty-sales.php">AskMIA&trade; for Beauty &amp; Cosmetic</a></li>
				  <li><a href="askmia-sales-pitch.php">AskMIA&trade; for Brick and Mortar </a></li>
				  <li><a href="online-sales-marketing-customer-service-retention-tools-for-martial-arts-schools-sports-and-recreation-health-fitness-clubs-trainers.php">AskMIA&trade; for Health &amp; Fitness</a></li>
				  <li><a href="hvac-online-marketing-ideas-strategies-heating-and-air-conditioning-digital-marketing-online-marketing-for-plumbers-and-plumbing-service.php">AskMIA&trade; for Trade Service </a></li>
				  				  
				  <li><a href="c2-and-clear.php">C2&trade; &amp; CLEAR&trade; for Communities</a></li>
				  <li><a href="lead-generation-tools-for-auto-dealers-real-estate-financial-insurance-business-be-aware-of-scams-when-buying-leads-from-lead-generation-services.php">Generate Exclusive Leads</a></li>
				  <li><a href="increase-employee-performance-and-ways-to-monitor-staff-efficiency-and-measuring-employee-productivity-in-the-workplace-2.php">Increase Employee Productivity</a></li>
				  <li><a href="save-raise-program-boost-non-dues-revenue-non-profits.php">Save-Raise for Non-Profits</a></li>
				  				  
				  <li><a href="for-consumers.php">AskMIA&trade; for Customer </a></li>
                  <li><a href="for-retailers.php">AskMIA&trade; for Business </a></li>
				  <li><a href="save-raise-program-boost-non-dues-revenue-non-profits.php">Save-Raise for Non Profit</a></li>
                </ul>
              </li>
			  -->


              <li><a href="save-raise-program-boost-non-dues-revenue-non-profits.php">Non-Profits</a></li>


              <?php if (isset($_SESSION['_amember_user']['login']) && trim($_SESSION['_amember_user']['login']) != ''): ?>
              <li><a href="https://support.jibbio.com">Support</a></li>
              <?php else: ?>
               <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pricing <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  
				  <li><a href="pricing.php">Business</a></li>
				  <li><a href="pricing-non-profits.php">Non-Profit</a></li>
				  
                </ul>
              </li>
              <?php endif; ?>
              <li><a href="about.php">About</a></li>
              <!--<li><a href="contact.php">Contact</a></li>-->
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div id="sub-menu" class="animated slideInDown animate-2" style="position:relative;"> <?php echo $subMenu; ?> </div>
  </div>
  <div class="login-panel text-center animated slideInDown animate-2" style="<?php echo $subMenu != '' ? 'margin-top:96px;' : '';  ?>">
    <div class="container">
      <nav class="navbar navbar-right">
        <?php if (isset($_SESSION['_amember_user']['login']) && trim($_SESSION['_amember_user']['login']) != ''): ?>
        Welcome <strong><?php echo $_SESSION['_amember_user']['login']; ?></strong> <a href="https://jee.jibbio.com/jee-dashboard.php"><i class="fa fa-tachometer"></i> Dashboard</a> &nbsp;|&nbsp <a href="https://member.jibbio.com/logout.php" ><i class="fa fa-power-off"></i> Logout</a>
        <?php else: ?>
        <ul class="nav">
          <li class=""><a style="margin:0px; padding:0px; display:inline-block; color:#F92C8B;" href="https://member.jibbio.com/signup.php" role="button"> <!--<i class="fa fa-user-plus"></i>--> <b>Sign up</b> </a> &nbsp;&nbsp;|&nbsp;&nbsp;  <a style="margin:0px; padding:0px; display:inline-block;" href="#" role="button" id="menuLogin" onclick="$(this).next('.dropdown-menu').slideToggle();" aria-expanded="false"> <!--<i class="fa fa-user"></i>--> Log in </a>
            <div id="menuDropDown" class="dropdown-menu form-login stop-propagation animated " role="menu" style="right: 0px !important; left: auto !important; display:none; padding:0px; z-index:999999;">
              <div style="padding:10px" >
                <form action="https://member.jibbio.com/login.php" id="frmQuickLogin" method="post" autocomplete="nope">
                  <input type="hidden" name="login_attempt_id" value="<?php echo time(); ?>" />
                  <div class="form-group">
                    <label for="amember_login"> <!--<i class="fa fa-envelope"></i>--> Username </label>
                    <input type="text" autocomplete="nope" class="form-control" id="amember_login" name="amember_login" placeholder="Enter Username" />
                  </div>
                  <div class="form-group">
                    <label for="amember_pass"> <!--<i class="fa fa-lock"></i>--> Password </label>
                    <input type="password" autocomplete="nope" class="form-control password" id="amember_pass" name="amember_pass" placeholder="Enter Password" />
                  </div>
                  <p> <a style="padding-right:0px; padding-left:0px;" href="https://member.jibbio.com/login.php">Forgot password?</a> </p>
                  <button type="submit" id="btnDDLogin" class="btn btn-default btn-block">Log in</button>
                  <div class="text-center" style="padding:10px; background:#fff; display:none;"> Not a member? <a style="margin:0px; padding:0px;" href="https://member.jibbio.com/signup.php"><b>Sign up!</b></a> </div>
                </form>
              </div>
            </div>
          </li>
        </ul>
        <?php endif; ?>
      </nav>
    </div>
  </div>
</header>
