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
        h1 {
            font-style: italic;
            text-align: center;
            font-weight: 600;
            line-height: 54px;
            color: #0078A3;
        }

        .container-table {
            max-width:1017px;
            /* height:647px; */
            position:relative;
            top: 43px;
            /* bottom: 80px; */
            margin: auto auto;
            background-color: #FFFFFF;
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.25);
            border-radius: 7px;
            padding: 20px 34px 20px 34px;
        }

        table.table-bordered{
            border:1px solid #000000;
        }

        table.table-bordered > thead > tr > th{
            border-bottom:1px solid #000000;
            border-top: 1px solid #FFFFFF;
            border-left: 1px solid #FFFFFF;
            border-right: 1px solid #FFFFFF;
        }

        table.table-bordered > tbody > tr > td{
            border-bottom:1px solid #000000;
            border-top: 1px solid #FFFFFF;
            border-left: 1px solid #FFFFFF;
            border-right: 1px solid #FFFFFF;
        }

        .modules-table  > tbody > tr > td:nth-child(1),
        .modules-table > thead > tr > th:nth-child(1) {
            font-size: 24px;
            text-align: left;
            padding-left: 90px !important;
        }

        .modules-table  > tbody > tr > td:nth-child(2),
        .modules-table > thead > tr > th:nth-child(2) {
            font-size: 24px;
            text-align: right;
            padding-right: 100px !important;
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
        <h1>LAUNDRY SATUAN</h1>
        <div class="container-table">
            <table class="table table-bordered modules-table">
                <thead>
                    <tr>
                        <th scope="col">Barang</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Karpet</td>
                        <td>10.000</td>
                    </tr>
                    <tr>
                        <td>Bed Cover</td>
                        <td>40.0000</td>
                    </tr>
                    <tr>
                        <td>Permadani</td>
                        <td>15.000</td>
                    </tr>
                    <tr>
                        <td>Mukena/Sarung</td>
                        <td>5.000</td>
                    </tr>
                    <tr>
                        <td>Bantal</td>
                        <td>15.000</td>
                    </tr>
                    <tr>
                        <td>Kerudung</td>
                        <td>2.000</td>
                    </tr>
                    <tr>
                        <td>Long Dress</td>
                        <td>20.000</td>
                    </tr>
                    <tr>
                        <td>Selimut</td>
                        <td>15.000</td>
                    </tr>
                    <tr>
                        <td>Gordyn</td>
                        <td>4.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
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