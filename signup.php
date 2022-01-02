<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
if($_GET["role"] && $_GET["role"] == "creator"){
    ?>
<title> Creator Signup - HC </title>
<div class="container-signup">
   <div class="login-form-header">
      <h class="login-hc1"> Ready to go🚀 </h>
      <br>
      <h class="login-hc2"> This is your last important step </h>
   </div>
   <form action="" method="POST" id="login-form">
      <div class="login-form">
         <h class="input-label"> EMAIL </h>
         <input type="text" name="email" class="login-input" id="hc-username" required>
         <h class="input-label"> USERNAME </h>
         <input type="text" name="username" class="login-input" id="hc-password" required>
         <h class="input-label"> PASSWORD </h>
         <input type="password" name="password" class="login-input" id="hc-password" required>
         <input type="submit" name="hc-login" class="hc-login-btn" value="Log In"> 
   </form>
   </div>
</div>
<?php
}
else {
    header("Location: https://hashtagcreator.com/signup");
}
?>
<?php
   session_start();
   include_once("functions.php");
   include_once("css/style.php");
   
   if(isset($_POST['hc-login'])) {
       $username = $_POST['username'];
       $_SESSION['username'] = $username;
       $password = md5($_POST['password']);
       $_SESSION['password'] = $password;
       isLoggedIn($username,$password);
   }
   ?>
<?php
   if(!isset($_SESSION['IS_LOGIN'])){
   }
   else {
           redirect("/hc/creator-dashboard.php");
   }
   ?>