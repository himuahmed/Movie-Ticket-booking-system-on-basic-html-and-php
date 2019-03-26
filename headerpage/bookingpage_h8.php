<!DOCTYPE html>
<html>




<style>

@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);

body {
  background: #456;
  font-family: 'Open Sans', sans-serif;
}

.signup {
  width: 400px;
  margin: 16px auto;
  font-size: 16px;
}

/* Reset top and bottom margins from certain elements */
.signup-header,
.signup p {
  margin-top: 0;
  margin-bottom: 0;
}

/* The triangle form is achieved by a CSS hack */
.signup-triangle {
  width: 0;
  margin-right: auto;
  margin-left: auto;
  border: 12px solid transparent;
  border-bottom-color: #28d;
}

.signup-header {
  background: #28d;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
}

.signup-container {
  background: #ebebeb;
  padding: 12px;
}

/* Every row inside .login-container is defined with p tags */
.signup p {
  padding: 12px;
}

.signup input {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 16px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}

.signup input[type="email"],
.signup input[type="password"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}
.signup input[type="text"],
.signup input[type="date"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}
.signup input[type="text"]:focus,
.signup input[type="date"]:focus {
  border-color: #888;
}
/* Text fields' focus effect */
.signup input[type="email"]:focus,
.signup input[type="password"]:focus {
  border-color: #888;
}

.signup input[type="submit"] {
  background: #28d;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
}

.signup input[type="submit"]:hover {
  background: #17c;
}

/* Buttons' focus effect */
.signup input[type="submit"]:focus {
  border-color: #05a;
}
</style>



<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'projectdb';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
  //echo"databse ok ";
}

$year = $name = $email = $seat = $fname= $lname = "";
$nameerror = $passerror = $birtherror = $courseerror = "";






 
// echo $avl_seat;




if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $res3=mysqli_query($conn,"SELECT  * from header_images WHERE sequence='8'");
  while($row3=mysqli_fetch_array($res3))
    {
       $movie__name = $row3['movieName'];
       $avl_seat = (int)$row3['movie_quan'];
       $cost = (int)$row3['movie_p'];

    };
  //$avl_seat = mysqli_query($conn,"SELECT  movie_qty from movies WHERE movie_serial='1'");

  $name = test_input($_POST["username"]);
  //$fname=test_input($_POST["firstname"]);
  //$lname=test_input($_POST["lastname"]);
  //$password = test_input($_POST["password"]);
  $email = test_input($_POST["email"]);
  $address = test_input($_POST["address"]);
  $birth = test_input($_POST["birth"]);
  $seat = test_input($_POST["seat"]);
  $course = test_input($_POST["course"]);
  $movieseats = (int)test_input($_POST["movie_seats"]);
  //$cost=  "SELECT  movie_price from movies WHERE movie_serial='1'";
  $cost1=(int)$cost;
  $totalcost=$cost * $movieseats;

  if($avl_seat>=$movieseats){
$sql = "INSERT INTO bookings (movie_serial,name,email,address,date_,seat,Contact_no,totalseat,total_cost)
VALUES ('$movie__name','$name','$email','$address','$birth','$seat','$course','$movieseats','$totalcost');";
mysqli_query($conn,$sql);
  $new_seat=$avl_seat-$movieseat;
  $sql1= "UPDATE header_images SET movie_quan= '$new_seat' WHERE sequence= '8' ";
  mysqli_query($conn,$sql1);
    header("location:../homepage_signed_in.php");
}
else
{
header("location:bookingpage_h8.php");
}




  if (empty($name  && $email && $address && $birth && $seat && $course && $movieseats)){ 
  	echo "all field should be filled";
  }
  else{
    if(strlen($name)>15 || strlen($name)<6){
    $nameerror="name length should be 6-15";
  		//echo "Username length should be 6-15";
  		//echo "<br>";
	}



if(!is_numeric($course)){
$courseerror=" Number should be integer";
	//echo"Course Number should be integer";
	//echo "<br>";
}
 $thisyear='2018';
$y = (int)$birth;

$total=$thisyear-$y;
if($total<18){
$birtherror="Age should be atleast 18";
	//echo"Age should be atleast 15";
}

//else
}

echo "<br>";

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

  <head>
    <meta charset="UTF-8">
    <title>booking page</title>
  </head>


<body>

  <div class="signup">
<div class="signup-triangle"></div>

<h2  class="signup-header">Booking Page</h2></p>

<form class="signup-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <p>
  Name:*
  <input type="text" name="username" value="" required="">
  <span class = "error"> <?php echo $nameerror;?></span></p>
  <br>
  <p>
  Email:*
  <input type="email" name="email" value="" required=""></p>
  <br>
  <p>
  Address:*
  <input type="text" name="address" value="" required=""></p>
  <br>
    <p>
  Contact No.:*
  <input type="text" name="course" value="" required="">
  <span class = "error"> <?php echo $courseerror;?></span></p>
  <br>
    <p>
  Date:*
  <input type="date" name="birth" value="" required="">
  <span class = "error"> <?php echo $birtherror;?></span></p>

  <br>
  <p>
  Time:*
  <input type="radio" name="seat" value="front" required=""> 11:00AM-01:00PM
  <input type="radio" name="seat" value="middle" required=""> 02:00pm-04:00pm 
  <input type="radio" name="seat" value="back" required=""> 05:00PM-07:00PM
</p>
  <br>
<p>
<table>
  <td style="height: 20px;"><h4>Ticket Price :</h4></td>
<?php 

$res1=mysqli_query($conn,"SELECT  * from header_images WHERE sequence='8'");
while($row1=mysqli_fetch_array($res1))
{
  //echo"<tr>";
    echo"<td>".$row1['movie_p']."</td>";
    //$cost=$row1['movie_price'] ; 
    //echo $cost;  //echo"<td>".$row1['movie_qty']."</td>";
  //echo"</tr>";
}
?>
  <td style="height: 20px;"><h4>Ticket Available : </h4></td>
  <?php 

$res1=mysqli_query($conn,"SELECT  * from header_images WHERE sequence='8'");
while($row1=mysqli_fetch_array($res1))
{
  //echo"<tr>";
    //echo"<td>" .$row1['movie_price']."</td>";
    echo"<td>".$row1['movie_quan']."</td>";
  //echo"</tr>";
}
?>

                        <tr>
                             <td>

                               Number of Seats:
                            </td>
                            <td>
                                 <select name="movie_seats" required="">
                                 <option value="1">1</option> 
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option> 
                                 <option value="5">5</option> 
                                 <option value="6">6</option> 
                                 <option value="7">7</option> 
                                 <option value="8">8</option> 
                                 <option value="9">9</option> 
                                 <option value="10">10</option>                       
                            </td>
                        </tr>
                      </select>
                    </td>
                  </tr>
<p>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required=""> </p><p>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required=""> </p><p>

                 <label for="expmonth">BIN</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="1234" required=""> 
          </p>
                
                </table>


</p>

  <p><input type="submit" value="Book Now"></p>
</form>
</div>
</body>






