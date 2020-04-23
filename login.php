<?php
include('header.php');
include('config/db_connect.php');

if(isset($_POST['submit'])){
    
    // check login
    if(empty($_POST['login'])){
        $login='';
      } else{
        $login = $_POST['login'];
        
      }
      
      // check password
      if(empty($_POST['password'])){
        $password='';
      } else{
        $password = $_POST['password'];
      }
    
      if(empty($login) && empty($password)){
        //echo 'errors in form';
        
      } else {
        $requete="select user_id,login,admin from users where login='$login' and password='$password'";
        $result=$con->query($requete);
        if(!$result){?>
          <script>
          window.alert("Wrong username or password");
      </script>
      <meta http-equiv="refresh" content="1;url=login.php" />      
       <?php }else{
         foreach($result as $row){ 
         
         $log=$row['login'];
         $id=$row['user_id'];
         $admin=$row['admin'];
         $_SESSION['login']=$log;
         $_SESSION['id']=$id;
         $_SESSION['admin']=$admin;
         header('location: index.php');
         }
         
        }
      }  
      
    }
        ?>
       



 <section class="ftco-section " style="background-image: url(images/bg_1.jpg);">
    <div class="container">
        <br>
        <h1 class="text-center ">Login</h1>
            <form action="login.php" class="contact-form form" method="post">
                 <div class="form-group">
                <input type="text" class="form-control" placeholder="login" name="login">
               </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="password" name="password">
              </div>
              <div class="form-group text-center ">
                <input type="submit" value="Login" name="submit" class="btn btn-primary py-3 px-5 ">
              </div>
              <a href="register.php">Create Account</a>
            </form>
            
    </div>


 </section>
<?php
include('footer.php');
?>