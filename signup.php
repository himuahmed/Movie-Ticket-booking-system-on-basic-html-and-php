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

$year = $name = $email = $gender = $fname= $lname = "";
$nameerror = $passerror = $birtherror = $courseerror = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = test_input($_POST["username"]);
  $fname=test_input($_POST["firstname"]);
  $lname=test_input($_POST["lastname"]);
  $password = test_input($_POST["password"]);
  $email = test_input($_POST["email"]);
  $address = test_input($_POST["address"]);
  $birth = test_input($_POST["birth"]);
  $gender = test_input($_POST["gender"]);
  $course = test_input($_POST["course"]);


$sql = "INSERT INTO users (name, password, email,address,birth,gender,course,fname,lname)
VALUES ('$name', '$password', '$email','$address','$birth','$gender','$course','$fname','$lname');";
if(mysqli_query($conn,$sql))
{
  header("location:homepage_signed_in.php");
}
else
{
  //echo"couldn't create database";
}



  if (empty($name && $password && $email && $address && $birth && $gender && $course && $fname && $lname)){ 
  	echo "all field should be filled";
  }
  else{
    if(strlen($name)>15 || strlen($name)<6){
    $nameerror="name length should be 6-15";
  		//echo "Username length should be 6-15";
  		//echo "<br>";
	}

	if(!preg_match("[a-zA-Z/'/-\040]", $password)){
	$passerror="Password Must contain an uppercase,a lowercase,a number,a special character";
		//echo "Password Must contain an uppercase,a lowercase,a number,a special character";
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
    <title>Signup Form</title>
  </head>


<body>
  <div class="signup">
<div class="signup-triangle"></div>

<h2  class="signup-header">Sign Up Form</h2></p>

<form class="signup-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <p>
    Firstname:*
  <input type="text" name="firstname" value="" required="">
  <span class = "error"> <?php echo $nameerror;?></span></p>
  <br>
  <p>
    Lastname:*
  <input type="text" name="lastname" value="" required="">
  <span class = "error"> <?php echo $nameerror;?></span></p>
  <br>
  <p>
  Username:*
  <input type="text" name="username" value="" required="">
  <span class = "error"> <?php echo $nameerror;?></span></p>
  <br>
  <p>
  Password:*
  <input type="password" name="password" value="" required=""></p>
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
  Date of birth:*
  <input type="date" name="birth" value="" required="">
  <span class = "error"> <?php echo $birtherror;?></span></p>

  <br>
  <p>
  Gender:*
  <input type="radio" name="gender" value="male" checked="checked"> Male 
  <input type="radio" name="gender" value="female"> Female 
  <input type="radio" name="gender" value="other"> Other
</p>
  <br>
  <p>
  Contact No.:*
  <input type="text" name="course" value="" required="">
  <span class = "error"> <?php echo $courseerror;?></span></p>
  <br>
  <p><input type="submit" value="Submit"></p>
</form>
</div>
</body>
 

</body>
</html>
