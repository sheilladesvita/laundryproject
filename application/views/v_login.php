<html>
    <head>
        <title>Login Page</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
    <style type="text/css">
body {
	background:#DCDCDC; 
}
</style>

    <form action="<?php echo base_url(); ?>index.php/c_login/login_action" method="post">
    <div class=card-body" align="center">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username"><br>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password"><br>
        <button type="submit" name = "submit" value="login">Log in</button>
    </div>
    </form>
    </body>
</html>