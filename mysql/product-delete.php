<?php 
    error_reporting(E_ALL ^ E_DEPRECATED);
    require_once'../mysql/connect1';
    error_reporting(2);


    // Xóa sản phẩm theo id
    if(isset($_GET['idProducts']))
    {
        $idProduct = $_GET['idProduct'];
        $sql = "DELETE FROM products WHERE id = " .$idProuct;
        $result = mysqli_query($conn, $sql);
        if ($result)
        {
?>
    <script type="text/javasript">
        window.location = 'product-list.php?ps=success';
    </script>
<?php 
        }else{
?>
            <script type="text/javasript">
                window.location = 'product-list.php?pf=fail';
            </script>
<?php
        }
    }    
?>