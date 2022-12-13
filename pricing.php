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


<?php include "top14.php";?>
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

.table-wrapper-old .feature-details:last-child td {
    padding: 10px 0px;
}


/* Pricing Table */
.table-wrapper-old table,
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

.pricing-container .table-wrapper-old {
    margin: 30px 0px;
}


.table-wrapper-old table thead tr th,
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

.table-wrapper-old table thead tr th:first-child,
.table-wrapper table thead tr th:first-child {
    text-align: left;
    padding-left: 10px;
}

.heading-section {
    display: flex;
    margin-top: 30px;
    align-items: center;
}

.head-item {
    width: 100%;
}

.head-item h1 {
    margin: 0px;
    text-align: center;
    font-size: 35px;
    line-height: 1.2;
    font-weight: 300;
}

.headline p span {
    color: #FF0010;
}

.previous-tbl {
    margin-top: 50px;
}

.old-head td {
    text-align: center !important;
}

.headline {
  margin-top: 30px;
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
    .pricing-container table tbody tr td {
        width: 100%;
    }
    .head-item h1 {
        font-size: 20px;
    }
}

@media only screen and (min-width: 768px) and (max-width: 1024px) {
    .get-btn {
        background-color: #f92c8b;
        color: #ffffff;
        font-size: 12px!important;
        padding: 10px 8px;
    }
}
.table-wrapper-old table tbody tr td:nth-child(4),
.table-wrapper-old table thead tr th:nth-child(4){
    background-color: #ffffd8
}

.get-btn {
    background-color: #f92c8b;
    color: #ffffff;
    font-size: 12px!important;
    padding: 10px 8px;
    text-decoration: none !important;
}

.previous-tbl {
    position: relative;
}

.previous-tbl  .old-table {
    /* position: absolute; */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #ffffff;
    z-index: 1;
}
</style>
</head>
<body>

<div class="pricing-wrapper">
  <?php include "header.php";?>
  <div class="pricing-container">

    <div class="heading-section">
      <div class="head-item"><hr></div>
      <div class="head-item"><h1>Business Plans</h1></div>
      <div class="head-item"><hr></div>
    </div>

    <div class="headline">
      <p>Go annual and save <span>10-25% OFF</span></p>
    </div>

    <!-- Start of Table -->
    <div class="pricing-wrapper">
      <!-- <div class="pricing-container"> -->
        
        <div class="table-wrapper-old">
            <table>
                <thead>
                <tr class="pricing-section">
                    <th></th>
                    <th>
                    <h4>SOHO</h4>
                    <h4>$12 <sub>/mo</sub></h4>
                    </th>
                    <th>
                    <h4>MICRO</h4>
                    <h4>$19 <sub>/mo</sub></h4>
                    </th>
                    <th>
                    <h4>MINI</h4>
                    <h4>$49 <sub>/mo</sub></h4>
                    </th>
                    <th>
                    <h4>SMALL</h4>
                    <h4>$99 <sub>/mo</sub></h4>
                    </th>
                    <th>
                    <h4>MIDSIZE</h4>
                    <h4>$199 <sub>/mo</sub></h4>
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr class="feature-details">
                        <td>
                        <dl class="feature-label">
                            <dt class="feature-label__text"><a target="_blank" href="https://jee.jibbio.com/online-store-ecommerce-website-marketplace-builder.php">Online Store</a></dt>
                        </dl>
                        </td>
                        <td>
                            <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                        <td>
                        <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                        <td>
                            <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                        <td>
                            <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                        <td>
                            <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                    </tr>
                    <tr class="feature-details">
                        <td>
                            <dl class="feature-label">
                                <dt class="feature-label__text">Vendor Accounts</dt>
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
                        <td>
                            <span>21</span>
                        </td>
                        <td>
                            <span>45</span>
                        </td>
                    </tr>
                    <tr class="feature-details">
                        <td>
                            <dl class="feature-label">
                                <dt class="feature-label__text">Staff Accounts</dt>
                            </dl>
                        </td>
                        <td>
                            <span></span>
                        </td>
                        <td>
                            <span>1</span>
                        </td>
                        <td>
                            <span>3</span>
                        </td>
                        <td>
                            <span>5</span>
                        </td>
                        <td>
                            <span>7</span>
                        </td>
                    </tr>
                    <tr class="feature-details">
                        <td>
                            <dl class="feature-label">
                                <dt class="feature-label__text"><a target="_blank" href="https://jee.jibbio.com/MAXeSites.php">MAXeSites</a></dt>
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
                        <td>
                            <span>150</span>
                        </td>
                        <td>
                            <span>500</span>
                        </td>
                    </tr>
                    <tr class="feature-details">
                        <td>
                        <dl class="feature-label">
                            <dt class="feature-label__text"><a target="_blank" href="https://jee.jibbio.com/3-in-1-qr-codes.php">3-in-1 QR Codes</a></dt>
                        </dl>
                        </td>
                        <td>
                            <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                        <td>
                        <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                        <td>
                            <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                        <td>
                            <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                        <td>
                            <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                    </tr>
                    <tr class="feature-details">
                        <td>
                        <dl class="feature-label">
                            <dt class="feature-label__text">AWS® Cloud</dt>
                        </dl>
                        </td>
                        <td>
                            <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                        <td>
                        <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                        <td>
                            <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                        <td>
                            <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                        <td>
                            <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                    </tr>
                    <tr class="feature-details">
                        <td>
                        <dl class="feature-label">
                            <dt class="feature-label__text">No Contracts</dt>
                        </dl>
                        </td>
                        <td>
                            <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                        <td>
                        <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                        <td>
                            <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                        <td>
                            <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                        <td>
                            <span><i style="font-size:30px;color:#0188CA;" class="fa fa-check-circle lazy" alt="Create an ecommerce online store" title="Create an ecommerce online store" ></i></span>
                        </td>
                    </tr>
                    <tr class="feature-details">
                        <td>
                            <dl class="feature-label">
                                <dt class="feature-label__text">Storage</dt>
                            </dl>
                        </td>
                        <td>
                            <span>5GB</span>
                        </td>
                        <td>
                            <span>20GB</span>
                        </td>
                        <td>
                            <span>50GB</span>
                        </td>
                        <td>
                            <span>100GB</span>
                        </td>
                        <td>
                            <span>200GB</span>
                        </td>
                    </tr>
                    <tr class="feature-details">
                        <td>
                            <dl class="feature-label">
                                <dt class="feature-label__text">Bandwidth</dt>
                            </dl>
                        </td>
                        <td>
                            <span>Unlimited</span>
                        </td>
                        <td>
                            <span>Unlimited</span>
                        </td>
                        <td>
                            <span>Unlimited</span>
                        </td>
                        <td>
                            <span>Unlimited</span>
                        </td>
                        <td>
                            <span>Unlimited</span>
                        </td>
                    </tr>
                    <tr class="feature-details">
                        <td>
                            <dl class="feature-label">
                                <dt class="feature-label__text"></dt>
                            </dl>
                        </td>
                        <td>
                            <span><a class="get-btn lazy" style="font-size:18px;" href="https://member.jibbio.com/signup.php">Get Started </a></span>
                        </td>
                        <td>
                            <span><a class="get-btn lazy" style="font-size:18px;" href="https://member.jibbio.com/signup.php">Get Started </a></span>
                        </td>
                        <td>
                            <span><a class="get-btn lazy" style="font-size:18px;" href="https://member.jibbio.com/signup.php">Get Started </a></span>
                        </td>
                        <td>
                            <span><a class="get-btn lazy" style="font-size:18px;" href="https://member.jibbio.com/signup.php">Get Started </a></span>
                        </td>
                        <td>
                            <span><a class="get-btn lazy" style="font-size:18px;" href="https://member.jibbio.com/signup.php">Get Started </a></span>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

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
                  <h4>ONLINE STORE MARKETPLACE</h4>
                </th>
                <th>
                  <h4>SOHO</h4>
                </th>
                <th>
                  <h4>MICRO</h4>
                </th>
                <th>
                  <h4>MINI</h4>
                </th>
                <th>
                  <h4>SMALL</h4>
                </th>
                <th>
                  <h4>MIDSIZE</h4>
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
                <td>
                  <span>21</span>
                </td>
                <td>
                  <span>45</span>
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
                    <td>
                        <span>5</span>
                    </td>
                    <td>
                        <span>7</span>
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
                        <span><i class="fas fa-check"></i></span>
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
                    <td>
                        <span><i class="fas fa-check"></i></span>
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
                    <td>
                        <span><i class="fas fa-check"></i></span>
                    </td>
                    <td>
                        <span><i class="fas fa-check"></i></span>
                    </td>
                </tr>
                <!-- Break Section -->
                <tr class="features-sec">
                    <th colspan="6">Orders & Fulfillment </th>
                </tr>
                <tr class="feature-details">
                    <td>
                        <dl class="feature-label">
                            <dt class="feature-label__text">Inventory locations</dt>
                            <dd class="feature-label__description">Assign inventory to retail stores, warehouses, pop-ups, or wherever you store products.</dd>
                        </dl>
                    </td>
                    <td>
                        <span>1</span>
                    </td>
                    <td>
                        <span>up to 2</span>
                    </td>
                    <td>
                        <span>up to 4</span>
                    </td>
                    <td>
                        <span>up to 6</span>
                    </td>
                    <td>
                        <span>up to 8</span>
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
                    <td>
                        <span><i class="fas fa-check"></i></span>
                    </td>
                    <td>
                        <span><i class="fas fa-check"></i></span>
                    </td>
                </tr>
                <tr class="features-sec">
                    <th colspan="6">Payments</th>
                </tr>

                <!--  -->
                <tr class="feature-details">
                    <td>
                        <dl class="feature-label">
                            <dt class="feature-label__text">PayPal and Stripe</dt>
                            <!-- <dd class="feature-label__description">Start an online store with Jibbio’s robust ecommerce platform.</dd> -->
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
                            <!-- <dd class="feature-label__description">Start an online store with Jibbio’s robust ecommerce platform.</dd> -->
                        </dl>
                    </td>
                    <td colspan="5">
                        <span>Check rates on PayPal and Stripe websites</span>
                    </td>
                </tr>
                <tr class="features-sec colspan-5">
                    <th colspan="6"><h4><a href="https://www.Jibbio.com" class="btn btn--primary btn--large">Point of Sale</a></h4></th>
                </tr>

                <tr class="feature-details">
                    <td>
                        <dl class="feature-label">
                            <dt class="feature-label__text">POS</dt>
                            <dd class="feature-label__description">Accept in-person payments instantly at pop-ups, markets, fairs, and more.</dd>
                        </dl>
                    </td>
                    <td>
                        <span></span>
                    </td>
                    <td>
                        <span></span>
                    </td>
                    <td>
                        <span></span>
                    </td>
                    <td>
                        <span></span>
                    </td>
                    <td>
                        <span></span>
                    </td>
                </tr>

                <tr class="features-sec colspan-5">
                    <th colspan="6"><h4><a href="https://www.Jibbio.com" class="btn btn--primary btn--large">International commerce</a></h4></th>
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
                            <dd class="feature-label__description">Automatically convert prices into your customer’s local currency to drive conversion in each market.</dd>
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
                            <dd class="feature-label__description">Set local payment methods to appear for customers who check out in specific markets.</dd>
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
                        <span><!--<i class="fas fa-times"></i>--></span>
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
                    <td>
                        <span><i class="fas fa-check"></i></span>
                    </td>
                </tr>

            </tbody>
          </table>

          <table>
            <thead>
              <tr class="pricing-section">
                <th>
                    <h4>MAXESITES</h4>
                </th>
                <th>
                    <h4>SOHO</h4>
                </th>
                <th>
                    <h4>MICRO</h4>
                </th>
                <th>
                    <h4>MINI</h4>
                </th>
                <th>
                    <h4>SMALL</h4>
                </th>
                <th>
                    <h4>MIDSIZE</h4>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="feature-details">
                <td>
                  <dl class="feature-label">
                    <dt class="feature-label__text">MAXeSites</dt>
                    <dd class="feature-label__description">Create multifaceted MAXeSites to expand online presence, boost organic traffic, attract new customers, improve customer loyalty, and save time.</dd>
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
                <td>
                  <span>150</span>
                </td>
                <td>
                  <span>500</span>
                </td>
              </tr>
              <tr class="feature-details">
                <td>
                  <dl class="feature-label">
                    <dt class="feature-label__text">Parent-Child Accounts</dt>
                    <dd class="feature-label__description">Manage MAXeSites for an unlimited number of Jibbio (child) accounts from one dashboard, without having to log into each account.  Ideal for agencies.</dd>
                  </dl>
                </td>
                <td>
                  <span></span>
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
                <td>
                  <span><i class="fas fa-check"></i></span>
                </td>
              </tr>

            </tbody>
          </table>

        </div>
      <!-- </div> -->
    </div>
    <!-- End of Table -->


  </div>
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
