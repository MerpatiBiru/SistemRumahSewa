<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login User</title>
        <link rel="stylesheet" href="index.css">
    </head>

    <body>
        <section>
            <div class="imgBx">
                <img src="img/bg-2.jpg">
            </div>
            <div class="contentBx">
                <div class="formBx">
                    <h1>USER</h1>
                    <h2>Login</h2>
					<br>
                    <form action="login_process.php" method="POST">

                        <div class="inputBx">
                            <?php if (isset($_GET['error'])) { ?>
			                <p class="error"><?php echo $_GET['error']; ?></p>
		                    <?php } ?>
			    <?php if (isset($_GET['sucess'])) { ?>
			                 <p class="sucess"><?php echo $_GET['sucess']; ?></p>
		                    <?php } ?>
                        </div>

                        <div class="inputBx">
                            <span>Email</span>
                            <input type="text" name="email">
                        </div>

                        <div class="inputBx">
                            <span>Password</span>
                            <input type="password" name="password">
                        </div>

                        <div class="inputBx">
                            <input type="submit" value="Sign in" name="">
                        </div>

                        <div class="inputBx">
                            <p>Don't have an account? <a href="sign_up.php">Sign up</a></p>
                        </div>

                        <div class="inputBx">
                            <p>Are you admin? <a href="login_admin.php">Login as admin</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </body>
</html>
