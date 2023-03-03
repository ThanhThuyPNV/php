<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<title>Title</title>
<style>
    .form {
        width: 30%;
        margin: auto;
        padding: auto;
    }
    table {
        margin-left: 50px;
        width:300px;
        background-color: #96CDCD;
    }
    table tr,td {
        padding: 10px;
    }
    .center {
        background-color: #668B8B;
        font-weight: bold;
        font-size: 20px;
        text-align: center;
    }

    .center button {
        background-color: #668B8B;
        font-weight: bold;
        font-size: 20px;
    }
    table .center {
        margin: auto;
        margin-left: auto;
        margin-right: auto;
    }
    .kq{
        text-align: center;
        margin-left: auto;
        margin-right: auto;
    }
</style>
</head>
<body>
    <?php 
        session_start();
        $flag=0;
        if (!empty($_POST['name']) && !empty ($_POST['mail']) && !empty($_POST['username']) && !empty($_POST['pass'])){
            $_SESSION['fullname']=$_POST['name'];
            $_SESSION['email']=$_POST['mail'];
            $_SESSION['username']=$_POST['username'];
            $_SESSION['password']=$_POST['pass'];

            $flag=1;
        }
    ?>

    <form action="" method="post" class="form">
        <table>
            <tr class="center">
                <td colspan="2">
                    THÔNG TIN ĐĂNG NHẬP
                </td>
            </tr>

            <tr class="">
                <td>
                    Họ và tên: 
                </td>
                <td>
                    <input type="text" name="name" id="name" value="<?php if(isset($_POST['name']))  echo $_POST['name']; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    Email: 
                </td>
                <td>
                    <input type="text" name="mail" id="mail" value="<?php if(isset($_POST['mail']))  echo $_POST['mail']; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    Tên đăng nhập: 
                </td>
                <td>
                    <input type="text" name="username" id="tenDangNhap" value="<?php if(isset($_POST['username']))  echo $_POST['username']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Mật khẩu: 
                </td>
                <td>
                    <input type="text" name="pass" id="pass" value="<?php if(isset($_POST['pass']))  echo $_POST['pass']; ?>">
                </td>
            </tr>
            <tr class="center">
                <td colspan="2">
                    <button type="submit" class = "submit1">Xác nhận</button>
                </td>
            </tr>
        </table>
    </form>
<div class ="kq">
        <?php
        if ($flag==1) {
            echo "<table class='show'><tr class='center'><td>";
            echo "Xin chào :" .$_SESSION['fullname'] .'<br>';
            echo "Email:".$_SESSION['email'] .'<br>';
            echo "Tên đăng nhập:" .$_SESSION['username'] .'<br>';
            echo "Mật khẩu:" .$_SESSION['password'] .'<br>';
            echo "<a href='sessionbt2.php' >Click here! </a>";
            echo "</td></tr></table>";
        }
    ?>
</div>
</body>
</html>