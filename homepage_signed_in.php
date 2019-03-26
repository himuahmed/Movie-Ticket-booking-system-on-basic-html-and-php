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
  <a href="action_s.php">Action</a>
  <a href="animation_s.php">Animation</a>
  <a href="thriller_s.php">Thriller</a>
   <a href="m_records_in.php" class="right">See Records</a>
   <a href="homepage.php" class="right">Log Out</a>
 
 

</div>



<marquee direction="right" >

<?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from header_images WHERE sequence='1'");
 while($row=mysqli_fetch_array($res))
{
?>
<a href="./headerpage/bookingpage_h1.php" target="_blank">
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
<a href="./headerpage/bookingpage_h2.php" target="_blank">
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
<a href="./headerpage/bookingpage_h3.php" target="_blank">
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
<a href="./headerpage/bookingpage_h4.php" target="_blank">
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
<a href="./headerpage/bookingpage_h5.php" target="_blank">
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
<a href="./headerpage/bookingpage_h6.php" target="_blank">
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
<a href="./headerpage/bookingpage_h7.php" target="_blank">
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
<a href="./headerpage/bookingpage_h8.php" target="_blank">
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
<a href="./headerpage/bookingpage_h9.php" target="_blank">
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
<a href="./headerpage/bookingpage_h10.php" target="_blank">
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
      <table style="width: 70%; text-align: center;" border="0" cellpadding="7" >
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
<td style="height: 250px;"><?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from movies WHERE movie_serial='2'");
 while($row=mysqli_fetch_array($res))
{
?>
<img src="../admin1/<?php echo $row["movie_poster"]; ?>"/>
<?php
}
  ?></td>
<td style="height: 250px;"><?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from movies WHERE movie_serial='3'");
 while($row=mysqli_fetch_array($res))
{
?>
<img src="../admin1/<?php echo $row["movie_poster"]; ?>"/>
<?php
}
  ?></td>
<td style="height: 250px;"><?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from movies WHERE movie_serial='4'");
 while($row=mysqli_fetch_array($res))
{
?>
<img src="../admin1/<?php echo $row["movie_poster"]; ?>"/>
<?php
}
  ?></td>
<td style="height: 250px;"><?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from movies WHERE movie_serial='5'");
 while($row=mysqli_fetch_array($res))
{
?>
<img src="../admin1/<?php echo $row["movie_poster"]; ?>"/>
<?php
}
  ?></td>
</tr>
<tr style="height: 21px; background-color: #900C3F">
<td style="height: 21px;"><a href="bookingpage1.php" target="_blank">Book Now</a> </td>
<td style="height: 21px;"><a href="bookingpage2.php" target="_blank">Book Now</a> </td>
<td style="height: 21px;"><a href="bookingpage3.php" target="_blank">Book Now</a> </td>
<td style="height: 21px;"><a href="bookingpage4.php" target="_blank">Book Now</a> </td>
<td style="height: 21px;"><a href="bookingpage5.php" target="_blank">Book Now</a> </td>
</tr>
<tr style="height: 250px;">
<td style="height: 250px;"><?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from movies WHERE movie_serial='6'");
 while($row=mysqli_fetch_array($res))
{
?>
<img src="../admin1/<?php echo $row["movie_poster"]; ?>"/>
<?php
}
  ?></td>
<td style="height: 250px;"><?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from movies WHERE movie_serial='7'");
 while($row=mysqli_fetch_array($res))
{
?>
<img src="../admin1/<?php echo $row["movie_poster"]; ?>"/>
<?php
}
  ?></td>
<td style="height: 250px;"><?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from movies WHERE movie_serial='8'");
 while($row=mysqli_fetch_array($res))
{
?>
<img src="../admin1/<?php echo $row["movie_poster"]; ?>"/>
<?php
}
  ?></td>
<td style="height: 250px;"><?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from movies WHERE movie_serial='9'");
 while($row=mysqli_fetch_array($res))
{
?>
<img src="../admin1/<?php echo $row["movie_poster"]; ?>"/>
<?php
}
  ?></td>
<td style="height: 250px;"><?php
  include "dbconfig.php";
  $res=mysqli_query($conn,"SELECT  * from movies WHERE movie_serial='10'");
 while($row=mysqli_fetch_array($res))
{
?>
<img src="../admin1/<?php echo $row["movie_poster"]; ?>"/>
<?php
}
  ?></td>
</tr>
<tr style="height: 21px; background-color: #900C3F">
<td style="height: 21px;"><a href="bookingpage6.php" target="_blank">Book Now</a> </td>
<td style="height: 21px;"><a href="bookingpage7.php" target="_blank">Book Now</a> </td>
<td style="height: 21px;"><a href="bookingpage8.php" target="_blank">Book Now</a> </td>
<td style="height: 21px;"><a href="bookingpage9.php" target="_blank">Book Now</a> </td>
<td style="height: 21px;"><a href="bookingpage10.php" target="_blank">Book Now</a> </td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>
  </div>
</div>

















</body>
</html>
