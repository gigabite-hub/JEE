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


<?php include "top22.php"; ?>
<style>
.form-line {
	border-right: 1px solid #ddd;
}
#frmContact .form-group {
	margin-bottom: 30px;
}
#frmContact label {
	color:#fff;
	font-weight:normal;
	font-size:18px;
}
#frmContact textarea.form-control {
	height: 145px;/* margin-top: px;*/
}
#ad-revenue h3 {
	color: #0188CA;
	font-weight: bold;
	font-size: 22px;
	margin-top:25px;
	margin-bottom:20px;
}
.form-thumb {
	border:1px #f1f1f1 solid;
	padding-right:20px;
	padding-left:20px;
	padding-bottom:20px;
}
.form-thumb i {
	margin-top:-150px;
}
.faq-num i {
	color:#FFFE8A;
}
.icon-rotate {
	display:none;
}
</style>
</head>
<body>
<div id="wrapper">
  <?php include "header.php"; ?>
  <main id="main">
  <div class="container">
    <div class="mb-banner animated zoomOutSmall animate-3"> <img src="assets/images/contact_banner.jpg" class="img-responsive" /> </div>
  </div>
  <div id="about" class="container mb-content">
    <div class="default-header text-left lazy-fade-u">
      <h1>Contact Us</h1>
    </div>
    <div id="ad-revenue" class="section-alt2" style="padding:0px;">
      <div class="row">
        <div class="col-md-6 ">
          <div id="flash"> </div>
          <div class="section-top" style="padding:20px; margin-bottom:20px;">
            <div class="row">
              <form id="frmContact" method="get">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="name">Name <span style="color:red;">*</span></label>
                    <input type="text" class="form-control required" id="name" name="name" placeholder=" First and last name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email <span style="color:red;">*</span></label>
                    <input type="email" class="form-control required" id="email" name="email" placeholder=" Email address">
                  </div>
                  <div class="form-group">
                    <label for="phone">Number <span style="color:red;">*</span></label>
                    <input type="tel" class="form-control required" id="phone" name="phone" placeholder=" Best number to reach you">
                  </div>
                  <div class="form-group">
                    <label for ="message"> Message <span style="color:red;">*</span></label>
                    <textarea  class="form-control required" style="height:112px;" id="message" name="message" placeholder="Your message"></textarea>
                  </div>
                  <div class="form-group text-center"> 
                    <!--GOOGLE RECAPTCHA HAMMAD APR 19 18 --> 
                    <script src='https://www.google.com/recaptcha/api.js'></script>
                    <div class="g-recaptcha" data-sitekey="<?php echo $reCaptcha_publickey; ?>"></div>
                  </div>
                  <div style="margin:21px 0;">
                    <button type="button" class="btn btn-default btn-block btn-contact">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="accordion md-accordion accordion-faq" id="accordion-faq-1" role="tablist" aria-multiselectable="true">
            <div>
              <div class="">
                <div class="panel-header" role="tab" id="heading10"> <a data-toggle="collapse" data-parent="#accordion-faq-1" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                  <h4><span class="faq-num"><i class="fa fa-info-circle"></i></span> <span class="faq-question">General Inquiries</span> <i class="fa fa-plus-circle icon-rotate"></i></h4>
                  </a> </div>
                <div id="collapse1"  role="tabpanel" aria-labelledby="heading1" data-parent="#accordion-faq-1">
                  <div class="panel-body">
                    <p> Send inquiry to <a href="mailto:info@jibbio.com">info@jibbio.com</a></p>
                  </div>
                </div>
              </div>
              <div class="">
                <div class="panel-header" role="tab" id="heading10"> <a data-toggle="collapse" data-parent="#accordion-faq-2" href="#collapse2" aria-expanded="true" aria-controls="collapse1">
                  <h4><span class="faq-num"><i class="fa fa-life-ring"></i></span> <span class="faq-question">Free Consultation</span> <i class="fa fa-plus-circle icon-rotate"></i></h4>
                  </a> </div>
                <div id="collapse2"  role="tabpanel" aria-labelledby="heading1" data-parent="#accordion-faq-2">
                  <div class="panel-body">
                    <p>Book a free consultation <a href="http://form2.jibbio.com/view.php?id=2322896" target="_blank">HERE</a></p>
                  </div>
                </div>
              </div>
			  <!--<div class="panel lazy-fade-r">
                <div class="panel-header" role="tab" id="heading10"> <a data-toggle="collapse" data-parent="#accordion-faq-2" href="#collapse2" aria-expanded="true" aria-controls="collapse1">
                  <h4><span class="faq-num"><i class="fa fa-life-ring"></i></span> <span class="faq-question">Technical Support</span> <i class="fa fa-plus-circle icon-rotate"></i></h4>
                  </a> </div>
                <div id="collapse2"  role="tabpanel" aria-labelledby="heading1" data-parent="#accordion-faq-2">
                  <div class="panel-body">
                    <p> Have a technical question and not currently a Jibbio member?  Please send your inquiries to <a href="mailto:support@jibbio.com">support@jibbio.com</a></p>
                    <p> If you are a Jibbio member, please login to your account and submit a support ticket via your Dashboard for all technical and support matters.</p>
                  </div>
                </div>
              </div>
              <div class="panel lazy-fade-r">
                <div class="panel-header" role="tab" id="heading10"> <a data-toggle="collapse" data-parent="#accordion-faq-3" href="#collapse3" aria-expanded="true" aria-controls="collapse1">
                  <h4><span class="faq-num"><i class="fa fa-exclamation-triangle"></i></span> <span class="faq-question">Report Email Abuse</span> <i class="fa fa-plus-circle icon-rotate"></i></h4>
                  </a> </div>
                <div id="collapse3"  role="tabpanel" aria-labelledby="heading1" data-parent="#accordion-faq-3">
                  <div class="panel-body">
                    <p> If you receive an email campaign sent by a Jibbio member without the option to "unsubscribe," please copy and paste the entire "message source" and email it to <a href="mailto:abuse@jibbio.com">abuse@jibbio.com</a> </p>
                  </div>
                </div>
              </div>-->
              <div class="">
                <div class="panel-header" role="tab" id="heading10"> <a data-toggle="collapse" data-parent="#accordion-faq-5" href="#collapse5" aria-expanded="true" aria-controls="collapse1">
                  <h4><span class="faq-num"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span> <span class="faq-question">Public & Media Relations</span> <i class="fa fa-plus-circle icon-rotate"></i></h4>
                  </a> </div>
                <div id="collapse5"  role="tabpanel" aria-labelledby="heading1" data-parent="#accordion-faq-5">
                  <div class="panel-body">
                    <p> Send inquiry to <a href="mailto:press@jibbio.com">info@jibbio.com</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</main>
<?php //include "newsletter.php"; ?>
<?php include "footer.php"; ?>
</div>
<?php include "bottom.php"; ?>
<script>
$(document).ready(function() { 

	$(".btn-contact").click(function(e) {
		var url = 'contact-send.php';
		var error = 0;
		var $contactform = $('#frmContact');
		$('.required', $contactform).each(function (i) {
			if ($(this).val() === '') {
				error++;
			} 
		}); // each
		if (error > 0) {
				alert('Please fill in all the fields.');	
		} else {
			var name = $contactform.find('input[name="name"]').val();
			var email = $contactform.find('input[name="email"]').val();	
			var phone = $contactform.find('input[name="phone"]').val();	
			var message = $contactform.find('textarea[name="message"]').val();
			var g_recaptcha_response = grecaptcha.getResponse();	
			//submit the form
			$.ajax({
				type: "POST",
				url: url,
				data: {name:name, email: email, phone: phone, message: message, g_recaptcha_response: g_recaptcha_response},
				success: function (data) {
					if (data == '1') {
						// show thank you 
						$("#flash").html('<div class="alert alert-success">Your message has been sent, and we will respond within 24 hours.  Thank you.</div>');
					}  
					else if(data == '2') {
						// show thank you 
						$("#flash").html('<div class="alert alert-danger">The reCAPTCHA wasn\'t entered correctly.</div>');
					}  else {
						$("#flash").html('<div class="alert alert-danger">Unable to send your message. Please try again.</div>');
					}
				}
			}); //$.ajax
		}
		return false;
    });
/*
		$(".btn-newsletter").click(function(e) {
			var error = 0;
			var $contactform = $('#frmNewsletter');
			$('.required', $contactform).each(function (i) {
				if ($(this).val() === '') {
					error++;
				} 
			}); // each
			if (error > 0) {
					alert('Please enter your email address.');	
			} else {
				$("#captchaModal").modal("show");
			}
			return false;
		});

		$('#captchaModal').on('shown.bs.modal', function () {
			grecaptcha.render("reCaptcha", {sitekey: "<?php echo $reCaptcha_publickey; ?>", 
			
			callback : reCaptchaCallback,
			theme: "light"});
		});
		$('#captchaModal').on('hide.bs.modal', function () {
			grecaptcha.reset();
		});	
*/	
});
function reCaptchaCallback() {

	var url = 'newsletter-send.php';
	var $contactform = $('#frmNewsletter');
	var email = $contactform.find('input[name="email"]').val();	
	var g_recaptcha_response = grecaptcha.getResponse();

	//submit the form
	$.ajax({
		type: "POST",
		url: url,
		data: {email: email, g_recaptcha_response: g_recaptcha_response},
		success: function (data) {
			if (data == '1') {
				// show thank you 
				alert('Thank you. You will now receive our periodic newsletters.');
			} else if(data == '2') {
				alert('The reCAPTCHA wasn\'t entered correctly.');
			}  else {
				alert('Unable to send your message. Please try again.');
			}
			$('#captchaModal').modal('hide');
		}
	}); //$.ajax
};

</script>
</body>
</html>
