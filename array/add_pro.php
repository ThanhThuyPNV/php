<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div class="form_group">
            <label for="">Mã sản phẩm</label>
            <input type="text" name="pro_id" placeholder="Nhập mã sản phẩm">
            <?php if(!empty($errors)) && in_array('ma_err',$errors) ?>
            <span> Mã sản phẩm không được để trống</span>
            <?php endif ?>
        </div>
        <div class="form_group">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name_pro" placeholder="Nhập mã sản phẩm">
            <?php if(!empty($errors)) && in_array('name_err',$errors) ?>
            <span> Mã sản phẩm không được để trống</span>
            <?php endif ?>
        </div>
        <div class="form_group">
            <label for="">Số lượng</label>
            <input type="text" name="quanlity_pro" placeholder="Nhập mã sản phẩm">
            <?php if(!empty($errors)) && in_array('soluong_err',$errors) ?>
            <span> Số lượng không được để trống</span>
            <?php endif ?>
        </div>
        <div class="form_group">
            <label for="">Giá sản phẩm</label>
            <input type="text" name="price_pro" placeholder="Nhập mã sản phẩm">
            <?php if(!empty($errors)) && in_array('gia_err',$errors) ?>
            <span> Mã sản phẩm không được để trống</span>
            <?php endif ?>
        </div>
        <div class="form_group">
            <label for="">Hình ảnh</label>
            <input type="file" name="image_pro" placeholder="Chọn hình ảnh">
            <?php if(!empty($errors)) && in_array('ma_err',$errors) ?>
            <span> Mã sản phẩm không được để trống</span>
            <?php endif ?>
        </div>
    </form>
</body>
</html>