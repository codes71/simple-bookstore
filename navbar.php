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
                <a class="nav-link" href="book.php"> Go to Library </a>
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
        <?php if (isset($_SESSION['loggedin'])) : ?>
            <li class="nav-item navAccount dropdown">
                <i class="bi bi-person-circle ps-2" style="margin-right: -10px;"></i>
                <span class="nav-link username" href="" style="display: inline-block;  cursor: pointer;"> <?php echo $_SESSION['username']; ?> </span>
                <div class="dropdown-content">
                    <a href="#">Manage Account</a>
                    <a href="logout.php">Log-Out</a>
                </div>
            </li>
        <?php else : ?>
            <li class="nav-item navAccount">
                <i class="bi bi-person-circle ps-2" style="margin-right: -10px;"></i>
                <?php if ($_SESSION['currentpage'] == "login") : ?>
                    <a class="nav-link" href="signup.php" style="display: inline-block;">Sign Up</a>
                <?php else : ?>
                    <a class="nav-link" href="login.php" style="display: inline-block;">Sign In</a>
                <?php endif; ?>
            </li>
        <?php endif; ?>
    </div>
</nav>