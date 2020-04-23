<?php
include('config/db_connect.php');
if(isset($_GET['id'])){
$id=$_GET['id'];

$requete = "DELETE FROM pizzas WHERE pizza_id = $id";
$result=$con->query($requete);

if(!$result)
{
echo "Lecture impossible";
}
else
{
header('Location: index.php');
}
}
    ?>