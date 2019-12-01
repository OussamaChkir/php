<?php
include('header.php');
$con=new PDO("mysql:host=localhost;dbname=projectA", 'root', '');
$requete="SELECT * FROM users ";
$result=$con->query($requete);
if(!$result)
{
echo "Lecture impossible";
}
else
{
?>
<div class="container">
 <h1 class="text-center">list of Users</h1>
<table class="table ">
    <thead>
        <th scope="col">name</th>
        <th scope="col">adresse</th>
        <th scope="col">Delete User</th>
    </thead>
    <tbody>
    <?php foreach($result as $row){ ?>
        <tr>
        <th scope="row"><?php echo $row['name']; ?></th>
        <td><?php echo $row['adresse']; ?></td>
        <td><a href="user_to_delete.php?id=<?php echo $row['user_id']; ?>" class="btn btn-primary">delete</a></td>
        </tr>
    <?php  } } ?>
   
    </tbody>

</table>
</div>
<?php
include('footer.php');
?>