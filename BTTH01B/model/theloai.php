<?php
class theloai{
    private $ma_tloai;
    private $ten_tloai;
    private $slBaiViet;

    public function __construct($ma_tloai, $ten_tloai, $slBaiViet){
        $this->ma_tloai = $ma_tloai;
        $this->ten_tloai = $ten_tloai;
        $this->slBaiViet = $slBaiViet;
    }

    public function getMa_tloai(){
        return $this->ma_tloai;
    }

    public function getTen_tloai(){
        return $this->ten_tloai;
    }

    public function getSlBaiViet(){
        return $this->slBaiViet;
    }

    public function setTen_tloai($ten_tloai){
        $this->ten_tloai = $ten_tloai;
    }
}