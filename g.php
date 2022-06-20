<?php
//establish connection
$connection=mysqli_connect("localhost","root","","marian register");
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
//querying the db to accept data
$sql=" INSERT INTO `alumni register`(`Aname`,`yoe`,`yog`,`hae`,`hag`,`tag`,`res`,`occupation`,`ddress`,`imail`,
`mno`) VALUES ('$Aname','$yoe','$yog','$hae','$hag','$tag','$res','$occupation','$ddress',
'$imail','$mno')";
$res = mysqli_query($connection,$sql);


<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>S.N</th>
        <th>Aname</th>
        <th>Yoe</th>
        <th>Yog</th>
        <th>Hae</th>
        <th>Hag</th>
        <th>Tag</th>
        <th>Res</th>
        <th>Occupation</th>
        <th>Address</th>
        <th>Imail</th>
        <th>Mno</th>
</tr>

<?php
$mysquery="SELECT * FROM alumni register";
$result=$connection ->query(mysquery);

if(mysqli_num_rows($result)>0){
    $sn=1;
    while($data = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $sn;?></td>
            <td><?php echo $data['Aname']; ?></td>
            <td><?php echo $data['yoe']; ?></td>
            <td><?php echo $data['yog']; ?></td>
            <td><?php echo $data['hae']; ?></td>
            <td><?php echo $data['hag']; ?></td>
            <td><?php echo $data['tag']; ?></td>
            <td><?php echo $data['res']; ?></td>
            <td><?php echo $data['occupation']; ?></td>
            <td><?php echo $data['ddress']; ?></td>
            <td><?php echo $data['imail']; ?></td>
            <td><?php echo $data['mno']; ?></td>
    </tr><?php
    $sn++;
    }
}else{?>
<tr>
    <td colspan="11">No data found</td>
</tr><?php}
?>
</table>