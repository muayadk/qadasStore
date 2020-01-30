<?php session_start();
if(isset($_GET['product_id']))
{
   $quantity=$_GET['quantity'];
   $product_id=$_GET['product_id'];
   $_SESSION['cart'][$product_id]=array("product_id"=>$product_id, "quantity"=>$quantity);
   header('Location:productall.php');
}

?>