<style type="text/css">
    .navbar-inverse {
    background-color: #00e6e6;
    font-size:18px;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">

<style type="text/css">
  .navbar-inverse{
  background-color:  #00cccc;
    /* font-:18px; */
   }
   body {
  background-color: #b3ffff;
  }
  .logo-image{
    width: 45px;
    height: 40px;
    border-radius: 50%;
    /* overflow: hidden; */
    margin-top: -8px;
}
</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="#">
      <img class="logo-image" src='<?php echo base_url();?>asset/logo.png' class="img-fluid"></a>
      <a style="color:white" class="navbar-brand" href="#">JUST-EAT</a>
    </div> 
    <div class="menu">
    <ul class="nav navbar-nav navbar-right">
      <li><a style="color:white" href="<?php echo base_url();?>index.php/c_home/display">Home</a></li>
      <li class="dropdown"><a style="color:white" class="dropdown-toggle" data-toggle="dropdown" href="#">Kelola Data <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li> <a href="<?php echo base_url();?>index.php/crud/index">Tenan</a></li>
          <li><a href="<?php echo base_url();?>index.php/crud/datakasir">Kasir</a></li>
        </ul>
      </li>
      <li><a style="color:white" href="<?php echo base_url();?>index.php/crud/laporan">Laporan</a></li>
      <li><a style="color:white" href="#"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
    </ul>
    </div>
    <!-- <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul> -->
  </nav>
  <!-- <section >
    <?php echo $context_div; ?>
</section> -->
</div>
</body>
</html>
