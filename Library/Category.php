<?php
class Cetagory{
    private $Ten_chuyen_Muc;
    private $Ma_Chu_m;
    private $Mo_ta;

    public function Category($Ten_chuyen_Muc,$Ma_Chuyen_muc,$Mo_ta){
        $this->Ten_chuyen_Muc=$Ten_chuyen_Muc;
        $this->Ma_Chuyen_muc=$Ma_Chuyen_muc;
        $this->Mo_ta=$Mo_ta;
    }


    public function Display_Category(){
        return "Tên mã chuyên mục: ".$this->Ten_chuyen_Muc."<br>"."Mã chuyên mục: ".$this->Ma_Chuyen_muc."<br>"."Mô tả: ".$this->Mo_ta."<br>";
    }
}
?>