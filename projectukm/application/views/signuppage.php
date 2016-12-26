<div class="container margint30">
	<h1>Signup</h1>
	<hr>
	<div class="row">
        <div class="col-md-6 col-md-push-3">
            <form action="" method="post" id="fileForm" role="form">
            <fieldset>
							<!--<legend class="text-center">Valid information is required to register. <span class="req"><small> required *</small></span></legend> -->


            <div class="form-group">
            <label for="phonenumber"><span class="req">* </span> Phone Number: </label>
                    <input required type="text" name="phonenumber" id="phone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder=""/>
            </div>

            <div class="form-group">
                <label for="firstname"><span class="req">* </span> First name: </label>
                    <input class="form-control" type="text" name="firstname" id = "txt" onkeyup = "Validate(this)" required />
                        <div id="errFirst"></div>
            </div>

            <div class="form-group">
                <label for="lastname"><span class="req">* </span> Last name: </label>
                    <input class="form-control" type="text" name="lastname" id = "txt" onkeyup = "Validate(this)" placeholder="" required />
                        <div id="errLast"></div>
            </div>

						<div class="form-group">
							<label for="select"><span class="req">* </span> Jenis Kelamin: </label>
							<select class="form-control" required type="text" name="jurusan" id = "jurusan"/>
								<option>Perempuan</option>
								<option>Laki-Laki</option>
							</select>
						</div>

            <div class="form-group">
                <label for="email"><span class="req">* </span> Email Address: </label>
                        <div class="status" id="status"></div>
												<input class="form-control" required type="text" name="email" id = "email"  onchange="email_validate(this.value);" />
            </div>

						<div class="form-group">
			      	<label for="select"><span class="req">* </span> Jurusan: </label>
							<select class="form-control" required type="text" name="jurusan" id = "jurusan"  onchange="email_validate(this.value);" />
			        	<option>Sistem Informasi</option>
			        	<option>Teknik Informatika</option>
			        	<option>Manajemen Informatika</option>
			        	<option>Teknik Komputer</option>
			        </select>
			      </div>

            <div class="form-group">
                <label for="username"><span class="req">* </span> User name:  <small>This will be your login user name</small> </label>
                    <input class="form-control" type="text" name="username" id = "txt" onkeyup = "Validate(this)" placeholder="minimum 6 letters" required />
                        <div id="errLast"></div>
            </div>

            <div class="form-group">
                <label for="password"><span class="req">* </span> Password: </label>
                    <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16"  id="pass1" /> </p>

                <label for="password"><span class="req">* </span> Password Confirm: </label>
                    <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16" placeholder="Enter password again"  id="pass2" onkeyup="checkPass(); return false;" />
                        <span id="confirmMessage" class="confirmMessage"></span>
            </div>

            <div class="form-group">

                <?php //$date_entered = date('m/d/Y H:i:s'); ?>
                <input type="hidden" value="<?php //echo $date_entered; ?>" name="dateregistered">
                <input type="hidden" value="0" name="activate" />
								<input type="hidden" value="0" name="role" />
                <hr>

                <input type="checkbox" required name="terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" id="field_terms">   <label for="terms">I agree with the <a href="terms.php" title="You may read our terms and conditions by clicking on this link">terms and conditions</a> for Registration.</label><span class="req">* </span>
            </div>

            <div class="form-group">
                <input class="btn btn-success" type="submit" name="submit_reg" value="Register">
            </div>
                <!--  <h5>You will receive an email to complete the registration and validation process. </h5>
                      <h5>Be sure to check your spam folders. </h5>-->
											<h5>*Harus diisi</h5>

            </fieldset>
            </form><!-- ends register form -->
<script type="text/javascript">
  document.getElementById("field_terms").setCustomValidity("Please indicate that you accept the Terms and Conditions");
</script>
        </div><!-- ends col-6 -->


	</div>
</div>
