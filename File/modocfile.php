<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width = "350" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td bgcolor="#CC0066">
                <?php
                $file = fopen("..\tap_tin\nhan.txt","r",l);
                if(!$file)
                {
                    echo "<br> Khong the mo file nay.<br>";
                    exit;
                }else
                {
                    echo "<p align='center' class='style'><font color='#ffffff'";
                    echo "<b></b><br>";
                    while(!feof($file))
                    {
                        $noi_dung = fgets($file); // Đọc file
                        echo nl2br($noi_dung); // display có nhiều dòng
                    }
                    echo "<br><b>Mo va doc file thanh cong!</br>";
                    echo "</font></p>";
                }
                fclose($file);
                ?>
            </td>
        </tr>
    </table>
</body>
</html>