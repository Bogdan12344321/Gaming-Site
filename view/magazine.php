<?php
include '../model/DbConnection.php';
include '../model/pagination.php';
?>
<?php include_once 'header.php' ?>
<div id="content_magazine">
    <div class="content_products_magazine">
        <h1>New brands on the market</h1>
        <?php
            $query = "SELECT SQL_CALC_FOUND_ROWS * FROM products ORDER BY id ASC LIMIT $start_from,$perPage";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result))
                {
                    ?>
                    <a class="product" href="product.php?id=<?php echo $row['id']; ?>" title="<?php echo $row['nume']?>">
                        <div class="container">
                            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imagine']).'" alt="Avatar" class="image" />'?>
                            <div class="overlay">
                                <div class="text"><?php echo $row['nume'];?></div>
                            </div>
                        </div>
                    </a>
                    <?php
                }
            }
        ?>
    </div>
</div>
<div id="footer">
    <section id="pagination">
        <?php
        $page_query = "SELECT * FROM products ORDER BY id DESC";
        $page_result = mysqli_query($con,$page_query);
        $total_record = mysqli_num_rows($page_result);
        $total_pages = ceil($total_record/$perPage);

        for($i=1;$i<=$total_pages; $i++){
            ?>
            <ul class="pagination">
                <li><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            </ul>
            <?php
        }
        ?>
    </section>

</div>

<?php include_once 'footer.php'?>