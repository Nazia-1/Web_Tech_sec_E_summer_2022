<!DOCTYPE html>
<html>
<head>
<title></title>  
          
	<title>Profile Picture</title>
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
                <td colspan="2" height="150px">
			<fieldset>
                <legend><b>Profile Picture</b></legend>
                        <body>	
                            <form action="upload.php" method="post">
                                <img src="blank-picture-holder.png" alt="PP" width="270" height="300"><br>
                                <div class="form-row">
                                <div>Choose Image file:</div>
                                <div>
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                </div>
                                </div>
                                <input type="submit" value="Submit" name="submit">
                            </form>
            </fieldset>
        </td>
</tr>
<tr>
                <td colspan="2">
                    <center>
                    Copyright © 2017
                    </center>
                </td>
            </tr>
        </table>
    </center>

                    </body>
</html>