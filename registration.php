<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
    <?php 
		session_start();
		if(isset($_SESSION["validate"])){
			echo $_SESSION["validate"];
			session_destroy();
		}
	?>
		<form method="post" action="regCheck.php" enctype="">
        <fieldset>
            <legend>REGISTRATION</legend>
            <table>
                <tr>
                    <td>Id </td>
                    <td>:</td>
                    <td><input type="text" name="Id" id=""></td>
                </tr>

                <tr>
                    <td>Password </td>
                    <td>:</td>
                    <td><input type="password" name="password" id=""></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" id=""></td>
                </tr>
                <tr>
                    <td>Name </td>
                    <td>:</td>
                    <td><input type="text" name="name" id=""></td>
                </tr>
                <tr>
                    <td>Email </td>
                    <td>:</td>
                    <td><input type="email" name="email"></td>
                </tr>
            </table>
            
            
            <label for="usertype">User Type<i>[User/Admin]</i></label><br>
	<select name="usertype" id="type">
<option value="user">User</option>
    <option value="admin">Admin</option>
	</select>
 <hr>
            
<input type="submit" name="btn" id="Submit" value="Register">
<a href="login.php">Login</a>
<?php
					if(isset($_GET['err'])){
						echo "invalid request";
						unset($_GET);
					}
					if(isset($_GET['succ'])){
						echo "User Added";
						unset($_GET);
					}
				?>
        </fieldset>
    </form>
    </body>
</html>

<?php 

?>