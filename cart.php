<?php
include('header.php');
$con=new PDO("mysql:host=localhost;dbname=projectA", 'root', '');
 //var_dump($_SESSION['cart']); 
 $whereid= implode(',',$_SESSION['cart']);
 $requete="SELECT * FROM pizzas WHERE pizza_id IN ($whereid)";
 $requete2="SELECT sum(price) AS prices FROM pizzas WHERE pizza_id IN ($whereid)";
 $result=$con->query($requete);
 $result2=$con->query($requete2);
 if(!$result)
{
echo "Lecture impossible";
}
else
{
    $num=1;
 ?>
 <div class="container">
 <h1 class="text-center">your Cart</h1>
<table class="table ">
    <thead>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">price</th>
    </thead>
    <tbody>
    <?php foreach($result as $row){ ?>
        <tr>
        <th scope="row"><?php echo $num; ?></th>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['price']; ?> $</td>
        </tr>
    <?php $num++; } } ?>
    <tr>
    <th colspan="2">Total price</th>
    <?php foreach($result2 as $total){ ?>
    <th class="table-secondary"><?php echo $total['prices'] ; ?> $</th>
    <?php } ?>
    </tr>
    </tbody>

</table>
<div class="text-center">
<a href="#" class=" btn btn-primary py-3 px-5 ">check out</a>
</div>
</div>
<br>
<?php include('footer.php'); ?>