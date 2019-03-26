<!DOCTYPE html>
<html>
<body>
<?php
include "header.php";

include "dbconfig.php";
//include "footer.php";
?>
<style>
  table {
   border-collapse: collapse;
   width: 70%;
   color: white;
   font-size: 20px;
   text-align: left;
   margin: 2%;
     } 
  th {
   background-color: #588c7e;
   color: white;
   padding: 2%;
   margin-right: 2%
    }
 </style>
  <table class="t" >
 <tr>
  <th>Id</th> 
  <th>Name </th> 
  <th>Email</th>
  <th>Address</th>
  <th>Birth Date</th>
  <th>Gender</th>
  <th>Contact No</th>  
 </tr>
<?php
echo "<table>";
$res=mysqli_query($conn,"SELECT  * from users");
while($row = mysqli_fetch_array($res))
{
    echo "<tr><td>" .$row['id']. "</td><td>" .$row['name']. "</td> <td>" .$row['email']. "</td> <td>" .$row['address']. "</td> <td>" .$row['birth']. "</td> <td>".$row['gender']. "</td> <td>".$row['course']. "</td> </tr>";
}
echo "</table>";




?>

<?php
include "footer.php";
?>
</body>
</html>
