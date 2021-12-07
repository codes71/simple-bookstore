<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  session_start();
  include('db_connect.php');
  include('header.php');
  if (isset($_GET['category'])) {
    $category = $_GET['category'];
    $sql = "SELECT * from books where category like '$category' order by title";
  } else {
    $sql = "SELECT * from books order by title";
  }
  ?>
</head>

<body>
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
          <a class="nav-link pl-lg-0" href="index.php"> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php"> Go to Library</a>
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
        <i class="bi bi-person-circle ps-2" style="margin-right: -10px"></i>
        <a class="nav-link" href="login.php" style="display: inline-block">Sign In</a>
      </li>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-4 col-md-5 col-sm-7">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px">
          <a href="/" class="
                d-flex
                align-items-center
                mb-3 mb-md-0
                me-md-auto
                link-dark
                text-decoration-none
              ">
            <span class="fs-4">Categories</span>
          </a>
          <hr />
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="./book.php" class="nav-link link-dark <?= $category == '' ? "active" : "" ?>" aria-current="page">
                ALL
              </a>
            </li>
            <li>
              <a href="?category=education" class="nav-link link-dark <?= $category == 'education' ? "active" : "" ?>" id="electric">
                Education
              </a>
            </li>
            <li>
              <a href="?category=kitchen" class="nav-link link-dark <?= $category == 'kitchen' ? "active" : "" ?>">
                Kitchen
              </a>
            </li>
            <li>
              <a href="?category=music" class="nav-link link-dark <?= $category == 'music' ? "active" : "" ?>">
                Music
              </a>
            </li>
            <li>
              <a href="?category=programming" class="nav-link link-dark <?= $category == 'programming' ? "active" : "" ?>">
                Programming
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xl-9 col-lg-8 col-md-7 col-sm-5">
        <div class="row row-col-4" id="items">
          <?php
          $result = $conn->query($sql);
          while ($row = $result->fetch_assoc()) :
          ?>
            <div class="card mb-3 py-3 px-3" style="width: 13rem;">
              <img src="./images/Book 1.jpg?= $row['image_path']; ?>" class="card-img-top" alt="...">
              <div class="card-body" style="background: transparent;">
                <h5 class="card-title bookName"><?= $row['title']; ?></h5>
                <p class="card-text"><?= $row['description']; ?></p>
                <a href="#" class="btn btn-primary">Buy</a>
                <span class="pricetag"><?= $row['price']; ?></span>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>

  <footer class="footerSection">
    <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-sm-5">
          <h4 class="text-light">About us</h4>
          <p class="text-muted">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum
            maxime ea similique illum corrupti
          </p>
          <p class="pt-4 text-muted">
            Copyright ©2021 All rights reserved | This template is made by
            <span> Hardik</span>
          </p>
        </div>
        <div class="col-md-5 col-sm-12">
          <h4 class="text-light">Newsletter</h4>
          <p class="text-muted">Stay Updated</p>
          <form class="form-inline">
            <div class="col pl-0">
              <div class="input-group pr-5">
                <input type="text" class="form-control bg-dark text-white" id="inlineFormInputGroupUsername2" placeholder="Email" />
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-2 col-sm-12">
          <h4 class="text-light">Follow Us</h4>
          <p class="text-muted">Let us be social</p>
          <div class="column text-light">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    var ele = document.getElementById('electric');
    ele.onclick = function(e) {
      console.log("GG");
      var content = `<?php
                      echo "<br>";
                      $result = $conn->query("SELECT * from books where cathegory= 'edication' order by title");
                      while ($row = $result->fetch_assoc()) :
                      ?>
            <div class="card mb-3 py-3 px-3" style="width: 13rem;">
                <img src="./Images/<?= $row['Image Path']; ?>"class="card-img-top" alt="...">
                <div class="card-body" style="background: transparent;">
                    <h5 class="card-title bookName"><?= $row['title']; ?></h5>
                    <p class="card-text"><?= $row['description']; ?></p>
                    <a href="#" class="btn btn-primary">Buy</a>
                    <span class="pricetag"><?= $row['Price']; ?></span>
                </div>
            </div>
            <?php endwhile; ?>`;

      document.getElementById("items").innerHTML = `Hello`;

    }
  </script>
</body>

</html>