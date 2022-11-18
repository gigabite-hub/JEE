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


<?php include "top.php"; ?>
</head>
<body>
<div id="wrapper">
  <?php include "header.php"; ?>
  <main id="main">
    <div class="container">
      <div class="mb-banner"> <img src="assets/images/batch-create-CSV.jpg" class="img-responsive" /> </div>
    </div>
    <div id="about" class="container mb-content">
      <div class="default-header text-left">
        <h1>How to Batch Create MAXeSites</h1>
      </div>
      <div id="ad-revenue" class="section-alt2" style="padding:0px;">
        <div class="">
          <div class="row">
            <div class="col-md-12" style="font-size:18px;">
              
               <p>Batch create and update up to thousands of MAXeSites with just one CSV file (e.g. open in Excel), to save time.</p>

               <p style="font-size:24px;color:#ff0000;margin-top:20px;"><strong>IMPORTANT</strong></p>
			   
			   <p>Be sure to watch the first video <strong>(Parts 1-4)</strong> to understand the prerequisites and conditions BEFORE watching the second video <strong>(Part 5)</strong>, which demonstrates the batch create process from start to finish.</p>
			   
			   
               <h3 style="background:#0188CA;color:#fff;padding:5px 10px;font-size:28px;margin:30px 0;"><strong>5-PART VIDEO TUTORIAL</strong></h3>

			   


			  <div class="section-alt2" >
              <div class="default-header text-center lazy-fade-u" style="margin-bottom:0px;">
              <h1>Parts 1-4 (9:22)</h1>
              </div>
              </div>

			  <p class="text-center">
			  Part 1 (0:16) - Create Master Template<br/>
              Part 2 (1:55) - Download CSV File<br/>
			  Part 3 (2:23) - Field Elements/Settings<br/>
			  Part 4 (4:40) - 5 Things to Remember<br/>
			  </p>

              
			  
			  <div class="video-responsive" align="center">
              <iframe width="420" height="315" src="https://www.youtube.com/embed/OsjQNnLkilg" frameborder="0" allowfullscreen></iframe>
              </div>





              <div class="section-alt2" >
              <div class="default-header text-center lazy-fade-u" style="margin-bottom:0px;">
              <h1>Part 5 (10:26)</h1>
              </div>
              </div>

              <p class="text-center">
			  
			  Part 5 - Batch Create<br/>
			  </p>
              
			  
			  <div class="video-responsive" align="center">
              <iframe width="420" height="315" src="https://www.youtube.com/embed/ilagP1Dsbgs" frameborder="0" allowfullscreen></iframe>

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
