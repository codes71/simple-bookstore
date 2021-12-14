<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  session_start();
  include('db_connect.php');
  include('header.php');

  ?>
</head>
<body>
  <header class="top">
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
    <section class="slider-part">
      <div id="Carousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-sm detailBox">
                  <h4>EBookLover Bookstore</h4>
                  <h1>For Everything You wanna Read!!</h1>
                  <p class="my-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Est cumque autem quasi maxime ipsum saepe quam eveniet
                    natus, at nobis.
                  </p>
                  <a href="./book.php">Read More</a>
                </div>
                <div class="col-md">
                  <img src="./images/jaredd-craig-HH4WBGNyltc-unsplash.jpg" width="80%" />
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-sm detailBox">
                  <h4>EBookLover Bookstore</h4>
                  <h1>For Everything You wanna Read!!</h1>
                  <p class="my-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Est cumque autem quasi maxime ipsum saepe quam eveniet
                    natus, at nobis.
                  </p>
                  <a href="./book.php">Read More</a>
                </div>
                <div class="col-md">
                  <img src="./images/keren-fedida-BfGuQJpDolQ-unsplash.jpg" width="100%" />
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-sm detailBox">
                  <h4>EBookLover Bookstore</h4>
                  <h1>For Everything You wanna Read!!</h1>
                  <p class="my-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Est cumque autem quasi maxime ipsum saepe quam eveniet
                    natus, at nobis.
                  </p>
                  <a href="./book.php">Read More</a>
                </div>
                <div class="col-md">
                  <img src="./images/roman-kraft-X1exjxxBho4-unsplash.jpg" width="100%" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#Carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#Carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
  </header>
  <section class="section1">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-6 col-12">
          <img src="images/media.jpg" class="book" />
        </div>
        <div class="col-md-6 col-12">
          <div class="panel">
            <h1>Until we meet again</h1>
            <p class="pt-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Temporibus eum minima error officia ratione architecto adipisci
              rerum dicta veritatis quam qui blanditiis explicabo laudantium
              enim nemo facilis labore in quae quia consequatur
              exercitationem, doloribus dolor accusantium vero? Nemo, numquam
              libero?
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Accusantium quam cupiditate iste facilis et voluptates explicabo
              eligendi sed corporis consequatur, dignissimos laborum illum,
              eius quod obcaecati ab nam hic expedita laboriosam perferendis!
              Consequuntur enim accusamus similique tempora quas earum, nihil
              nemo necessitatibus perspiciatis ratione nulla esse iusto
              exercitationem quibusdam recusandae dicta non iure harum rerum
              ab minus voluptate. Aliquid odio, commodi dignissimos eveniet
              accusamus soluta! Earum, sequi! Impedit, neque sequi.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="topPart container justify-content-center">
    <h1 class="text-center">Top Trending books for you</h1>
    <div class="row trending">
      <div class="bookCard1 col-md">
        <div class="card mb-3" style="width: 18rem">
          <img src="./Images/Book 2.jpg" class="card-img-top" alt="..." />
          <div class="card-body" style="background: transparent">
            <h5 class="card-title">How we keep wach other close</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic,
              ex.
            </p>
            <a href="./book.php" class="btn btn-primary">Explore Now</a>
          </div>
        </div>
      </div>
      <div class="bookCard2 col-md">
        <div class="card mb-3" style="width: 18rem">
          <img src="./Images/Book 1.jpg" class="card-img-top" alt="..." />
          <div class="card-body" style="background: transparent">
            <h5 class="card-title">Adventures of Huckleberry finn</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic,
              ex.
            </p>
            <a href="./book.php" class="btn btn-primary">Explore Now</a>
          </div>
        </div>
      </div>
      <div class="bookCard3 col-md">
        <div class="card mb-3" style="width: 18rem">
          <img src="./Images/Book 3.jpg" class="card-img-top" alt="..." />
          <div class="card-body" style="background: transparent">
            <h5 class="card-title"> Wow, No Thank You</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic,
              ex.
            </p>
            <a href="./book.php" class="btn btn-primary">Explore Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include('footer.php')?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="assets/main.js"></script>
</body>

</html>