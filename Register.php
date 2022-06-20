<?php
//establish connection
$connection=mysqli_connect("localhost","root","","Marian");
//check connection
if($connection==false){
    die("Error. We couldnot connect to the server".mysqli_connect_error());
}
//attempt to insert data into dbase
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$surname=$_POST['surname'];
$username=$_POST['username'];
$dob=$_POST['dob'];
$pasword=$_POST['password'];
$CV=$_POST['CV'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
$fb=$_POST['fb'];
$ig=$_POST['ig'];

//querying the db to accept data
$sql=" INSERT INTO register(fname,mname,surname,username,dob,pasword,CV,mail,phone,fb,
ig) VALUES ('$fname','$mname','$surname','$username','$dob','$pasword','$CV','$mail','$phone',
'$fb','$ig')";
if(mysqli_query($connection,$sql)){
    echo "Thanks, records added";
}else{
    echo "error".$sql.mysql_error($connection);
}
?>
