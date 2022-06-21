<?php
//establish connection
$connection=mysqli_connect("localhost","root","","Marian");
//check connection
if($connection==false){
    die("Error. We couldnot connect to the server".mysqli_connect_error());
}
//attempt to insert data into dbase
$Aname=$_POST['name'];
$yoe=$_POST['yoe'];
$yog=$_POST['yog'];
$hae=$_POST['hae'];
$hag=$_POST['hag'];
$tag=$_POST['tag'];
$res=$_POST['res'];
$occupation=$_POST['occupation'];
$ddress=$_POST['address'];
$imail=$_POST['imail'];
$mno=$_POST['mno'];
$paword=$_POST['paword'];

//querying the db to accept data
$sql=" INSERT INTO alumni(Aname,yoe,yog,hae,hag,tag,res,occupation,ddress,imail,
mno,paword) VALUES ('$Aname','$yoe','$yog','$hae','$hag','$tag','$res','$occupation','$ddress',
'$imail','$mno','$paword')";
if(mysqli_query($connection,$sql)){
    echo "records added";
}else{
    echo "error".$sql.mysql_error($connection);
}
?>
<div><button><a href="alumniLogIn.html">Log In to view</a></button></div>
