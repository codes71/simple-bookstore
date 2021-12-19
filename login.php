<?php
require_once('db_connect.php');
$username = $password = "";
$username_err = $password_err = $login_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  // Check if username is empty
  if(empty(trim($_POST["username"]))){
      $username_err = "Please enter username.";
  } else{
      $username = trim($_POST["username"]);
  }
  
  // Check if password is empty
  if(empty(trim($_POST["password"]))){
      $password_err = "Please enter your password.";
  } else{
      $password = trim($_POST["password"]);
  }
  
  // Validate credentials
  if(empty($username_err) && empty($password_err)){
      // Prepare a select statement
      $sql = "SELECT id, name, password FROM user WHERE name = ?";
      
      if($stmt = mysqli_prepare($conn, $sql)){
          // Bind variables to the prepared statement as parameters
          mysqli_stmt_bind_param($stmt, "s", $param_username);
          
          // Set parameters
          $param_username = $username;
          
          // Attempt to execute the prepared statement
          if(mysqli_stmt_execute($stmt)){
              // Store result
              mysqli_stmt_store_result($stmt);
              
              // Check if username exists, if yes then verify password
              if(mysqli_stmt_num_rows($stmt) == 1){                    
                  // Bind result variables
                  mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                  if(mysqli_stmt_fetch($stmt)){
                      if(password_verify($password, $hashed_password)){
                          // Password is correct, so start a new session
                          session_start();
                          // Store data in session variables
                          $_SESSION["loggedin"] = true;
                          $_SESSION["id"] = $id;
                          $_SESSION["username"] = $username;                            
                          
                          // Redirect user to welcome page
                          header("location: index.php");
                      } else{
                          // Password is not valid, display a generic error message
                          $login_err = "Invalid username or password.";
                      }
                  }
              } else{
                  // Username doesn't exist, display a generic error message
                  $login_err = "Invalid username or password.";
              }
          } else{
              echo "Oops! Something went wrong. Please try again later.";
          }

          // Close statement
          mysqli_stmt_close($stmt);
      }
  }
  
  // Close connection
  mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('header.php');?>
</head>
<body>
    <div class="limiter">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.php">
              <span> EBookLover </span>
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link pl-lg-0" href="index.php"
                    >Home <span class="sr-only">(current)</span></a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="book.php"> Go to Library</a>
                </li>
                <li class="nav-item dropdown">
                  <div class="dropdown">
                    <a href="#" class="nav-link">Category</a>
                    <div class="dropdown-content">
                      <a href="#">Fiction</a>
                      <a href="#">Suspense</a>
                      <a href="#">Based on true stories</a>
                      <a href="./book.php">...</a>
                    </div>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <!-- <li class="nav-item">
                  <i class="bi bi-person-circle"></i>
                  <a class="nav-link" href="contact.php" style="display: inline-block;">Sign In</a>
                </li> -->
              </ul>
              <from class="search_form">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search here..."
                />
                <button class="" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </from>
              <li class="nav-item navAccount">
                  <i class="bi bi-person-circle ps-2" style="margin-right: -10px;"></i>
                  <a class="nav-link" href="signup.php" style="display: inline-block;">Sign Up</a>
              </li>
            </div>
          </nav>
		<div class="container-login" style="background-image: url('./images/accountbackground.jpg');">
			<div class="wrap-login">
				<form class="loginform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
					<div class="wrap-input" data-validate = "Enter username">
						<input class="input" type="text" name="username" placeholder="Username"> 
            <span class="text-danger ps-4"></span>
					</div>
          <div class="text-danger"><?= $username_err ?> </div>
					<div class="wrap-input validate-input" data-validate="Enter password">
						<input class="input" type="password" name="password" placeholder="Password">
            <span class="text-danger ps-4"></span>
					</div>
          <div class="text-danger"><?= $password_err ?> </div>
					<div class="rememberCheckbox">
						<input class="form-check-input" id="ckb1" type="checkbox" name="remember-me">
						<label class="form-check-label" for="ckb1">
							Remember me
						</label>
					</div>
          <div class="text-danger"><?= $login_err ?> </div>

					<div class="container-login-form-btn pt-3">
						<button class="login-form-btn">
							Login
						</button>
					</div>
						<a class="txt " href="#">
							Forgot Password?
						</a>
            <p class="text-center pt-3">
              Don't Have a account? Why not <a href="./signup.php" class="txtSignup"> Sign up</a>
            </p>
             
				</form>
			</div>
		</div>
	</div>



      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <script src="assets/main.js"></script>
</body>
</html>