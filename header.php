<?php
	// print_r(phpinfo());
	// function to test if php is configured
	if(!isset($page_title)){
		$page_title = 'Welcome';
	}
?>

<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- Enable touch scrolling -->

    <title>SEPM - <?php echo h($page_title); ?></title>

    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
    <!-- fonts sourced from https://fonts.google.com/?selection.family=Questrial -->
    <link rel="stylesheet" media="all" href="style.css" />
    <!-- Bootsrap, Animate courtesy of free-css.com, animate.style and MIT -->
    <link rel="stylesheet" href="animate.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="bootstrap-grid.css" />
    <link rel="stylesheet" href="bootstrap-reboot.css" />
    <script type="text/javascript" src="script.js"></script>
    <noscript>Hello, You need javascript to use this application</noscript>
  
  </head>

  <body>
		<header>
            <h1>ML06 Tour Management Application</h1>
        </header>
		    <navigation>
                <ul>
                    <li class=""><a href="index.php">Login Page</a></li>
                    <li class=""><a href="home.php">Home</a></li>
                    <li class=""><a href="user.php">User</a></li>
                    <li class=""><a href="location.php">Location</a></li>
                    <li class=""><a href="tour.php">Tour</a></li>
                </ul>
            </navigation>
		<main>