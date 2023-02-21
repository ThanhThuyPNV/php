<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
</head>
<body>
    <?php 
        $phone = array(
            'Noibat' => array (
                'SP1' => array (
                    'id' => 01
                    'img' => 'https://zda.vn/wp-content/uploads/2020/12/dien-thoai-chup-anh-dep-11.jpg',
                    'name' => 'IphoneA2',
                    'price' => '200000đ',
                    'Evaluate' => '3 sao'
                ),
                'SP2' => array(
                    'id' => 01
                    'img' => 'https://zda.vn/wp-content/uploads/2020/12/dien-thoai-chup-anh-dep-11.jpg',
                    'name' => 'IphoneA2',
                    'price' => '200000đ',
                    'Evaluate' => '3 sao'
                ),
                'SP3' => array(
                    'id' => 01
                    'img' => 'https://zda.vn/wp-content/uploads/2020/12/dien-thoai-chup-anh-dep-11.jpg',
                    'name' => 'IphoneA2',
                    'price' => '200000đ',
                    'Evaluate' => '3 sao'
                ),
                'SP4' => array(
                    'id' => 01
                    'img' => 'https://zda.vn/wp-content/uploads/2020/12/dien-thoai-chup-anh-dep-11.jpg',
                    'name' => 'IphoneA2',
                    'price' => '200000đ',
                    'Evaluate' => '3 sao'
                )

            ),
            'Spmoi' => array (
                'SPM1' => array (
                    'id' => 01
                    'img' => 'https://zda.vn/wp-content/uploads/2020/12/dien-thoai-chup-anh-dep-11.jpg',
                    'name' => 'IphoneA2',
                    'price' => '200000đ',
                    'Evaluate' => '3 sao'
                ),
                'SPM2' => array(
                    'id' => 01
                    'img' => 'https://zda.vn/wp-content/uploads/2020/12/dien-thoai-chup-anh-dep-11.jpg',
                    'name' => 'IphoneA2',
                    'price' => '200000đ',
                    'Evaluate' => '3 sao'
                ),
                'SPM3' => array(
                    'id' => 01
                    'img' => 'https://zda.vn/wp-content/uploads/2020/12/dien-thoai-chup-anh-dep-11.jpg',
                    'name' => 'IphoneA2',
                    'price' => '200000đ',
                    'Evaluate' => '3 sao'
                ),
                'SPM4' => array(
                    'id' => 01
                    'img' => 'https://zda.vn/wp-content/uploads/2020/12/dien-thoai-chup-anh-dep-11.jpg',
                    'name' => 'IphoneA2',
                    'price' => '200000đ',
                    'Evaluate' => '3 sao'
                ),

            )   
                );
    ?>
     <div id= "content">
    <?php
    foreach($phone as $k => $v){
    ?>
    <h1 class ="list_title"><?php echo $k; ?></h1>
    <ul class ="list_phone">
    <?php foreach($v as $k1 => $v1){
      ?>
      <li>
      <p><span></span><?php echo $k1;?></p>
      <p><span></span><?php echo $v1['id']?></p>
      <p><span></span><?php echo $v1['img']?></p>
      <p><span></span><?php echo $v1['name']?></p>
      <p><span></span><?php echo $v1['price']?></p>
      <p><span></span><?php echo $v1['Evaluate']?></p>
      </li>
      <?php
      }
      ?>
    </ul>
    <?php
  }
  ?>
  </div>
</body>