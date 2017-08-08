<html>

<head>
    <title>Up To Train - <?php echo $__env->yieldContent('title'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" re l="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="css/uptotrain.min.css" rel="stylesheet">

</head>

<body id="page-top" class="index">
    <?php $__env->startSection('sidebar'); ?>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="#page-top">Up To Train</a>
            </div>
            <!--<ul class="nav navbar-nav">
            </ul>-->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">Add trip</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
    <?php echo $__env->yieldSection(); ?>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>

</html>