<?php
    class Library{
        private $Ma_thu_vien;
        private $Dia_chi;

        public function Library($Ma_thu_vien,$Dia_chi){
            $this->Ma_thu_vien->$Ma_thu_vien;
            $this->Dia_chi->$Dia_chi;
        }

        public function Display_Library(){
            return "Mã thư viện: ".$this->Ma_thu_vien."<br>"."Địa chỉ: ".$this->Dia_chi."<br>";
        }
    }

?>