<?php include('header.php');
if(empty($_SESSION['cart'])){

    $_SESSION['cart'] =array();
}

array_push($_SESSION['cart'],$_GET['id']);

header('Location: cart.php');
?>



<?php include('footer.php'); ?>

