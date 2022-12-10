<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-16073180-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  functiPon gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-16073180-1');
</script>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-title" content="Add to Home Screen" />
<?php include "top.php";?>
<link rel='stylesheet' href='js/fancybox/jquery.fancybox.css' type='text/css' media='all' />
<link rel="stylesheet" type="text/css" href="css/addtohomescreen.css" />
<script src="js/addtohomescreen.js"></script>
<style>
    body.modal-open .modal-dialog { /* Width */
        max-width: 100%;
        width: auto !important;
        display: inline-block;
    }
    body.modal-open .modal {
        display: flex !important;
    }
    .display-flex-center {
        display:flex;
        align-items:center;
    }

    @media only screen and (max-width: 600px)
    {
        .display-flex-center {display:inline-block !important;}
    }

    /* New style */
    .index-container {
        max-width: 1140px;
        width: 100%;
        margin: 0 auto;
    }

    .hero-container {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: normal;
    align-items: center;
    align-content: normal;
}

.hero-container-item {
    display: block;
    flex-grow: 0;
    flex-shrink: 1;
    flex-basis: auto;
    align-self: auto;
    order: 0;
    width: 100%;
    
}

.hero-container-item:nth-child(1) {
    width: 45%;
}


.hero-container-item:nth-child(2) img {
    object-fit: contain !important;
    height: 500px;
    width: 100%;
}

.hero-container-item h2 {
    font-size: 36px;
    font-weight: 700;
    color: #014a6e;   
}

.hero-container-item p {
    font-size: 20px;
    color: #000000;
}

.hero-container-item p span {
    color: #006610;
}

.hero-container-item a {
    text-align: center;
    background-color: #f92c8b;
    width: 100%;
    padding: 20px;
    color: #ffffff;
    display: inline-block;
}

.hero-container-item a:hover {
    text-decoration: none;
}

.hero-second {
    flex-direction: row-reverse;
    margin-top: 50px;
}
.hero-second .hero-container-item a {
    background-color: #b90100;
}

.hero-container-item ul {
    list-style-type: none;
    padding: 0px;
    padding-left: 10px;
}

.it-section .hero-container-item:nth-child(1),
.it-section .hero-container-item:nth-child(2) {
    width: 100%;
}

.it-section {
    flex-direction: column;
    margin-top: 50px;
}

.it-section .hero-container-item:nth-child(1) {
    text-align: center;
}

.it-section .hero-container-item:nth-child(2) {
    height: 280px;
}

.it-section .hero-container-item:nth-child(2) img {
    height: 280px;
    min-width: 100%;
    object-fit: contain;
}

.built-in .hero-container-item:nth-child(1),
.built-in .hero-container-item:nth-child(2) {
    width: 100%;
}

.built-in {
    flex-direction: column;
    margin-top: 50px;
}
.built-in .hero-container-item:nth-child(1) hr {
    width: 100%;
    height: 1px;
    background-color: #efefef;
}
.built-in .hero-container-item:nth-child(2) p {
    font-size: 16px;
}
.built-in .hero-container-item:nth-child(1) p {
    width: 100%;
    font-size: 35px;
    font-weight: normal;
}

.built-in .hero-container-item:nth-child(1) p {
    margin: 0;
}
.built-in .hero-container-item:nth-child(1) {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: normal;
    align-items: center;
    align-content: normal;
}
.built-in .hero-container-item:nth-child(1) {
    text-align: center;
}

.built-in .hero-container-item:nth-child(2) img {
    
    margin-top: 40px;
    height: 800px;
    object-fit: cover;
    display: block;
    margin-right: auto;
    margin-left: auto;
}

.built-in .hero-container-item:nth-child(2) a {
    margin-top: 50px;
    width: 30%;
    background-color: #fd606a;
}
.built-in .hero-container-item:nth-child(2) {
    text-align: center;
    margin-top: 80px;
}

.built-in .hero-container-item:nth-child(2) p{
    text-align: left;
}

.built-in .hero-container-item:nth-child(1) hr {
    width: 50%
}


.organic-traffic .hero-container-item:nth-child(2) {
    background-color: #f3fcff;
    padding: 20px 50px;
}

.organic-traffic .hero-container-item:nth-child(2) a {
    background-color: #eabd00;
    border: 1px solid #000000;
}

.customer-service .hero-container-item:nth-child(1) {
    flex-basis: 100%;
    
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: normal;
    align-items: normal;
    align-content: normal;
}
.customer-service {
    flex-wrap: wrap;
    flex-direction: row;
}

.customer-service {
    margin-top: 50px;

}

.customer-service .hero-container-item:nth-child(2){
    width: 45%;
    padding-right: 60px;
}

.customer-service .hero-container-item:nth-child(3) {
    width: 50%;
}

.customer-service .hero-container-item:nth-child(3) img {
    height: 500px;
    object-fit: contain;
    width: 100%;
}

.customer-service .hero-container-item:nth-child(1) hr {
    width: 50%
}

.customer-service .hero-container-item:nth-child(1) {
    text-align: center;
}

.customer-service .hero-container-item:nth-child(1) p {
    margin: 0;
}

.customer-service .hero-container-item:nth-child(1) p {
    width: 100%;
    font-size: 35px;
    font-weight: normal;
}

.online-pay {
    flex-direction: row-reverse
}

.online-pay .hero-container-item:nth-child(2) {
    padding-left: 30px;
}

.social-media {
    background-color: #f0e8fc
}

.social-media .hero-container-item:nth-child(1) {
    background-color: #ffffff;
    padding-bottom: 50px;
        
}

.social-media .hero-container-item:nth-child(2) a {
    background-color: #0092d2;
}

.workplace .hero-container-item:nth-child(1) a {
    background-color: #f76300;
}
.workplace .hero-container-item:nth-child(1) {
    padding-left: 20px;
}

.qr-code .hero-container-item:nth-child(1) a {
    background-color: #000000;
}

.end .hero-container-item:nth-child(1) {
    width: 100%;
}

.end .hero-container-item:nth-child(1) p {
    text-align: center;
}

.end {
    margin-bottom: 100px;
}


@media (max-width: 767px) {
    .hero-container {
        flex-direction: column;
    }
    
    .index-container {
        width: 100%;
        padding: 0px 10px;
    }
    
    .hero-container-item:nth-child(1) {
        width: 100%;
        margin-bottom: 30px;
    }
    
    .built-in .hero-container-item:nth-child(2) img {
        height: auto;
    }
    
    .hero-container-item:nth-child(2) img {
        height: auto;
    }
    
    .built-in .hero-container-item:nth-child(2) {
        margin: 0px;
    }
    
    
    .built-in .hero-container-item:nth-child(2) a {
        width: 100%;
    }
    
    .built-in .hero-container-item:nth-child(1) p {
        font-size: 20px;
    }
    
    .customer-service .hero-container-item:nth-child(1) p {
        font-size: 20px;
    }
    
    .customer-service .hero-container-item:nth-child(2) {
        width: 100%;
    }
    
    .customer-service .hero-container-item:nth-child(3) img {
        height: auto;
        margin-top: 20px
    }
    
    .workplace {
        margin: 0px;
    }
    
}

@media (min-width:768px) and (max-width:1024px) {
    
    .index-container {
        width: 100%;
        padding: 0px 10px;
    }
    
    .hero-container-item:nth-child(1) {
        width: 100%;
        margin-bottom: 30px;
    }
    
    .built-in .hero-container-item:nth-child(2) img {
        height: auto;
    }
    
    .hero-container-item:nth-child(2) img {
        height: auto;
    }
    
    .built-in .hero-container-item:nth-child(2) {
        margin: 0px;
    }
    
    
    .built-in .hero-container-item:nth-child(2) a {
        width: 100%;
    }
    
    .built-in .hero-container-item:nth-child(1) p {
        font-size: 20px;
    }
    
    .customer-service .hero-container-item:nth-child(1) p {
        font-size: 20px;
    }
    
    .customer-service .hero-container-item:nth-child(2) {
        width: 100%;
    }
    
    .customer-service .hero-container-item:nth-child(3) img {
        height: auto;
        margin-top: 20px
    }
    
    .workplace {
        margin: 0px;
    }
    
}




</style>
</head>
<body>

<div class="index-wrapper">
    <?php include "header.php"; ?>

    <div class="index-container">
        
        <div class="hero-container">
            <div class="hero-container-item">
                <h2>Business Builder</h2>
                <p>Grow your business online with multifaceted MAXeSites. All from just <span>$12 per month</span>.</p>
                <a target="_blank" href="https://member.jibbio.com/signup.php">Start Free Trial</a>
            </div>
            <div class="hero-container-item">
                <img src="https://jee.jibbio.com/images/increase-online-presence-organic-traffic-customers-service-sales.jpg" alt="">
            </div>
        </div>
        
        <div class="hero-container hero-second">
            <div class="hero-container-item">
                <h2>MAXeSites</h2>
                <p class="hero-highlight"><i>Increase your online presence</i></p>
                <p>🔥 An easy multifaceted SASS (Sales, Administration, Service, SEO) tool to grow online.</p>
                <ul>
                    <li>&#x2705; Google Business Profile - Top 3</li>
                    <li>&#x2705; SEO microsites / landing pages</li>
                    <li>&#x2705; Personalized customer's site</li>
                    <li>&#x2705; Multimedia online forms</li>
                    <li>&#x2705; Sell online</li>    
                    <li>&#x2705; <i>Plus more</i> </li>    
                </ul>
                <a target="_blank" href="https://jee.jibbio.com/MAXeSites.php">View MAXeSite™ Features</a>
            </div>
            <div class="hero-container-item">
                <img src="https://jee.jibbio.com/images/27-modularized-field-elements-maxesite-apps.jpg" alt="">
            </div>
        </div>

        <div class="hero-container it-section">
            <div class="hero-container-item">
                <p>&#128187; Easy to update and manage - no IT staff required.</p>
            </div>
            <div class="hero-container-item">
                <img src="https://jee.jibbio.com//images/maxesites-hundreds-of-uses-to-grow-small-large-business.jpg" alt="">
            </div>
        </div>

        <div class="hero-container built-in">
            <div class="hero-container-item">
                <hr>
                <p>Built-in SEO</p>
                <hr>
            </div>
            <div class="hero-container-item">
                <p>&#128202; MAXeSites are accessibility compliant with over 25 built-in SEO elements to rank higher on search results for more visibility.</p>
                <img src="https://jee.jibbio.com//images/integrate-widgets-script-code-web-page-maxesite.jpg" alt="">
                <a target="_blank" href="https://jee.jibbio.com/increase-search-engine-rankings-and-drive-more-organic-traffic-to-website-with-jibbio-MAXeSites-3-step-guidelines.php">View Built-in SEO Elements</a>
            </div>
        </div>

        <div class="hero-container built-in">
            <div class="hero-container-item">
                <hr>
                <p>Google Business Profile</p>
                <hr>
            </div>
            <div class="hero-container-item">
                <p>&#128205; Using a MAXeSite™ as the website link for your Google Business Profile can get you in the Top 3 for more leads and customers.</p>
                <img src="https://jee.jibbio.com//images/increase-Google-Business-Profile-listing-ranking-organic-search-results.jpg" alt="">
            </div>
        </div>

        <div class="hero-container built-in organic-traffic">
            <div class="hero-container-item">
                <hr>
                <p>Organic Traffic</p>
                <hr>
            </div>
            <div class="hero-container-item">
                <p>&#127760; Create MAXeSites each focused on ONE product, service, or topic targeting a local area to drive more organic search traffic.</p>
                <img src="https://jee.jibbio.com//images/create-content-maxesite-increase-organic-traffic.jpg" alt="">
                <p>&#11014; Single-page MAXeSites can outrank large multi-page sites (e.g. FB, YP) for local keywords to reach Google Top 10 in a year.</p>
                <a target="_blank" href="https://jee.jibbio.com/increase-search-engine-rankings-and-drive-more-organic-traffic-to-website-with-jibbio-MAXeSites-4.php">&#128270; View Built-in SEO Elements</a>
            </div>
        </div>

        <div class="hero-container customer-service">
            <div class="hero-container-item">
                <hr>
                <p>Customer Service</p>
                <hr>
            </div>
            <div class="hero-container-item">
                <p>&#128241;&#128242; Batch create and update thousands of MAXeSites personalized for each customer, with one CSV file.  Choose from 300 settings.</p>
                <ul>
                    <li>&#x2705; Easy touchpoint for customers</li>
                    <li>&#x2705; Customer data prepopulated</li>
                    <li>&#x2705; Exceptional customer service</li>
                    <li>&#x2705; Increase customer loyalty</li>
                    <li>&#x2705; Drive repeat sales</li>    
                </ul>
                <a target="_blank" href="https://jee.jibbio.com/maxesite-27-modularized-field-elements-300-settings.php">View Batch Settings</a>
            </div>
            <div class="hero-container-item">
                <img src="https://jee.jibbio.com/images/create-promotional-administration-personalized-maxesites.jpg" alt="">
            </div>
        </div>

        <div class="hero-container built-in organic-traffic">
            <div class="hero-container-item">
                <hr>
                <p>Ad Revenue</p>
                <hr>
            </div>
            <div class="hero-container-item">
                <p>&#128176; Offer local advertising on MAXeSites for income, backlinks, and cross-promotion.  Set ad rates and keep 100% of revenue.</p>
                <img src="https://jee.jibbio.com/images/offer-local-businesss-advertising-generate-ad-revenue-maxesites.jpg" alt="">
            </div>
        </div>


        <div class="hero-container customer-service online-pay">
            <div class="hero-container-item">
                <hr>
                <p>Online Payments</p>
                <hr>
            </div>
            <div class="hero-container-item">
                <p>&#128179; Accept PayPal and credit card payments.</p>
                <ul>
                    <li>&#x2705; Single or recurring payments</li>
                    <li>&#x2705; Simply enter a PayPal email</li>
                    <li>&#x2705; Sell one or multiple items</li>
                    <li>&#x2705; Flat or variable prices</li>
                    <li>&#x2705; Minutes to set up</li>    
                </ul>
            </div>
            <div class="hero-container-item">
                <img src="https://jee.jibbio.com/images/collect-single-recurring-credit-card-payments-paypal-maxesites-raffle-etickets.jpg" alt="">
            </div>
        </div>

        <div class="hero-container customer-service">
            <div class="hero-container-item">
                <hr>
                <p>Online Authority</p>
                <hr>
            </div>
            <div class="hero-container-item">
                <p>&#128640; Incorporate MAXeSites with online marketing to build online authority and web presence.</p>
            </div>
            <div class="hero-container-item">
                <img src="https://jee.jibbio.com/images/social-email-sms.jpg" alt="">
            </div>
        </div>

        <div class="hero-container built-in">
            <div class="hero-container-item">
                <hr>
                <p>Email Users</p>
                <hr>
            </div>
            <div class="hero-container-item">
                <p>&#128231; Send an email to update all MAXeSite™ respondents who have provided an email, with a click of the mouse.</p>
                <img src="https://jee.jibbio.com//images/send-email-campaigns-to-update-customers.jpg" alt="">
            </div>
        </div>


        <div class="hero-container customer-service online-pay social-media">
            <div class="hero-container-item">
                <hr>
                <p>Social Media</p>
                <hr>
            </div>
            <div class="hero-container-item">
                <p>&#128279; Instead of uploading content directly to sites, add it to MAXeSites then share its link to grow presence, improve engagement and results.</p>
                <a target="_blank" href="https://jee.jibbio.com/maxesite-27-modularized-field-elements-300-settings.php">🔎 Boys & Girls Club Case Study</a>
            </div>
            <div class="hero-container-item">
                <img src="https://jee.jibbio.com/images/share-maxesite-link-facebook-sell-online-expand-web-presence-2.jpg" alt="">
            </div>
        </div>

        <div class="hero-container customer-service">
            <div class="hero-container-item">
                <hr>
                <p>Workplace</p>
                <hr>
            </div>
            
        </div>

        <div class="hero-container hero-second workplace">
            <div class="hero-container-item">
                <p>&#128229; MAXeSites can simplify daily tasks, increase employee productivity, and boost operational efficiency.  Save time and money.</p>
                <a target="_blank" href="https://jee.jibbio.com/increase-employee-performance-and-ways-to-monitor-staff-efficiency-and-measuring-employee-productivity-in-the-workplace-2.php">🔎 FedEx® Case Study</a>
            </div>
            <div class="hero-container-item">
                <img src="https://jee.jibbio.com/images/shipping-container-repairs.jpg" alt="">
            </div>
        </div>


        <div class="hero-container">
            <div class="hero-container-item">
                <p>📈 Leverage MAXeSites to expand online presence beyond a website and drive more sales for your brand.</p>
                <ul>
                    <li>&#x2705; Email / Print marketing</li>
                    <li>&#x2705; GMB / Paid ads</li>
                    <li>&#x2705; SEO</li>
                    <li>&#x2705; Social media</li>
                    <li>&#x2705; Web pages</li>    
                </ul>
            </div>
            <div class="hero-container-item">
                <img src="https://jee.jibbio.com/images/diversify-and-leverage-maxesites-for-better-results-in-existing-digital-email-marketing-social-media-posts.jpg" alt="">
            </div>
        </div>


        <div class="hero-container built-in">
            <div class="hero-container-item">
                <hr>
                <p>Integration</p>
                <hr>
            </div>
            <div class="hero-container-item">
                <p>⇄ Share MAXeSites data with any system or application, via push and pull API integration.</p>
                <img src="https://jee.jibbio.com/images/jibbio-push-pull-api-integration.jpg" alt="">
            </div>
        </div>


        <div class="hero-container qr-code">
            <div class="hero-container-item">
                <h2>QR Codes</h2>
                <p class="hero-highlight"><i>Expand your web presence</i></p>
                <p>📰 Add 3-in-1 interchangeable MAXeSite™ QR codes to print media and expand online presence.</p>
                <ul>
                    <li>&#x2705; Use a QR code for different URLs</li>
                    <li>&#x2705; MAXeSite™, PayPal, or URL</li>
                    <li>&#x2705; Hi-res QR code (print 3 ft X 3 ft)</li>   
                </ul>
                <a target="_blank" href="https://jee.jibbio.com/3-in-1-qr-codes.php">View 3-in-1 QR Codes</a>
            </div>
            <div class="hero-container-item">
                <img src="https://jee.jibbio.com//images/valvoline-business-card-employee-maxesite-qr-code-increase-website-SEO.jpg" alt="">
            </div>
        </div>


        <div class="hero-container end">
            <div class="hero-container-item">
                <p>The secret of getting ahead is getting started.  Launch in minutes.</p>
                <a target="_blank" href="https://member.jibbio.com/signup.php">Sign Up</a>
            </div>
            
        </div>

        <?php include "newsletter.php"; ?>
        
    </div>
    <?php include "footer.php"; ?>
</div>


<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="modal fade" id="captchaModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div id="reCaptcha" data-callback="reCaptchaCallback" data-sitekey="<?php echo $reCaptcha_publickey; ?>"></div>
      </div>
    </div>
  </div>
</div>
<?php include "bottom.php";?>
<script type='text/javascript' src='js/fancybox/jquery.fancybox.js'></script>
<script>
//addToHomescreen();
</script>
<script>
	$(window).load(function(e) {
		$('.phone1-slider').show().bxSlider({mode:'vertical', pager:false, controls:false, auto:true, preloadImages: 'all'});
		$('.phone2-slider').show().bxSlider({mode:'vertical', pager:false, controls:false, auto:true, preloadImages: 'all'});
    });
	$(document).ready(function(){
		$('.testimonials').bxSlider({pager:false, auto:false, adaptiveHeight:true});
		$('.accordion-faq').on('hidden.bs.collapse', toggleIcon);
		$('.accordion-faq').on('shown.bs.collapse', toggleIcon);
		//grecaptcha.render("reCaptcha", {sitekey: "<?php echo $reCaptcha_publickey; ?>", theme: "light"});
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
				/*
				var email = $contactform.find('input[name="email"]').val();
				//submit the form
				$.ajax({
					type: "GET",
					url: url,
					data: {email: email},
					success: function (data) {
						if (data == '1') {
							// show thank you
							alert('Thank you. You will now receive our periodic newsletters.');
						}  else {
							alert('Unable to send your message. Please try again.');
						}
					}
				}); //$.ajax
				*/
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

	});
	function toggleIcon(e) {
		$(e.target)
			.prev('.panel-header')
			.find(".icon-rotate")
			.toggleClass('fa-plus-circle fa-minus-circle');
	}
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
