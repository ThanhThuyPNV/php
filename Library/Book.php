<?php
    class Book{
        private $So_id;
        private $Title;
        private $NhXB;
        private $NXB;
        private $Private;
        public function setBook($So_id,$Title,$NhaXB,$NXB,$Private){
            $this->So_id=$So_id;
            $this->Title=$Title;
            $this->NhaXB=$NhaXB;
            $this->NXB=$NXB;
            $this->Private=$Private;

        }
        public function Display_Book_Infor(){
            return "Mã số sách: ".$this->So_id."<br>"."Tên sách: ".$this->Title.
            "<br>"."Nhà Sản Xuất là: ".$this->NhaXB."<br>"."Năm  xuất bản: ".$this->NXB.
            "<br>"."Giá: ".$this->Private."<br>";
        }

    }

    class Library_Book extends Book{
        private $ID_lib_book;
        private $VTKe;
        private $NDVThV;
        private $So_luong_Sach;

        public function __construct($So_id,$Title,$NhaXB,$NXB,$Private,$ID_lib_book,$VTKe,$NDVThV,$So_luong_Sach)
        {
            parent::setBook($So_id,$Title,$NhaXB,$NXB,$Private);
            $this->ID_lib_book=$ID_lib_book;
            $this->VTKe=$VTKe;
            $this->NDVThV=$NDVThV;
            $this->So_luong_Sach=$So_luong_Sach;
        }

        public function Display_Libr_Boo(){
            return "Id sách :".$this->ID_lib_book."<br>".
            "Vị trí kệ sách: ".$this->VTKe."<br>".
            "Thư viện: ".$this->NDVThV."<br>".
            "Số lượng cuốn sách: ".$this->So_luong_Sach."<br>";
        }
    }



    



    
    
    




?>