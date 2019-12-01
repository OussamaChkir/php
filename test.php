<?php  
$con=new PDO("mysql:host=localhost;dbname=projectA", 'root', '');
include('header.php');
$requete="SELECT * FROM users  where user_id=6";
$result=$con->query($requete);
foreach($result as $row){

if(isset($_POST['submit'])){

if(isset($_POST['nom'])){
    $name = $_POST['nom'];
 
}else{
$name=$row['name'];
}
if(isset($_POST['adresse'])){
    $adresse = $_POST['adresse'];
 
}else{
    $adresse = $row['adresse'];
}
if(isset($_POST['login'])){
    $login = $_POST['login'];
 
}else{
$login=$row['login'];
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
 
}else{
$password=$row['password'];
}
$requete1="UPDATE users SET name= :fName, adresse= :fadresse, login= :flogin, password= :fpassword  WHERE user_id=6 ";
$res=$con->prepare($requete1);
$res->bindParam(':fName', $name);
$res->bindParam(':fadresse', $adresse);
$res->bindParam(':flogin', $login);
$res->bindParam(':fpassword', $password);

$res->execute(); 
}
}
?>

<form action="test.php" method="post">
<input type="text" name="nom" id="">
<input type="text" name="adresse" id="">
<input type="text" name="login" id="">
<input type="text" name="password" id="">
<input type="submit" value="ok" name="submit">
</form>