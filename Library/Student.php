<?php
class Student{
    private $Ma_SV;
    private $Ten_SV;
    private $Ngay_Sinh;
    private $Lop;
    private $Khoa;

    public function Student($Ma_SV,$Ten_SV,$Ngay_Sinh,$Lop,$Khoa){
        $this->Ma_SV=$Ma_SV;
        $this->Ten_SV=$Ten_SV;
        $this->Ngay_Sinh=$Ngay_Sinh;
        $this->Lop=$Lop;
        $this->Khoa=$Khoa;
    }

    public function Display_Student(){
        return "Mã sinh viên: ".$this->Ma_SV."<br>".
        "Tên sinh viên: ".$this->Ten_SV."<br>".
        "Ngày sinh: ".$this->Ngay_Sinh."<br>".
        "Lớp: ".$this->Lop."<br>".
        "Khoa: ".$this->Khoa."<br>";
    }
}

?>