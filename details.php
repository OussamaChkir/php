<?php
include('config/db_connect.php');
if(isset($_POST['delete'])){

  $id_to_delete = $_POST['id_to_delete'];

  $requete = "DELETE FROM pizzas WHERE pizza_id = $id_to_delete";
  $result=$con->query($requete);

  if(!$result){
    echo "error";
  } else {
    header('Location: index.php');
  }

}
// check GET request id param
if(isset($_GET['id'])){
$id=$_GET['id'];

$requete = "SELECT * FROM pizzas WHERE pizza_id = $id";
$result=$con->query($requete);

if(!$result)
{
echo "Lecture impossible";
}
else
{
     
 include('header.php');
 
?>
<div class="container ftco-animate  ">
<?php  foreach($result as $row){ ?>
    <h2 class="mb-3 text-center"><?php echo $row['title'];?></h2>
        <p class="text-center"><?php echo $row['ingredients'];?></p>
            <p class="text-center">
              <img src="images/<?php echo $row['image'];?>.jpg" alt="Responsive image" class="img-thumbnail">
            </p>
   
</div>
<?php
                  if(isset($_SESSION['id']) && $_SESSION['admin']==1){
                 ?>
<form action="details.php" class="contact-form text-center" method="post">
  <div class="form-group">
    <input type="hidden" name="id_to_delete" value="<?php echo $row['pizza_id']; ?>">
  </div>
  <div class="form-group">
    <input type="submit" name="delete" value="Delete" class="btn btn-primary py-3 px-5">
  </div>
</form>

<?php 
                  }else if(isset($_SESSION['id']) && $_SESSION['admin']!=1){?>
                  <div class="text-center">
                    <a href="add_to_cart.php?id=<?php echo $row['pizza_id'] ?>" class="btn btn-primary py-3 px-5">Add to Cart</a>
                    </div>
                    <br>
              <?php    }
 }
}
}
include('footer.php');
?>