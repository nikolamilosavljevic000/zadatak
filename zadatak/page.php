<!DOCTYPE html>
<html>
    <head>
        <title>Welcome!</title>
        <link rel="stylesheet" type="text/css" href="praksacss.css"       
    </head>
    <body>
        <div class="header">
            <h2>Welcome</h2>
        </div>
        <div>
            <?php if (isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3>
                    <?php echo $_SESSION['success']; 
                          unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
            <?php endif; ?>
                <p>Welcome</p>
                <p><a href="home.php" style="color: red;">Logout</a></p>
        </div>

    </body>
</html>