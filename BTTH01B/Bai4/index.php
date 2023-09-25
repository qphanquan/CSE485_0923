<?php
$conn = new PDO("mysql:host=localhost;dbname=btth01_cse485", "egator", "admin123@");

$sql = "SELECT * FROM baiviet";
$stmt = $conn->prepare($sql);
$stmt->execute();

$baiviets = $stmt->fetchAll();

echo "<pre>";
var_export($baiviets[0]['hinhanh']);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang Chủ</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .slider-img {
      width: 100%;
    }

    .top-bai-hat {
      display: block;
      text-align: center;
      margin-top: 20px;
    }
    
    .card-title {
      margin-bottom: 20px;
    }
    .card-title img
    {
      width: 100%;
      height: 100%;
    }
    .card-body
    {
      padding: 0 !important;
    }
    .card-text
    {
      display: flex;
      justify-content: center;
      color: rgb(95, 150, 215);
    }
    h2
    {
      color: rgb(95, 150, 215);
    }
    </style>
</head>

<body>
  
    <?php
    include 'header.php';
    ?>

  <main>
    <img class="slider-img" src="./img/slider.jpg" alt="Slider Image">

    <h2 class="top-bai-hat">Top bài hát yêu thích</h2>

  <div class="container-fluid">
    <div class="row">
      <?php foreach($baiviets as $baiviet){ ?>
        <div class="col-md-3">
          <div class="card">
            <!-- <img src="image1.jpg" class="card-img-top" alt="Image 1"> -->
            <div class="card-body">
              <h5 class="card-title"><img src="./img/<?= $baiviet['hinhanh']?>" alt="Image 1"></h5>
              <p class="card-text"><?= $baiviet['tieude'] ?></p>
            </div>
          </div>
        </div>
      <?php }?>
    </div>
  </div>
  </main>

    <?php 
    include 'footer.php';
    ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>