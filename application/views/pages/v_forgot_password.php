<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
		<meta name="author" content="" />
		<link
			rel="icon"
			href="<?php echo base_url();?>assets/images/als-icon.ico"
        />
        
        <title>ALS Laundry</title>

		<!-- Bootstrap core CSS -->
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
			integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
			crossorigin="anonymous"
        />
        
        <!-- Google font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
			rel="stylesheet"
		/>
		<!-- Fontawesome -->
		<link
			rel="stylesheet"
			href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
			integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
			crossorigin="anonymous"
		/>

		<!-- Custom styles for this template -->
		<link
			href="<?php echo base_url();?>assets/css/style.css"
			rel="stylesheet"
        />
        <link
			href="<?php echo base_url();?>assets/css/admin.css"
			rel="stylesheet"
        />
        <style>
         /* .btn {
         background-color: #17c0eb;
         width: 100%;
         color: #fff;
         padding: 10px;
         font-size: 18px;
         }
         .btn:hover {
         background-color: #2d3436;
         color: #fff;
         } */
         input {
         height: 50px !important;
         }
         .form-control:focus {
         border-color: #18dcff;
         box-shadow: none;
         }
         h3 {
         color: #17c0eb;
         font-size: 36px;
         }
         .cw {
         width: 35%;
         }
         @media(max-width: 992px) {
         .cw {
         width: 60%;
         }
         }
         @media(max-width: 768px) {
         .cw {
         width: 80%;
         }
         }
         @media(max-width: 492px) {
         .cw {
         width: 90%;
         }
         }
      </style>
    </head>

    <body class="bg-default-blue">
        <div class="container d-flex justify-content-center align-items-center vh-100">
         <div class="bg-white text-center p-5 mt-3 width-form-50 center">
            <h3>Forgot Password </h3>
            <hr class="my-4" />
            <p>Enter Your Email Address</p>
            <form autocomplete="off" action="<?php echo base_url();?>viewonly/check_email" method="post">
               <div class="form-group">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Your Username*" required>
               </div>
            </form>
            <button type="submit" class="btn btn-block bg-default-yellow text-default-white">Reset Password</button>
         </div>
      </div>
    </body>
</html>