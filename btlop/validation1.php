<?php 
// Khai báo giá trị ban đầu, nếu không form sẽ báo lỗi.
$fullname = $email = $path = "";
$error_fullname = $error_email = $error_path = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fullname"])) {
        $error_fullname = "<span style='color:red;'>Error: Họ tên bắt buộc phải nhập.</span>";
    } else {
        $fullname = $_POST["fullname"];
        if(!preg_match("/^[a-zA-Z0-9 ]*$/",$fullname)) {
        $error_fullname = "<span style='color:red;'>Error: Họ tên chỉ chấp nhận chữ và khoảng trắng.</span>";
        } else {
            echo $fullname;
        }
    }

    if (empty($_POST["email"])) {
        $error_email = "<span style='color:red;'>Error: Email bắt buộc phải nhập.</span>";
    } else {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_email = "<span style='color:red;'>Error: Email nhập chưa đúng.</span>";
        } else {
            echo $email;
        }
    }

    if (empty($_POST["path"])) {
        $error_path = "<span style='color:red;'>Error: URL bắt buộc phải nhập.</span>";
    } else {
        $path = $_POST["path"];
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$path)) {
            $error_path = "<span style='color:red;'>Error: URL nhập chưa đúng.</span>";
        } else {
            echo $path;
        }
    }
}
?>

<form action="" method="post">
    <p>Họ tên: <input type="text" name="fullname" value=""> <?php echo $error_fullname; ?></p>
    <p>Email: <input type="email" name="email" value=""> <?php echo $error_email; ?></p>
    <p>URL: <input type="text" name="path" value=""> <?php echo $error_path; ?></p>
    <button type="submit">Gửi</button>
</form>