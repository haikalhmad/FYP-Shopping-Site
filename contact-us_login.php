<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="style.css" rel="stylesheet">
    <title>Contact Us</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['customer'])) {
            header("Location:index.php");
        }
    ?>

    <!--Navigation Bar-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="index_login.php">
                <img src="img/kerepek-r-us-logo.png" alt="Kerepek R Us Logo" width="80" height="80">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="index_login.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about-us_login.php">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="product_login.php">Our Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="contact-us_login.php">Contact Us</a>
                  </li>
                </ul>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary me-md-2" href="register.php" role="button">Register</a>
                    <a class="btn btn-secondary" href="login.php" role="button">Login</a>
                </div>
              </div>
            </div>
          </nav>
      </div>

      <!--Content-->
      <div class="container pt-5" style="color: white;">
        <div class="container contact" style="background-color: #2e2e2e;">
            <div class="row">
                <div class="col-md-3" style="background-color: #2e2e2e;">
                    <div class="contact-info">
                        <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="Mail Image"/>
                        <h2>Contact Us</h2>
                        <h4>We would love to hear from you!</h4>
                    </div>
                </div>
                <div class="col-md-9">
                    <form action="contact-success.php" method="post">
                      <div class="contact-form">
                        <div class="form-group">
                          <div class="col-sm-10 pt-2">          
                            <input type="text" class="form-control customInput" id="fname" placeholder="Enter First Name" name="fname" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-10 pt-2">          
                            <input type="text" class="form-control customInput" id="lname" placeholder="Enter Last Name" name="lname" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-10 pt-2">
                            <input type="email" class="form-control customInput" id="email" placeholder="Enter email" name="email" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2 pt-2" for="comment">Comment:</label>
                          <div class="col-sm-10">
                            <textarea class="form-control customInput" rows="5" id="comment" name="comment" required></textarea>
                          </div>
                        </div>
                        <div class="form-group">        
                          <div class="col-sm-offset-2 col-sm-10 pt-4 pb-2">
                            <button class="btn btn-info" type="submit">Submit</button>
                          </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
      </div>

      <!--Footer-->
      <div class="container">
        <footer class="bg-dark text-white text-center mt-5">
          <div class="container p-4 pb-0">
            <section class="mb-4">
              <a class="btn btn-primary m-1" href="https://www.facebook.com/kerepekRandUs/" target="_blank" role="button" style="background-color: #3b5998;">
                <i class="bi bi-facebook"></i>
              </a>
              <a class="btn btn-primary m-1" href="https://www.instagram.com/r_n_us/?hl=en" target="_blank" role="button" style="background-color: #ac2bac;">
                <i class="bi bi-instagram"></i>
              </a>
            </section>
          </div>
            <div class="p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                <p class="lead mt-3">Copyright &copy; 2021 Kerepek R Us</p>
            </div>
        </footer>
      </div>

    <!--JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>