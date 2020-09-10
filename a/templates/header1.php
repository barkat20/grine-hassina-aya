<?php 

  session_start();

  //$_SESSION['name'] = 'mario';

  if($_SERVER['QUERY_STRING'] == 'noname'){
    //unset($_SESSION['name']);
    session_unset();
  }

  // null coalesce
  $name = $_SESSION['name'] ?? 'Guest';

  // get cookie
  $gender = $_COOKIE['gender'] ?? 'Unknown';

?>

<head>
	<title>Ninja Pizza</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style type="text/css">
	  .brand{
	  	background: #cbb09c !important;
	  }
  	.brand-text{
  		color: #cbb09c !important;
  	}
  	form{
  		max-width: 460px;
  		margin: 20px auto;
  		padding: 20px;
  	}
    .pizza{
      width: 100px;
      margin: 40px auto -30px;
      display: block;
      position: relative;
      top: -30px;
    }
    .a{
      color: white !important;
    }
  </style>
</head>
<body class="grey lighten-4">
  <nav class="purple z-depth-0">
    <div class="container">
      <a href="index.php" class="brand-logo a">DVD Store</a>
      <ul class="right hide-on-med-and-down">

                   <li><a href="Registration.php">Registration</a></li>
                   <li><a href="login.php">Login</a></li>
                   <li><a href="#">Contact us </a></li>
               </ul>
                <ul class="sidenav gray lighten-2 " id="mobile-menu">
                   <li><a href="">contact</a></li>
                   <li><a href="registration.php">Registration</a></li>
             <li><a href="Login.php">Login</a></li>
               </ul>
    </div>
  </nav>