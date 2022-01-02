<?php
   //Function to call database connection//
   function dbconnect(){
       try {
           $server = "localhost";
           $user = "root";
           $pass = "";
           $dbname = "itsmyhashyapp";
           $con = new PDO("mysql:host=$server; dbname=$dbname",$user,$pass);
           } catch (PDOException $error_message) {
               echo $error_message->getMessage();
           }
       return($con);
   }
   
   //Function to redirect with a URL//
   function redirect($url){
       ?>
<script>
   window.location.href = "<?php echo $url;?>";
</script>
<?php
   }
   
   //Function to check if user have an account if he is logging in//
   function isLoggedIn($username,$password){
   $connect = dbconnect();
   $user_info = "SELECT * FROM itsmyhashyapp_users WHERE username=:username AND password=:password";
   $user_result = $connect->query($user_info);
   $user_result = $connect->prepare($user_info);
   $user_result->bindparam(':username', $username);
   $user_result->bindparam(':password', $password);
   $user_result->execute();
   $user_count = $user_result->rowCount();
   if($user_count > 0) {
       $_SESSION['IS_LOGIN'] = "Yes";
       redirect("/creator/dashboard");
   }
   else {
   }
   } 
   
   //Function to check if user have an account if he is logging in//
   function getLoggedIn($username){
   $connect = dbconnect();
   $user_info = "SELECT * FROM itsmyhashyapp_users WHERE username=:username";
   $user_result = $connect->query($user_info);
   $user_result = $connect->prepare($user_info);
   $user_result->bindparam(':username', $username);
   $user_result->execute();
   $logged_userinfo = $user_result->fetch();
   return($logged_userinfo);
   }
   ?>