<?php include('base.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome!</title>
        <link rel="stylesheet" type="text/css" href="praksacss.css"       
    </head>
    <body>
        <div class="header">
            <h2>Register</h2>
        </div>
        <form method="post" action="register.php">
            <!-- display validation errors here-->
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label>Username</label><input type="text" name="username" value="<?php echo $username?>">
            </div>
            <div class="input-group">
                <label>Email</label><input type="text" name="email" value="<?php echo $email?>"
            </div>
            <div class="input-group">
                <label>Password</label><input type="password" name="password1">
            </div>
            <div class="input-group">
                <label>Confirm password</label><input type="password" name="password2">
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">Confirm</button>
            </div>
            <p>Already a member? <a href="login.php">Sing in!</a></p>
        </form>
    </body>
</html>