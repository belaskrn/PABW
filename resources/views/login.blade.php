<head>
   <title>sign-in</title>
   <link href="/css/app.css" rel="stylesheet" type="text/css" >
</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Sign in</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Masukkan email">
      <input type="password" name="password" required placeholder="Masukkan password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>tidak punya akun? <a href="register_form.php">sign up</a></p>
   </form>

</div>

</body>
</html>