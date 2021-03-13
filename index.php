<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>TSF BANK</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Nav bar -->
    <nav class="navbar py-2 navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a href="#" class="navbar-brand font-weight-bold text-white text-center"><h2>TSF BANK</h2></a>
        <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
            <span class="navbar-toggler-icon" style="background:blue;"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="collapsenavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white "><span style="margin-right:90px;">ABOUT</span></a></li>
                    <li class="nav-item dropdown py-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" span style="margin-right:90px:">Actions</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-3" href="money.php">Money Transfer</a></li>
                            <li><a class="dropdown-item py-3" href="history.php">Transaction History</a></li>
                            <li><a class="dropdown-item py-3" href="viewcustomers.php">View Customers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item py-3">
                        <a class="nav-link" href="contact.php"><span style="margin-right:90px;">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <class class="welcome text-center">
      <h2>
          <img src="images/logo1.webp" alt="Bank" width="75" height="75" style="font-weight: bold;"> <strong>Welcome To TSF Bank !</strong> <img src="images/trust.webp" alt="Bank" width="75" height="75">
      </h2>
    </class>

     <!-- Carousel -->
     <div id="carouselSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel" data-interval=1000>
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="images/bg1.jpg" width="100" height="550" class="d-block w-100" alt="...">

          </div>
          <div class="carousel-item">
              <img src="images/bg2.jfif" width="100" height="550" class="d-block w-100" alt="...">

          </div>
          <div class="carousel-item">
              <img src="images/bg3.jfif" width="100" height="550" class="d-block w-100" alt="...">

          </div>
          <div class="carousel-item">
            <img src="images/bg3.jpg" width="100" height="550" class="d-block w-100" alt="...">

          </div>
        </div>
        </div>

    <!-- footer -->

    <div class="foot">
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2021 Copyright - Made with 🧡 by Saloni Raorane :
                <a class="text-dark" href="https://www.thesparksfoundationsingapore.org/" target="_blank"> The Sparks
                    Foundation <img src="images/tsf.png" alt="" width="40" height="35"></a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>




    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>
