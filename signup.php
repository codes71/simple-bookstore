<?php
include('db_connect.php');
$username = $password = $confirm_password = $email= "";
$username_err = $password_err = $confirm_password_err = $email_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Validate username
  if (empty(trim($_POST["username"]))) {
    $username_err = "Please enter a username.";
  } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
    $username_err = "Username can only contain letters, numbers, and underscores.";
  } else {
    // Prepare a select statement
    $sql = "SELECT id FROM user WHERE name = ?";

    if ($stmt = mysqli_prepare($conn, $sql)) {
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "s", $param_username);

      // Set parameters
      $param_username = trim($_POST["username"]);

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        /* store result */
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
          $username_err = "This username is already taken.";
        } else {
          $username = trim($_POST["username"]);
        }
      } else {
        echo "Oops! Something went wrong. Please try again later.";
      }

      // Close statement
      mysqli_stmt_close($stmt);
    }
  }

  // Validate password
  if (empty(trim($_POST["password"]))) {
    $password_err = "Please enter a password.";
  } elseif (strlen(trim($_POST["password"])) < 6) {
    $password_err = "Password must have atleast 6 characters.";
  } else {
    $password = trim($_POST["password"]);
  }

  // Validate confirm password
  if (empty(trim($_POST["confirm_password"]))) {
    $confirm_password_err = "Please confirm password.";
  } else {
    $confirm_password = trim($_POST["confirm_password"]);
    if (empty($password_err) && ($password != $confirm_password)) {
      $confirm_password_err = "Password did not match.";
    }
  }

  //Validate E-mail
  if (empty(trim($_POST["email"]))) {
    $email_err = "Email is required";
  } else {
    $email = trim($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "Invalid email format";
    }
  }
  // Check input errors before inserting in database
  if (empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err)) {
    $hashed_password = password_hash($password,PASSWORD_DEFAULT);
    $sql = "INSERT INTO user (name,password,email)
    VALUES ('$username','$hashed_password','$email')";

    if (mysqli_query($conn, $sql)) {
      header("location : /login.php");
    } else {
       echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
    }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('header.php'); ?>
  <link href="./assets/styles.css" rel="stylesheet">
</head>

<body>
  <div class="limiter">
    <nav class="navbar navbar-expand-lg custom_nav-container">
      <a class="navbar-brand" href="index.php">
        <span> EBookLover </span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link pl-lg-0" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php"> Go to Library</a>
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
          <input type="text" class="form-control" placeholder="Search here..." />
          <button class="" type="submit">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </from>
        <li class="nav-item navAccount">
          <i class="bi bi-person-circle ps-2" style="margin-right: -10px;"></i>
          <a class="nav-link" href="login.php" style="display: inline-block;">Sign In</a>
        </li>
      </div>
    </nav>
    <div class="container-login" style="background-image: url('./images/accountbackground.jpg');">
      <div class="wrap-login">
        <form class="loginform row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="wrap-input col" data-validate="Enter First Name">
            <input class="input" type="text" name="username" placeholder="Username" value="admin2">
          </div>
          <div class="text-danger"><?= $username_err ?> </div>
          <div class="wrap-input-ps col-6 data-validate="Password">
            <input class="input" type="password" name="password" placeholder="Enter password" value="admin2123">
          </div>
          <div class="text-danger"><?= $password_err ?> </div>
          <div class="wrap-input-cps col-6" data-validate="Password">
            <input class="input" type="password" name="confirm_password" placeholder="Confirm password" value="admin2123">
          </div>
          <div class="text-danger"><?= $confirm_password_err ?> </div>
          <div class="wrap-input col-12" data-validate="Enter Email">
            <input class="input" type="email" name="email" placeholder="Enter E-Mail" value="admin@gmail.com">
          </div>
          <div class="text-danger"><?= $email_err ?> </div>
          <div class="wrap-input col" data-validate="Phone Number">
            <input class="input" type="number" name="phonenumber" placeholder="Phone Number" value="0995263214">
          </div>

          <div class="container-login-form-btn">
            <button class="login-form-btn">
              Sign Up
            </button>
          </div>
          <p class="text-center">
            Already have an account?
            <a class="txt " href="./login.php">
              Log In here
            </a>
          </p>
        </form>
      </div>
    </div>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="assets/main.js"></script>
</body>

</html>