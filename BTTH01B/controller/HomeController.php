<?php
require_once 'service/theloaiService.php';
class HomeController{

    public function index(){
        $theloaiService = new theloaiService();
        $theloais = $theloaiService->getAllTheloai();

        include APP_ROOT.'/view/theloai/category.php';
    }

    public function updateCategory(){
        $matl = $_GET['id'];
        $theloaiService = new theloaiService();
        $theloai = $theloaiService->selectTheLoai($matl);

        include APP_ROOT.'/view/theloai/edit_category.php';
    }
}