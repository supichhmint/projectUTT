<html>

<head>
  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <link href="css/search_tripUser/bootstrap.css" rel='stylesheet' type='text/css' />
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/search_tripUser/jquery.min.js"></script>
  <!-- Custom Theme files -->
  <link href="css/search_tripUser/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/search_tripUser/component.css" rel='stylesheet' type='text/css' />
  <!-- Custom Theme files -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="application/x-javascript">
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!--webfont-->
  <!-- for bootstrap working -->
  <script type="text/javascript" src="js/search_tripUser/bootstrap-3.1.1.min.js"></script>
  <!-- //for bootstrap working -->
  <!-- cart -->
  <script src="js/search_tripUser/simpleCart.min.js">
  </script>
  <!-- cart -->
  <link rel="stylesheet" href="css/search_tripUser/flexslider.css" type="text/css" media="screen" />
</head>

<body>
  <div class="container">
    <?php echo $__env->yieldContent('tripuser'); ?>
  </div>
</body>

</html>