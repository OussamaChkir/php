<?php
include('config/db_connect.php');
include('header.php');
$id= $_SESSION['id'];

if(isset($_POST['submit'])){

    //update name 
    if(isset($_POST['name'])){
        
        $requete1="UPDATE users SET name= :fName WHERE user_id=$id ";
        $res=$con->prepare($requete1);
        $res->bindParam(':fName', $_POST['name'], PDO::PARAM_STR);
        $res->execute();
    }

    //update adresse 
    if(isset($_POST['adresse'])){
        
        $requete1="UPDATE users SET adresse= :fadresse WHERE user_id=$id ";
        $res=$con->prepare($requete1);
        $res->bindParam(':fadresse', $_POST['adresse'], PDO::PARAM_STR);
        $res->execute();
    }

    //update login 
    if(isset($_POST['login'])){
        
        $requete1="UPDATE users SET login= :flogin WHERE user_id=$id ";
        $res=$con->prepare($requete1);
        $res->bindParam(':flogin', $_POST['login'], PDO::PARAM_STR);
        $res->execute();
    }

    //update password 
    if(isset($_POST['password'])){
        
        $requete1="UPDATE users SET password= :fpassword WHERE user_id=$id ";
        $res=$con->prepare($requete1);
        $res->bindParam(':fpassword', $_POST['password'], PDO::PARAM_STR);
        $res->execute();
    }

} 

$requete="SELECT * FROM users  where user_id=$id";
$result=$con->query($requete);
if(!$result)
{
echo "Lecture impossible";
}
else
{
       
        
    

?>


 <div class="container">
     <br>
     <h1 class="text-center ">Edit Your Profil</h1>
     <form action="edit_profil.php" class="contact-form  form2" method="post">
         <table class="table">
         <?php   foreach($result as $row){  ?>
         <tr>
         <td><h5>name</h5></td> <td><h5><?php echo $row['name'];?></h5></td> <td> <input type="text" name="name" id=""></td>
         </tr>
         <tr>
         <td><h5>adresse</h5></td> <td><h5><?php echo $row['adresse'];?></h5></td> <td> <input type="text" name="adresse" id=""></td>
         </tr>
         <tr>
         <td><h5>login</h5></td> <td><h5><?php echo $row['login'];?></h5></td> <td> <input type="text" name="login" id=""></td>
         </tr>
         <tr>
         <td><h5>password</h5></td> <td><h5><?php echo $row['password'];?></h5></td> <td> <input type="text" name="password" id=""></td>
         </tr>
         
         <?php } } ?>
         
         </table>
         <br><br>
         <div class="form-group text-center ">
         <input type="submit" value="submit" name="submit" class="  btn btn-primary py-3 px-5" >
         </div>
         </form>
 </div>




<?php
include('footer.php');
?>