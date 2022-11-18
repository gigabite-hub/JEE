<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
<?php include "top21.php"; ?>
<link href="assets/css/simplelightbox.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
  <?php include "header.php"; ?>
  <main id="main">
  <div class="container">
   <!-- <div class="mb-banner"> <img src="assets/images/testimonials-banner.jpg" class="img-responsive" /> </div> -->
  </div>
  <div id="about" class="container mb-content">
    <div class="default-header text-left">
      <h1 style="margin-bottom:25px;">Endorsements</h1>
      <div class="section-alt3" style="padding-top:50px;">
        <div class="container"> <span class="image-wrap"><a class="lightbox" href="https://jee.jibbio.com/assets/images/jibbio_endorsement_1.jpg"><img class="img-responsive center-block"  src="https://jee.jibbio.com/assets/images/jibbio_endorsement_1.jpg"   width="500" height="500"> </a></span> </div>
      </div>
      <div class="section-alt1" style="padding-top:50px;">
        <div class="container"> <span class="image-wrap"><a class="lightbox" href="https://jee.jibbio.com/assets/images/jibbio_endorsement_2.jpg"><img class="img-responsive center-block"  src="https://jee.jibbio.com/assets/images/jibbio_endorsement_2.jpg"   width="500" height="500"> </a></span> </div>
      </div>
      <div class="section-alt3" style="padding-top:50px;">
        <div class="container"> <span class="image-wrap"><a class="lightbox" href="https://jee.jibbio.com/assets/images/jibbio_endorsement_3.jpg"><img class="img-responsive center-block"  src="https://jee.jibbio.com/assets/images/jibbio_endorsement_3.jpg"   width="500" height="500"> </a></span> </div>
      </div>
      <div class="section-alt1" style="padding-top:50px;">
        <div class="container"> <span class="image-wrap"><a class="lightbox" href="https://jee.jibbio.com/assets/images/jibbio_endorsement_4.jpg"><img class="img-responsive center-block"  src="https://jee.jibbio.com/assets/images/jibbio_endorsement_4.jpg"   width="500" height="500"> </a></span> </div>
      </div>
    </div>
  </div>
</div>
</main>
<?php include "footer.php"; ?>
</div>
<?php include "bottom.php"; ?>
<script src="assets/js/simple-lightbox.min.js"></script>
<script>
	$(document).ready(function(){
		var lightbox = $('a.lightbox	').simpleLightbox();
	});
</script>
</body>
</html>
