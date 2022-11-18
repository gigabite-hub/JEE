<?php include "config.php"; ?>
<?php
if ($_COOKIE['jibbio_qi'] > 0) { 
	header("location:http://jbe.jibbio.com/admin/inspect/showAppointment/appointment_id/".$_COOKIE['jibbio_qi']);
	exit;
}

$em_link = "https://em.jibbio.com/admin/index.php?";
$create_list = $em_link . "Page=Lists&Action=create";
$create_subscriber = $em_link . "Page=Subscribers&Action=Add";
$create_newsletter = $em_link . "Page=Newsletters&Action=Create";
$create_form = $em_link . "Page=Forms&Action=create";
$page_stats = $em_link . "Page=Stats";

if (!isset($_SESSION['_amember_user']['login']) || trim($_SESSION['_amember_user']['login']) == '') { 
	header('Location:https://member.jibbio.com/login.php');
	exit;
}
else if (!isset($_SESSION['_amember_user']['data']['is_active']) || intval($_SESSION['_amember_user']['data']['is_active']) != 1) {
	header('Location:https://member.jibbio.com/member.php');
	exit;
}
$status = intval($_SESSION['_amember_user']['data']['is_active']);
if ($status == 0) { 
	header('Location:https://member.jibbio.com/member.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<?php include "top.php"; ?>
<style>
.form-thumb {
	background:#f6f6f6;
	padding:0 15px 15px;
}
.form-thumb h3 {
	font-size:22px;
	margin:0;
}
.link2 {
	color:#fff;
}
.email-mark {
	color:#fff;
	padding:8px 0;
	font-size:18px;
}
</style>
</head>
<body>
<div id="wrapper">
  <?php include "header.php"; ?>
  <main id="main">
    <div id="about" class="mb-content">
      <div class="container">
        <div class="section-alt2">
          <div class="">
            <div class="row">
              <div class="col-md-12">
                <div class="default-header text-center">
                  <h1>Dashboard</h1>
                </div>
                <!---------------------------------------------------->
                <div style="padding-top:50px;" class="col-md-10 col-md-offset-1">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-thumb">
                        <div class="form-icon"><i class="fa fa-wpforms" aria-hidden="true"></i></div>
                        <h3 class="text-center"><a href="http://form2.jibbio.com/">MAXeSites</a></h3>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-thumb">
                        <div class="form-icon"><i class="fa fa-qrcode" aria-hidden="true"></i></div>
                        <h3 class="text-center"><a href="http://qr.jibbio.com/">3-in-1 QR Codes</a></h3>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-thumb">
                        <div class="form-icon"><i class="fa fa-external-link" aria-hidden="true"></i></div>
                        <h3 class="text-center"><a href="http://jibb.jibbio.com/">URL Shortening</a></h3>
                      </div>
                    </div>
                  </div>
                  <div class="row">  
                    <div class="col-md-4 col-md-offset-2">
                      <div class="form-thumb">
                        <div class="form-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <h3 class="text-center"><a href="https://member.jibbio.com/member.php">My Account</a></h3>
                      </div>
                    </div>
				    <div class="col-md-4">
                      <div class="form-thumb">
                        <div class="form-icon"><i class="fa fa-question" aria-hidden="true"></i></div>
                        <h3 class="text-center"><a href="http://support.jibbio.com//index.php?act=tickets&code=open">Support</a></h3>
                      </div>
                    </div>
                    <!--<div class="col-md-3">
                      <div class="form-thumb">
                        <div class="form-icon"><i class="fa fa-envelope " aria-hidden="true"></i></div>
                        <h3 class="text-center"><a href="https://em.jibbio.com/admin/">Email Marketing</a></h3>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-thumb">
                        <div class="form-icon"><i class="fa fa-tags" aria-hidden="true"></i></div>
                        <h3 class="text-center"><a href="http://promotions.jibbio.com/">Online Coupons</a></h3>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-thumb">
                        <div class="form-icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                        <h3 class="text-center"><a href="http://scheduling.jibbio.com/">Online Scheduling</a></h3>
                      </div>
                    </div>-->
                  </div>
                </div>
                <!---------------------------------------------------->
                <!--<div style="background:#0188CA;" class="email-mark text-center"> <span>Email Marketing Quick Start:&nbsp;&nbsp; <strong>1.</strong>&nbsp; <img src="https://jee.jibbio.com//images/create_group.gif" alt="create contact list image" width="16" height="14" border="0"> &nbsp;<a href="https://em.jibbio.com/admin/index.php?Page=Lists&amp;Action=create" class="link2" title="Create your contact list (mailing group) for email &amp; newsletter marketing">Create Contact List</a> &nbsp;<strong>2.&nbsp;</strong>&nbsp; <img src="https://jee.jibbio.com//images/add_subscribers.gif" alt="add subscribers image" width="16" height="16" border="0"> &nbsp;&nbsp;&nbsp;<a href="https://em.jibbio.com/admin/index.php?Page=Subscribers&amp;Action=Add" class="link2" title="Add contacts to your contact list">Add Contacts</a> &nbsp;<strong>3.</strong>&nbsp; <img src="https://jee.jibbio.com//images/create.gif" alt="design newsletter image" width="13" height="16" border="0"> &nbsp; <a href="https://em.jibbio.com/admin/index.php?Page=Newsletters&amp;Action=Create" class="link2" title="Create an email newsletter">Create Newsletter</a> &nbsp;<strong>4.</strong>&nbsp; <img src="https://jee.jibbio.com//images/create_form.gif" alt="create website form image" width="16" height="16" border="0"> &nbsp; <a href="https://em.jibbio.com/admin/index.php?Page=Forms&amp;Action=create" class="link2" title="Create a subscription form and add it to your website to grow your contact list">Create Website Form</a> </div>-->
              </div>
            </div>
           <!-- <div class="row">
              <div class="col-md-12">
                <h3 style="background:#0188CA;color:#fff;padding:8px 10px;font-size:18px;margin:30px 0 0;"> Email Subscribers Activity</h3>
                <div class="section-alt3">
                  <?php if ($_SESSION['_amember_login']): ?>
                  <iframe width=100%  height=320px style="border:0px;" scrolling=no src='https://em.jibbio.com/admin/index.php?Action=subscribergraph'></iframe>
                  <?php else: ?>
                  <p> Login to View Statistics <a href="//member.jibbio.com/">Login Here</a> </p>
                  <?php endif; ?>
                </div>
              </div>
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include "footer.php"; ?>
</div>
<?php include "bottom.php"; ?>
<script>
	$(document).ready(function(){
	});
  </script>
</body>
</html>
