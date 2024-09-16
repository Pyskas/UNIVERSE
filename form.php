<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/css.css">
    <link rel="stylesheet" href="/css/form.css">
</head>
<body>
    <section class="head">
        <div class="container">
            <div class="head_wrapp">
            <?php 
   include "component/header.php"
   
   ?>
            </div>
            <div class="login-page">
  <div class="form">
  
    <form method="post" action="/login.php" class="login-form">
      <input name="login" type="text" placeholder="username"/>
      <input name="password" type="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="/regist.php">Create an account</a></p>
    </form>
  </div>
</div>
        </div>
    </section>
</body>
</html>