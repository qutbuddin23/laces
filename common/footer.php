     
                  	<footer id="footer">
						<div class="inner">
							<section>
                     <div class="container">
                     <h2>Get in touch</h2>
								<form id="registration_form" method="POST" action="../actions.php">
									<div class="fields">
										<div class="field half">      
                                 <input type="text" name="name" id="form_fname" required="" placeholder="Name" />
                                 <span class="error_form" id="fname_error_message" ></span>
										</div>
										<div class="field half">
                                 <input type="email" name="email" id="form_email"required="" placeholder="Email" />
                                 <span class="error_form" id="email_error_message"></span>
										</div>
										<div class="field">
											<textarea name="message" id="message" placeholder="Message"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="primary" /></li>
									</ul>
								</form>
                     </section>
                    
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="https://twitter.com/" class="icon brands style2 fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/" class="icon brands style2 fa-facebook-f" target="_blank"><span class="label">Facebook</span></a></li>
					 				<li><a href="https://www.instagram.com/" class="icon brands style2 fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
									<li><a href="https://mail.google.com/" class="icon solid style2 fa-envelope" target="_blank"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; FAKRILACES</li></li>
							</ul>
						</div>
					</footer>

							<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

         <script type="text/javascript">
      $(function() {

         $("#fname_error_message").hide();
         $("#email_error_message").hide();


         var error_fname = false;
         var error_email = false;


         $("#form_fname").focusout(function(){
            check_fname();
         });
         $("#form_email").focusout(function() {
            check_email();
         });

         function check_fname() {
            var pattern = /^[a-zA-Z]*$/;
            var fname = $("#form_fname").val();
            if (pattern.test(fname) && fname !== '') {
               $("#fname_error_message").hide();
               $("#form_fname").css("border-bottom","2px solid #34F458");
            } else {
               $("#fname_error_message").html("Should contain only Characters");
               $("#fname_error_message").show();
               $("#form_fname").css("border-bottom","2px solid #F90A0A");
               error_fname = true;
            }
         }

         function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#form_email").val();
            if (pattern.test(email) && email !== '') {
               $("#email_error_message").hide();
               $("#form_email").css("border-bottom","2px solid #34F458");
            } else {
               $("#email_error_message").html("Invalid Email");
               $("#email_error_message").show();
               $("#form_email").css("border-bottom","2px solid #F90A0A");
               error_email = true;
            }
         }

         $("#registration_form").submit(function() {
            error_fname = false;
            error_email = false;


            check_fname();
            check_email();


            if (error_fname === false && error_email === false ) {
               return true;
            } else {
               alert("Please Fill the form Correctly");
               return false;
            }


         });
      });
   </script>
 