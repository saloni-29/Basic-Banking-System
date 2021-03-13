<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>TSF BANK</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

<body>

    <!-- Nav bar -->
    <nav class="navbar py-2 navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a href="#" class="navbar-brand font-weight-bold text-white text-center"><h2>TSF BANK</h2></a>
        <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
            <span class="navbar-toggler-icon" style="background:white;"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="collapsenavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white "><span style="margin-left:90px;">ABOUT</span></a></li>
                    <li class="nav-item dropdown py-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Actions</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-3" href="money.php">Money Transfer</a></li>
                            <li><a class="dropdown-item py-3" href="history.php">Transaction History</a></li>
                            <li><a class="dropdown-item py-3" href="viewcustomers.php">View Customers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item py-3">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <class class="welcome">
        <h2>
            <img src="logos/friend.webp" alt="Bank" width="75" height="75" style="font-weight: bold;"> <strong>We are here to help you !</strong> <img
                src="logos/trust.webp" alt="Bank" width="75" height="75">
        </h2>
    </class>
 
    <!-- Form -->
    <div class="container my-1">
        <h3>Contact Us</h3>
        <p>We're Here To Help And Answer Any Questions You Might Have.We Look Forward To Hearing From You</p>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter name" id="username" required autocomplete="off">
            </div>
            <div class="form">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="4" id="comment" placeholder="Your Comments"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

    <!-- footer -->

    <div class="foot">
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2021 Copyright - Made with 🧡 by Saloni Raorane :
                <a class="text-dark" href="https://www.thesparksfoundationsingapore.org/" target="_blank"> The Sparks
                    Foundation <img src="logos/tsf.png" alt="" width="40" height="35"></a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

   
</body>

</html>