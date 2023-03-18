<?php
include "./Author.php";
include "./Book.php";
include "./Library.php";
include "./Loan.php";
include "./Category.php";
include "./Student.php";


$author=new Author();
$author->GetAuthor("Lê Văn Nam","02-02-1979","Nam","Quảng Nam");
echo $author->Display_AuthorInfo();
echo "-----------------------------------------------------------"."<br>";
$book=new Library_Book("A1","Truyện trinh thám","Lê Văn Nam",1990,34000.000,"U8",61,"Đà Nãng","5");

echo $book->Display_Book_Infor();
echo "-----------------------------------------------------------"."<br>";
echo $book->Display_Libr_Boo();
echo "-----------------------------------------------------------"."<br>";

$loan=new Loan("1120","14-03-2020",4);
echo $loan->Display_Loan_info();
echo "-----------------------------------------------------------"."<br>";
$student=new Student();
$student->Student("SV04","Hoàng Ngọc Vân","12-09-2003","PNV24A","CNTT");
echo $student->Display_Student();
echo "-----------------------------------------------------------"."<br>";
$category=new Cetagory();
$category->Category("Giật gân","STT0943","Hấp dẫn, kịch tính");
echo $category->Display_Category();
echo "-----------------------------------------------------------"."<br>";

?>