<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <link rel="icon" href="<?php echo base_url();?>assets/images/als-icon.ico"/>

    <title>ALS Laundry Pickup Delivery</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.min.css" rel="stylesheet"/> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"/>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous"/>

    <!-- Bootstrap core CSS -->
    <!-- <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <!-- <link href="jumbotron.css" rel="stylesheet"> -->
    <style type="text/css">
      .logo-image{
        width: 90px;
        height: 40px;
        /*margin-top: -8px;*/
    }
      h3 {
      text-align: center;
      font-style: italic;
    }
    .display-3{
      color: white;
      font-style:italic;
      font-size: 3.5rem;
      font-weight: 300;
      line-height: 1.2;
      font-family: Arial, Helvetica, sans-serif;
    }
    .img-thumb{
      width: 200px; 
    /* display:inline;  */
      height: 200px;
    }
    .img-thumb-2{
      float: left;
      margin: 5px;
    }
    .text-right{
      text-align: right;
    }
    div {
    padding-top: 8px;
    padding-right: 5px;
    padding-bottom: 8px;
    padding-left: 5px;
    }
    .jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-image: url("assets/background-1.jpg");
  /* background-color: #cccccc; */
  background-repeat: no-repeat;
  /* position:fixed; */
  width: 100%;
  height: 350px;
  background-size:100% 350px;
  border-radius: 0.3rem;
}
  .button-1{
    text-align: center;
  }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
      <img class="logo-image" src='<?php echo base_url();?>assets/images/als logo.png' class="img-fluid"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Layanan
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Kiloan</a>
            <a class="dropdown-item" href="#">Satuan</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Tutorial Bootstrap</a>
          </div>
        </li>
		      <li class="nav-item">
            <a class="nav-link" href="contact">Promo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact">Bantuan</a>
          </li>
         </ul>
        
        <form class="form-inline my-2 my-lg-0 pull-right">
          <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
        <div class="btn-group">
          <button type="button" class="btn btn-outline-info active btn-sm">MASUK</button>
          <button type="button" class="btn btn-outline-info btn-sm">Daftar Member</button>
        </div>
          <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
        </form>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
        <!-- <img src="assets/background-1.jpg" class="img-thumb" alt="Cinque Terre">  -->
          <center><h2 class="display-3"><i>Super Fast, Super Clean, Super Fresh</i></h2>
          <button class="btn btn-outline-warning my-2 my-sm-0 " type="button"><i>Laundry Now</i></button>
          </center>
        </div>
      </div>



   <main role="main">
      <div class="container" >
        <!-- Example row of columns   -->
        <div class="row">
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div> -->
      </div>
      <hr>

    </main>

    <footer class="container">
      <p><center>&copy; Company 2017-2018</center></p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3Uklc'[; ENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <!-- <script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
    <!-- <script src="<?php echo base_url();?>assets/js/bootstrap/popper.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.min.js"></script>
  </body>
</html>