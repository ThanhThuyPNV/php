<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <style>
        img{
            width: 300px;
        }
        .title{
            color: #F7AF34;
            font-size:  25px;
        }
        .price{
            color: red;
        }
        p{
            text-align:"center";
        }
        .button{
            text-align:"center";
            background-color: #F6C98A;
            border-radius:5px;
            border: none;
            width: 100px;
            height: 30px;
        }
        .button:hover{
            background-color: #CBCBC8;
        }
        .container{
            text-align:center;
            border-bottom:3px;
        }
    </style>
    <?php 
    $product=array(
        'THỜI TRANG NAM'=>array(
            'pro1'=>array(
                'ID'=>'01',
                'Name'=>'Áo sơ mi nam chuẩn Hàn Quốc',
                'Code'=>'FD6872',
                'Price'=>'2000000đ',
                'img'=>'<img src="https://hidanz.com/wp-content/uploads/2021/09/ao-so-mi-nam-han-quoc7.jpg"/>',
            ),
            'pro2'=>array(
                'ID'=>'02',
                'Name'=>'Áo sơ mi nam chuẩn Hàn Quốc',
                'Code'=>'FD6872',
                'Price'=>'2000000đ',
                'img'=>'<img src="https://hidanz.com/wp-content/uploads/2021/09/ao-so-mi-nam-han-quoc7.jpg"/>',
            ),
            'pro3'=>array(
                'ID'=>'03',
                'Name'=>'Áo sơ mi nam chuẩn Hàn Quốc',
                'Code'=>'FD6872',
                'Price'=>'2000000đ',
                'img'=>'<img src="https://hidanz.com/wp-content/uploads/2021/09/ao-so-mi-nam-han-quoc7.jpg"/>',
            ),
        ),
        'THỜI TRANG NỮ'=>array(
            'pro01'=>array(
                'ID'=>'R3789',
                'Name'=>'Đầm nữ cá tính, thời thượng',
                'Code'=>'FD6872',
                'Price'=>'2000000đ',
                'img'=>'<img src="https://congsohanquoc.com/media/catalog/product/cache/6/small_image/540x620/9df78eab33525d08d6e5fb8d27136e95/v/a/vay-lien-han-quoc-vl10635.jpg"/>',
            ),
            'pro02'=>array(
                'ID'=>'R3789',
                'Name'=>'Đầm nữ cá tính, thời thượng',
                'Code'=>'FD6872',
                'Price'=>'2000000đ',
                'img'=>'<img src="https://congsohanquoc.com/media/catalog/product/cache/6/small_image/540x620/9df78eab33525d08d6e5fb8d27136e95/v/a/vay-lien-han-quoc-vl10635.jpg"/>',
            ),
            'pro03'=>array(
                'ID'=>'R3789',
                'Name'=>'Đầm nữ cá tính, thời thượng',
                'Code'=>'FD6872',
                'Price'=>'2000000đ',
                'img'=>'<img src="https://congsohanquoc.com/media/catalog/product/cache/6/small_image/540x620/9df78eab33525d08d6e5fb8d27136e95/v/a/vay-lien-han-quoc-vl10635.jpg"/>',
            ),
        )
    )
    ?>
    <?php 
    foreach($product as $k=>$v){
    ?><br><hr>
    <div class="container"><div class="title"><?php echo $k?></div></div><br>
    <div class="container">
        <div class="row">
        <?php foreach($v as $k1=>$v1){ 
        ?>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $v1['img']  ?></h5><br>
                    <h4 class="card-text"><?php echo $v1['Name'] ?></h4>
                    <p class="card-text"><?php echo $v1['Code'] ?></p>
                    <p class="card-text"><div class="price"><?php echo $v1['Price'] ?> <span style="text-decoration:underline">đ</span></div></p>
                    <button class="button" onclick="myFunction()">Đặt mua</button>
                    <script>
                        function myFunction() {
                            alert("Thank you your order !");
                            }
                    </script>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
        </div>
    </div>
        <?php
        }?>
</body>
</html>