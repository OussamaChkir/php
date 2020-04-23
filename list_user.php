<?php
include('header.php');
include('config/db_connect.php');

$requete="SELECT * FROM users  WHERE admin =0 ";
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
<br>
<div class="text-center">
                    <a href="register.php" class="btn btn-primary py-3 px-5">Add user</a>
                    </div><br>
<?php
include('footer.php');
?>