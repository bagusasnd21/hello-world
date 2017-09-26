  <div class="container">
		<!-- Trigger the modal with a button -->
    <div>
      <h2>Member Confirmation</h2>
  		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#activate-account" style="margin-top:30px;white-space: normal;">
        Account Activation Step 1
      </button>
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#verification" style="margin-top:30px;white-space: normal;">
        Account Activation Step 2
      </button>
    </div>
    <div>
      <h2>Forgot Password</h2>
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#forgot-pass" style="margin-top:30px;white-space: normal;">
        Forgot Password Step 1
      </button>
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#failed" style="margin-top:30px;white-space: normal;">
        Forgot Password Step 1 (Failed)
      </button>
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#verification" style="margin-top:30px;white-space: normal;">
        Forgot Password Step 2
      </button>
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#reset-pass" style="margin-top:30px;white-space: normal;">
        Forgot Password Step 3
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#success" style="margin-top:30px;white-space: normal;">
        Success
      </button>
    </div>

    <div>
      <h2>Change Password</h2>
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#change-pass" style="margin-top:30px;white-space: normal;">
        Change Password step 1
      </button>
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#failed2" style="margin-top:30px;white-space: normal;">
        Change Password Step 2 (Failed 1)
      </button>
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#failed3" style="margin-top:30px;white-space: normal;">
        Change Password Step 2 (Failed 2)
      </button>
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#success" style="margin-top:30px;white-space: normal;">
        Success
      </button>
    </div>
    <div></div>


		<!-- Modal Activated Account-->
		<div class="modal fade fp" id="activate-account" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content popup-background-blue text-center">

					<div class="modal-body">
						<button type="button" class="close button-close-cust" data-dismiss="modal">X</button>
						<p class="title-popup-forgot-pass">Activate Your Account</p>
						<p class="popup-forgot-pass-content">Please enter your email</p>
						<div class="border-forgot-pass"></div>
						<span class="popup-forgot-pass-content mb-20">Your email must be the same as the one you use to register your self at <p class="bold inline">pgn</p>karir</span>

						<form>
							<input type="text" placeholder="Email Address" class="custom-text-input-forgot-pass" >
              <button type="button" class="btn button-custom-send" data-toggle="modal" data-target="#">Send</button>
							</br><input type="checkbox" class="mt10"> <p class="popup-forgot-pass-content">I'm not a robot </p>
						</form>
					</div>

				</div>

			</div>
		</div>

		<!-- Modal Forgot Password-->
		<div class="modal fade fp" id="forgot-pass" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content popup-background-blue text-center">

					<div class="modal-body">
						<button type="button" class="close button-close-cust" data-dismiss="modal">X</button>
						<p class="title-popup-forgot-pass">Forgot Password</p>
						<p class="popup-forgot-pass-content">Please enter your email</p>
						<div class="border-forgot-pass"></div>
						<span class="popup-forgot-pass-content mb-20">Your email must be the same as the one you use to register your self at <p class="bold inline">pgn</p>karir</span>

						<form>
							<input type="text" placeholder="Email Address" class="custom-text-input-forgot-pass" >
              <button type="button" class="btn button-custom-send" data-toggle="modal" data-target="#">Send</button>
							</br><input type="checkbox" class="mt10"> <p class="popup-forgot-pass-content">I'm not a robot </p>
						</form>
					</div>

				</div>

			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade fp" id="verification" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content popup-background-blue text-center">

					<div class="modal-body ">
						<button type="button" class="close button-close-cust" data-dismiss="modal">X</button>
						<center>
							<img src= "images/pasted svg 2029694x1599_poster_.png" class="ac-image-popup">
						</center>
						<span class="ac-modal-content">We've sent you a verification code to the email:  lu******@y*****.***. If you dont see the email, check other places it might be, like your junk, spam, social, or other folders.</span>
						<div class="clear-both"></div>

						<button type="button" class="btn button-custom-send" data-toggle="modal" data-target="#">Done</button>
					</div>

				</div>

			</div>
		</div>

		<!-- Modal Reset Password-->
		<div class="modal fade fp" id="reset-pass" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content popup-background-blue text-center">

					<div class="modal-body ">
						<button type="button" class="close button-close-cust" data-dismiss="modal">X</button>
						<p class="title-popup-forgot-pass mb-10">Reset Password</p>
						<span class="popup-forgot-pass-content">Password must contain 8 characters.</span>
						<form class="pt-20 pb-19">
              <div>
                <input type="text" placeholder="New Password" class="custom-input-change-password">
              </div>
							<div class="pt-10">
                <input type="text" placeholder="Confirm Password" class="custom-input-change-password">
              </div>
						</form>
						<button type="button" class="btn button-custom-send chg-pwd" data-toggle="modal" data-target="#">Change Password</button>
						<span class="ac-modal-content display-block">The Password you entered <p class="ac-modal-content-ignore">does not match.</p></span>
					</div>

				</div>

			</div>
		</div>

		<!-- Modal Change Password-->
		<div class="modal fade fp" id="change-pass" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content popup-background-blue text-center">

					<div class="modal-body ">
						<button type="button" class="close button-close-cust" data-dismiss="modal">X</button>
						<p class="title-popup-forgot-pass mb-10">Change Password</p>
						<span class="popup-forgot-pass-content">Password must contain 8 characters.</span>
						<form class="pt-20 pb-19">
              <div><input type="text" placeholder="Old Password" class="custom-input-change-password"></div>
              <div class="pt-10"><input type="text" placeholder="New Password" class="custom-input-change-password"></div>
              <div class="pt-10"><input type="text" placeholder="Confirm Password" class="custom-input-change-password"></div>
						</form>
						<button type="button" class="btn button-custom-send chg-pwd" data-toggle="modal" data-target="#">Change Password</button>
						<a href ="#"><span class="forgot-password-text">Forgot your password?</span></a>
					</div>

				</div>

			</div>
		</div>

		<!-- Modal Success Password-->
		<div class="modal fade fp" id="success" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content popup-background-blue text-center">

					<div class="modal-body ">
						<button type="button" class="close button-close-cust" data-dismiss="modal">X</button>
						<center>
							<img src= "images/pasted svg 2604662x1541_poster_.png" class="ac-image-popup congrats">
						</center>
						<p class="title-congratulation-popup">Congratulation</p>
						<span class="ac-modal-content">You have successfully changed your password.</span>
						</br><button type="button" class="btn button-custom-send" data-toggle="modal" data-target="#">Log in</button>

					</div>

				</div>

			</div>
		</div>

		<!-- Modal Failed Password-->
		<div class="modal fade fp" id="failed" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content popup-background-blue text-center">

					<div class="modal-body ">
						<button type="button" class="close button-close-cust" data-dismiss="modal">X</button>
						<center>
							<img src= "images/pasted svg 2029694x1599_poster_2.png" class="ac-image-popup">
						</center>
						<p class="ac-modal-content">The email you entered <span class="ac-modal-content-ignore">did not match</span> our records. Please double check and try again.</p>
          </br><button type="button" class="btn button-custom-try-again" data-toggle="modal" data-target="#">Try Again</button>

					</div>

				</div>

			</div>
		</div>

    <!-- Modal Failed2 Password-->
		<div class="modal fade fp" id="failed2" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content popup-background-blue text-center">

					<div class="modal-body ">
						<button type="button" class="close button-close-cust" data-dismiss="modal">X</button>
						<center>
							<img src= "images/pasted svg 2029694x1599_poster_2.png" class="ac-image-popup">
						</center>
						<p class="ac-modal-content">The Password you entered <span class="ac-modal-content-ignore">does not match.</span> <br>Please double check and try again.</p>
						</br><button type="button" class="btn button-custom-try-again" data-toggle="modal" data-target="#">Try Again</button>

					</div>

				</div>

			</div>
		</div>

    <!-- Modal Failed3 Password-->
		<div class="modal fade fp" id="failed3" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content popup-background-blue text-center">

					<div class="modal-body ">
						<button type="button" class="close button-close-cust" data-dismiss="modal">X</button>
						<center>
							<img src= "images/pasted svg 2029694x1599_poster_2.png" class="ac-image-popup">
						</center>
						<p class="ac-modal-content">The Old Password you entered <span class="ac-modal-content-ignore">does not match</span> our record. Please double check and try again.</p>
						</br><button type="button" class="btn button-custom-try-again" data-toggle="modal" data-target="#">Try Again</button>

					</div>

				</div>

			</div>
		</div>



	</div>
