<?php
    include 'connect.php';
    require_once 'helper.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/logIn/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">ADMIN | Login</div>
    <div class="content">
      <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="user-details">
          <!--<div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="fullName" id="fullName" required>
          </div>-->
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="username" id="username" required>
          </div>
          <!--<div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" id="email" required>
          </div>-->
          <!--<div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" placeholder="Enter your number" name="phoneNum" id="phoneNum" required>
          </div>-->
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="password" id="Password" required>
          </div>
          <!--<div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name="confirmPassword" id="confirmPassword" required>
          </div>-->
        </div>
        <div class="button">
          <input type="submit" name="login" value="Log In">
		  <?php
			if (isset($_REQUEST['msg'])) { echo $_REQUEST['msg']; }  
		  ?>
        </div>
      </form>
      <!--Form End-->
      <?php
        if(isset($_POST['login'])){
			$username =$_POST['username'];
			$password =$_POST['password'];

			$sql = "SELECT * FROM `user` WHERE `username` = '{$username}'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {

					if ( ($row['username'] == $username) && ($row['password']==md5($password)) ) {
						session_start();
						
						$_SESSION["user_logged_in"] = 1; 

						header("Location: list.php");
					} else {
						$m = 'Username and Password are not matched.';
						header("Location: logIn.php?msg={$m}");
					}
				}
			} else {
				echo '<div class="alert alert-danger">Username and Password are not matched.</div>';
			}
		}
      ?>
      </div>
  </div>

</body>
</html>