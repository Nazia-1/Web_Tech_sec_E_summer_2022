<?php 
    if (isset($_POST['submit'])){
        $oldpass=$_POST['oldPass'];
        $newpass=$_POST['newPass'];
        $cpass=$_POST['confirmPass'];

        if ($oldpass!=$newpass && $newpass==$cpass) {
            echo"successfully changed";
        }
        else{
            echo"new pass sholdnot be the same as the current pass";
        }
    }
?>



</html>
<!DOCTYPE html>
<html>

<head>
    <title>Change Password</title>
</head>

<body>
    <center>
        <table border="1" width="500px">

            <tr>
                <td>
                    <table width="500px">
                        <tr>
                            <td align="Left">
                            <h3><b style="color: green;"><i style="font-size: 36px">  X   </i></b>  Company</h3>
                            </td>
                            <td align="Right">
                                <a href="index.php">Home</a> |
                                <a href="view/Login.php">Login</a> |
                                <a href="view/Registration.php">Registration</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="2">
			        <fieldset>
                    <legend>Change Password</legend>
			
                        <label for="cpassword">Current Password : </label>
                                    <input type="text" name="oldPass"><br>
                                    <br>

                                    <label for="npassword" style="color: green;">New Password : </label>
                                    <input type="text" name="newPass"><br>
                                    <br>

                                    <label for="rpassword" style="color: red;">Retype New Password</label>
                                    <input type="text" name="confirmPass"><br>
                                    <br>
                                    <hr>

                                    <input type="submit" name="submit">
                    
		    </tr>
                <tr>

            
        </table>
    </center>
</body>

</html>


