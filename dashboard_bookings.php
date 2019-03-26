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
   margin: 1%;
     } 
  th {
   background-color: #588c7e;
   color: white;
   padding: 2%;
   margin-right: 2%
    }
 </style>

<?php
echo "<table>";
$res=mysqli_query($conn,"SELECT  * from bookings");
echo "<thead>";
echo "<th>ID</th>";
echo "<th>Movie </th>";
echo "<th>User</th>";
echo "<th>Email</th>";
echo "<th>Address</th>";
echo "<th>Date</th>";
echo "<th>Time</th>";
echo "<th>Contact No</th>";
echo "<th>No Of Seats</th>";
echo "</thead>";

while($row = mysqli_fetch_array($res))
{
    echo "<tr><td>" .$row['id']. "</td><td>" .$row['movie_serial']. "</td> <td>" .$row['name']. "</td> <td>" .$row['email']. "</td> <td>" .$row['address']. "</td> <td>".$row['date_']. "</td> <td>".$row['seat']. "</td> <td>".$row['Contact_no']. "</td> <td>"    .$row['totalseat']. "</td> </tr>";
}
echo "</table>";




?>

<?php
include "footer.php";
?>
</body>
</html>
