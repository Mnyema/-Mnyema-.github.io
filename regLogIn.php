<?php
    session_start();
    $connection=mysqli_connect("localhost","root","","Marian");

    $amil= $_POST['amil'];
    $pword = $_POST['pword'];

    $sql = "SELECT * FROM register WHERE mail='$amil' AND pasword='$pword'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $_SESSION['amil'] = $row['mail'];
        header('Location: Alumni.html');
   }
    } else {
    echo"Data not found";
    }