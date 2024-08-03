<?php
require_once 'model/theloai.php';
class theloaiService{
    public function getAllTheloai(){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        if($conn != null){
            $sql = "SELECT * FROM theloai ORDER BY ma_tloai DESC";
            $stmt = $conn->query($sql);

            $theloais = [];
            while($row = $stmt->fetch()){
                $theloai = new theloai($row['ma_tloai'], $row['ten_tloai'], $row['SLBaiViet']);
                array_push($theloais, $theloai);
            }
            return $theloais;
        }else {
            echo "Not connected";
        }

        // try {
        //     $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485", 'root', '');

        //     $sql = "SELECT * FROM theloai";
        //     $stmt = $conn->query($sql);

        //     $theloais = [];
        //     while($row = $stmt->fetch()){
        //         $theloai = new theloai($row['ma_tloai'], $row['ten_tloai'], $row['SLBaiViet']);
        //         array_push($theloais, $theloai);
        //     }
        //     return $theloais;
        // }catch(PDOException $e){
        //     $conn = null;
        // }
    }

    public function selectTheLoai($maTL){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        if($conn != null){
            $sql = "SELECT * FROM theloai WHERE ma_tloai = '$maTL'";
            $stmt = $conn->query($sql);

            $row = $stmt->fetch();
            $theloai = new theloai($row['ma_tloai'], $row['ten_tloai'], $row['SLBaiViet']);
            return $theloai;
        }else {
            echo "Not connected";
        }
    }

    public function addTheLoai($theloai){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        if($conn != null){
            $sql = "INSERT INTO theloai(ten_tloai) VALUES ('{$theloai['ten_tloai']}')";
            $stmt = $conn->query($sql);
    
            if($stmt){
                return true;
            }else{
                return false;
            }
        }
    }

    public function updateTheLoai(theloai $theloai){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();
        $sql = "UPDATE theloai 
                SET ten_tloai = '{$theloai->getTen_tloai()}'
                WHERE ma_tloai = {$theloai->getMa_tloai()}";
        $stmt = $conn->query($sql);
        if($stmt){
            return true;
        }else{
            return false;
        }
    }

    public function deleteTheLoai($maTL){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();
        $sql = "DELETE FROM theloai WHERE ma_tloai = '{$maTL}'";
        $stmt = $conn->query($sql);
        if($stmt){
            return true;
        }else{
            return false;
        }
    }
}