          <!-- start contact form -->
          <div class="cform" id="contact-form">
            <div id="sendmessage">Your request has been sent. Your Reference Number is : <span id="reservationNo"> </span>.<br/>Thank you! For more details contact: +923332453090, +923458453090 </div>
            <div id="errormessage"></div>
            <form method="post" action="/bookingform/savebookingform.php" role="form" class="contactForm">
				<?
				if($_REQUEST["for"]) {
					$additionalControls = $_REQUEST["for"].".php";
					include($additionalControls);
				}
				?>
			  <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="pickupLocation" id="pickupLocation" placeholder="Your Pickup Location" data-rule="pickupLocation" data-msg="Please enter you Pickup Location " />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="contactNumber" id="contactNumber" placeholder="Your Contact Number" data-rule="contactNumber" data-msg="Please enter a valid Contact Number" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="reservationDuration" id="reservationDuration" placeholder="Number Of Days To Rent The Car" data-rule="reservationDuration" data-msg="Please enter No. of days to rent the car" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <select type="text" class="form-control" name="carDetails" id="carDetails" placeholder="Car" data-rule="carDetails" data-msg="Select car" >
						<option value="Suzuki Cultus - VXRi - 2017">Suzuki Cultus - VXRi - 2017</option>
						<option value="Toyota Corolla - XLI 2017">Toyota Corolla - XLI 2017 </option>
						<option value="Honda Civic - 1.8 2017 ">Honda Civic - 1.8 2017 </option>
				</select>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us " placeholder="Message (Preferences)"></textarea>
                <div class="validation"></div>
              </div>

              <div class="text-center">
              	<button name = "submitButton" type="submit" class="btn btn-lg btn-theme">Book</button>
              </div>
            </form>
          </div>
		  <?
		  $context_path = "http://" .$_SERVER['SERVER_NAME'] ."/";//TODO move it config file
		  $bookingFormJS = $context_path ."bookingform/bookingform.js";
		  ?>
		  <script >
			var context_path = "<?=$context_path?>";
		  </script>
          <script src="<?=$bookingFormJS?>"></script>
		  <!-- END contact form -->
		  