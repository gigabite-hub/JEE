<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-16073180-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-16073180-1');
</script>


<?php include "top23.php"; ?>
</head>
<body>
<div id="wrapper">
  <?php include "header.php"; ?>
  <main id="main">
    <div class="container">
       <div class="mb-banner animated zoomOutSmall animate-3"> <img src="assets/images/about-us-banner-luck.jpg" class="img-responsive" /> </div>
	   
	   <!--
	   <div class="mb-banner animated zoomOutSmall animate-3">
        <div class="about-banner text-center">
          <div><img src="assets/images/about-banner-1.png" class="img-responsive" /></div>
          <div><img src="assets/images/about-banner-2.jpg" class="img-responsive" /></div>
          <div><img src="assets/images/about-banner-3.png" class="img-responsive" /></div>
          <div><img src="assets/images/about-banner-4.png" class="img-responsive" /></div>
          <div><img src="assets/images/about-banner-5.png" class="img-responsive" /></div>
          <div><img src="assets/images/about-banner-6.png" class="img-responsive" /></div>
          <div><img src="assets/images/about-banner-7.png" class="img-responsive" /></div>
          <div><img src="assets/images/about-banner-8.png" class="img-responsive" /></div>
        </div>
      </div>
	  -->

    </div>


    <div id="about" class="container mb-content">
      <div class="default-header text-left">
        <h1>About</h1>
      </div>
      <div id="ad-revenue" class="section-alt2" style="padding:0px;">
        <div class="">
          <div class="row">
            <div class="col-md-12" style="font-size:16px;">
              <!--<p>Other application service providers may offer solutions that sound really nice but in reality their tools can be costly, complex, require IT staff to maintain, and/or not very effective.&nbsp; In turn, an expense rather than an investment. </p>-->

			  <p>Jibbio provides a multifaceted toolset to start, run, and grow your business online.&nbsp; Attract new customers, retain more customers, expand online presence, boost organic traffic, and increase sales.</p>
			  
			  <p>Thousands of small businesses, national <a href="https://jee.jibbio.com/save-raise-program-boost-non-dues-revenue-non-profits.php">non-profits</a> and <a href="https://jee.jibbio.com/increase-employee-performance-and-ways-to-monitor-staff-efficiency-and-measuring-employee-productivity-in-the-workplace-2.php">corporations</a> utilize Jibbio.</p> 

			  <!--<p>&#9989; Local web presence</p>
			  <p>&#9989; Organic traffic</p>
			  <p>&#9989; Customer service</p>
			  -->

			  <p>Jibbio cloud-based applications and IT infrastructure securely hosted by Amazon&reg; Web Services since 2010.</p>

			  <p class="text-center" style="margin:30px 0 0;"> <img src="https://jee.jibbio.com/images/Amazon_Web_Services_Logo.png" /> </p>
			  
			  <p style="font-size:26px;color:#313131;margin-top:40px;">Testimonials</p>
			  
			  <p>Satisfied customers reflect a <strong>92%</strong> retention rate since 2010. </p>

			  <p class="text-center"> <a href="https://jee.jibbio.com/testimonials.php" style="font-size:16px;" target="_blank" class="btn btn-default">View Testimonials</a> </p>

              <p style="font-size:26px;color:#313131;margin-top:40px;">Community</p>


              <p>Jibbio can help local communities prosper.&nbsp; U.S. State Sheriffs’ Associations endorse <a href="https://jee.jibbio.com/c2-and-clear.php">C2&trade; &amp; C.L.E.A.R.&trade;</a> for HOA communities, and <a href="https://jee.jibbio.com/save-raise-program-boost-non-dues-revenue-non-profits.php">Save-Raise</a> for Non-Profits.&nbsp; Jibbio <span style="color:#006600;">donates 40%</span> of monthly revenue back to its Save-Raise partners.</p>
              
			  <!--<p class="text-center" style="margin:30px 0;"> <img src="https://jee.jibbio.com/images/US-state-sheriffs-official-endorsements-of-Jibbio-CLEAR-and-C2-applications.png" /> </p>-->

              <p class="text-center"> <a href="endorsements.php" style="font-size:16px;" target="_blank" class="btn btn-default">View Endorsements</a> </p>
             
              
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
