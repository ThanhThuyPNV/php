<?php
    class Author{
        private $NameAu;
        private $NgaySinh;
        private $GioiTinh;
        private $DiaChi;

        public function GetAuthor($NameAu,$NgaySinh,$GioiTinh,$DiaChi){
            $this->NameAu=$NameAu;
            $this->NgaySinh=$NgaySinh;
            $this->GioiTinh=$GioiTinh;
            $this->DiaChi=$DiaChi;
        }

        public function Display_AuthorInfo(){
            return "Tên tác giả: ".$this->NameAu."<br>"."Ngày sinh: ".$this->NgaySinh."<br>"."Giới tính: ".$this->GioiTinh."<br>".
            "Địa chỉ: ".$this->DiaChi."<br>";
        }
    }


?>