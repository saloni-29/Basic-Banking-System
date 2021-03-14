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
                    <ul class="navbar-nav me-auto mb-8 mb-lg-0">
                        <li class="nav-item py-3">
                            <a href="index.php" class="nav-link text-white"><strong>About</strong></a></li>
                        <li class="nav-item dropdown py-3">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-weight: bold;"><strong>Actions</strong></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item py-3" href="money.php">Money Transfer</a></li>
                                <li><a class="dropdown-item py-3" href="history.php">Transaction History</a></li>
                                </li></ul>
                        <li class="nav-item py-3">
                            <a class="nav-link text-white" href="contact.php"style="font-weight: bold;"><strong>Contact Us</strong></a>
                        </li>
                    </ul>
                 </div>
            </div>
        </nav>
        
        <!-- options -->

        <div class="d-grip gap-2 col-6 mx-auto text-center p-3 mb-2">
            <!-- <div class="mod"><button type="button" class="btn btn-primary btn-lg mb-3" data-bs-toggle="modal" data-bs-target="#mod">Send Money</button> -->
            <a href="history.php"><button type="button" class="btn btn-dark btn-lg mb-3">Transaction History</button></a>
        </div>
        
        <div class="display_table">
            <h1>Customer Details</h1>
            <div class="center_div">
                <div class="table-responsive">
                    <table>
                        <thead>
                             <tr>
                                 <th>ID</th>
                                 <th>Name</th>
                                 <th>Email</th>
                                  <th>Amount</th>
                                  <th colspan="2">operation</th>
                             </tr>
                        </thead>
                    </table>
                </div>
                
                <?php
                include 'connect.php';
                $selectquery = " select * from users";
                $query = mysqli_query($con,$selectquery);
                $numofrows = mysqli_num_rows($query);
                while($res = mysqli_fetch_array($query))
                
                {
                    ?>
                    <tr>
                        <td><?php  echo $res['ID']; ?></td>
                        <td><?php echo $res['Name']; ?></td>
                        <td><?php echo $res['Email']; ?></td>
                        <td><?php echo $res['Amount']; ?></td>
                        <td><a href="transfermoney.php?idtransfer=<?php  echo $res['ID']; ?>" ><i class=" fa fa-user-circle large" aria-hidden="true" style="color:#04FB73;"></i></a></td>
               </tr>
             <?php
          }
           ?>


</tbody>
</table>
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


    



















