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
    <header class="page-title jarallax" data-jarallax='{ "speed": 0.4 }' style="background-image: url('https://rentdbcondo.com/assets/images/condo/rent.png');">
        <div class="page-image text-center">
            <h1 class="display-4 font-weight-bold">Gallery and Reviews</h1>
            <p class="lead"></p>
        </div>
    </header>

<!-- Section Rent -->
    <section class="container p-5">
        <div class="row">
        <?php if($result->num_rows){
            while($row = $result->fetch_assoc()){ ?>
                <section class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="card card-rent">
                        <a href="rent_detail.php?id=<?php echo $row['id']?>" class="warpper-card-img img-card">
                            <img src="<?php echo $base_path_blog.$row['image']?>" class="card-img" alt="...">
                        </a>    
                        <div class="card-body  text-center">
                            <h2 class="card-title"><?php echo $row['name_en']?></h2>
                            <p class="card-text"><?php echo $row['details_en']?></p>
                        </div>    
                        <div class="p-3 text-center">
                            <hr>
                            <a href="rent_detail.php?id=<?php echo $row['id']?>" class="btn btn-viewmore">view more</a>
                        </div>
                    </div>
                </section>  
            <?php }  
            }else{ ?>

            
            <section class="col-12 py-5">
                <p>
                    <h3 class="text-center">Coming Soon...</h3>
                </p>
            </section>
        <?php } ?>        
        </div>
    </section>

<!-- Footer -->
<?php include_once('includes/footer.php')?>
    
    <script src="../node_modules\jquery\dist\jquery.min.js"></script>
    <script src="../node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
    <script src="../node_modules\popper.js\dist\umd\popper.min.js"></script>
    <script src="../node_modules/jarallax/dist\jarallax.min.js"></script>
    <script src="../assets/js/main.js"></script>

</body>
</html>