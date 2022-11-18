<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="index, nofollow" />
<link rel="icon" href="https://jee.jibbio.com/assets/images/favicon32X32.png" type="image/png" />
<link rel="apple-touch-icon" sizes="57x57" href="https://jee.jibbio.com/assets/images/icon57X57.png" />
<link rel="apple-touch-icon" sizes="60x60" href="https://jee.jibbio.com/assets/images/icon60X60.png" />
<link rel="apple-touch-icon" sizes="72x72" href="https://jee.jibbio.com/assets/images/icon72X72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="https://jee.jibbio.com/assets/images/icon76X76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="https://jee.jibbio.com/assets/images/icon114X114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="https://jee.jibbio.com/assets/images/icon120X120.png" />
<link rel="apple-touch-icon" sizes="128x128" href="https://jee.jibbio.com/assets/images/icon128X128.png" />
<link rel="apple-touch-icon" sizes="144x144" href="https://jee.jibbio.com/assets/images/icon144X144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="https://jee.jibbio.com/assets/images/icon152X152.png" />
<link rel="apple-touch-icon" sizes="180x180" href="https://jee.jibbio.com/assets/images/icon180X180.png" />
<link rel="apple-touch-icon" sizes="192x192" href="https://jee.jibbio.com/assets/images/icon192X192.png" />
<title>MAXeSite&trade; Fields and Settings</title>
<?php /*?><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<?php */?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<?php /*?><link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<?php */?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

<style>
body {
	font-size: 14px;
}
p {
	font-size: 14px;
}
th, td {
	font-size: 14px;
	width: 50%;
}
td {
	color: red;
}
td.th {
	color: #000000;
}
#mappings-list li {
	font-size: 22px;
}

.navbar-default .navbar-nav > li > a:hover{ color:#000 !important;}
</style>



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
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
  
  
  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <!--<a class="navbar-brand" href="#">MAXeSites</a>--> </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#Form_Settings">MAXeSite&trade; Settings</a></li>-->
        <li class="dropdown"> <a href="#" class="dropdown-toggle" style="background:#fffe8a;color:#000000" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Select a Field <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#Date">Date</a></li>
            <li><a href="#Name">Name</a></li>
            <li><a href="#Address">Address</a></li>
            <li><a href="#Telephone">Telephone</a></li>
            <li><a href="#Single_Line_Text">Single Line Text</a></li>
            <li><a href="#Paragraph_Text">Paragraph Text</a></li>
            <li><a href="#Multiple_Choice">Multiple Choice</a></li>
            <li><a href="#Checkboxes">Checkboxes</a></li>
            <li><a href="#Drop_Down">Drop Down</a></li>
            <li><a href="#Matrix_Choice">Matrix Choice</a></li>
            <li><a href="#E-mail">E-mail</a></li>
            <li><a href="#Website">Website</a></li>
            <li><a href="#Price">Price</a></li>
            <li><a href="#Number">Number</a></li>
            <li><a href="#Upload_File">Upload File</a></li>
            <li><a href="#e-Signature">e-Signature</a></li>
            <li><a href="#Add_Text">Add Text</a></li>
            <li><a href="#Time">Time</a></li>
            <li><a href="#Image">Image</a></li>
            <li><a href="#Audio">Audio</a></li>
            <li><a href="#YouTube">YouTube</a></li>
            <li><a href="#Text_Link">Text Link</a></li>
            <li><a href="#Google_Map">Google Map</a></li>
            <li><a href="#Image_Gallery">Image Gallery</a></li>
            <li><a href="#Web_Page">Web Page</a></li>
            <li><a href="#Countdown">Countdown</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <h1 class="text-center" style="padding-top:50px;">MAXeSite&trade; Fields & Settings</h1>
  <p style="margin:40px 0;">Over 300 field mappings per MAXeSite&trade;.</p>
  
  <ol id="mappings-list">
    <li>
      <h3 id="Form_Settings">MAXeSite&trade; Settings</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#form_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#form_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="form_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">MAXeSite&trade; Title </td>
              <td>maxesite_name</td>
            </tr>
            <tr>
              <td class="th">MAXeSite&trade; Description </td>
              <td>maxesite_description</td>
            </tr>
            <tr>
              <td class="th">MAXeSite&trade; Tags </td>
              <td>maxesite_tags</td>
            </tr>
            <tr>
              <td class="th">MAXeSite&trade; Theme </td>
              <td>maxesite_theme_id</td>
            </tr>
            <tr>
              <td class="th">Google Translate</td>
              <td>maxesite_google_translate</td>
            </tr>
            <tr>
              <td class="th">Auto Refresh</td>
              <td>maxesite_auto_refresh</td>
            </tr>
            <tr>
              <td class="th">Idle Time</td>
              <td>maxesite_auto_refresh_time</td>
            </tr>
            <tr>
              <td class="th">Redirect to URL</td>
              <td>maxesite_auto_refresh_url</td>
            </tr>
            <tr>
              <td class="th">Other Scripts</td>
              <td>maxesite_script_code</td>
            </tr>
            <tr>
              <td class="th">Title</td>
              <td>maxesite_seo_title</td>
            </tr>
            <tr>
              <td class="th">Keywords</td>
              <td>maxesite_meta_keywords</td>
            </tr>
            <tr>
              <td class="th">Content Description</td>
              <td>maxesite_meta_description</td>
            </tr>
            <tr>
              <td class="th">Show Text</td>
              <td>maxesite_success_message</td>
            </tr>
            <tr>
              <td class="th">Redirect to URL</td>
              <td>maxesite_redirect</td>
            </tr>
            <tr>
              <td class="th">TTS </td>
              <td>maxesite_tts</td>
            </tr>
            <tr>
              <td class="th">Social Icons </td>
              <td>maxesite_social_icons</td>
            </tr>
            <tr>
              <td class="th">Language </td>
              <td>maxesite_language</td>
            </tr>
            <tr>
              <td class="th">Label Alignment </td>
              <td>maxesite_label_alignment</td>
            </tr>
            <tr>
              <td class="th">ADF-XML Integration</td>
              <td>maxesite_adf_xml</td>
            </tr>
            <tr>
              <td class="th">Adf Tag 1</td>
              <td>maxesite_adf_tag1</td>
            </tr>
            <tr>
              <td class="th">Adf Tag 2</td>
              <td>maxesite_adf_tag2</td>
            </tr>
            <tr>
              <td class="th">Adf Tag 3</td>
              <td>maxesite_adf_tag3</td>
            </tr>
            <tr>
              <td class="th">Allow User to Save and Resume Later</td>
              <td>maxesite_resume_enable</td>
            </tr>
            <tr>
              <td class="th">Show Review Page Before Submitting</td>
              <td>maxesite_review</td>
            </tr>
            <tr>
              <td class="th"> Add a Review Page Title </td>
              <td>maxesite_review_title</td>
            </tr>
            <tr>
              <td class="th"> Add a Description for the Review Page </td>
              <td>maxesite_review_description</td>
            </tr>
            <tr>
              <td class="th">Use Text Button</td>
              <td>maxesite_review_use_text</td>
            </tr>
            <tr>
              <td class="th">Use Image Button</td>
              <td>maxesite_review_use_image</td>
            </tr>
            <tr>
              <td class="th">Enter a word for your "Submit" Button</td>
              <td>maxesite_review_primary_text</td>
            </tr>
            <tr>
              <td class="th">Enter a word for your "Back" Button</td>
              <td>maxesite_review_secondary_text</td>
            </tr>
            <tr>
              <td class="th">Enter the image URL for your "Submit" button</td>
              <td>maxesite_review_primary_img</td>
            </tr>
            <tr>
              <td class="th">Enter the image URL for your "Back" button</td>
              <td>maxesite_review_secondary_img</td>
            </tr>
            <tr>
              <td class="th">Enter a Password to Access MAXeSite&trade;</td>
              <td>maxesite_password</td>
            </tr>
            <tr>
              <td class="th">Enter Master Password</td>
              <td>maxesite_mpassword</td>
            </tr>
            <tr>
              <td class="th">Activate Spam Protection (CAPTCHA)</td>
              <td>maxesite_captcha</td>
            </tr>
            <tr>
              <td class="th">Type</td>
              <td>maxesite_captcha_type</td>
            </tr>
            <tr>
              <td class="th">Limit One MAXeSite&trade; Entry Per IP address</td>
              <td>maxesite_unique_ip</td>
            </tr>
            <tr>
              <td class="th">Limit Number of MAXeSite&trade; Submissions</td>
              <td>maxesite_limit_enable</td>
            </tr>
            <tr>
              <td class="th">Maximum entries accepted: #</td>
              <td>maxesite_limit</td>
            </tr>
            <tr>
              <td class="th">Hide Submit Button</td>
              <td>maxesite_hide_submit_button</td>
            </tr>
            <tr>
              <td class="th">Set the days & times when available</td>
              <td>maxesite_schedule_enable</td>
            </tr>
            <tr>
              <td class="th">Schedule Start Date</td>
              <td>maxesite_scheduling_start_date</td>
            </tr>
            <tr>
              <td class="th">Schedule Start Time</td>
              <td>maxesite_scheduling_start_hour</td>
            </tr>
            <tr>
              <td class="th">Schedule End Date</td>
              <td>maxesite_scheduling_end_date</td>
            </tr>
            <tr>
              <td class="th">Schedule End Time</td>
              <td>maxesite_scheduling_end_hour</td>
            </tr>
            <tr>
              <th colspan="2">Notifications</th>
            </tr>
            <tr>
              <td class="th">Send Notification Emails After Each MAXeSite&trade; Submission</td>
              <td>esl_enable</td>
            </tr>
            <tr>
              <td class="th">Email to receive notifications</td>
              <td>esl_from_email_address</td>
            </tr>
            <tr>
              <td class="th">Email to receive ADF-XML</td>
              <td>maxesite_adf_email1</td>
            </tr>
            <tr>
              <td class="th">From name </td>
              <td>esl_from_name</td>
            </tr>
            <tr>
              <td class="th">From email </td>
              <td>esl_from_email_address</td>
            </tr>
            <tr>
              <td class="th">Email Subject </td>
              <td>esl_subject</td>
            </tr>
            <tr>
              <td class="th">Email Content</td>
              <td>esl_content</td>
            </tr>
            <tr>
              <td class="th">Plain Text</td>
              <td>esl_plain_text</td>
            </tr>
            <tr>
              <td class="th">Send A Confirmation Email To The MAXeSite&trade; Submitter </td>
              <td>esr_enable</td>
            </tr>
            <tr>
              <td class="th">From name </td>
              <td>esr_from_name</td>
            </tr>
            <tr>
              <td class="th">From email </td>
              <td>esr_from_email_address</td>
            </tr>
            <tr>
              <td class="th">Email Subject </td>
              <td>esr_subject</td>
            </tr>
            <tr>
              <td class="th">Email Content</td>
              <td>esr_content</td>
            </tr>
            <tr>
              <td class="th">Plain Text</td>
              <td>esr_plain_text</td>
            </tr>
            <tr>
              <th colspan="2">PayPal</th>
            </tr>
            <tr>
              <td class="th">Enable PayPal Payments</td>
              <td>payment_enable_merchant</td>
            </tr>
            <tr>
              <td class="th">Email Address</td>
              <td>payment_paypal_email</td>
            </tr>
          </table>
        </div>
        <div id="form_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_form_settings1.jpg" class="img-responsive center-block" /></p>
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_form_settings2.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Date">Date</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#dt_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#dt_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="dt_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <tr>
              <td class="th">Required</td>
              <td>element_is_required</td>
            </tr>
            <tr>
              <td class="th">No Duplicates</td>
              <td>element_is_unique</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th">Enable Minimum and/or Maximum Dates</td>
              <td>element_date_enable_range</td>
            </tr>
            <tr>
              <td class="th">Minimum Date</td>
              <td>element_date_range_min</td>
            </tr>
            <tr>
              <td class="th">Maximum Date</td>
              <td>element_date_range_max</td>
            </tr>
            <tr>
              <td class="th">Enable Date Selection Limit</td>
              <td>element_date_enable_selection_limit</td>
            </tr>
            <tr>
              <td class="th">Only allow each date to be selected # times</td>
              <td>element_date_selection_max</td>
            </tr>
            <tr>
              <td class="th">Disable Past/Future Dates</td>
              <td>element_date_disable_past_future</td>
            </tr>
            <tr>
              <td class="th">All Future Dates/All Past Dates</td>
              <td>element_date_past_future</td>
            </tr>
            <tr>
              <td class="th">Disable Weekend Dates</td>
              <td>element_date_disable_weekend</td>
            </tr>
            <tr>
              <td class="th">Disable Specific Dates</td>
              <td>element_date_disable_specific</td>
            </tr>
            <tr>
              <td class="th">Disable Specific Dates</td>
              <td>element_date_disable_specific</td>
            </tr>
            <tr>
              <td class="th">Specific Dates List</td>
              <td>element_date_disabled_list</td>
            </tr>
            <tr>
              <td class="th">Default Value</td>
              <td>element_default_value</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="dt_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_date.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Name">Name</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#na_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#na_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="na_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <tr>
              <td class="th">Required</td>
              <td>element_is_required</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th"> First Name </td>
              <td>element_default_fname</td>
            </tr>
            <tr>
              <td class="th"> Last Name </td>
              <td>element_default_lname</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="na_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_name.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Address"> Address</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#ad_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#ad_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="ad_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <tr>
              <td class="th">Required</td>
              <td>element_is_required</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th"> Hide "Address Type"</td>
              <td>element_address_hidetype</td>
            </tr>
            <tr>
              <td class="th">Hide "Address Line 2"</td>
              <td>element_address_hideline2</td>
            </tr>
            <tr>
              <td class="th"> Hide "Apartment"</td>
              <td>element_address_hideapart</td>
            </tr>
            <tr>
              <td class="th">Only Allow U.S. State Selections</td>
              <td>element_address_us_only</td>
            </tr>
            <tr>
              <td class="th"> Street Address </td>
              <td>element_default_street</td>
            </tr>
            <tr>
              <td class="th"> Address Line 2 </td>
              <td>element_default_street1</td>
            </tr>
            <tr>
              <td class="th"> City </td>
              <td>element_default_city</td>
            </tr>
            <tr>
              <td class="th"> State / Province / Region </td>
              <td>element_default_state</td>
            </tr>
            <tr>
              <td class="th"> Postal / Zip Code </td>
              <td>element_default_zip</td>
            </tr>
            <tr>
              <td class="th"> Country </td>
              <td>element_default_country</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="ad_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_address.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Telephone"> Telephone</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#ph_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#ph_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="ph_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <tr>
              <td class="th">Required</td>
              <td>element_is_required</td>
            </tr>
            <tr>
              <td class="th">No Duplicates</td>
              <td>element_is_unique</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th"> Default Value</td>
              <td>element_default_value</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="ph_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_phone.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Single_Line_Text"> Single Line Text</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#sg_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#sg_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="sg_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <tr>
              <td class="th">Size</td>
              <td>element_size</td>
            </tr>
            <tr>
              <td class="th">Required</td>
              <td>element_is_required</td>
            </tr>
            <tr>
              <td class="th">No Duplicates</td>
              <td>element_is_unique</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th">Display as Password Field</td>
              <td>element_text_as_password</td>
            </tr>
            <tr>
              <td class="th">Range Min</td>
              <td>element_range_min</td>
            </tr>
            <tr>
              <td class="th">Range Max</td>
              <td>element_range_max</td>
            </tr>
            <tr>
              <td class="th">Range Limit By</td>
              <td>element_range_limit_by</td>
            </tr>
            <tr>
              <td class="th">Enable Barcode Scanner</td>
              <td>element_barcode</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="sg_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_single_line_text.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Paragraph_Text"> Paragraph Text</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#pt_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#pt_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="pt_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <tr>
              <td class="th">Size</td>
              <td>element_size</td>
            </tr>
            <tr>
              <td class="th">Required</td>
              <td>element_is_required</td>
            </tr>
            <tr>
              <td class="th">No Duplicates</td>
              <td>element_is_unique</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th">Range Min</td>
              <td>element_range_min</td>
            </tr>
            <tr>
              <td class="th">Range Max</td>
              <td>element_range_max</td>
            </tr>
            <tr>
              <td class="th">Range Limit By</td>
              <td>element_range_limit_by</td>
            </tr>
            <tr>
              <td class="th">Enable Barcode Scanner</td>
              <td>element_barcode</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="pt_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_paragraph_text.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Multiple_Choice"> Multiple Choice</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#mc_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#mc_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="mc_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <tr>
              <td class="th">Required</td>
              <td>element_is_required</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th"> Number of Columns </td>
              <td>element_choice_columns</td>
            </tr>
            <tr>
              <td class="th">Allow user to add their own selection </td>
              <td>element_choice_has_other</td>
            </tr>
            <tr>
              <td class="th">Other Label </td>
              <td>element_choice_other_label</td>
            </tr>
            <tr>
              <td class="th">Selections - values separated by piping "|" symbol</td>
              <td>element_selections</td>
            </tr>
            <tr>
              <td class="th">Randomly Shuffle Selections</td>
              <td>element_choices_randomize</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="mc_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_multiple_choice.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Checkboxes"> Checkboxes</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#cb_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#cb_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="cb_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <tr>
              <td class="th">Required</td>
              <td>element_is_required</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th"> Number of Columns </td>
              <td>element_choice_columns</td>
            </tr>
            <tr>
              <td class="th">Allow user to add their own selection </td>
              <td>element_choice_has_other</td>
            </tr>
            <tr>
              <td class="th">Other Label </td>
              <td>element_choice_other_label</td>
            </tr>
            <tr>
              <td class="th">Selections - values separated by piping "|" symbol</td>
              <td>element_selections</td>
            </tr>
            <tr>
              <td class="th">Randomly Shuffle Selections</td>
              <td>element_choices_randomize</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="cb_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_multiple_choice.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Drop_Down"> Drop Down</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#dd_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#dd_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="dd_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <tr>
              <td class="th">Field Size</td>
              <td>element_size</td>
            </tr>
            <tr>
              <td class="th">Required</td>
              <td>element_is_required</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th">Selections - values separated by piping "|" symbol</td>
              <td>element_selections</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="dd_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_drop_down.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Matrix_Choice"> Matrix Choice</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#mx_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#mx_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="mx_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <tr>
              <td class="th">Required</td>
              <td>element_is_required</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th">Rows - values separated by piping "|" symbol</td>
              <td>element_rows</td>
            </tr>
            <tr>
              <td class="th">Columns - values separated by piping "|" symbol</td>
              <td>element_cols</td>
            </tr>
            <tr>
              <td class="th">Allow User To Select Multiple Answers Per Row</td>
              <td>element_matrix_allow_multiselect</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="mx_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_matrix.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="E-mail"> E-mail</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#em_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#em_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="em_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <tr>
              <td class="th">Required</td>
              <td>element_is_required</td>
            </tr>
            <tr>
              <td class="th">No Duplicates</td>
              <td>element_is_unique</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th">Confirm Email Field</td>
              <td>element_confirm_email</td>
            </tr>
            <tr>
              <td class="th">Confirm Email Field Title</td>
              <td>element_confirm_email_title</td>
            </tr>
            <tr>
              <td class="th">Enable Barcode Scanner</td>
              <td>element_barcode</td>
            </tr>
            <tr>
              <td class="th">Default Value</td>
              <td>element_default_value</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="em_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_email.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Website"> Website</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#ws_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#ws_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="ws_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <tr>
              <td class="th">Required</td>
              <td>element_is_required</td>
            </tr>
            <tr>
              <td class="th">No Duplicates</td>
              <td>element_is_unique</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th">Enable Barcode Scanner</td>
              <td>element_barcode</td>
            </tr>
            <tr>
              <td class="th">Default Value</td>
              <td>element_default_value</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="ws_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_website.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Price"> Price</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#pr_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#pr_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="pr_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <tr>
              <td class="th">Required</td>
              <td>element_is_required</td>
            </tr>
            <tr>
              <td class="th">No Duplicates</td>
              <td>element_is_unique</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th"> Dollars </td>
              <td>element_default_money_1</td>
            </tr>
            <tr>
              <td class="th"> Cents </td>
              <td>element_default_money_2</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="pr_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_currency.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Number"> Number</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#nm_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#nm_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="nm_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <tr>
              <td class="th">Field Size</td>
              <td>element_size</td>
            </tr>
            <tr>
              <td class="th">Required</td>
              <td>element_is_required</td>
            </tr>
            <tr>
              <td class="th">No Duplicates</td>
              <td>element_is_unique</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th">Range Min</td>
              <td>element_range_min</td>
            </tr>
            <tr>
              <td class="th">Range Max</td>
              <td>element_range_max</td>
            </tr>
            <tr>
              <td class="th">Range Limit By</td>
              <td>element_range_limit_by</td>
            </tr>
            <tr>
              <td class="th">Enable Barcode Scanner</td>
              <td>element_barcode</td>
            </tr>
            <tr>
              <td class="th">Default Value</td>
              <td>element_default_value</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="nm_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_number.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Upload_File"> Upload File</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#up_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#up_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="up_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <tr>
              <td class="th">Required</td>
              <td>element_is_required</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th">Limit File Upload Type</td>
              <td>element_file_enable_type_limit</td>
            </tr>
            <tr>
              <td class="th">Allow/Block these file types here</td>
              <td>element_file_type_list</td>
            </tr>
            <tr>
              <td class="th">Send File as Email Attachment</td>
              <td>element_file_as_attachment</td>
            </tr>
            <tr>
              <td class="th">Enable Advance Uploader</td>
              <td>element_file_enable_advance</td>
            </tr>
            <tr>
              <td class="th">Automatically Upload Files</td>
              <td>element_file_auto_upload</td>
            </tr>
            <tr>
              <td class="th">Allow Multiple File Uploads</td>
              <td>element_file_enable_multi_upload</td>
            </tr>
            <tr>
              <td class="th">Set maximum upload limit of # files</td>
              <td>element_file_max_selection</td>
            </tr>
            <tr>
              <td class="th">Limit File Upload Size</td>
              <td>element_file_enable_size_limit</td>
            </tr>
            <tr>
              <td class="th">Each file should be a # MB</td>
              <td>element_file_size_max</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="up_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_file_upload.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="e-Signature"> e-Signature</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#sig_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#sig_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="sig_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <tr>
              <td class="th">Field Size</td>
              <td>element_size</td>
            </tr>
            <tr>
              <td class="th">Required</td>
              <td>element_is_required</td>
            </tr>
            <tr>
              <td class="th">No Duplicates</td>
              <td>element_is_unique</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="sig_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_signature.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Add_Text"> Add Text</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#atxt_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#atxt_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="atxt_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th">Display Pasted Text within Email</td>
              <td>element_section_display_in_email</td>
            </tr>
            <tr>
              <td class="th">Enable Vertical Scrollbar</td>
              <td>element_section_enable_scroll</td>
            </tr>
            <tr>
              <td class="th">Section Break Size</td>
              <td>element_size</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="atxt_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_add_text.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Time"> Time</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tm_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#tm_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="tm_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <tr>
              <td class="th">Required</td>
              <td>element_is_required</td>
            </tr>
            <tr>
              <td class="th">No Duplicates</td>
              <td>element_is_unique</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th">Show Seconds Field</td>
              <td>element_time_showsecond</td>
            </tr>
            <tr>
              <td class="th">Use 24 Hour Format</td>
              <td>element_time_24hour</td>
            </tr>
            <tr>
              <td class="th">Default Value</td>
              <td>element_default_value</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="tm_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_time.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Image"> Image</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#im_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#im_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="im_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th"> Alternate Text For Screen Readers </td>
              <td>element_alt_text</td>
            </tr>
            <tr>
              <td class="th"> Select Aspect Ratio </td>
              <td>element_aspect_ratio</td>
            </tr>
            <tr>
              <td class="th"> Select Overlay <a href="#image_overlays">Click here</a> to view available image overlays </td>
              <td>element_image_overlay</td>
            </tr>
            <tr>
              <td class="th"> Default Value (Image URL)</td>
              <td>element_default_value</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="im_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_image.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Audio"> Audio</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#au_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#au_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="au_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th"> Alternate Text For Screen Readers </td>
              <td>element_alt_text</td>
            </tr>
            <tr>
              <td class="th"> Select Aspect Ratio </td>
              <td>element_aspect_ratio</td>
            </tr>
            <tr>
              <td class="th"> Select Overlay </td>
              <td>element_image_overlay</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="au_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_image.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="YouTube"> YouTube</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#yt_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#yt_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="yt_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th"> Select Aspect Ratio </td>
              <td>element_aspect_ratio</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="yt_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_youtube.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Text_Link"> Text_Link</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tl_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#tl_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="tl_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th"> Link Text </td>
              <td>element_link_text</td>
            </tr>
            <tr>
              <td class="th"> Link Location </td>
              <td>element_link_location</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="tl_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_text_link.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    </li>
    <li>
      <h3 id="Google_Map"> Google_Map</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#mp_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#mp_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="mp_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th"> Address to Display in Google Map </td>
              <td>element_map_address</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="mp_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_map.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Image_Gallery"> Image_Gallery</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#gl_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#gl_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="gl_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <tr>
              <td class="th">Gallery Type</td>
              <td>element_gallery_type</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
            <tr>
              <th colspan="2">Multiple Images</th>
            </tr>
            <tr>
              <td class="th"> Image URL </td>
              <td>img_url</td>
            </tr>
            <tr>
              <td class="th">Image Description</td>
              <td>img_desc</td>
            </tr>
            <tr>
              <td class="th">Image Overlay</td>
              <td>img_overlay</td>
            </tr>
            <tr>
              <td class="th">Image Link</td>
              <td>img_link</td>
            </tr>
          </table>
          <div class="alert alert-info">
            <p>Note: These fields will be repeated for multiple images i.e. if there are 10 images in gallery the above trio will be repeated 10 times in CSV file.</p>
          </div>
        </div>
        <div id="gl_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_gallery.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Web_Page"> Web_Page</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#wp_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#wp_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="wp_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th"> Web Page URL </td>
              <td>element_web_page_url</td>
            </tr>
            <tr>
              <td class="th"> Width (Pixels or %) </td>
              <td>element_web_page_width</td>
            </tr>
            <tr>
              <td class="th"> Height (Pixels only) </td>
              <td>element_web_page_height</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="wp_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_webpage.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
    <li>
      <h3 id="Countdown"> Countdown</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#cd_1">Fields Reference</a></li>
        <li><a data-toggle="tab" href="#cd_2">Screenshot</a></li>
      </ul>
      <div class="tab-content">
        <div id="cd_1" class="tab-pane fade in active">
          <table class="table table-striped table-responsive table-bordered">
            <tr>
              <td class="th">Field Label</td>
              <td>element_title</td>
            </tr>
            <!--            <tr>
              <td class="th">Public</td>
              <td>element_is_public</td>
            </tr>
-->
            <tr>
              <td class="th">Private</td>
              <td>element_is_private</td>
            </tr>
            <tr>
              <td class="th">Event Date (mm/dd/yyyy)</td>
              <td>element_countdown_date</td>
            </tr>
            <tr>
              <td class="th">Event Time (hh:mm:ss)</td>
              <td>element_countdown_time</td>
            </tr>
            <tr>
              <td class="th">Count Up </td>
              <td>element_countdown_countup</td>
            </tr>
            <tr>
              <td class="th">Event Title (Max 50 characters)</td>
              <td>element_countdown_desc</td>
            </tr>
            <tr>
              <td class="th">Display text above/Below Timer </td>
              <td>element_countdown_pos</td>
            </tr>
            <tr>
              <td class="th">Display option to "Add Event to Calendar"</td>
              <td>element_countdown_calendar</td>
            </tr>
            <tr>
              <td class="th"> Width (Pixels or %) </td>
              <td>element_countdown_width</td>
            </tr>
            <tr>
              <td class="th"> Height (Pixels only) </td>
              <td>element_countdown_height</td>
            </tr>
            <tr>
              <td class="th">Style</td>
              <td>element_countdown_style</td>
            </tr>
            <tr>
              <td class="th">Animation</td>
              <td>element_countdown_anim</td>
            </tr>
            <tr>
              <td class="th">Digits Color</td>
              <td>element_countdown_dgcolor</td>
            </tr>
            <tr>
              <td class="th">Text Color</td>
              <td>element_countdown_txtcolor</td>
            </tr>
            <tr>
              <td class="th">Background Color</td>
              <td>element_countdown_bgcolor</td>
            </tr>
            <tr>
              <td class="th">Background Image </td>
              <td>element_countdown_bgimage</td>
            </tr>
            <tr>
              <td class="th">Background Opacity</td>
              <td>element_countdown_opacity</td>
            </tr>
            <tr>
              <td class="th">Action when countdown ends</td>
              <td>element_countdown_action</td>
            </tr>
            <tr>
              <td class="th">Redirect to URL</td>
              <td>element_countdown_redirect</td>
            </tr>
            <tr>
              <td class="th">Show Message</td>
              <td>element_countdown_message</td>
            </tr>
            <tr>
              <td class="th">Repeat</td>
              <td>element_countdown_repeat</td>
            </tr>
            <tr>
              <td class="th">Guidelines for the public</td>
              <td>element_guidelines</td>
            </tr>
          </table>
        </div>
        <div id="cd_2" class="tab-pane fade in">
          <p class="text-center"><img src="https://jee.jibbio.com//images/field_countdown.jpg" class="img-responsive center-block" /></p>
        </div>
      </div>
    </li>
  </ol>
  <div id="image_overlays" style="padding:0 50px;">
    <h3 id="Countdown"> Image Overlays</h3>
    <table class="table table-striped table-responsive table-bordered">
       <tr>
        <td class="th">Almost Gone</td>
        <td>almost_gone</td>
      </tr>
      <tr>
        <td class="th">Assume Payments</td>
        <td>assume_payments</td>
      </tr>
      <tr>
        <td class="th">Business</td>
        <td>business</td>
      </tr>
      <tr>
        <td class="th">Clearance</td>
        <td>clearance</td>
      </tr>
      <tr>
        <td class="th">Coming Soon</td>
        <td>coming_soon</td>
      </tr>
      <tr>
        <td class="th">Commercial</td>
        <td>commercial</td>
      </tr>
      <tr>
        <td class="th">Demo</td>
        <td>demo</td>
      </tr>
      <tr>
        <td class="th">Discounted</td>
        <td>discounted</td>
      </tr>
      <tr>
        <td class="th">Donate Now</td>
        <td>donate_now</td>
      </tr>
      <tr>
        <td class="th">Ending Soon</td>
        <td>ending_soon</td>
      </tr>
      <tr>
        <td class="th">Enter To Win</td>
        <td>enter_to_win</td>
      </tr>
      <tr>
        <td class="th">Floor Model</td>
        <td>floor_model</td>
      </tr>
      <tr>
        <td class="th">Free</td>
        <td>free</td>
      </tr>
      <tr>
        <td class="th">Help Needed</td>
        <td>help_needed</td>
      </tr>
      <tr>
        <td class="th">Help Us</td>
        <td>help_us</td>
      </tr>
      <tr>
        <td class="th">Just Listed</td>
        <td>just_listed</td>
      </tr>
      <tr>
        <td class="th">Just Sold</td>
        <td>just_sold</td>
      </tr>
      <tr>
        <td class="th">Lease Special</td>
        <td>lease_special</td>
      </tr>
      <tr>
        <td class="th">Limited Supply</td>
        <td>limited_supply</td>
      </tr>
      <tr>
        <td class="th">Limited Time Offer</td>
        <td>limited_time_offer</td>
      </tr>
      <tr>
        <td class="th">Low Down Pmt</td>
        <td>low_down_pmt</td>
      </tr>
      <tr>
        <td class="th">Make An Offer</td>
        <td>make_an_offer</td>
      </tr>
      <tr>
        <td class="th">No Money Down</td>
        <td>no_money_down</td>
      </tr>
      <tr>
        <td class="th">Open Box</td>
        <td>open_box</td>
      </tr>
      <tr>
        <td class="th">Open House</td>
        <td>open_house</td>
      </tr>
      <tr>
        <td class="th">Perfect Gift</td>
        <td>perfect_gift</td>
      </tr>
      <tr>
        <td class="th">Pre Register</td>
        <td>pre_register</td>
      </tr>
      <tr>
        <td class="th">Reduced</td>
        <td>reduced</td>
      </tr>
      <tr>
        <td class="th">Refurbished</td>
        <td>refurbished</td>
      </tr>
      <tr>
        <td class="th">Register</td>
        <td>register</td>
      </tr>
      <tr>
        <td class="th">Register To Win</td>
        <td>register_to_win</td>
      </tr>
      <tr>
        <td class="th">Rentable</td>
        <td>rentable</td>
      </tr>
      <tr>
        <td class="th">Rental</td>
        <td>rental</td>
      </tr>
      <tr>
        <td class="th">Rental Property</td>
        <td>rental_property</td>
      </tr>
      <tr>
        <td class="th">Rent It</td>
        <td>rent_it</td>
      </tr>
      <tr>
        <td class="th">Rent To Own</td>
        <td>rent_to_own</td>
      </tr>
      <tr>
        <td class="th">Sale</td>
        <td>sale</td>
      </tr>
      <tr>
        <td class="th">Scratch N Dent</td>
        <td>scratch_n_dent</td>
      </tr>
      <tr>
        <td class="th">Signup Now</td>
        <td>signup_now</td>
      </tr>
      <tr>
        <td class="th">Sold</td>
        <td>sold</td>
      </tr>
      <tr>
        <td class="th">Sold Out</td>
        <td>sold_out</td>
      </tr>
      <tr>
        <td class="th">Special</td>
        <td>special</td>
      </tr>
      <tr>
        <td class="th">Subscribe Today</td>
        <td>subscribe_today</td>
      </tr>
      <tr>
        <td class="th">Todays Deal</td>
        <td>todays_deal</td>
      </tr>
      <tr>
        <td class="th">Win This</td>
        <td>win_this</td>
      </tr>
    </table>
  </div>
</div>
<?php /*?><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php */?>


        
              
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

$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});

	$(document).ready(function(){
		$('.about-banner').bxSlider({pager:false, auto:true, controls:false, pager:true});
	});
  </script>
<style>  
  .navbar-default .navbar-nav > li > a:hover{ color:#000 !important;}
  .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus{color:#000 !important;}
</style>

</body>
</html>
