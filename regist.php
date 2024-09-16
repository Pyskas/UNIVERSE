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
    <section>
        <div class="container">
            <div>
                <div>
                <?php 
   include "component/header.php"
   
   ?>
                </div>
                <div class="login-page">
                <div class="form">
            <form method="post" action="/connect.php" class="register-form">
      <input name="FIO" type="text" placeholder="name"/>
      <input name="login" type="text" placeholder="login"/>
      <input name="email" type="text" placeholder="email address"/>
      <input name="password" type="password" placeholder="password"/>
      <button>create</button>
      <p class="message">Already registered? <a href="/form.php">Sign In</a></p>
    </form>
    </div>
        </div>
            </div>
        </div>
    </section>
</body>
</html>