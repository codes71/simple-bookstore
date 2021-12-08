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
        <form class="loginform row g-3">
          <div class="wrap-input-fn col" data-validate="Enter First Name">
            <input class="input" type="text" name="firstname" placeholder="First Name">
          </div>
          <div class="wrap-input-sn col" data-validate="Enter Last Name">
            <input class="input" type="text" name="secondname" placeholder="Second Name">
          </div>
          <div class="wrap-input-sn col-12" data-validate="Password">
            <input class="input" type="password" name="password" placeholder="Enter a strong password">
          </div>
          <div class="wrap-input col-12" data-validate="Enter Email">
            <input class="input" type="text" name="email" placeholder="Enter E-Mail">
          </div>
          <div class="wrap-input col" data-validate="Phone Number">
            <input class="input" type="number" name="phonenumber" placeholder="Phone Number">
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