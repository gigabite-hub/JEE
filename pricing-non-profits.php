<?php include "config.php";?>
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


<?php include "top25.php";?>
<style>
.testimonial {
	margin:0 auto 25px;
	padding:25px;
	width:95%;
}
.p-title {
	text-align:center;
	font-weight:700;
	font-size:38px;
}
@media (max-width: 767px) {
	table td { font-size:14px !important;}
	table td a { font-size:14px !important;}
	table td font { font-size:20px !important;}
	table td i { font-size:20px !important;}

}

/* Pricing Table */
/* Pricing Table */
.table-wrapper table {
    table-layout: fixed;
    width: 100%;
}

.pricing-container {
    max-width: 1140px;
    width: 100%;
    margin: 0 auto;
    padding: 0 10px;
    margin-bottom: 50px;
}

.pricing-container table tbody tr td:nth-child(1),
.pricing-container table thead tr th:nth-child(1) {
    width: 33.3333%;
}

.pricing-container table tbody tr td,
.pricing-container table thead tr th {
    width: 16.66666%;
    border: 1px solid #d2d5d9;
}

.pricing-container table {
    border-collapse: collapse;
}

.pricing-container table thead tr th {
    text-align: center;
}

.pricing-section th h4 {
    margin: 0px;
    font-size: 18px;
    font-weight: 600;
    /* margin-bottom: 15px; */
}

.pricing-section p .currency {
    color: #828a91;
    font-size: 14px;
    font-weight: 400;
    padding-right: 0.25rem;
}

.pricing-section p .currency-symbol {
    color: #212326;
    font-size: 16px;
    align-self: flex-start;
}

.pricing-section p .price {
    font-size: 40px;
    line-height: 2.8125rem;
}

.pricing-section p .per-month {
    color: #828a91;
    font-size: 18px;
    line-height: 0.25rem;
    font-weight: 400;
    letter-spacing: normal;
    padding-bottom: 0.75rem;
    align-self: flex-end;
}

.pricing-section p {
    margin: 0px;
}


.pricing-section th {
    padding: 20px 0px
}

.pricing-container table thead tr th:nth-child(1) {
    /* border: none; */
}

.pricing-container table tbody .features-sec th {
    text-align: left;
    background-color: #f0f1f2;
    font-weight: 400;
    padding: 10px 10px;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
}

.feature-details td dl dd {
    margin: 0px;
    color: #6B7177;
    font-size: 13px;
}

.feature-details td dl dt {
    font-size: 14px;
    color: #212326;
    font-weight: normal;
}

.feature-details td {
    padding: 10px 10px;
}

.feature-details td:not(:first-child) {
    text-align: center;
    color: #2c957b;
    font-size: 18px;
    font-weight: 600;
}

.feature-details:hover {
    background-color: #f0f1f2;
    transition: all 0.5s;
}

.features-sec {
    border: 1px solid #d2d5d9;
}

.pricing-btn {
    text-align: center;
    margin-bottom: 50px;
}

.pricing-btn button {
    background-color: #008060;
    color: #ffffff;
    padding: 10px 20px;
    border: 0px;
    border-radius: 5px;
    background-color: transparent;
    border: 2px solid #008060;
}

.pricing-btn button span {
    color: #008060;
    font-size: 16px;
    font-weight: 600;
}
.pricing-btn button:hover {
    background-color: #008060;
    transition: all 0.5s;
    cursor: pointer;
}

.pricing-btn button:hover span {
    color: #ffffff;
}

.table-hide {
    display: none;
}

.pri-hide {
    display: none;
}
.pri-show {
    display: block;
}

.table-wrapper table thead tr th {
    background-color: transparent;
}

.pricing-container .table-wrapper {
    display: none;
}


.pricing-section p .price  {
    color: #000000;
}

.pricing-section th h4,
.pricing-container table tbody .features-sec th,
.pricing-section p .price {
    color: #000000;
}

.feature-details td dl {
    margin-bottom: 0px;
}


.colspan-5 th h4 {
    margin: 0px;
}

.colspan-5 th h4 a {
    font-size: 14px;
    font-weight: 600;
    padding: 0px;
    color: #000000;
}

.table-wrapper table thead tr th:first-child {
    text-align: left;
    padding-left: 10px;
}

@media screen and (max-width: 767px) {

    .old-table td {
        text-align: left;
    }

    table {    .old-table td {
        text-align: left;
    }

    table {
        border: 0;
    }


    .pricing-container table thead tr th,
    .pricing-container table thead tr th:nth-child(1) {
        width: 100%;
    }
    table tr th,
    table tr {
        border-bottom: 3px solid #ddd;
        display: block;
        margin-bottom: 0.625em;
    }
    .feature-details td:not(:first-child),
    .pricing-container table tbody tr td:nth-child(1) {
        width: 100%;
        text-align: left;
    }
    .feature-details td:not(:first-child) {
        text-align: center;
    }

    table td {
        border-bottom: 1px solid #ddd;
        display: block;
        font-size: 0.8em;
        text-align: right;
    }
        border: 0;
    }


    .pricing-container table thead tr th,
    .pricing-container table thead tr th:nth-child(1) {
        width: 100%;
    }
    table tr th,
    table tr {
        border-bottom: 3px solid #ddd;
        display: block;
        margin-bottom: 0.625em;
    }
    .feature-details td:not(:first-child),
    .pricing-container table tbody tr td:nth-child(1) {
        width: 100%;
        text-align: left;
    }
    .feature-details td:not(:first-child) {
        text-align: center;
    }

    table td {
        border-bottom: 1px solid #ddd;
        display: block;
        font-size: 0.8em;
        text-align: right;
    }
}
</style>
</head>
<body>
<div id="wrapper">
  <?php include "header.php";?>
    <main id="main">




        <div id="about" class="container mb-content">
            <div class="default-header text-left lazy-fade-u">
                <h1>Non-Profit Plans</h1>
            </div>



            <p style="font-size:18px;color:#313131;margin-top:40px;">

            <!--<strong>Reduced Rates</strong><br/>-->

            <span style="font-size:14px;color:#313131;"><i>Go annual and save </i></span> <span style="font-size:14px;color:#ff0010;"><i>15-25% OFF</i></span></i>

            <!--<span style="font-size:14px;color:#313131;"><i>Save <span style="color:#ff0010;"><i>25% OFF</i></span> LITE.  Request <a href="https://non-profits-request-promo-code-lite.maxesite.com" target="_blank" alt="Request a 25% OFF promo code Jibbio" title="Request a 25% OFF promo code Jibbio" style="background:NONE;font-size:14px" class="LINK3">promo code</a></i></span><br/>

            <span style="font-size:14px;color:#313131;"><i>Save <span style="color:#ff0010;"><i>30% OFF</i></span> PLUS.  Request <a href="https://non-profits-request-promo-code-plus.maxesite.com" target="_blank" alt="Request a 25% OFF promo code Jibbio" title="Request a 25% OFF promo code Jibbio" style="background:NONE;font-size:14px" class="LINK3">promo code</a></i></span><br/>

            <span style="font-size:14px;color:#313131;"><i>Save <span style="color:#ff0010;"><i>35% OFF</i></span> PRO.  Request <a href="https://non-profits-request-promo-code-pro.maxesite.com" target="_blank" alt="Request a 25% OFF promo code Jibbio" title="Request a 25% OFF promo code Jibbio" style="background:NONE;font-size:14px" class="LINK3">promo code</a></i></span>-->


            </p>

            <!--<p><span style="font-size:14px;color:#313131;"><i>Sign up before Feb 28, 2021 to save <span style="color:#ff0010;"><i>25% OFF</i></span> the regular price. and <span style="color:#006600;"><i>20% more</i></span> MAXeSite&trade; apps. </i></p>-->



            <!--
            <p style="font-size:18px;color:#313131;margin-top:40px;"><strong>Limited Time Offer</strong><br/>
            <span style="font-size:14px;color:#313131;"><i>Sign up before July 10, 2020</i></span></p>

            <p style="font-size:16px;color:#313131;margin-top:0px;"><strong>SMALL</strong></p>

            <p><span style="color:#ff0010;">10% OFF</span> and 25 more MAXeSite&trade; apps FREE <span style="color:#008000;">($37/mo value)</span></p>

            <p style="font-size:16px;color:#313131;margin-top:20px;"><strong>MIDSIZE</strong></p>

            <p><span style="color:#ff0010;">10% OFF</span> and 100 more MAXeSite&trade; apps FREE <span style="color:#008000;">($138/mo value)</span></p>
            -->






            <div id="ad-revenue" class="section-alt2" style="padding:0px;margin-top:40px;">
                <div class="">
                    <div class="row"> <!--col-md-offset-1-->
                        <div class="col-md-12" style="font-size:18px; overflow:auto;">
                        <table class="table  table-responsive table-bordered table-hover" align="center">
                            <tbody>

                            <tr class="old-table">
                                <td style="" bgcolor="#ffffff" align="right"></td>

                                <!--<td style="" width="16%" bgcolor="#ffffff" align="center"><font class="pageheading" style="font-size:22px;">STARTER</font><br/><font style="font-size:20px;"><strong>$12</strong></font> <font style="font-size:14px;">/mo.</font></td>-->

                                <td style="" bgcolor="#ffffff" align="center"><font class="pageheading" style="font-size:22px;">LITE</font><br/><font style="font-size:20px;"><strong>$49</strong></font> <font style="font-size:14px;">/mo.</font></td>

                                <td style="" bgcolor="#ffffd8" align="center"><font class="pageheading" style="font-size:22px;">PLUS</font><br/><font style="font-size:20px;"><strong>$139</strong></font> <font style="font-size:14px;">/mo.</font></td>

                                <td style="" bgcolor="#ffffff" align="center"><font class="pageheading" style="font-size:22px;">PRO</font><br/><font style="font-size:20px;"><strong>$249</strong></font> <font style="font-size:14px;">/mo.</font></td>
                            </tr>
                            <!--
                            <tr class="old-table">
                                <td style="" height="15" bgcolor="#ffffff" align="left"> </td>
                                <td style="" class="pageheading" colspan="4" height="15" bgcolor="#0188CA" align="center"><font style="color:#ffffff;font-size:18px" class="pageheading">3-in-1 Toolset </font></td>
                            </tr>
                            -->
                            <tr class="old-table">
                                <td style="font-size:22px;" height="30" bgcolor="#ffffff" align="right">  <a href="https://jee.jibbio.com/MAXeSites.php" target="_blank" alt="View MAXeSite features" title="View MAXeSite features" style="background:NONE;font-size:18px" class="LINK3">MAXeSites</a></td>
                                <!--<td style="font-size:20px;" bgcolor="#ffffd8"><div align="center">5</div></td>-->
                                <td style="font-size:20px;" bgcolor="#f9f9f9"><div align="center">60</div></td>
                                <td style="font-size:20px;" bgcolor="#ffffd8"><div align="center">250</div></td>
                                <td style="font-size:20px;" bgcolor="#f9f9f9"><div align="center">650</div></td>
                            </tr>

                            <tr class="old-table">
                                <td style="font-size:18px;" height="30" bgcolor="ffffff" align="right">Parent-Child Accounts</td>
                                <!--<td style="font-size:14px;" bgcolor="#ffffd8"><div align="center">n/a</div></td>-->
                                <td style="font-size:14px;" bgcolor="#f9f9f9"><div align="center"><!--n/a--></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Jibbio (parent) account enables you to manage MAXeSites for an unlimited number of Jibbio (child) accounts from one dashboard, without having to log into each account. Ideal for agencies, corporates, and franchises." title="Jibbio (parent) account enables you to easily manage MAXeSites for an unlimited number of Jibbio (child) accounts from one dashboard, without having to log into each account. Ideal for agencies, corporates, and franchises." ></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Jibbio (parent) account enables you to easily manage MAXeSites for an unlimited number of Jibbio (child) accounts from one dashboard, without having to log into each account. Ideal for agencies, corporates, and franchises." title="Jibbio (parent) account enables you to easily manage MAXeSites for an unlimited number of Jibbio (child) accounts from one dashboard, without having to log into each account. Ideal for agencies, corporates, and franchises." ></i></div></td>
                            </tr>

                            <tr class="old-table">
                                <td style="font-size:18px;" height="30" bgcolor="ffffff" align="right">Predesigned Templates</td>
                                <!--<td style="font-size:14px;" bgcolor="#ffffd8"><div align="center">n/a</div></td>-->
                                <td style="font-size:14px;" bgcolor="#f9f9f9"><div align="center"><!--n/a--></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Download and edit predesigned MAXeSite templates such as single and recurring donations, raffles, silent auction, local advertising directory, sell items, registration forms, location marketing, and personalized member pages." title="Download and edit predesigned MAXeSite templates such as single and recurring donations, raffles, silent auction, local advertising directory, sell items, registration forms, location marketing, and personalized member pages." ></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Download and edit predesigned MAXeSite templates such as single and recurring donations, raffles, silent auction, local advertising directory, sell items, registration forms, location marketing, and personalized member pages." title="Download and edit predesigned MAXeSite templates such as single and recurring donations, raffles, silent auction, local advertising directory, sell items, registration forms, location marketing, and personalized member pages." ></i></div></td>
                            </tr>

                            <tr class="old-table">
                                <td style="font-size:22px;" height="30" bgcolor="#ffffff" align="right">  <a href="https://non-profit-custom-branding.maxesite.com" target="_blank" alt="Jibbio creates branded custom MAXeSite templates for your organization." title="Jibbio creates branded custom MAXeSite templates for your organization." style="background:NONE;font-size:18px" class="LINK3">Done-For-You Branding</a></td>
                                <!--<td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>-->
                                <td style="font-size:14px;" bgcolor="#f9f9f9"><div align="center"><!--n/a--></div></td>
                                <td style="font-size:14px;" bgcolor="#ffffd8"><div align="center">1 custom template</div></td>
                                <td style="font-size:14px;" bgcolor="#f9f9f9"><div align="center">3 custom templates</div></td>
                            </tr>
                            <tr class="old-table">
                                <td style="font-size:22px;" height="30" bgcolor="#ffffff" align="right">  <a href="https://donateandgive.com/how-it-works/non-profit" target="_blank" alt="Compare Standard, Gold, and Platinum listings on DonateandGive.com for Non-Profits." title="Compare Standard, Gold, and Platinum listings on DonateandGive.com for Non-Profits." style="background:NONE;font-size:18px" class="LINK3">DonateandGive.com</a></td>
                                <td style="font-size:14px;" bgcolor="#f9f9f9"><div align="center">Standard listing</div></td>
                                <td style="font-size:14px;" bgcolor="#ffffd8"><div align="center">Gold listing</div></td>
                                <td style="font-size:14px;" bgcolor="#f9f9f9"><div align="center">Platinum listing</div></td>
                            </tr>

                            <tr class="old-table">
                                <td style="font-size:22px;" height="30" bgcolor="#ffffff" align="right">  <a href="https://jee.jibbio.com/save-raise-program-boost-non-dues-revenue-non-profits.php" target="_blank" alt="Increase non-dues revenue and raise monthly funds with the Save-Raise Program." title="Increase non-dues revenue and raise monthly funds with the Save-Raise Program." style="background:NONE;font-size:18px" class="LINK3">Save-Raise Program</a></td>
                                <!--<td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>-->
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Increase non-dues revenue and raise monthly funds with the Save-Raise Program." title="Increase non-dues revenue and raise monthly funds with the Save-Raise Program." ></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Increase non-dues revenue and raise monthly funds with the Save-Raise Program." title="Increase non-dues revenue and raise monthly funds with the Save-Raise Program." ></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Increase non-dues revenue and raise monthly funds with the Save-Raise Program." title="Increase non-dues revenue and raise monthly funds with the Save-Raise Program."></i></div></td>
                            </tr>

                            <!--<tr class="old-table">
                                <td style="font-size:22px;" height="30" bgcolor="#ffffff" align="right">  <a href="https://jee.jibbio.com/increase-search-engine-rankings-and-drive-more-organic-traffic-to-website-with-jibbio-MAXeSites-4.php" target="_blank" alt="MAXeSites have over 25 built-in SEO fundamentals to increase local SEO and organic traffic in Google search results." title="MAXeSites have over 25 built-in SEO fundamentals to increase local SEO and organic traffic in Google search results." style="background:NONE;font-size:18px" class="LINK3">Local SEO</a></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="MAXeSites have over 25 built-in SEO fundamentals to increase local SEO and organic traffic in Google search results." title="MAXeSites have over 25 built-in SEO fundamentals to increase local SEO and organic traffic in Google search results." ></i></div></td>
                                <!--<td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="MAXeSites have over 25 built-in SEO fundamentals to increase local SEO and organic traffic in Google search results." title="MAXeSites have over 25 built-in SEO fundamentals to increase local SEO and organic traffic in Google search results." ></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="MAXeSites have over 25 built-in SEO fundamentals to increase local SEO and organic traffic in Google search results." title="MAXeSites have over 25 built-in SEO fundamentals to increase local SEO and organic traffic in Google search results." ></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="MAXeSites have over 25 built-in SEO fundamentals to increase local SEO and organic traffic in Google search results." title="MAXeSites have over 25 built-in SEO fundamentals to increase local SEO and organic traffic in Google search results." ></i></div></td>
                            </tr>
                            -->

                            <tr class="old-table">
                                <td style="font-size:22px;" height="30" bgcolor="#ffffff" align="right">  <a href="3-in-1-qr-codes.php" target="_blank" alt="view 3-in-1 QR Codes features" title="View 3-in-1 QR Codes features" style="background:NONE;font-size:18px" class="LINK3">3-in-1 QR Codes</a></td>
                                <!--<td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>-->
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create a 3-in-1 QR code used interchangeably between a Jibbio MAXeSite&trade;, URL, or PayPal Checkout for an exact amount (checkout link provided).  Download QR codes, printable up to 3 ft X 3 ft." title="Create a 3-in-1 QR code used interchangeably between a Jibbio MAXeSite&trade;, URL, or PayPal Checkout for an exact amount (checkout link provided).  Download QR codes, printable up to 3 ft X 3 ft." ></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create a 3-in-1 QR code used interchangeably between a Jibbio MAXeSite&trade;, URL, or PayPal Checkout for an exact amount (checkout link provided).  Download QR codes, printable up to 3 ft X 3 ft." title="Create a 3-in-1 QR code used interchangeably between a Jibbio MAXeSite&trade;, URL, or PayPal Checkout for an exact amount (checkout link provided).  Download QR codes, printable up to 3 ft X 3 ft." ></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create a 3-in-1 QR code used interchangeably between a Jibbio MAXeSite&trade;, URL, or PayPal Checkout for an exact amount (checkout link provided).  Download QR codes, printable up to 3 ft X 3 ft." title="Create a 3-in-1 QR code used interchangeably between a Jibbio MAXeSite&trade;, URL, or PayPal Checkout for an exact amount (checkout link provided).  Download QR codes, printable up to 3 ft X 3 ft." ></i></div></td>
                            </tr>

                            <!--
                            <tr class="old-table">
                                <td style="font-size:18px;" height="30" bgcolor="#ffffff" align="right">Payments</td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                            </tr>
                            -->

                            <!--
                            <tr class="old-table">
                                <td style="font-size:18px;" height="30" bgcolor="#ffffff" align="right"><a href="https://jee.jibbio.com/pricing-buy-more-maxesites.php" target="_blank" alt="Buy more MAXeSitess as required" title="Buy more MAXeSitess as required" style="background:NONE;font-size:18px" class="LINK3">Buy more</a></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                            </tr>
                            -->

                            <!--
                            <tr class="old-table">
                                <td style="font-size:22px;" height="30" bgcolor="#ffffff" align="right"><a href="url-shortening.php" target="_blank" alt="view URL Shortening features" title="View URL Shortening features" style="background:NONE;font-size:18px" class="LINK3">URL Shortening</a></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                            </tr>
                            -->



                            <!--
                            <tr class="old-table">
                                <td style="" height="15" bgcolor="#ffffff" align="left"> </td>
                                <td style="" class="pageheading" colspan="6" height="15" bgcolor="#0188CA" align="center"><font style="color:#ffffff;font-size:18px" class="pageheading">AskMIA&trade;</font></td>
                            </tr>


                            <tr class="old-table">
                                <td style="font-size:22px;" height="30" bgcolor="#ffffff" align="right">  <a href="https://jee.jibbio.com/increase-search-engine-rankings-and-drive-more-organic-traffic-to-website-with-jibbio-MAXeSites-3-step-guidelines.php#advertiser_links" target="_blank" alt="Ad revenue opportunities alone on your MAXeSite&trade; apps can pay for the service itself!" title="Ad revenue opportunities alone on your MAXeSite&trade; apps can pay for the service itself!" style="background:NONE;font-size:18px" class="LINK3">Generate Ad Revenue</a></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                            </tr>


                            <tr class="old-table">
                                <td style="font-size:16px;" height="30" bgcolor="ffffff" align="right"><a href="auto-service-business-and-oil-change-center-marketing-tools-to-build-customer-relationships-increase-customer-loyalty-and-drive-more-sales.php" target="_blank" alt="Learn more about AskMIA and Express Service Check-In for the auto service and repair business" title="Learn more about AskMIA and Express Service Check-In for the auto service and repair business" style="background:NONE;font-size:18px" class="LINK3">Auto Service</a></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                            </tr>

                            <tr class="old-table">
                                <td style="font-size:16px;" height="30" bgcolor="ffffff" align="right"><a href="cosmetic-beauty-laser-dental-clinics-online-digital-marketing-customer-service-tool-to-increase-loyalty-sales.php" target="_blank" alt="Learn more about AskMIA and Mia Renew for the beauty and cosmetic clinic business" title="Learn more about AskMIA and Mia Renew for the beauty and cosmetic clinic business" style="background:NONE;font-size:18px" class="LINK3">Beauty & Cosmetic</a></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                            </tr>

                            <tr class="old-table">
                                <td style="font-size:18px;" height="30" bgcolor="ffffff" align="right"><a href="askmia-sales-pitch.php" target="_blank" alt="Learn more about AskMIA for brick and mortar businesses" title="Learn more about AskMIA for brick and mortar businesses" style="background:NONE;font-size:18px" class="LINK3">Brick and Mortar</a></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                            </tr>

                            <tr class="old-table">
                                <td style="font-size:18px;" height="30" bgcolor="ffffff" align="right"><a href="online-sales-marketing-customer-service-retention-tools-for-martial-arts-schools-sports-and-recreation-health-fitness-clubs-trainers.php" target="_blank" alt="Learn more about AskMIA and MIA Merits for the health & fitness club or school" title="Learn more about AskMIA and MIA Merits for the health & fitness club or school" style="background:NONE;font-size:18px" class="LINK3">Health & Fitness</a></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                            </tr>

                            <tr class="old-table">
                                <td style="font-size:18px;" height="30" bgcolor="ffffff" align="right"><a href="hvac-online-marketing-ideas-strategies-heating-and-air-conditioning-digital-marketing-online-marketing-for-plumbers-and-plumbing-service.php" target="_blank" alt="Learn more about AskMIA and Express Service Request for the HVAC and plumbing service business" title="Learn more about AskMIA and Express Service Request for the HVAC and plumbing service business" style="background:NONE;font-size:18px" class="LINK3">Trade Service</a></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                            </tr>

                            <tr class="old-table">
                                <td style="font-size:18px;" height="30" bgcolor="ffffff" align="right">Setup</td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                            </tr>
                            -->


                            <!--
                            <tr class="old-table">
                                <td style="" height="15" bgcolor="#ffffff" align="left"> </td>
                                <td style="" class="pageheading" colspan="6" height="15" bgcolor="#0188CA" align="center"><font style="color:#ffffff;font-size:18px" class="pageheading">C<sup>2</sup>&trade; &amp; C.L.E.A.R.&trade;</font></td>
                            </tr>

                            <tr class="old-table">
                                <td style="font-size:16px;" height="30" bgcolor="ffffff" align="right"><a href="c2-and-clear.php" target="_blank" alt="Learn more about C2 and CLEAR for the multifamily housing communities and schools" title="Learn more about C2 and CLEAR for the multifamily housing communities and schools" style="background:NONE;font-size:18px" class="LINK3">HOA Communities</a></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                            </tr>
                            -->




                            <!--
                            <tr class="old-table">
                                <td style="font-size:22px;" height="30" bgcolor="#ffffff" align="right">  <a href="https://jee.jibbio.com/increase-employee-performance-and-ways-to-monitor-staff-efficiency-and-measuring-employee-productivity-in-the-workplace.php" target="_blank" alt="Improve employee productivity, monitor employee performance, and simplify administrative tasks with MAXeSite&trade; apps" title="Improve employee productivity, monitor employee performance, and simplify administrative tasks with MAXeSite&trade; apps" style="background:NONE;font-size:18px" class="LINK3">Employee Productivity</a></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                            </tr>
                            <tr class="old-table">
                                <td style="font-size:22px;" height="30" bgcolor="#ffffff" align="right">  <a href="https://jee.jibbio.com/lead-generation-tools-for-auto-dealers-real-estate-financial-insurance-business-be-aware-of-scams-when-buying-leads-from-lead-generation-services.php" target="_blank" alt="Stop buying leads and generate your own exclusive leads with MAXeSite&trade; apps" title="Stop buying leads and generate your own exclusive leads with MAXeSite&trade; apps" style="background:NONE;font-size:18px" class="LINK3">Exclusive Leads</a></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                            </tr>
                            -->


                            <!--
                            <tr class="old-table">
                                <td style="font-size:16px;" height="30" bgcolor="ffffff" align="right">Inventory Express&trade;</td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                            </tr>



                            <tr class="old-table">
                                <td style="" height="25" bgcolor="#ffffff" align="left"> </td>
                                <td style="" class="pageheading" colspan="6" height="25" bgcolor="#0188CA" align="center"><font style="color:#ffffff;font-size:18px" class="pageheading">Service</font></td>
                            </tr>
                            -->


                            <!--
                            <tr class="old-table">
                                <td style="font-size:18px;" height="30" bgcolor="ffffff" align="right">Webinars</td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>
                            </tr>
                            -->

                            <tr class="old-table">
                                <td style="font-size:18px;" height="30" bgcolor="ffffff" align="right">AWS&reg; Cloud</td>
                                <!--<td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>-->
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Jibbio cloud-based applications and IT infrastructure securely hosted by Amazon&reg; Web Services (AWS) since 2010." title="Jibbio cloud-based applications and IT infrastructure securely hosted by Amazon&reg; Web Services (AWS) since 2010." ></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Jibbio cloud-based applications and IT infrastructure securely hosted by Amazon&reg; Web Services (AWS) since 2010." title="Jibbio cloud-based applications and IT infrastructure securely hosted by Amazon&reg; Web Services (AWS) since 2010." ></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Jibbio cloud-based applications and IT infrastructure securely hosted by Amazon&reg; Web Services (AWS) since 2010." title="Jibbio cloud-based applications and IT infrastructure securely hosted by Amazon&reg; Web Services (AWS) since 2010." ></i></div></td>
                            </tr>
                            <tr class="old-table">
                                <td style="font-size:18px;" height="30" bgcolor="ffffff" align="right">No Contracts</td>
                                <!--<td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy"></i></div></td>-->
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Pay month-to-month with no obligation, or pay annually to save money." title="Pay month-to-month with no obligation, or pay annually to save money." ></i></div></td>
                                <td style="font-size:18px;" bgcolor="#ffffd8"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Pay month-to-month with no obligation, or pay annually to save money." title="Pay month-to-month with no obligation, or pay annually to save money." ></i></div></td>
                                <td style="font-size:18px;" bgcolor="#f9f9f9"><div align="center"><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Pay month-to-month with no obligation, or pay annually to save money." title="Pay month-to-month with no obligation, or pay annually to save money." ></i></div></td>
                            </tr>

                            <!--
                            <tr class="old-table">
                                <td style="font-size:18px;" height="30" bgcolor="ffffff" align="right">Support</td>
                                <!--<td style="font-size:14px;" bgcolor="#ffffd8"><div align="center">Email</div></td>
                                <td style="font-size:14px;" bgcolor="#f9f9f9"><div align="center">Email</div></td>
                                <td style="font-size:14px;" bgcolor="#ffffd8"><div align="center">Email</div></td>
                                <td style="font-size:14px;" bgcolor="#f9f9f9"><div align="center">Phone</div></td>
                            </tr>
                            -->

                            <tr class="old-table">
                                <td style="font-size:18px;" height="30" bgcolor="#ffffff" align="right">Storage</td>
                                <!--<td style="font-size:14px;" bgcolor="#ffffd8"><div align="center">5 GB</div></td>-->
                                <td style="font-size:14px;" bgcolor="#f9f9f9"><div align="center">30 GB</div></td>
                                <td style="font-size:14px;" bgcolor="#ffffd8"><div align="center">150 GB</div></td>
                                <td style="font-size:14px;" bgcolor="#f9f9f9"><div align="center">250 GB</div></td>
                            </tr>
                            <tr class="old-table">
                                <td style="font-size:18px;" height="30" bgcolor="#ffffff" align="right">Bandwidth</td>
                                <!--<td style="font-size:14px;" bgcolor="#ffffd8"><div align="center">5 GB</div></td>-->
                                <td style="font-size:14px;" bgcolor="#f9f9f9"><div align="center">Unlimited</div></td>
                                <td style="font-size:14px;" bgcolor="#ffffd8"><div align="center">Unlimited</div></td>
                                <td style="font-size:14px;" bgcolor="#f9f9f9"><div align="center">Unlimited</div></td>
                            </tr>
                            <!--
                            <tr class="old-table">
                                <td style="font-size:14px;" height="30" bgcolor="#ffffff" align="right">Buy more storage</td>
                                <td style="font-size:14px;" bgcolor="#f9f9f9"><div align="center">$0.80/GB</div></td>
                                <td style="font-size:14px;" bgcolor="#ffffd8"><div align="center">$0.80/GB</div></td>
                                <td style="font-size:14px;" bgcolor="#f9f9f9"><div align="center">$0.80/GB</div></td>
                            </tr>
                            -->


                            <tr class="old-table">
                                <td style="font-size:18px;" height="65" bgcolor="#ffffff" align="right"><!--<img src="https://jee.jibbio.com/images/30-day-no-obligation-free-trial-jibbio.png" alt="30-day no obligation FREE trial" title="30-day no obligation FREE trial" width="90" height="90">--></td>

                                <!--<td style="" bgcolor="ffffff" align="center"><a href="https://member.jibbio.com/signup.php" alt="sign up" title="Sign up" style="color:#f92c8b;font-size:24px;margin-top:20px;" class="LINK3">Sign Up</a></td>
                                <td style="" bgcolor="ffffff" align="center"><a href="https://member.jibbio.com/signup.php" alt="sign up" title="Sign up" style="color:#f92c8b;font-size:24px;margin-top:20px;" class="LINK3">Sign Up</a></td>
                                <td style="" bgcolor="ffffff" align="center"><a href="https://member.jibbio.com/signup.php" alt="sign up" title="Sign up" style="color:#f92c8b;font-size:24px;margin-top:20px;" class="LINK3">Sign Up</a></td>
                                <td style="" bgcolor="ffffff" align="center"><a href="https://member.jibbio.com/signup.php" alt="sign up" title="Sign up" style="color:#f92c8b;font-size:24px;margin-top:20px;" class="LINK3">Sign Up</a></td>
                                <td style="" bgcolor="ffffff" align="center"><a href="https://member.jibbio.com/signup.php" alt="sign up" title="Sign up" style="color:#f92c8b;font-size:24px;margin-top:20px;" class="LINK3">Sign Up</a></td>-->


                                <!--<td style="" bgcolor="ffffff" align="center"><a class="btn btn-default lazy" style="font-size:20px;margin-top:20px;" href="https://member.jibbio.com/signup.php">Get Started </a></td>-->
                                <td style="" bgcolor="ffffff" align="center"><a class="btn btn-default lazy" style="font-size:20px;margin-top:20px;" href="https://member.jibbio.com/signup.php">Get Started </a></td>
                                <td style="" bgcolor="ffffd8" align="center"><a class="btn btn-default lazy" style="font-size:20px;margin-top:20px;" href="https://member.jibbio.com/signup.php">Get Started </a></td>
                                <td style="" bgcolor="ffffff" align="center"><a class="btn btn-default lazy" style="font-size:20px;margin-top:20px;" href="https://member.jibbio.com/signup.php">Get Started </a></td>
                            </tr>
                            </tbody>
                        </table>

                        <!--<p class=" lazy-fade-l" style="font-size:18px;color:#313131;" align="center">Start your <a href="https://member.jibbio.com/signup.php"><strong>30-day FREE trial</strong></a> with no obligation or credit card required.</p>-->

                        </div>
                    </div>
                </div>
            </div>

        </div>


    <!-- Start of Tabel -->
    <div class="pricing-wrapper">
        <div class="pricing-container">

            <div class="pricing-btn">
                <button class="btn-show-plan">
                    <span class="btn-show">Compare plan features</span>
                </button>
            </div>

            <div class="table-wrapper">

                <table>
                    <thead>
                        <tr class="pricing-section">
                            <th>
                                <h4>MAIN FEATURES</h4>
                            </th>
                            <th>
                                <h4>LITE</h4>
                            </th>
                            <th>
                                <h4>PLUS</h4>
                            </th>
                            <th>
                                <h4>PRO</h4>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Online Store</dt>
                                    <dd class="feature-label__description">Includes ecommerce website.</dd>
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Marketplace</dt>
                                    <dd class="feature-label__description">Offer vendors the free option to sell their products on your website for a rev-share per sale.</dd>
                                </dl>
                            </td>
                            <td>
                                <span></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Vendor accounts</dt>
                                    <dd class="feature-label__description">Each vendor has access to their own admin dashboard to add and manage products for sale on your website.</dd>
                                </dl>
                            </td>
                            <td>
                                <span></span>
                            </td>
                            <td>
                                <span>4</span>
                            </td>
                            <td>
                                <span>10</span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Staff accounts</dt>
                                    <dd class="feature-label__description">Each staff member has access to your online store website admin.</dd>
                                </dl>
                            </td>
                            <td>
                                <span></span>
                            </td>
                            <td>
                                <span>2</span>
                            </td>
                            <td>
                                <span>3</span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Integrated MAXeSites</dt>
                                    <dd class="feature-label__description">Create lead-capture forms and product information web pages per product, to improve conversions, generate leads, SEO, and web presence."</dd>
                                </dl>
                            </td>
                            <td>
                                <span>10</span>
                            </td>
                            <td>
                                <span>20</span>
                            </td>
                            <td>
                                <span>60</span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Use your own domain</dt>
                                    <!-- <dd class="feature-label__description">Create lead-capture forms and product information web pages per product, to improve conversions, generate leads, SEO, and web presence."</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Free SSL certificate</dt>
                                    <!-- <dd class="feature-label__description">Create lead-capture forms and product information web pages per product, to improve conversions, generate leads, SEO, and web presence."</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">SEO tools</dt>
                                    <!-- <dd class="feature-label__description">Create lead-capture forms and product information web pages per product, to improve conversions, generate leads, SEO, and web presence."</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Unlimited contacts</dt>
                                    <!-- <dd class="feature-label__description">Create lead-capture forms and product information web pages per product, to improve conversions, generate leads, SEO, and web presence."</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Unlimited physical products</dt>
                                    <!-- <dd class="feature-label__description">Create lead-capture forms and product information web pages per product, to improve conversions, generate leads, SEO, and web presence."</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Unlimited digital products</dt>
                                    <!-- <dd class="feature-label__description">Create lead-capture forms and product information web pages per product, to improve conversions, generate leads, SEO, and web presence."</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Unlimited subscriptions</dt>
                                    <!-- <dd class="feature-label__description">Create lead-capture forms and product information web pages per product, to improve conversions, generate leads, SEO, and web presence."</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Recurring payments</dt>
                                    <!-- <dd class="feature-label__description">Create lead-capture forms and product information web pages per product, to improve conversions, generate leads, SEO, and web presence."</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Abandoned cart recovery</dt>
                                    <!-- <dd class="feature-label__description">Create lead-capture forms and product information web pages per product, to improve conversions, generate leads, SEO, and web presence."</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Product reviews</dt>
                                    <!-- <dd class="feature-label__description">Create lead-capture forms and product information web pages per product, to improve conversions, generate leads, SEO, and web presence."</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Discount codes</dt>
                                    <!-- <dd class="feature-label__description">Create lead-capture forms and product information web pages per product, to improve conversions, generate leads, SEO, and web presence."</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Gift cards</dt>
                                    <!-- <dd class="feature-label__description">Create lead-capture forms and product information web pages per product, to improve conversions, generate leads, SEO, and web presence."</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Invoices</dt>
                                    <!-- <dd class="feature-label__description">Create lead-capture forms and product information web pages per product, to improve conversions, generate leads, SEO, and web presence."</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Sell directly on social media</dt>
                                    <!-- <dd class="feature-label__description">Create lead-capture forms and product information web pages per product, to improve conversions, generate leads, SEO, and web presence."</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Sell on other Jibbio online stores</dt>
                                    <dd class="feature-label__description">Sell your products on other Jibbio online store marketplace websites for more exposure.</dd>
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Marketing automation</dt>
                                    <dd class="feature-label__description">Send automated emails with templated or custom workflows.</dd>
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Ecommerce automations</dt>
                                    <dd class="feature-label__description">Automate manual tasks, build workflows, and grow your business.</dd>
                                </dl>
                            </td>
                            <td>
                                <span></span>
                            </td>
                            <td>
                                <span></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Reports</dt>
                                    <!-- <dd class="feature-label__description">ell your products on other Jibbio online store marketplace websites for more exposure.</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <!-- Break Section -->
                        <tr class="features-sec">
                            <th colspan="4">Orders & Fulfillment </th>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Inventory locations</dt>
                                    <dd class="feature-label__description">Assign inventory to retail stores, warehouses, pop-ups, or wherever you store products.</dd>
                                </dl>
                            </td>
                            <td>
                                <span>up to 4</span>
                            </td>
                            <td>
                                <span>up to 5</span>
                            </td>
                            <td>
                                <span>up to 5</span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Manual order creation</dt>
                                    <!-- <dd class="feature-label__description">ell your products on other Jibbio online store marketplace websites for more exposure.</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">In-house delivery</dt>
                                    <!-- <dd class="feature-label__description">ell your products on other Jibbio online store marketplace websites for more exposure.</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">In-store & curbsite pickup</dt>
                                    <!-- <dd class="feature-label__description">ell your products on other Jibbio online store marketplace websites for more exposure.</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Order status text alerts</dt>
                                    <!-- <dd class="feature-label__description">ell your products on other Jibbio online store marketplace websites for more exposure.</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Operations management</dt>
                                    <!-- <dd class="feature-label__description">ell your products on other Jibbio online store marketplace websites for more exposure.</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Shipping label printing</dt>
                                    <!-- <dd class="feature-label__description">ell your products on other Jibbio online store marketplace websites for more exposure.</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Third-party calculated shipping rates</dt>
                                    <dd class="feature-label__description">Show calculated rates with your own account or third-party apps at checkout.</dd>
                                </dl>
                            </td>
                            <td>
                                <span></span>
                            </td>
                            <td>
                                <span></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Real-time shipping</dt>
                                    <!-- <dd class="feature-label__description">ell your products on other Jibbio online store marketplace websites for more exposure.</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="features-sec">
                            <th colspan="4">Payments</th>
                        </tr>

                        <!--  -->
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">PayPal and Stripe</dt>
                                    <!-- <dd class="feature-label__description">Start an online store with Shopify’s robust ecommerce platform.</dd> -->
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>
                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Online credit card rates</dt>
                                    <!-- <dd class="feature-label__description">Start an online store with Shopify’s robust ecommerce platform.</dd> -->
                                </dl>
                            </td>
                            <td colspan="3">
                                <span>(add links to PayPal and Stripe websites for rates)</span>
                            </td>
                        </tr>
                        <tr class="features-sec colspan-5">
                            <th colspan="4"><h4><a href="https://www.shopify.com/pos/features" class="btn btn--primary btn--large">Point of Sale</a></h4></th>
                        </tr>

                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">POS Lite</dt>
                                    <dd class="feature-label__description">Accept in-person payments instantly at pop-ups, markets, fairs, and more.</dd>
                                </dl>
                            </td>
                            <td>
                                <span>?</span>
                            </td>
                            <td>
                                <span>?</span>
                            </td>
                            <td>
                                <span>?</span>
                            </td>
                        </tr>

                        <tr class="features-sec colspan-5">
                            <th colspan="4"><h4><a href="https://www.shopify.com/pos/features" class="btn btn--primary btn--large">International commerce</a></h4></th>
                        </tr>

                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Language translation</dt>
                                    <dd class="feature-label__description">Assign translated languages to customers in different markets to provide a familiar shopping experience.</dd>
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>

                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Currency conversion</dt>
                                    <dd class="feature-label__description">Automatically convert prices into your customer’s local currency to drive conversion in each market (requires Shopify Payments).</dd>
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>

                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Local payment methods</dt>
                                    <dd class="feature-label__description">Set local payment methods to appear for customers who check out in specific markets (requires Shopify Payments).</dd>
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>

                        <tr class="feature-details">
                            <td>
                                <dl class="feature-label">
                                    <dt class="feature-label__text">Custom pricing by market</dt>
                                    <dd class="feature-label__description">Take greater control of your international pricing strategy by setting specific prices for products or product variants in each market.</dd>
                                </dl>
                            </td>
                            <td>
                                <span><i class="fas fa-times"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                            <td>
                                <span><i class="fas fa-check"></i></span>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- End of Tabel -->





        <div id="steps" class="section-alt1">
            <div class="container-fluid">

            <div class="default-header text-center ">
                <h1>Start today, risk-free.</h1><br/><br/>
                <p class=" lazy-fade-l" style="font-size:18px;color:#313131;">Try Jibbio free for 30 days, no credit card required.&nbsp; <a href="https://member.jibbio.com/signup.php" >Sign up</a></p>
            </div>

                </div>
            </div>

        </div>

    </main>
  <?php include "footer.php";?>
</div>
<?php include "bottom.php";?>
<!--FOR THE PROMO CODE POPUP THAT APPEARS ON PAGE-->
<?php // include "promo.php"; ?>
<script>
	$(document).ready(function(){
		$('.about-banner').bxSlider({pager:false, auto:true, controls:false, pager:true});

        $('.btn-show-plan').click(function() {
            $('.pricing-container .table-wrapper').slideToggle("slow");
        });
	});

  </script>
   <script src="https://kit.fontawesome.com/c36fe64df0.js"></script>
</body>
</html>
