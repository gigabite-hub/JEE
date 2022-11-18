<style>
#promoPopup {
	text-align:center;
}
#promoPopup .modal-body {
	padding-top:0px;
}
#promoPopup .modal-content, #promoPopup .modal-body {
	background:#fffe8a !important;
	padding-bottom:25px;
}
#promoPopup h1 {
	color:#992203;
	font-weight:bold;
	font-size:30px;
	margin-bottom:20px;
}
#promoPopup .modal-header {
	border:none !important;
	padding-bottom:0px !important;
}
#promoPopup .modal-content {
	-webkit-border-radius: 0px !important;
	-moz-border-radius: 0px !important;
	border-radius: 0px !important;
	border:10px #992203 solid;
}
#promoPopup .form-group {
	margin-bottom:2px;
}
</style>
<div id="promoPopup" class="modal fade in" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
          <form name="info_form" action="#" method="post">
            <p><img src="https://jee.jibbio.com/assets/images/AskMIA-logo.png" style="height:150px;" /></p>
            <p>Join today and SAVE</p>
            <h1>10% OFF</h1>
            <!--<div class="form-group col-sm-12">
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name here...">
            </div>-->
            <div class="form-group col-sm-12">
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email...">
            </div>
            <div class="form-group col-sm-12">
              <button type="submit" class="btn btn-default btn-block pull-right">Send PROMO code!</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
 function getCookie(c_name) {
	 var c_value = document.cookie;
	 var c_start = c_value.indexOf(" " + c_name + "=");
	 if (c_start == -1) {
		 c_start = c_value.indexOf(c_name + "=");
	 }
	 if (c_start == -1) {
		 c_value = null;
	 } else {
		 c_start = c_value.indexOf("=", c_start) + 1;
		 var c_end = c_value.indexOf(";", c_start);
		 if (c_end == -1) {
			 c_end = c_value.length;
		 }
		 c_value = unescape(c_value.substring(c_start, c_end));
	 }
	 return c_value;
 }

 function setCookie(c_name, value) {
	 var c_value = escape(value);
	 document.cookie = c_name + "=" + c_value;
 }

 function checkCookie() {
	 var promoCookie = getCookie("promoCookie");
	 if (promoCookie != null && promoCookie != "") {
		 var date = new Date(promoCookie).getDate();
		 var currentDate = new Date().getDate()

		 if (currentDate > date) {
			 return true;
		 }
		 return false;

	 }
	 return true;
 }
	 
$(window).load(function(){
     //if (checkCookie()) {
	setTimeout(function() {
			$('#promoPopup').modal('show');
	}, 1000);
	 setCookie("promoCookie", new Date());
     //}
});   
</script> 
