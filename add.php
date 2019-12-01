<?php
$con=new PDO("mysql:host=localhost;dbname=projectA", 'root', '');

if(isset($_POST['submit'])){

    // check title
    if(empty($_POST['title'])){
        
    } else{
        $title = $_POST['title'];
        
    }
    
    // check ingredients
    if(empty($_POST['ingredients'])){
        
    } else{
        $ingredients = $_POST['ingredients'];
        
    }
    
    //check price
    if(empty($_POST['price'])){
        
    } else{
        $price=$_POST['price'];
    }

    // check image
    if(empty($_POST['image'])){
        
    } else{
        $image = $_POST['image'];
        
    }

    $requete = "INSERT INTO pizzas(title,ingredients,price,image) VALUES('$title','$ingredients','$price','$image')"; 
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
        <h1 class="text-center ">Add a Pizza!</h1>
            <form action="add.php" class="contact-form form" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="title" name="title">
               </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="ingredients" name="ingredients">
               </div>
                 <div class="form-group">
                <input type="number" class="form-control" placeholder="price" name="price">
               </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="image" name="image">
              </div>
              
              <div class="form-group text-center ">
                <input type="submit" value="Add Pizza" name="submit" class="btn btn-primary py-3 px-5 ">
              </div>
              
            </form>
    </div>


 </section>

<?php
include('footer.php');
?>