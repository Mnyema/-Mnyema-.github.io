<?php
//establish connection
$connection=mysqli_connect("localhost","root","","Marian");
//check connection
if($connection==false){
    die("Error. We couldnot connect to the server".mysqli_connect_error());
}
?>
<table border ="1" cellspacing="0" cellpadding="8">
  <tr>
    <th>S.N</th>
    <th>Alumnus Name</th>
    <th>Year of enrolment</th>
    <th>Year of graduation</th>
    <th>Headmaster/ Mistress at enrolment</th>
    <th>Headmaster/Mistress at graduation</th>
    <th>Famous teacher at graduation</th>
    <th>CSSEE Results</th>
    <th>Current occupation</th>
    <th>Address</th>
    <th>Email</th>
    <th>Mobile Number</th>
  </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "Marian");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
$query = "SELECT * FROM alumni";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['Aname'] ?> </td>
   <td><?php echo $data['yoe']; ?> </td>
   <td><?php echo $data['yog']; ?> </td>
   <td><?php echo $data['hae']; ?> </td>
   <td><?php echo $data['hag']; ?> </td>
   <td><?php echo $data['tag']; ?> </td>
   <td><?php echo $data['res']; ?> </td>
   <td><?php echo $data['occupation']; ?> </td>
   <td><?php echo $data['ddress']; ?> </td>
   <td><?php echo $data['imail']; ?> </td>
   <td><?php echo $data['mno']; ?> </td>
   
  </tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>

 <?php } ?>
  </table>