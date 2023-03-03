<?php
$filename = 'C:\xampp\htdocs\php\session\session.php';

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}
?>

<?php 
$file = 'https://topdev.vn/blog/tu-lap-trinh-vien-junior-den-mid/';
$file_headers = @get_headers($file);
if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
    $exists = false;
}
else {
    $exists = true;
}
?>