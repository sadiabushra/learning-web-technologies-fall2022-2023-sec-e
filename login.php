<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
    <?php 
	?>
		<form method="post" action="logincheck.php" enctype="">
			<fieldset style="width: 12%;">
    
            <legend>LOGIN</legend>
            <table>
                <tr>
                    <td>User Name </td>
                    <td>:</td>
                    <td><input type="text" name="username" value="" required></td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td>:</td>
                    <td><input type="password" name="password" value="" required></td>
            </table>
            <hr>
            <table>
                <tr><input type="checkbox">Remember Me</tr>
                <tr><br><br></tr>
                <tr>
                    <td>          
                        <td><input type="submit" name="" id="Submit"></td>
                    </td>
                    <td><a href="#">Forgot Password?</a></td>
                </tr>
            </table>
            <?php
					if(isset($_GET['err'])){
						echo "invalid credential";
						unset($_GET);
					}
				?>
        </fieldset>
    </form>
    </body>
</html>

<?php

    
?>