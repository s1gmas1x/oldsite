<?php
require_once 'header.php';
?> 
<script> document.title = "ckohl.com | Register User";</script>
<main id="content">
<div class="container">
      <div class="row">
        <form class="registrationForm dropFont" method="POST" action="includes/signup.inc.php">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="emailReg" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="user">Username:</label>
            <input type="text" class="form-control" id="userReg" name="user" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="passReg" name="pass" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" class="form-control" id="passRegConfirm" name="passConf" placeholder="Confirm Password">
          </div>
          <div class="btnBox">
			  <?php
		  if (isset($_GET["error"])) {
			  if ($_GET["error"] == "emptyinput") {
				  echo '<p class="warnTxt">Fill in all fields!</p>';
			  }
			  else if ($_GET["error"] == "invalidemail") {
				  echo '<p class="warnTxt">Check the email address you input!</p>';
			  }
			   else if ($_GET["error"] == "uiderror") {
				  echo "<p class='warnTxt'>Username must contain letters and numbers only!</p>";
			  }
			   else if ($_GET["error"] == "pwdmatcherror") {
				  echo "<p class='warnTxt'>Password mismatch!</p>";
			  }
			   else if ($_GET["error"] == "stmtfailed") {
				  echo "<p class='warnTxt'>Something went wrong, try again later!</p>";
			  }
				 else if ($_GET["error"] == "emailoruserexsists") {
				  echo "<p class='warnTxt'>Email or username already used!</p>";
			  }
			   else if ($_GET["error"] == "none") {
				  echo "<p class='passTxt'>You have been signed up!</p>";
			  }  
		  }
		  
		  ?>
            <button type="submit" name="submit" class="btn submitButton">Submit</button>
          </div>
			
        </form>
      
        <!-- TODO:  --> 
        
      </div>
    </div>
</main>
<?php
require_once 'footer.php';
?>