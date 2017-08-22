<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Login form</title>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link href="/css/login.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="login">
    <a hef="/">
      <h1>Login</h1>
    </a>

    <form class="form" method="post" action="/loginme">

      <p class="field">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <input type="text" name="Agencyemail " placeholder="email" required/>
        <i class="fa fa-user"></i>
      </p>

      <p class="field">
        <input type="password" name="password" placeholder="Password" required/>
        <i class="fa fa-lock"></i>
      </p>

      <p class="submit"><input type="submit" name="login" value="login"></p>
      <p class="submit"><input type="submit" name="login" value="registration for new agency"></p>

    </form>
  </div>
  <!--/ Login-->
  <!--
<div class="copyright">
    <p>Copyright &copy; 2017. Created by <a href="/uptotrain/resources/index" target="_blank">UpToTrain</a></p>
  
  -->
</body>

</html>