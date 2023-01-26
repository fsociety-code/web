<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>

<form action="process.php" method="post">
  <div class="form-field">
    <input type="text" name="UName" placeholder=" Username" required/>
  </div>
  
  <div class="form-field">
    <input type="password" name="Password" placeholder=" Password" required/>                         </div>
  
  <div class="form-field">
    <button class="btn" type="submit" name="Login">Login</button>
  </div>
</form>
<!-- partial -->
  
</body>
</html>
