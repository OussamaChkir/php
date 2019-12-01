<?php
$con=new PDO("mysql:host=localhost;dbname=projectA", 'root', '');
if(isset($_POST['submit'])){
    $name=$adresse=$login=$Password='';
    // check full_name
    if(empty($_POST['name'])){
      
    } else{
      $name = $_POST['name'];
      
    }
    
    // check adresse
    if(empty($_POST['adresse'])){
      
    } else{
      $adresse = $_POST['adresse'];
      
    }
    
    // check login
    if(empty($_POST['login'])){
      
    } else{
      $login = $_POST['login'];
      
    }
    
    // check password
    if(empty($_POST['password'])){
      
    } else{
      $password = $_POST['password'];
    }
    $requete = "INSERT INTO users(name,adresse,login,password) VALUES('$name','$adresse','$login','$password')";
    $nb=$con->exec($requete);
    if($nb!=1){
      echo "<script type=\"text/javascript\">
      alert('Erreur : ".$idcom->errorCode()."')</script>"; 
    }else {
      // success
      header('Location: index.php');
    }

} 
include('header.php');
?>
 <section class="ftco-section" style="background-image: url(images/bg_1.jpg);">
    <div class="container">
        <br>
        <h1 class="text-center ">Register</h1>
            <form action="register.php" class="contact-form form" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="name" name="name">
               </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="adresse" name="adresse">
               </div>
                 <div class="form-group">
                <input type="text" class="form-control" placeholder="login" name="login">
               </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="password" name="password">
              </div>
              <div class="form-group text-center ">
                <input type="submit" value="Register" name="submit" class="btn btn-primary py-3 px-5 ">
              </div>
              
            </form>
    </div>


 </section>

<?php
include('footer.php');
?>