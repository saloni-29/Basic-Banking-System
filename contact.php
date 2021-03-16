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
    <link rel="stylesheet" href="css/style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>

    <body>
        
        <!-- Nav bar -->
        <nav class="navbar py-2 navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="#" class="navbar-brand font-weight-bold text-white text-center"><h2>TSF BANK</h2></a>
                <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
                    <span class="navbar-toggler-icon" style="background:white;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item py-3">
                            <a href="index.php" class="nav-link text-white"><strong>About</strong></a></li>
                        <li class="nav-item py-3">
                            <a class="nav-link text-white" href="money.php"style="font-weight: bold;"><strong>Money Transfer</strong></a>
                        </li>
                        <li class="nav-item py-3">
                            <a class="nav-link text-white" href="history.php"style="font-weight: bold;"><strong>Transfer History</strong></a>
                        </li>
                    </ul>
                 </div>
            </div>
        </nav>

          <!--contact starts-->
        <class class="welcome">
            <a href="#" class="navbar-brand text-Black font-weight-bold text-center"><h2><strong>We are here to help you !</strong><img src="images/trust.webp" alt="Bank" width="75" height="75"></h2>
        </class>
            
            <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-10 offset-lg-2 offet-md-2-col col-1">
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
                        <div class="formbutton" style="display: flex;justify-content: center;">
                        <button type="submit" >Submit</button></div>
                      
                    </form>
                </div>
                </div>
            </div>
            

        <!-- footer -->
        <div class="foot">
          <footer class="text-center text-white bg-dark">
                
                <!-- Copyright -->
                <div class="text-center p-3"  style= "background-color: #5E11A3">
                    © 2021 Copyright - Made with 🧡 by Saloni Raorane :
                    <a class="text-dark" href="https://www.thesparksfoundationsingapore.org/" target="_blank"> The Sparks Foundation <img src="images/tsf.png" alt="" width="40" height="35"></a>
                </div>
               <!-- Copyright -->
            </footer>
        </div>
        
        
        
        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
</html>
