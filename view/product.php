<?php
include '../model/DbConnection.php';
include '../model/pagination.php';
?>
<?php include_once 'header.php' ?>
<?php
if(isset($_GET['id'])){
    $id = preg_replace('#[^0-9]#i','',$_GET['id']);
    $sql = mysqli_query($con,"SELECT * FROM products WHERE id='$id' LIMIT 1");
    $productCount = mysqli_num_rows($sql);
    if($productCount>0){
        while($row = mysqli_fetch_array($sql)){
            $id = $row["id"];
            $product_name = $row["nume"];
            $image = $row["imagine"];
            $price = $row["pret"];
            $description = $row['descriere'];
        }
    }else{
        echo "That item does not exist!";
    }
}else{
    echo "No product in the system with that id";
    exit();
}

?>
<menu>
    <ul>
        <li><?php echo $id ?></li>
        <li><?php echo $product_name ?></li>
        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'" alt="Avatar" class="image" />'?>
        <li><?php echo $price ?></li>
        <li><?php echo $description ?></li>
        <li><a href="shopCart.php?id=<?php echo $id; ?>"><input type="button" value="Add to Cart"/></a></li>
    </ul>
</menu>
<?php include_once 'footer.php'?>
