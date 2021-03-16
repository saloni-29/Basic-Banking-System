<?php
// Connecting to the Database
$servername = "localhost";
$username = "cuatomerdetails";
$password = "";
$dbname = "bankuser";

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


if($conn)
//echo "Connection successful";
{
    <script>
        alert('Connection Successful');
    </script>
    <?php
}
else
{
    echo "No connection";
    die("no connection".mysqli_connect_error());//exit
}

?>
