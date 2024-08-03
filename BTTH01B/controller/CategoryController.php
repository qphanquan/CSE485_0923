<?php
require_once 'service/theloaiService.php';
class CategoryController {
    public function addCategory(){
        $theloaiService = new theloaiService();
        if(isset($_POST['submitCategory'])){
            $ten_tloai = $_POST['ten_tloai'];

            $theloai = [
                'ten_tloai' => $ten_tloai,
            ];

            if($theloaiService->addTheLoai($theloai)){
                header('location: '.DOMAIN.'index.php');
                exit();
            }
        }
    }

    public function update(){
        $matl = $_GET['id'];
        $theloaiService = new theloaiService();
        $theloai = $theloaiService->selectTheLoai($matl);

        if(isset($_POST['submit'])){
            $theloai->setTen_tloai($_POST['tenTLoai']);

            if($theloaiService->updateTheLoai($theloai)){
                header('location: '.DOMAIN.'index.php');
                exit();
            }
        }
    }

    public function delete(){
        $matl = $_GET['id'];
        $theloaiService = new theloaiService();
        if($theloaiService->deleteTheLoai($matl)){
            header('location: '.DOMAIN.'index.php');
            exit();
        }
    }
}