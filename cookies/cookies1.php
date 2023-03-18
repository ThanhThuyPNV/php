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
        .center1{
            text-align: center;
            background-color:#668B8B;
        }
        .table1{
            margin-left: auto;
            margin-right: auto;
            background-color:#96CDCD;
            height: 200px;
            width: 300px;
            text-align: center;
            
        }
    </style>
    <?php 
    session_start();
    $flag = 0;
    if(!empty($_POST["name"]) && !empty($_POST["mail"]) && !empty($_POST["add"]))
    {
        $inform = $_POST["name"]."-".$_POST["mail"]."-".$_POST["add"];
        setcookie("khach_hang", $inform, time()+3600);
        $flag = 1;
    }
    ?>
    <form action=""  method="post">
        <table class = "table1">
            <tr class = "center1">
                <td colspan="2">
                    THÔNG TIN ĐĂNG NHẬP
                </td>
            </tr>
            <tr>
                <td>
                Họ và tên:
                </td>
                <td>
                <input type="text" name="name" placeholder ="Nhập họ và tên" value="<?php if(isset($_POST['name'])) echo $_POST["name"]; ?>" size = "20"/>
                </td>
            </tr>
            <tr>
                <td>
                Email:
                </td>
                <td>
                <input type="text" name="mail" placeholder ="Nhập email" value="<?php if(isset($_POST['mail'])) echo $_POST["mail"]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                Địa chỉ:
                </td>
                <td>
                <input type="text" name="add" placeholder ="Nhập địa chỉ" value="<?php if(isset($_POST['add'])) echo $_POST["add"]; ?>">
                </td>
            </tr>
            <tr class="center">
            <td colspan="2">
                <button type="submit" >Xác nhận</button>
            </td>
            </tr>
        </table>  
    </form>
    <font color="#668B8B">
        <?php 
            if($flag==1)
            {
                echo "<table><tr class='center'><td>";
                echo "<font color='#ffffff'>Thông tin khách hàng: </br>";
                echo $_COOKIE["khach_hang"]."<br>";
                echo "<a href='cookies_doc.php'>Click here!</a>";
                echo "</td></tr></table>";
            }
        ?>
    </font>
</body>
</html>