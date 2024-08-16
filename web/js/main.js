jQuery(document).ready(function($){ //fire on DOM ready

	var weddingDay = new Date("April 23, 2013");
	$('#defaultCountdown').countdown({until: weddingDay});
	//$('#year').text(austDay.getFullYear());

	// images on all pages
	$("div.img img").hover(function() {
		// hover in
		$(this).parent().parent().css("z-index", 1);
		$(this).animate({
			width: "450",
			left: "-=100",
			top: "-=100"
		}, "fast");
	}, function() {
		// hover out
		$(this).parent().parent().css("z-index", 0);
		$(this).animate({
		width: "350",
		left: "+=100",
		top: "+=100"
		}, "fast");
	});
	
	// wedding party page
	$("div.img_weddingparty img").hover(function() {
		// hover in
		$(this).parent().parent().css("z-index", 1);
		$(this).animate({
			width: "350",
			left: "-=100",
			top: "-=100"
		}, "fast");
	}, function() {
		// hover out
		$(this).parent().parent().css("z-index", 0);
		$(this).animate({
		width: "250",
		left: "+=100",
		top: "+=100"
		}, "fast");
	});	

	// guestbook page
	/* attach a submit handler to the form */
	$("#form_guestbook").submit(function(event) {

		$("#submit").hide();
		$("#submit_loader").show();
		
		/* stop form from submitting normally */
		event.preventDefault(); 

		/* get some values from elements on the page: */
		var $form = $( this ),
		url = $form.attr( 'action' );

		/* Send the data using post and put the results in a div */
		$.post( url, $form.serialize(),
			function( data ) {
				$("#submit_loader").hide();
				if(data == 0) {
					change_captcha();
					$("#submit").show();
					$("#message").html("The code you entered does not match. Please try again!");
				} else {
					$("#content_box").prepend(data);					
					$("#message").html("Thanks for leaving a comment!");
				}	
			}
		);

	});
	
	 // refresh captcha
	 $('img#capcha_refresh').click(function() {  			
		change_captcha();
	 });	
	 
	 function change_captcha() {
	 	document.getElementById('captcha').src="get_captcha.php?rnd=" + Math.random();
	 }	 
	
	// rsvp page
	$("input[type='radio'][name='rsvp_type']").click(
		function() {
			if ($("input[type='radio'][name='rsvp_type']:checked").val() == "new") {
				$("#form_rsvp_new").show();
				$("#form_rsvp_edit").hide();
				$("#rsvp_options_edit").hide();
				$("#rsvp_options_no").hide();
				$("#form_rsvp_no").hide();		
				$("#rsvp_instructions").html("Please fill out all the fields and remember your email so you can make changes at a later time.");
			} else if ($("input[type='radio'][name='rsvp_type']:checked").val() == "no") {
				$("#form_rsvp_new").hide();
				$("#form_rsvp_edit").hide();		
				$("#rsvp_options_new").hide();
				$("#rsvp_options_edit").hide();
				$("#form_rsvp_no").show();		
				$("#rsvp_instructions").html("Please enter your name and email to RSVP no. You can use the same email to change your RSVP if you decide to come.");
			} else {
				$("#form_rsvp_new").hide();
				$("#form_rsvp_edit").show();		
				$("#rsvp_options_new").hide();
				$("#rsvp_options_no").hide();
				$("#form_rsvp_no").hide();	
				$("#rsvp_instructions").html("Please enter the email you used when you created your rsvp.");
			}	
			$(this).blur();	
		}
	);	
	
	$("#form_rsvp_new").submit(function(event) {

		$("#submit_new").hide();
		$("#submit_new_loader").show();
		
		/* stop form from submitting normally */
		event.preventDefault(); 

		/* get some values from elements on the page: */
		var $form = $( this ),
		url = $form.attr( 'action' );

		/* Send the data using post and put the results in a div */
		$.post( url, $form.serialize(),
			function( data ) {
				$("#submit_new_loader").hide();
				$("#form_rsvp_new").append("<div>You've submitted your RSVP successfully !</div>");
			}
		);
	});	
	
	$("#form_rsvp_edit").submit(function(event) {

		$("#submit_edit").hide();
		$("#submit_edit_loader").show();
		
		/* stop form from submitting normally */
		event.preventDefault(); 

		/* get some values from elements on the page: */
		var $form = $( this ),
		url = $form.attr( 'action' );

		/* Send the data using post and put the results in a div */
		$.post( url, $form.serialize(),
			function( data ) {
				$("#submit_edit_loader").hide();
				$("#submit_edit").show();
				$("#form_rsvp_edit").hide();
				$("#form_rsvp_new").html(data);
				$("#form_rsvp_new").show();				
			}
		);
	});		
	
	$("#form_rsvp_no").submit(function(event) {

		$("#submit_no").hide();
		$("#submit_no_loader").show();
		
		/* stop form from submitting normally */
		event.preventDefault(); 

		/* get some values from elements on the page: */
		var $form = $( this ),
		url = $form.attr( 'action' );

		/* Send the data using post and put the results in a div */
		$.post( url, $form.serialize(),
			function( data ) {
				$("#submit_no_loader").hide();
				$("#form_rsvp_no").append("<div>"+data+"</div>");
			}
		);
	});	
	
	$("#forgot_password_link").click(function() {
		var email = $("#rsvp_edit_email").val();
		if(email != "" && email.indexOf("@") != -1) {
			$.post( "rsvp_forgot_password.php", { email: email } ,
				function( data ) {
					$("#forgot_password_div").html(data);
				}
			);		
		} else {
			alert("Please enter a valid email.");
		}
	});		
	
	// email template
	$("#form_email").submit(function(event) {

		$("#submit_email").hide();
		$("#submit_email_loader").show();
		
		/* stop form from submitting normally */
		event.preventDefault(); 

		/* get some values from elements on the page: */
		var $form = $( this ),
		url = $form.attr( 'action' );

		/* Send the data using post and put the results in a div */
		$.post( url, $form.serialize(),
			function( data ) {
				$("#submit_email_loader").hide();
				$("#content_box").append(data);
			}
		);
	});			
	
	// admin template
	$("#form_admin").submit(function(event) {

		$("#submit_admin").hide();
		$("#submit_admin_loader").show();
		
		/* stop form from submitting normally */
		event.preventDefault(); 

		/* get some values from elements on the page: */
		var $form = $( this ),
		url = $form.attr( 'action' );

		/* Send the data using post and put the results in a div */
		$.post( url, $form.serialize(),
			function( data ) {
				if(data == "success") {
					window.location = "guestlist.php";
				} else {
					$("#submit_admin_loader").hide();
					$("#content_box").append(data);
				}	
			}
		);
	});		
	
	$("#myTable").tablesorter( {sortList: [[0,1]]} ); 

});

function hideSection(_section) {
	$("#"+_section).hide();
	$("#"+_section+"_hide").hide();
	$("#"+_section+"_show").show();
	return false;
}
function showSection(_section) {
	$("#"+_section+"_show").hide();	
	$("#"+_section).show();
	$("#"+_section+"_hide").show();
	return false;
}	