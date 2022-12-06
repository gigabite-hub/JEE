<?php include "config.php";?>
<!DOCTYPE html>
<html>
	<head>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-16073180-1"></script>
		<script>
		  	window.dataLayer = window.dataLayer || [];
		  	function gtag(){dataLayer.push(arguments);}
		  	gtag('js', new Date());

		  	gtag('config', 'UA-16073180-1');
		</script>
		<?php include "top26.php";?>
		<link href="assets/css/simplelightbox.min.css" rel="stylesheet" type="text/css" />
		<style>

			html {
				scroll-behavior: smooth;
			}

			:target {
				scroll-margin-top: 100px;
			}

			.features-container {
				max-width: 1170px;
				width: 100%;
				/* border: 1px solid #000000; */
				margin: 0 auto;
				padding: 0 10px;
				margin-top: 100px;
			}

			.feature-heading h2 {
				font-size: 60px;
				margin: 0px;
			}

			.feature-heading {
				padding: 40px 0px;
			}

			.tabs-container {
				display: flex;
				flex-direction: row;
				flex-wrap: nowrap;
				justify-content: normal;
				align-items: normal;
				align-content: normal;
				/* border: 1px solid #000000; */

			}

			.tabs-items {
				display: block;
				flex-grow: 0;
				flex-shrink: 1;
				flex-basis: auto;
				align-self: auto;
				order: 0;
				/* border: 1px solid #000000; */
				width: 100%;
			}

			.tabs-items:nth-child(1) {
				width: 35%;
			}


			.tabs-items ul {
				list-style-type: none;
				padding: 0px;
				margin: 0px;
			}

			.tabs-items ul li {
				padding: 0.75rem 0px;
				padding-left: 1.5rem;
				border-left: 3px solid #8d9091;
			}

			.tabs-items ul li a {
				font-size: 18px;
				font-weight: 500;
				text-decoration: none;
				color: #575757;
			}

			.tab-section {
				display: flex;
				flex-direction: row;
				flex-wrap: wrap;
				justify-content: normal;
				align-items: normal;
				align-content: normal;
				/*     border: 1px solid #000000; */
				/* margin-bottom: 50px; */
				padding-bottom: 50px;
				border-bottom: 1px solid rgba(141, 144, 145, 0.51);
			}

			.tab-section-item {
				display: block;
				flex-grow: 0;
				flex-shrink: 1;
				flex-basis: auto;
				align-self: auto;
				order: 0;
				/*     border: 1px solid #000000; */
				width: 47%;
				margin: 10px;
				padding: 10px 0;
			}

			.tab-section-item h4 {
				font-weight: 800;
				font-size: 20px;
				margin: 0 0 10px;
				padding-right: 10px;
			}

			.tab-section-item p {
				margin: 0;
				font-size: 16px;
				padding-right: 20px;
			}

			.rel-sec {
				margin-top: 50px;
			}

			.rel-sec>h2 {
				text-transform: uppercase;
				font-size: 35px;
				color: #666666;
				margin: 0px 0px 10px 10px;
			}

			.rel-sec>h4 {
				font-size: 32px;
				margin: 0px 0px 10px 10px;
			}

			.tabs-items ul {
				position: -webkit-sticky;
				position: sticky;
				top: 100px;
			}

			.tabs-items .rel-sec:nth-child(1) {
				margin-top: 0px;
			}

			.tab-section-img {
				flex-basis: 100%;
			}

			.tab-section-item>p span {
				line-height: 40px;
			}

			.tab-section-img img {
				margin-top: 20px;
			}

			.tabs-items .rel-sec:last-child .tab-section {
				border: 0px;
			}

			.bottom-det {
				text-align: center;
				max-width: 815px;
				width: 100%;
				margin: 0 auto;
				padding: 100px 0px;
			}

			.bottom-det h2 {
				margin: 0px;
				font-size: 30px;
				font-weight: 400;
				margin-bottom: 30px;
			}

			.bottom-det a {
				margin: 0px;
				background-color: #008060;
				padding: 15px 20px;
				line-height: 60px;
				text-decoration: none;
				font-size: 16px;
				color: #ffffff;
				font-weight: 500;
				box-shadow: 0 5px 15px 0 rgb(0 0 0 / 15%);
				border-radius: 5px;
			}

			.bottom-det p {
				color: #6B7177;
				font-size: 18px;
				margin-bottom: 30px;
			}

			.bottom-det a:hover, .bottom-det a:focus {
				background-color: #004c3f;
				color: #ffffff;
				transition: all 0.5s;
			}

			.faq-wrapper h2 {
				text-align: center;
				font-size: 40px;
				font-weight: 800;
			}

			.faq-container-item>h3 {
				font-size: 30px;
				font-weight: 400;
				margin: 0px;
				margin-bottom: 40px;
			}

			.list-items-container  .list-item-con-item h3 {
				font-size: 18px;
				font-weight: 500;
				margin: 0px;
				padding: 5px 10px 5px 0px;
			}

			.list-item-con-item {
				margin-bottom: 30px;
			}

			.list-items-container  .list-item-con-item p {
				font-size: 16px;
				font-weight: 500;
				color: #6B7177;
				padding: 5px 10px 5px 0px;
			}

			.faq-container {
				width: 70%;
				margin: 0 auto;
			}

			.list-items-container {
				display: flex;
				flex-direction: row;
				flex-wrap: wrap;
				justify-content: normal;
				align-items: normal;
				align-content: normal;
				text-align: left;
			}

			.list-item-con-item {
				display: block;
				flex-grow: 0;
				flex-shrink: 1;
				flex-basis: auto;
				align-self: auto;
				order: 0;
				width: 46.5%;
				margin:5px 10px;
			}

			.faq-container-item h3 {
				text-align: left;
				padding-left: 10px;
			}

			.faq-wrapper>h2{
				margin-bottom: 50px;
				text-align: center;
			}


			.list-item-con-item p span a {
				color: #008060;
			}


			.tabs-items ul li.active {
				border-left: 3px solid #000000;
			}

			.faq-container-item {
				margin-bottom: 50px;
			}
			@media (max-width: 767px) {

				.feature-heading h2 {
					padding: 0px 20px;
				}

				.tabs-container,
				.tab-section {
					flex-direction: column;
				}

				.tab-section {
					margin: 0;
					padding: 0 10px;
				}
				.tabs-items {
					width: 100%;
				}
				.tab-section-item {
					width: 100%;
					margin: 0;
					padding: 10px;
				}
				.tab-section-item:last-child {
					margin-bottom: 30px;
				}
				.tab-section-img img {
					height: 200px;
				}
				.tabs-items:nth-child(1) {
					width: 100%;
					display: none;
				}
				.bottom-det {
					padding: 30px 10px;
				}

				.rel-sec h2 {
					margin: 0;
					padding: 0 20px;
				}

				.bottom-det h2 {
					font-size: 25px;
				}
				.bottom-det p {
					font-size: 14px;
				}

				.faq-wrapper > h2 {
					font-size: 28px;
					font-weight: 600;
				}

				.faq-container {
					width: 100%;
				}

				.faq-container-item h3 {
					padding: 0px 20px;
				}

				.list-items-container {
					flex-direction: column;
				}
				.list-item-con-item {
					width: 100%;
					margin: 0px;
					padding: 10px 20px;
				}
			}

			@media (min-width:768px) and (max-width:1024px) {

				.feature-heading h2 {
					padding: 0px 20px;
				}

				.tabs-container,
				.tab-section {
					flex-direction: column;
				}

				.tab-section {
					margin: 0;
					padding: 0 10px;
				}
				.tabs-items {
					width: 100%;
				}
				.tab-section-item {
					width: 100%;
					margin: 0;
					padding: 10px;
				}
				.tab-section-item:last-child {
					margin-bottom: 30px;
				}
				.tab-section-img img {
					height: 200px;
				}
				.tabs-items:nth-child(1) {
					width: 100%;
					display: none;
				}
				.bottom-det {
					padding: 30px 10px;
				}

				.rel-sec h2 {
					margin: 0;
					padding: 0 20px;
				}

				.bottom-det p {
					font-size: 14px;
				}

				.faq-wrapper > h2 {
					font-size: 35px;
					font-weight: 600;
				}

				.faq-container {
					width: 100%;
				}

				.faq-container-item h3 {
					padding: 0px 20px;
				}

				.list-items-container {
					flex-direction: column;
				}
				.list-item-con-item {
					width: 100%;
					margin: 0px;
					padding: 10px 20px;
				}
			}

		</style>
	</head>
<body>
<div id="wrapper">
  	<?php $selMenu = "online-store-ecommerce-website-marketplace-builder.php";?>
  	<?php include "products-nav.php";?>
  	<?php include "header.php";?>
  	<main id="main">
	    <div class="section-top text-center" style="padding-bottom:40px;">
	      	<div class="container"></div>
	    </div>
	    <div class="section-alt2" style="padding:0px;">
	      	<div class="container">
	        	<div class="row">
	          		<div class="col-md-10 col-md-offset-1">
	            		<div class="tagline animated slideInDown animate-2" style="background-color:#014a6e;">
	              			<div class="default-header text-center">
				                <h2 style="color:#f6e12a;">Online Store Marketplace</h2>
				                <p class="info text-center" style="color:#ffffff;">Create an ecommerce website to sell your products, and offer vendors the free option to sell their products for a rev-share from each sale.&nbsp; Earn more money online.</p>
				            </div>
	            		</div>
	          		</div>
	        	</div>
	      	</div>
	    </div>
	    <div class="default-header text-center lazy-fade-l" id="adrevenue">
          	<h1><!--Why--></h1>
        </div>

		<!-- Features Section -->
		<div class="features-wrapper">
			<div class="features-container">

				<!-- Start with Tabs Section -->

				<!-- <div class="feature-heading">
					<h2>Features</h2>
				</div> -->

				<!-- Tabs Sections -->

				<div class="tabs-container">
					<div class="tabs-items">
						<ul>
							<li><a href="#section1">Online Store</a></li>
							<li><a href="#section2">Marketplace</a></li>
							<li><a href="#section3">Shopping cart </a></li>
							<li><a href="#section4">Store management</a></li>
							<li><a href="#section5">Marketing & SEO</a></li>
							<li><a href="#section6">Products</a></li>
							<li><a href="#section7">Web hosting </a></li>
							<li><a href="#section8">Analytics</a></li>
							<li><a href="#section9">Support</a></li>
						</ul>
					</div>
					<div class="tabs-items">
						<!-- Section 1 -->
						<div id="section1" class="rel-sec">
							<h2>Online Store</h2>

							<div class="tab-section">
								<div class="tab-section-item">
									<h4>Customize and brand your online store</h4>
									<p>Intuitive settings so you can easily customize and brand your online store.</p>
								</div>
								<div class="tab-section-item">
									<h4>Mobile commerce ready</h4>
									<p>Your customers can browse and buy from your store using any mobile phone or tablet.</p>
								</div>
								<div class="tab-section-item">
									<h4>Your own domain name</h4>
									<p>Use your own domain name for your online store website.</p>
								</div>
								<div class="tab-section-item tab-section-img">
									<!-- <img src="/assets/img/domain.png" alt=""> -->
									<!-- <h4>Customize and brand your online store</h4> -->
									<!-- <p>Intuitive settings so you can easily customize and brand your online store.</p> -->
								</div>
							</div>
						</div>

						<!-- Section 2 -->
						<div id="section2" class="rel-sec">
							<h2>Marketplace</h2>

							<div class="tab-section">
								<div class="tab-section-item">
									<h4>Marketplace vendors</h4>
									<p>Offer vendors the free option to sell their products on your website, for a rev-share from each sale.  Earn more money online.</p>
								</div>
								<div class="tab-section-item">
									<h4>Rev-share</h4>
									<p>Choose a rev-share range, per product category (e.g. 7-12%).  Vendors select the rev-share percentage they agree to pay you within your specified range (e.g. 10%).</p>
								</div>
								<div class="tab-section-item">
									<h4>Vendor accounts</h4>
									<p>Give vendors login access to their own dashboard where they can add or manage products available on your online store, and select a rev-share percentage per category.</p>
								</div>
							</div>
						</div>


						<!-- Section 3 -->
						<div id="section3" class="rel-sec">
							<h2>Shopping cart</h2>

							<div class="tab-section">
								<div class="tab-section-item">
									<h4>Free SSL certificate</h4>
									<p>Online store includes a free 256-bit SSL certificate, which is the same type of encryption used by large banks to keep your website information secure. </p>
								</div>
								<div class="tab-section-item">
									<h4>Accept payments with PayPal and Stripe</h4>
									<p>Accept Visa, Mastercard, American Express and Discover payments via PayPal and Stripe.  Jibbio does not collect additional transaction fees.</p>
								</div>
								<div class="tab-section-item">
									<h4>Abandoned checkout recovery</h4>
									<p>Send an email to prospective customers with a link to their abandoned shopping carts to encourage purchase completion and recover lost sales.</p>
								</div>
								<div class="tab-section-item">
									<h4>Flexible shipping rates</h4>
									<p>Setup shipping rates by fixed-price, tiered pricing, weight-based, and location-based rates.</p>
								</div>
								<div class="tab-section-item">
									<h4>Offer free shipping</h4>
									<p>Improve average order size by offering free shipping to your customers. You can choose the price point at which free shipping applies.</p>
								</div>
								<div class="tab-section-item">
									<h4>Predefined taxes</h4>
									<p>Set country and state tax rates based on your location.</p>
								</div>
								<div class="tab-section-item tab-section-img">
									<!-- <img src="/assets/img/payment.png" alt=""> -->
									<!-- <h4>Customize and brand your online store</h4> -->
									<!-- <p>Intuitive settings so you can easily customize and brand your online store.</p> -->
								</div>
							</div>
						</div>

						<!-- Section 4 -->
						<div id="section4" class="rel-sec">
							<h2>Store management</h2>

							<div class="tab-section">
								<div class="tab-section-item">
									<h4>Customer profiles</h4>
									<p>Find contact info and order history to learn more about your customers and their shopping habits.</p>
								</div>
								<div class="tab-section-item">
									<h4>Dropshipping</h4>
									<p>Shopify integrates with apps like Ordoro, Inventory Source, and eCommHub, making it easy to set up your dropshipping business.</p>
								</div>
								<div class="tab-section-item">
									<h4>Customer accounts</h4>
									<p>Allow users to create a customer account to encourage repeat shopping.  Users can also checkout as a guest without creating an account.</p>
								</div>
								<div class="tab-section-item">
									<h4>Refunds</h4>
									<p>Offer partial and full refunds on an order to the payment method used. Your inventory is updated automatically.</p>
								</div>
								<div class="tab-section-item">
									<h4>Customer groups</h4>
									<p>Categorize and export customer lists based on location, purchase history, and more.</p>
								</div>
								<div class="tab-section-item">
									<h4>Email templates</h4>
									<p>Customize your automated store emails with the design you want.</p>
								</div>
								<div class="tab-section-item">
									<h4>Order fulfillment</h4>
									<p>Capture payments and fulfill orders right from your phone. Send shipping notifications from the post office.</p>
								</div>
							</div>
						</div>

						<!-- Section 5 -->
						<div id="section5" class="rel-sec">
							<h2>Marketing & SEO</h2>

							<div class="tab-section">
								<div class="tab-section-item">
									<h4>Search engine optimized</h4>
									<p>Help potential customers find your store using search engines. Jibbio online store marketplace consists of the same SEO technical best practices, implemented with Jibbio MAXeSites such as customizable H1, title, and meta tags.</p>
								</div>
								<div class="tab-section-item">
									<h4>MAXeSites integration</h4>
									<p>Add a MAXeSite to each product page, which consists of more information to improve conversions, generate leads, SEO, and web presence.</p>
								</div>
								<div class="tab-section-item">
									<h4>Generated sitemap.xml</h4>
									<p>Sitemap.xml is automatically generated with your products and webpages.</p>
								</div>
								<div class="tab-section-item">
									<h4>Product reviews</h4>
									<p>Engage customers and encourage sales with the option to leave SEO-friendly product reviews on your website.</p>
								</div>
								<div class="tab-section-item">
									<h4>Discounts</h4>
									<p>
										Boost sales and customer loyalty by creating “Buy One, Get One” promotions and targeted discount codes,
										right from your admin dashboard.<br>
										<span><a href="">Learn more about discounts</a></span>
									</p>
								</div>
								<div class="tab-section-item">
									<h4>Sell on Facebook</h4>
									<p>Facebook fans can browse your products and make a purchase without leaving Facebook.</p>
								</div>
								<div class="tab-section-item">
									<h4>Gift cards</h4>
									<p>Your customers are able to purchase a gift card for someone from your store, or gift cards can be used as store credit.</p>
								</div>
								<div class="tab-section-item">
									<h4>Social media integration</h4>
									<p>Online store marketplace website include social media integration (e.g. Pinterest, Instagram, Facebook, Twitter, and Tumblr).</p>
								</div>
							</div>
						</div>

						<!-- Section 6 -->
						<div id="section6" class="rel-sec">
							<h2>Products</h2>

							<div class="tab-section">
								<div class="tab-section-item">
									<h4>Inventory management</h4>
									<p>Manage your entire inventory- Track stock counts and automatically stop selling products when inventory runs out.</p>
								</div>
								<div class="tab-section-item">
									<h4>Digital products</h4>
									<p>Customers can order and download your digital products right from your online store.</p>
								</div>
								<div class="tab-section-item">
									<h4>Subscription products</h4>
									<p>Customers can buy your subscription products with flexible recurring payments.</p>
								</div>
								<div class="tab-section-item">
									<h4>Product variations</h4>
									<p>Offer different variations of your products such as multiple colors, sizes, materials, and more. Each variation can have its own SKU, price, weight, and inventory.</p>
								</div>
								<div class="tab-section-item">
									<h4>Import/Export</h4>
									<p>Import or export your products using CSV files.</p>
								</div>
								<div class="tab-section-item">
									<h4>Product organization</h4>
									<p>Organize products by category, type, sale, season, and more.  Automatically sort products based on vendor, inventory, and price.</p>
								</div>
								<div class="tab-section-item">
									<h4>Unlimited products</h4>
									<p>No limit to the number or type of products you can sell in your online store.</p>
								</div>
								<div class="tab-section-item">
									<h4>Video Support</h4>
									<p>Add, manage, and display video assets on product pages easily, right from your admin dashboard.</p>
								</div>
								<div class="tab-section-item">
									<h4>SEO product tags</h4>
									<p>Optimize your product pages for search engines with product-specific titles, meta tags, and URL handles.</p>
								</div>
								<div class="tab-section-item tab-section-img">
									<h4>Subscriptions</h4>
									<p>Add multiple images for your products, so you can display your product from all angles.</p>
									<!-- <img src="/assets/img/graph.png" alt=""> -->
								</div>
							</div>
						</div>

						<!-- Section 7 -->
						<div id="section7" class="rel-sec">
							<h2>Web hosting</h2>

							<div class="tab-section">
								<div class="tab-section-item">
									<h4>Unlimited bandwidth</h4>
									<p>No bandwidth charge or limit on the number of visitors or traffic to your online store.</p>
								</div>
								<div class="tab-section-item">
									<h4>SSL certificate</h4>
									<p>Online store includes a 256-bit SSL certificate to keep your customers' information and business data secure.</p>
								</div>
								<div class="tab-section-item">
									<h4>Instant upgrades</h4>
									<p>Online store marketplace website updates are automatic, so you'll conveniently receive the latest features immediately.</p>
								</div>
							</div>
						</div>


						<!-- Section 8 -->
						<div id="section8" class="rel-sec">
							<h2>Analytics</h2>

							<div class="tab-section">
								<div class="tab-section-item">
									<h4>Dashboard</h4>
									<p>An intuitive dashboard of your orders, sales and traffic helps you make the right choices for your business.</p>
								</div>
								<div class="tab-section-item">
									<h4>Google Analytics</h4>
									<p>Google Analytics works with your online store, so you can track sales, visits, and referrals.  Export reports.</p>
								</div>
								<div class="tab-section-item">
									<h4>Product reports</h4>
									<p>Analyze and gain insight into your online store's growth. See which products are selling, and which ones are not.</p>
								</div>
								<div class="tab-section-item tab-section-img">
									<!-- <img src="/assets/img/graph2.png" alt=""> -->
									<!-- <h4>Customize and brand your online store</h4> -->
									<!-- <p>Intuitive settings so you can easily customize and brand your online store.</p> -->
								</div>
							</div>
						</div>


						<!-- Section 9 -->
						<div id="section9" class="rel-sec">
							<h2>Support</h2>

							<div class="tab-section">
								<div class="tab-section-item">
									<h4>Dedicated support</h4>
									<p>
										Support is available 24 hours a day, 7 days a week.<br>
										<span><a href="">Contact our support team</a></span>
									</p>
								</div>
								<div class="tab-section-item">
									<h4>Help Center</h4>
									<p>
										Find commonly asked questions, user guides, and tutorials in the Shopify Help Center.<br>
										<span><a href="">Browse the Shopify Help Center</a></span>
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!-- Bottom details -->
				<div class="bottom-det">
					<h2>Start your business journey with Jibbio</h2>
					<p>Try Jibbio Online Store Marketplace for free, and explore all the tools and services you need to start, run, and actually grow your business.</p>
					<a href="">Start free trial</a>
				</div>

				<!-- End with Tabs Section -->

				<div class="faq-wrapper">
					<h2>Frequently Asked Questions</h2>
					<div class="faq-container">

						<div class="faq-container-item">
							<h3>General questions</h3>
							<div class="list-items-container">

								<div class="list-item-con-item">
									<h3>Can I use my own domain name for my online store website?</h3>
									<p>Yes, you can use your own domain name. We also provide a free myshopify.com domain name to all stores on sign up.</p>
								</div>
								<div class="list-item-con-item">
									<h3>Is Jibbio online store marketplace secure?</h3>
									<p>Yes, each online store marketplace website includes a 256-bit SSL certificate, which is the same type of encryption used by large banks to keep your website information secure. </p>
								</div>
								<div class="list-item-con-item">
									<h3>Do I need to enter my payment details to sign up?</h3>
									<p>No, you can sign up for the 30-day free trial and setup your online store without entering your payment details.  At the end of your trial or when you decide to launch your online store, you will need to pick a plan and enter your payment details.</p>
								</div>
								<div class="list-item-con-item">
									<h3>Is there a setup fee to start my online store marketplace?</h3>
									<p>No, there are no setup fees.</p>
								</div>

								<div class="list-item-con-item">
									<h3>Are there bandwidth fees?</h3>
									<p>No, your online store includes unlimited bandwidth.</p>
								</div>
								<div class="list-item-con-item">
									<h3>Do I need a web hosting account?</h3>
									<p>No, your online store includes web hosting on Amazon Web Services.</p>
								</div>
								<div class="list-item-con-item">
									<h3>Are there any transaction fees?</h3>
									<p>No, you are only charged a credit card fee to process payments from PayPal or Stripe.  There are no additional transaction fees collected by Jibbio.</p>
								</div>
								<div class="list-item-con-item">
									<h3>What are the credit card fees?</h3>
									<p>Review current rates on PayPal and Stripe websites.</p>
								</div>
								<div class="list-item-con-item">
									<h3>How do vendors sell their products on my online store marketplace website?</h3>
									<p>Each plan offers a certain number of vendor accounts.  You provide each vendor with login access to their own account to manage all aspects of their products available on your website via an intuitive admin dashboard.</p>
								</div>
								<div class="list-item-con-item">
									<h3>How does the rev-share work with vendors?</h3>
									<p>For each product category, you choose a rev-share percentage range (e.g. 7-15%). When vendors add their products, each vendor will choose a rev-share percentage they agree to pay you within your specified range (e.g. 10%) per product category.  Vendors can change the rev-share percentage at any time.</p>
								</div>
								<div class="list-item-con-item">
									<h3>How do vendors get paid for their product sales?</h3>
									<p>You receive payment in your PayPal or Stripe account for all online sales, and balance of payment (less rev-share) is automatically sent to vendor for their product sales.</p>
								</div>
								<div class="list-item-con-item">
									<h3>How are delivery of goods and refunds handled with vendor sales?</h3>
									<p>Vendor handles delivery of goods to customers.  If a vendor issues a refund, your rev-share is automatically credit back to the vendor's account.</p>
								</div>
								<div class="list-item-con-item">
									<h3>What kind of payments can I accept on my online store?</h3>
									<p>You can accept major credit cards payments via PayPal and Stripe.</p>
								</div>
								<div class="list-item-con-item">
									<h3>Can I use a third party payment provider with Shopify?</h3>
									<p>Yes, Shopify supports many third party payment providers.
										<span><a href="">Learn more about supported third-party payment providers.</a></span>
									</p>
								</div>
								<div class="list-item-con-item">
									<h3>Can I close my online store at any time?</h3>
									<p>Yes, simply cancel your Jibbio account at any time.  All Jibbio plans are month-to-month unless you sign up for a discounted prepaid annual plan.</p>
								</div>
								<div class="list-item-con-item">
									<h3>Can I upgrade my plan later on?</h3>
									<p>Yes, you can upgrade to a larger plan that offers more vendor accounts and MAXeSites, at any time.</p>
								</div>

							</div>
						</div>

						<div class="faq-container-item">
							<h3>Online questions</h3>
							<div class="list-items-container">

								<div class="list-item-con-item">
									<h3>Can I sell on social media, like Facebook or Instagram?</h3>
									<p>Yes, you can sell on social media. Square Online integrates with Shopping on Instagram. Just tag products in your posts to let your followers shop right from Instagram. You can also connect your Instagram feed to your homepage. Separate integration with Facebook and Pinterest is also available.</p>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>

  	</main>

  <?php include "footer.php";?>
</div>
<?php include "bottom.php";?>
<script src="assets/js/simple-lightbox.min.js"></script>
<script>
	$(document).ready(function(){
		var lightbox = $('a.lightbox	').simpleLightbox();
	});

</script></body>
</html>
