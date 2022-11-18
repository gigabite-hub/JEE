<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
<?php include "top.php"; ?>
</head>
<body>
<div id="wrapper">
  <?php include "header.php"; ?>
  <main id="main">
    <div id="about" class="container mb-content">
      <div id="ad-revenue" class="section-alt2" style="padding:0px;font-size:16px;">
        <div class="">
          <div class="row">
            <div class="col-md-12"> 
                <h1 class="text-center"><span style="font-size:176px !important;">404</span></h1>
                <h2 class="text-center" style="margin:0 0 35px;"><span style="font-size:40px !important;">PAGE NOT FOUND</span></h2>
            	<h3 class="text-center" style="margin:0 0 35px;">"Hey there!  Sorry, but this Jibbio page is no longer available."</h3>
            	<div class="text-center" style="margin:0 0 35px;">
                <img src="assets/images/jibbio-logo.png" style="width:800px" class="img-responsive center-block" alt="404" />
                </div>
            </div>
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
		$('.about-banner').bxSlider({pager:false, auto:true, controls:false, pager:true});
	});
  </script>
</body>
</html>
