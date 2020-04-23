<?php
include('header.php');
include('config/db_connect.php');

$requete="SELECT * FROM pizzas ";
$result=$con->query($requete);
if(!$result)
{
echo "Lecture impossible";
}
else
{
?>
<div class="container">
 <h1 class="text-center">list of Pizzas</h1>
<table class="table ">
    <thead>
        <th scope="col">title</th>
        <th scope="col">ingredients</th>
        <th scope="col">price</th>
        <th scope="col">delete pizza</th>
    </thead>
    <tbody>
    <?php foreach($result as $row){ ?>
        <tr>
        <th scope="row"><?php echo $row['title']; ?></th>
        <td><?php echo $row['ingredients']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><a href="user_to_delete.php?id=<?php echo $row['pizza_id']; ?>" class="btn btn-primary">delete</a></td>
        </tr>
    <?php  } } ?>
   
    </tbody>

</table>
</div>
<br>
<div class="text-center">
                    <a href="add.php" class="btn btn-primary py-3 px-5"><i class="fa fa-plus-circle"></i> Add pizza</a>
                    </div><br>

<?php
include('footer.php');
?>