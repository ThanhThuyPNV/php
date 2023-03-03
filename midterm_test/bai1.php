<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .error{
            color: red;
            font-style: italic;
            font-size: 90%
        }
        .form{
            margin-left: auto;
            margin-right: auto;
            width: 1000px;
            height: 400px;
            background-image: url('https://wallpaperaccess.com/full/824.jpg');
        }
    </style>
    <?php
    session_start();
    $flag=0;
    if (!empty($_POST['name']) && !empty ($_POST['phone']) && !empty($_POST['mail']) && !empty($_POST['content'])){
        $_SESSION['name']=$_POST['name'];
        $_SESSION['phone']=$_POST['phone'];
        $_SESSION['mail']=$_POST['mail'];
        $_SESSION['content']=$_POST['content'];

        $flag=1;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $errors = array();
        if (!empty($_POST['name'])){
            $name = $_POST['name'];
        }else{
            $errors[]='name_err';
        }
        if (!empty($_POST['phone'])){
            $phone = $_POST['phone'];
        }else{
            $errors[]='phone_err';
        }
        if (!empty($_POST['mail'])){
            $mail = $_POST['mail'];
        }else{
            $errors[]='mail_err';
        }
        if (!empty($_POST['content'])){
            $content = $_POST['content'];
        }else{
            $errors[]='content_err';
        }
    }

    function val_name($name) {
        $parttern = "/^[A-Za-z0-9_\.]{6,32}$/";
        if (preg_match($parttern, $name))
            return true;
    }
    function val_email($mail) {
        $parttern = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
        if (preg_match($parttern, $mail))
            return true;
    }
    function val_phone($phone)
    {
    return preg_match('/^[0-9]{10}+$/', $phone);
    }
    
    ?>
    <p>Liên hệ</p>
    <form action="" class="form" method="post">
        <div>
            <input type="text" name="name" placeholder="Họ và tên" <?php if(isset($_POST['name']))  echo $_POST['name']; ?>><br>
            <?php if (!empty($errors) && in_array('name_err',$errors)): ?>
            <span class="error">* Tên không được để trống.</span>
            <?php endif;?>
        </div><br>
        <div>
            <input type="text" name="phone" placeholder="Điện thoại" <?php if(isset($_POST['phone']))  echo $_POST['phone']; ?>>
            <?php if (!empty($errors) && in_array('phone_err',$errors)): ?><br>
            <span class="error">* Số điện thoại không được để trống.</span>
        <?php endif;?>
            <input type="text" name="mail" placeholder="Email" <?php if(isset($_POST['mail']))  echo $_POST['mail']; ?>><br>
            <?php if (!empty($errors) && in_array('mail_err',$errors)): ?><br>
            <span class="error">* Email không được để trống.</span>
            <?php endif;?>
        </div><br>
        <div>
            <textarea name="content" id="" cols="30" rows="8" placeholder="Nội dung" <?php if(isset($_POST['content']))  echo $_POST['content']; ?>></textarea><br>
            <?php if (!empty($errors) && in_array('content_err',$errors)): ?>
            <span class="error">* Nội dung không được để trống.</span>
            <?php endif;?>
        </div><br>
        <div>
            <button class="button">Gửi tin</button>
        </div>
    </form>
    <div class ="">
        <?php
        if ($flag==1) {
            echo "<table class='show'><tr class='center'><td>";
            echo "Xin chào :" .$_SESSION['name'] .'<br>';
            echo "Phone:".$_SESSION['phone'] .'<br>';
            echo "Email:" .$_SESSION['mail'] .'<br>';
            echo "Nội dung:" .$_SESSION['content'] .'<br>';
            echo "</td></tr></table>";
        }
    ?>
</div>

</body>
</html>