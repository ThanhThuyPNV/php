<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method= "post">
        <table width="500" border="0" align="center" cellpadding="2" bgcolor="#DB95B8>
            <tr>
                <td><div align="center" ><span class="style1">TẠO - GHI - ĐỌC FILE VỪA TẠO</span></div></td>
            </tr>
            <tr>
                <td><span class="style6">&nbsp;Tên file:</span></td>
                <td><input type="text" name="ten_file" size="35" value="tap_tin/sp.txt"></td>
            </tr>
            <tr>
                <td width="103"><span class="style6">Số lượng</span></td>
                <td width="103"><label for="">
                    <input type="text" name="soluong" id="soluong" value="<?php echo $_POST['soluong']?>" size="15">
                </label></td>
            </tr>
            <tr>
                <td width="103"><span class="style6">Đơn giá</span></td>
                <td width="223"><label for="">
                    <input type="text" name="dongia" id="dongia" value="<?php echo $_POST['dongia']?>" size="15">
                </label></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="Đọc và ghi file">
                </td>
            </tr>
        </table>          
    </form>

    <?php 
    if(isset($_POST['ten_file']))
    {
        $ten_file=$_POST['ten_file'];
        $ten_hang=$_POST['ten_hang'];
        $so_luong=$_POST['so_luong'];
        $don_gia=$_POST['don_gia'];
        $thanh_tien=$so_luong*$don_gia;
    }

    //b1: Ghi file
    $file= $fopen("ten_file","a",l);
    $sp = $ten_hang."\t".$so_luong."\t".$don_gia."\t".$thanh_tien;
    $fwrite($file,$sp);
    $fclose($file);
    echo "<p text-align: 'center' class = 'style6'> Tạo và ghi file thành công ! </p>";

    // b2: Xuất ra màn hình
    $file("ten_file", "r");

    echo "<table width='350' border='0' align='center' cellpadding='2' bgcolor='' class='style'";
    echo "<tr><td>";
    echo "<p align='center'><b> Noi dung cua file: </b><br></p>";
    echo "<table border='1' width='100%'>";
    echo "<tr>";
    echo "<td>Tên hàng</td>";
    echo "<td>Số lượng</td>";
    echo "<td>Đơn giá</td>";
    echo "<td>Thành giá</td>";

    while(!feof($file))
    {
        echo "<tr>";
        $noi_dung = $fgets($file, 1000);
        $mang = explode("\t", $noi_dung); // bien doi thanh mang
        echo "<td>$mang[0]</td>";
        echo "<td>$mang[1]</td>";
        echo "<td>$mang[2]</td>";
        echo "<td>$mang[3]</td>";
        echo "</tr>";
    

    echo "</table>";
    echo "<p align = 'center' class='styel6'><b> Đọc file thành công !</b></p>";
    echo "</p>";

    fclose($file);
    echo "</tr></td>";
    }
    else
        echo "<p align='center'>Hãy nhập tên file!</p>";

    ?>
</body>
</html>