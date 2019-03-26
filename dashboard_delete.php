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
                                Id:
                            </td>
                            <td>
                                 <input type="text" name="moviename">                      
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" name="submit1" value="Delete">
                            </td>
                        </tr>
                      </table>

                    </form>


<?php

if(isset($_POST["submit1"]))
{
        $seq= $_POST['moviename'];
    $query0= ("DELETE from bookings WHERE id= '".$seq."'");
     mysqli_query($conn,$query0);
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
