<!DOCTYPE html>
<html>
<head>
<title>
	Movie Ticket Reservation System
</title>


<style>
* {
    box-sizing: border-box;
}
.header {
    padding: 2%;
    text-align: center;
    background:  url(kiminonawa.jpg); 
    color: white;
}

body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
}


.slide-container {
  overflow: auto;
  white-space: nowrap;
}


.navbar {
    overflow: hidden;
    background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
    float: right;
}

/* Change color on hover */
.navbar a:hover {
    background-color: #ddd;
    color: black;
}

.row {  
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
}

.side {
    -ms-flex: 30%; /* IE10 */
    flex: 10%;
    background-color:    #333  ;
    padding: 30px;
}

​.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}


.main {   
    -ms-flex: 70%; /* IE10 */
    flex: 70%;
    background-color: white;
    padding: 0% 2% 0% 7%;
}

.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
}

#foo{
    width: 500px;
    height: 250px;
}

.side a:link {
    color:   #eae3e2  ;
    background-color: transparent;
    text-decoration: none;
}
.side a:visited {
    color: black;
    background-color: transparent;
    text-decoration: none;
}
.side a:hover {
    color: white;
    background-color: transparent;
    text-decoration: none;
}
.side a:active {
    color: black;
    background-color: transparent;
    text-decoration: none;
}

.main img {
    width: 100%;
    height: 100%;
}

.main a{
	 color: white;
    background-color: transparent;
    text-decoration: none;

}


</style>
</head>
<body>
	    
<form name="form" action="searchresult.php" method="post" enctype="multipart/form-data">
<div class="header">
	<h3>Movie Reserver </h3>
	<input type="text" name="search" size="80%">
	<input type="submit" value="search">
</div>
</form>

<div class="navbar">
  <a href="action.php">Action</a>
  <a href="animation.php">Animation</a>
  <a href="thriller.php">Thriller</a>
   <a href="userlogin.php" class="right">Log Out</a>
   <a href="" class="right">User Logged In</a>
 
 

</div>



<marquee direction="right" >

<?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from header_images WHERE sequence='1'");
 while($row=mysqli_fetch_array($res))
{
?>
<a href="bookingpage.php" target="_blank">
<img id="foo" src="../admin1/<?php echo $row["movie_image"]; ?>"/> </a>
<?php
}
  ?>


<?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from header_images WHERE sequence='2'");
 while($row=mysqli_fetch_array($res))
{
?>
<a href="bookingpage.php" target="_blank">
<img id="foo" src="../admin1/<?php echo $row["movie_image"]; ?>"/> </a>
<?php
}
  ?>

<?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from header_images WHERE sequence='3'");
 while($row=mysqli_fetch_array($res))
{
?>
<a href="bookingpage.php" target="_blank">
<img id="foo" src="../admin1/<?php echo $row["movie_image"]; ?>"/> </a>
<?php
}
  ?>

<?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from header_images WHERE sequence='4'");
 while($row=mysqli_fetch_array($res))
{
?>
<a href="bookingpage.php" target="_blank">
<img id="foo" src="../admin1/<?php echo $row["movie_image"]; ?>"/> </a>
<?php
}
  ?>

<?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from header_images WHERE sequence='5'");
 while($row=mysqli_fetch_array($res))
{
?>
<a href="bookingpage.php" target="_blank">
<img id="foo" src="../admin1/<?php echo $row["movie_image"]; ?>"/> </a>
<?php
}
  ?>

<?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from header_images WHERE sequence='6'");
 while($row=mysqli_fetch_array($res))
{
?>
<a href="bookingpage.php" target="_blank">
<img id="foo" src="../admin1/<?php echo $row["movie_image"]; ?>"/> </a>
<?php
}
  ?>

<?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from header_images WHERE sequence='7'");
 while($row=mysqli_fetch_array($res))
{
?>
<a href="bookingpage.php" target="_blank">
<img id="foo" src="../admin1/<?php echo $row["movie_image"]; ?>"/> </a>
<?php
}
  ?>

<?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from header_images WHERE sequence='8'");
 while($row=mysqli_fetch_array($res))
{
?>
<a href="bookingpage.php" target="_blank">
<img id="foo" src="../admin1/<?php echo $row["movie_image"]; ?>"/> </a>
<?php
}
  ?>

<?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from header_images WHERE sequence='9'");
 while($row=mysqli_fetch_array($res))
{
?>
<a href="bookingpage.php" target="_blank">
<img id="foo" src="../admin1/<?php echo $row["movie_image"]; ?>"/> </a>
<?php
}
  ?>

<?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from header_images WHERE sequence='10'");
 while($row=mysqli_fetch_array($res))
{
?>
<a href="bookingpage.php" target="_blank">
<img id="foo" src="../admin1/<?php echo $row["movie_image"]; ?>"/> </a>
<?php
}
  ?>


</marquee>
<div class="row">
  <div class="side">
      <h2>Upcoming Movies</h2>
      <div class="fakeimg" style="height:3%;"><a href="https://www.imdb.com/title/tt2527338/?ref_=ttls_li_tt" target="_blank">Star Wars: Episode IX</a></div> <br>
      <div class="fakeimg" style="height:3%;"><a href="https://www.imdb.com/title/tt4154796/?ref_=ttls_li_tt" target="_blank"> Untitled Avengers Movie</a></div><br>
      <div class="fakeimg" style="height:3%;"><a href="https://www.imdb.com/title/tt1979376/?ref_=ttls_li_tt" target="_blank"> Toy Story 4 </a></div><br>
      <div class="fakeimg" style="height:3%;"><a href="https://www.imdb.com/title/tt3513498/?ref_=ttls_li_tt" target="_blank">The Lego Movie 2:The Second Part </a></div><br>
      <div class="fakeimg" style="height:3%;"><a href="https://www.imdb.com/title/tt6105098/?ref_=ttls_li_tt" target="_blank">The Lion King</a></div> <br>
      <div class="fakeimg" style="height:3%;"><a href="https://www.imdb.com/title/tt0448115/?ref_=ttls_li_tt" target="_blank">Shazam!</a></div> <br>
      <div class="fakeimg" style="height:3%;"><a href="https://www.imdb.com/title/tt6139732/?ref_=ttls_li_tt" target="_blank">Aladdin</a></div> <br>
      <div class="fakeimg" style="height:3%;"><a href="https://www.imdb.com/title/tt6320628/?ref_=ttls_li_tt" target="_blank">Spider-Man: Far From Home</a></div> <br>
      <div class="fakeimg" style="height:3%;"><a href="https://www.imdb.com/title/tt6146586/?ref_=ttls_li_tt" target="_blank">John Wick: Chapter 3</a></div> <br>
      <div class="fakeimg" style="height:3%;"><a href="https://www.imdb.com/title/tt2386490/?ref_=ttls_li_tt" target="_blank">How to Train Your Dragon: The Hidden World </a></div> <br>
  </div>
  <div class="main">
      <table style="width: 20%; text-align: center;" border="0" cellpadding="2" >
<tbody>
<tr style="height: 250px;">
<td style="height: 250px;"><?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from movies WHERE movie_serial='1'");
 while($row=mysqli_fetch_array($res))
{
?>
<img src="../admin1/<?php echo $row["movie_poster"]; ?>"/>
<?php
}
  ?></td>
<tr>
  <td style="height: 20px;"><h4>Ticket Price </h4></td>
  <td style="height: 20px;"><h4>Tickets  </h4></td>
</tr>

<?php 

$res1=mysqli_query($conn,"SELECT  * from movies WHERE movie_serial='1'");
while($row1=mysqli_fetch_array($res1))
{
  echo"<tr>";
    echo"<td>" .$row1['movie_price']."</td>";
    echo"<td>".$row1['movie_qty']."</td>";
  echo"</tr>";
}
?>
<form  method="post" action="bookingpage.php">
  <p>
  Ticket quantity:*
  <input type="text" name="" value="" required="">
  <input type="submit" value="add to cart">
</p>

</form>


</tbody>
</table>

<p>&nbsp;</p>
  </div>
</div>

















</body>
</html>
