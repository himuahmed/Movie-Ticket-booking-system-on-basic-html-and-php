<!DOCTYPE html>
<html>
<body>
<?php
include "header.php";

include "dbconfig.php";
//include "footer.php";
?>

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
                                 <select name="movie_sequence">
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
                                Total Seat
                            </td>
                            <td>
                                 <input type="text" name="movielink">                      
                            </td>
                        </tr>
                                                <tr>
                            <td>
                                Price 
                            </td>
                            <td>
                                 <input type="text" name="movie_p">                      
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Movie Image
                            </td>
                            <td>
                                 <input type="file" name="image">                      
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" name="submit2" value="upload">
                            </td>
                        </tr>




                      </table>

                    </form>


<?php

if(isset($_POST["submit2"]))
{

    $fnm=$_FILES["image"]["name"];
    $dest="./headerImage/".$fnm;
    $dest1="headerImage/".$fnm;
    move_uploaded_file($_FILES["image"]["tmp_name"],$dest);
    $seq= $_POST['movie_sequence'];
    $query0= ("DELETE from header_images WHERE sequence= '".$seq."'");
     mysqli_query($conn,$query0);
     $query= "INSERT  into header_images (sequence,movieName,movie_quan,movie_p,movie_image) VALUES($_POST[movie_sequence],'$_POST[moviename]','$_POST[movielink]','$_POST[movie_p]','$dest1');";

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
