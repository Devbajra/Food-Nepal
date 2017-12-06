
	<section class="contact">
 		<div class="container">
 			<div class="row">
 				<div class="col-sm-12">
 					<h2 align="center">We love to hear from you</h2>
 				</div>
 			</div>
 		</div>
 
	<div id="contact">
 	<section class="contact-section">
 		<div class="container">
 			<div class="row">
 				<div class="col-sm-12">
 					<form id="contact" action="#contact" method="post">
					<div class="col-sm-6 form-line">
						<div class="form-group">
			  				<label for="exampleInputUsername">Your name</label>
					    	<input type="text" class="form-control" id="" name="name" placeholder=" Enter Name" value="<?= $name ?>" required />
							<span class="error"><?= $name_error ?></span>
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Email Address</label>
					    	<input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder=" Enter Email id" value="<?=$email?>" required/>
							<span class="error"><?= $email_error ?></span>
					  	</div>	
					  	<div class="form-group">
					    	<label for="telephone">Mobile No.</label>
					    	<input type="tel" class="form-control" id="telephone" name="phone" placeholder=" Enter 10-digit mobile no." value="<?= $phone ?>" />
							<span class="error"><?= $phone_error ?></span>
			  			</div>
					</div>

					<div class="col-md-6">
			  			<div class="form-group">
			  				<label for ="description"> Message</label>
			  			 	<textarea  class="form-control" id="description" name="message" placeholder="Enter Your Message" value="<? $message ?>" required></textarea>
			  			</div>
			  			<div>

			  				<button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Submit</button>
			  			</div>
			  			
					</div>
				</form>
 				</div>
 			</div>
 		</div>
 	</section>
	</div>