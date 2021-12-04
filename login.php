<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in/Sign Up</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/styles.css" />
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
                  <i class="bi bi-person-cirzcle ps-2" style="margin-right: -10px;"></i>
                  <a class="nav-link" href="login.php" style="display: inline-block;">Sign In</a>
              </li>
            </div>
          </nav>
		<div class="container-login" style="background-image: url('./images/accountbackground.jpg');">
			<div class="wrap-login">
				<form class="loginform">
					

					<div class="wrap-input" data-validate = "Enter username">
						<input class="input" type="text" name="username" placeholder="Username">
						
					</div>

					<div class="wrap-input validate-input" data-validate="Enter password">
						<input class="input" type="password" name="pass" placeholder="Password">
	
					</div>

					<div class="rememberCheckbox">
						<input class="form-check-input" id="ckb1" type="checkbox" name="remember-me">
						<label class="form-check-label" for="ckb1">
							Remember me
						</label>
					</div>

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