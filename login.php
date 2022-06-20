<?php
    session_start();
    $connection=mysqli_connect("localhost","root","","Marian");

    $email= $_POST['amil'];
    $pword = $_POST['pword'];

    $sql = "SELECT * FROM alumni WHERE imail='$email' AND paword='$pword'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        // $_SESSION['amil'] = $row['imail'];
        header('Location: Afterlogin.php');
   }
    } else {
    echo"Data not found";
    }