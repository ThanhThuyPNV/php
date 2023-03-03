<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Danh sach sinh vien</p>
    <table border="1" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quanlity</th>
                <th>Price</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tr>
            <td><?php echo $value['id'] ?></td>
            <td><?php echo $value['Name'] ?></td>
            <td><?php echo $value['Quanlity'] ?></td>
            <td><?php echo $value['Price'] ?></td>
            <td><?php echo $value['Image'] ?></td>
            <td><?php echo $value['Update'] ?></td>
            <td><?php echo $value['Delete'] ?></td>
        </tr>
    </table>
</body>
</html>