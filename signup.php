<?php
include('db_connect.php');
<<<<<<< HEAD
$username = $password = $confirm_password = $email = $phno= "";
$username_err = $password_err = $confirm_password_err = $email_err = $phno_err="";
=======
session_start();
$username = $password = $confirm_password = $email = "";
$username_err = $password_err = $confirm_password_err = $email_err = "";
>>>>>>> 9ad7143f8c55d482ffd9db53fda3d264c5ae1725

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
  //validate Phone Number
  if (empty(trim($_POST["phno"]))) {
    $phno_err = "Please enter a Phone number.";
  } elseif (strlen(trim($_POST["phno"])) < 9 ) {
    $phno_err = "Password must have atleast 6 characters.";
  } else {
    $phno = trim($_POST["phno"]);
  }

  // Check input errors before inserting in database
  if (empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err)) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO user (name,password,email)
    VALUES ('$username','$hashed_password','$email')";

    if (mysqli_query($conn, $sql)) {
      header("location: login.php");
    } else {
      echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
  }
}
$file = './signup.php';
$_SESSION['currentpage'] = basename($file, '.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('header.php'); ?>
  <link href="./assets/styles.css" rel="stylesheet">
</head>

<body>
  <div class="limiter">
    <?php include("navbar.php") ?>
    <div class="container-login" style="background-image: url('./images/accountbackground.jpg');">
      <div class="wrap-login">
        <form class="loginform row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="wrap-input col" data-validate="Enter First Name">
            <input class="input" type="text" name="username" placeholder="Username" value="<?= isset($_POST["username"]) ? $_POST["username"]: ""; ?>">
          </div>
          <div class="text-danger"><?= $username_err ?> </div>
          <div class="wrap-input-ps col-6" data-validate="Password">
            <input class="input" type="password" name="password" placeholder="Enter password" value="<?= isset($_POST["password"]) ? $_POST["password"] : ""; ?>">
          </div>
          <div class="text-danger"><?= $password_err ?> </div>
          <div class="wrap-input-cps col-6" data-validate="Password">
            <input class="input" type="password" name="confirm_password" placeholder="Confirm password" value="">
          </div>
          <div class="text-danger"><?= $confirm_password_err ?> </div>
          <div class="wrap-input col-12" data-validate="Enter Email">
            <input class="input" type="email" name="email" placeholder="Enter E-Mail" value="<?= isset($_POST["email"]) ? $_POST["email"] : "";?>">
          </div>
          <div class="text-danger"><?= $email_err ?> </div>
          <div class="wrap-input col" data-validate="Phone Number">
            <input class="input" type="number" name="phno" placeholder="Phone Number" value="<?= isset($_POST["phno"]) ? $_POST["phno"] : "" ;?>">
          </div>
          <div class="text-danger"><?= $phno_err ?> </div> <br>
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