<?php
include '../model/DbConnection.php';
include '../model/pagination.php';
?>

<?php include_once 'header.php' ?>
<?php
$result = mysqli_query($con,"SELECT * FROM products WHERE id=".$_GET['id']."");
$product = mysqli_fetch_object($result);
    if($_SESSION['cart']==NULL){
        $id = $product['id'];
        $nume = $product['nume'];
        $price = $product['pret'];
        $quantity = 1;
    }
?>
<table>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Sub Total</th>
    </tr>
</table>

