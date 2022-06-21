<?php
session_start();

if(isset($_SESSION['amil'])){
    unset($_SESSION['amil']);
}
header("Location: index.html");
die;