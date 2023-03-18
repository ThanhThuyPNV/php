<?php
class Loan{
    private $Id_loan;
    private $Ngay_Muon;
    private $So_luong_muon;

    public function __construct($Id_loan,$Ngay_Muon,$So_luong_muon)
    {
        $this->Id_loan=$Id_loan;
        $this->Ngay_Muon=$Ngay_Muon;
        $this->So_luong_muon=$So_luong_muon;
    }

    public function Display_Loan_info(){
        return "ID mượn: ".$this->Id_loan."<br>"."Ngày mượn: ".$this->Ngay_Muon."<br>"."Số lượng mượn: ".$this->So_luong_muon."<br>";
    }
}


?>