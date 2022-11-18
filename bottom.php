<script src="assets/js/jquery-2.2.4.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/jquery.scrollfire.min.js"></script> 
<script src="assets/js/animate.js"></script> 
<script src="assets/js/main.js"></script> 
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script>
$(document).ready(function(e) {
	$(document).click(function(e) {
		if(e.target.id == "menuLogin" || e.target.id == "amember_login" || e.target.id == "amember_pass" || e.target.id == "btnDDLogin" || e.target.id == "frmQuickLogin") {
			return;
		}
		$(".login-panel .dropdown-menu").hide();		
	});
});
</script>
