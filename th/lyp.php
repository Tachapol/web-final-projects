<?php 
    require_once('../php/connect.php');
    $tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';
    $sql = "SELECT * FROM `condo` WHERE `tag` LIKE '%".$tag."%' AND `status` = 'true'";
    $result = $conn->query($sql);
    if (!$result){
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title>คอนโดให้เช่า ใกล้ม.กรุงเทพ</title>

    <!-- Section Meta Tag -->
    <?php include_once('includes/meta.php')?>

    <!-- CSS -->
    <link rel="stylesheet" href="../node_modules\bootstrap\dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <style>
        body{font-family: 'Kanit', serif;}
    </style>
    
</head>
<body>

<!-- Section navbar -->
    <?php include_once('includes/navbar.php')?>

<!-- Section Page-Title -->
    <header class="page-title jarallax" data-jarallax='{ "speed": 0.4 }' style="background-image: url('https://images.unsplash.com/photo-1558591710-4b4a1ae0f04d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1080&h=720');">
        <div class="page-image text-center">
            <h1 class="display-4 font-weight-bold">บริการฝากเช่า</h1>
            <p class="lead"></p>
        </div>
    </header>

<!-- Section Rent -->
    <div class="container">
            <div class="card-caption m-4 p-4 text-center">
                <h1>บริการรับฝากปล่อยเช่า, ขาย</h1>
                <hr>
                <div>
                    <h5 class="text-center">
                    <i class="far fa-check-square"></i> ให้คำปรึกษาแนะนำฟรี <br><br>
                    <i class="far fa-check-square"></i> ทัก line แจ้งรายละเอียดห้องที่ต้องการปล่อยเช่า , ราคา <br><br>
                    <i class="far fa-check-square"></i> เจ้าหน้าที่จะทำการแนะนำห้องของท่านให้ลูกค้า <br><br>
                        ท่านใดสนใจปล่อยเช่าห้อง มีออเดอร์หลายห้อง เรามีน้องๆที่ฝากเพจให้เราหาห้องจำนวนมาก
                    </h5>
                </div>
                <div class="p-3 text-center">
                <hr>
                <a href="contact.php" class="btn btn-viewmore">สนใจคลิ๊ก</a>
            </div>
        </div>
    </div>

<!-- Footer -->
<?php include_once('includes/footer.php')?>
    
    <script src="../node_modules\jquery\dist\jquery.min.js"></script>   
    <script src="../node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
    <script src="../node_modules\popper.js\dist\umd\popper.min.js"></script>
    <script src="../node_modules/jarallax/dist\jarallax.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>