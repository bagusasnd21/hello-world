<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> -->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	 <?php
    $page = isset($_REQUEST['page']) ? str_replace(['_', ' '], '-', $_REQUEST['page']) : 'home';
	  $page_title = "";

    if(file_exists(__DIR__.'/pages/'.$page.'.php')){
  		if($page=="detail-company-profile"){
  			$page_title="Detail Company Profile";

  		}else if($page=="login"){
  			$page_title="Login";

  		}else{
  			$page_title = "Home";
  		}
    }else{
      $page_title = "Home";
    }

    ?>
	<title><?php echo $page_title;?></title>

	<link rel="shortcut icon" type="image/x-icon" href="http://www.pgn.co.id/images/modules/favicon.ico" />

  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="pav/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <link href="assets/css/animate.min.css" rel="stylesheet">
  <link href="assets/css/floating-label.min.css" rel="stylesheet">
  <link href="assets/slick/slick.css" rel="stylesheet">
  <link href="assets/slick/slick-theme.css" rel="stylesheet">
  <link href="assets/css/datepicker.css" rel="stylesheet">
  <link href="assets/css/custom-form.css" rel="stylesheet">
  <link href="assets/css/multiple-select.css" rel="stylesheet">
  <link href="assets/css/styles.css" rel="stylesheet">

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="assets/js/jquery.1.12.4.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/slick/slick.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/multiple-select.js"></script>
  <script src="assets/js/global.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- <link href="https://www.fontify.me/wf/18e2a1337607f8734ef443d978cb015f" rel="stylesheet" type="text/css"> -->
  </head>
  <body>

    <?php
      if(file_exists(__DIR__.'/pages/'.$page.'.php')){
        if($page=="detail-company-profile"){
          include_once('pages/header-login.php');

        }else if($page=="home-login"){
          include_once('pages/header-login.php');

        }else if($page=="popup"){
          include_once('pages/header-login.php');

        }else if($page=="home"){
          include_once('pages/header.php');

        }
      }else{
        include_once('pages/header.php');
      }
    ?>
    <?php
      $page = isset($_REQUEST['page']) ? str_replace(['_', ' '], '-', $_REQUEST['page']) : 'home';
      if(file_exists(__DIR__.'/pages/'.$page.'.php')){
        include_once('pages/'.$page.'.php');
      }else{
        include_once('pages/home-unlogin.php');
      }

    ?>
    <?php  include_once('pages/footer.php');?>

  </body>

</html>
