<?php
include "header.php";

include "dbconfig.php";
//include "footer.php";
?>
<!DOCTYPE html>
<html>
<body>
        <div class="grid_10">
            <div class="box round first">
                <h2>
                    Add Movies</h2>
                <div class="block">
                    
                    <form name="form1" action="" method="post" enctype="multipart/form-data">

                      <table>
                        <tr>
                             <td>
                                Movie Position:
                            </td>
                            <td>
                                 <select name="movie_serial">
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
                                                <tr>
                            <td>
                                Movie Name
                            </td>
                            <td>
                                 <input type="text" name="moviename">                      
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Movie price
                            </td>
                            <td>
                                 <input type="text" name="movieprice">                      
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Movie quantity
                            </td>
                            <td>
                                 <input type="text" name="moviequantity">                      
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Movie Image
                            </td>
                            <td>
                                 <input type="file" name="movieimage">                      
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Movie Catagory
                            </td>
                            <td>
                                 <select name="movie_catagory">
                                 <option value="Thriller">Thriller</option> 
                                 <option value="Action">Action</option>
                                 <option value="Animation">Animation</option>                         
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" name="submit1" value="upload">
                            </td>
                        </tr>




                      </table>

                    </form>


<?php

if(isset($_POST["submit1"]))
{

    $fnm=$_FILES["movieimage"]["name"];
    $destination="./images/".$fnm;
    $destination1="images/".$fnm;
    move_uploaded_file($_FILES["movieimage"]["tmp_name"],$destination);
        $seq= $_POST['movie_serial'];
    $query0= ("DELETE from movies WHERE movie_serial= '".$seq."'");
     mysqli_query($conn,$query0);


 $query= "INSERT  into movies (movie_serial,movie_name,movie_price ,movie_qty,movie_poster ,movie_catagory) VALUES($_POST[movie_serial],'$_POST[moviename]',$_POST[movieprice],$_POST[moviequantity],'$destination1','$_POST[movie_catagory]');";

mysqli_query($conn,$query);
    

}
?>

                    </div>
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
   
<?php
include "footer.php";
?>
</body>
</html>
