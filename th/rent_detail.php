<?php
    require_once('../php/connect.php');
    $sql = "SELECT * FROM condo WHERE id = '".$_GET['id']."' AND `status` = 'true'";
    $result = $conn->query($sql) or die($conn->error);

    if($result->num_rows > 0){ 
        $row = $result->fetch_assoc();
    } 
    else {
        header('Location: rent.php');
    }

    $sql_RAND = "SELECT * FROM `condo` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
    $result_RAND = $conn->query($sql_RAND);

    if($result_RAND->num_rows > 0){
        $row_RAND = $result_RAND->fetch_assoc();
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
        <!-- Search Engine -->
        <meta name="description" content="<?php echo $row['details_th']?>">
        <meta name="image" content="https://rentdbcondo.com/index.php<?php echo $base_path_blog.$row['image']?>">
        <meta name="keywords" content="dbcondo, rentdbcondo, คอนโดม.กรุงเทพ, คอนโดมกรุงเทพ, เช่าคอนโดม.กรุงเทพ, เช่าคอนโด, เช่าคอนโดรังสิต, คอนโดรังสิต, Plum Rangsit, Plum Condo, Kave Rangsit, Kave town space">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <meta name="author" content="mysteriouz">

        <!-- Schema.org for Google -->
        <meta itemprop="name" content="DB Condo">
        <meta itemprop="description" content="<?php echo $row['details_th']?>">
        <meta itemprop="image" content="<?php echo $base_path_blog.$row['image']?>">
        <!-- Twitter -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="DB Condo">
        <meta name="twitter:description" content="<?php echo $row['details_th']?>">
        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta name="fb:app_id" content="">
        <meta name="og:title" content="DB Condo">
        <meta name="og:description" content="<?php echo $row['details_th']?>">
        <meta name="og:image" content="https://rentdbcondo.com/<?php echo $base_path_blog.$row['image']?>">
        <meta name="og:site_name" content="https://rentdbcondo.com/">
        <meta name="og:type" content="website">

    <!-- CSS -->
        <link rel="stylesheet" href="../node_modules\bootstrap\dist\css\bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <style>
            body{font-family: 'Kanit', serif;}
        </style>

</head>
<body>

    <!-- Section navbar -->
    <?php include_once('includes/navbar.php')?>

    <!-- Section Page-Title -->
    <header class="jarallax" data-jarallax='{ "speed":0.4 }' style="background-image: url('<?php echo $base_path_blog.$row['image']?>');">
        <div class="page-image text-center">
            <h4 class="display-4 font-weight-bold"> <?php echo $row['name_th']?></h4>
            <p class="lead"> <?php echo $row['details_th']?> </p>
        </div>
    </header>
    
<!-- Section Blog -->
    <section class="container blog-content">
        <div class="row">
            <div class="col-12 ">
               <?php echo $row['text_th']?>
            <hr>
            <!-- Social -->
            <hr>
            <div class="text-right sharethis-inline-share-buttons st-right  st-inline-share-buttons st-animated" id="st-1">
                <div class="st-btn st-first" data-network="facebook" style="display: inline-block;">
                    <img alt="facebook sharing button" src="https://platform-cdn.sharethis.com/img/facebook.svg">
                </div>
                <div class="st-btn st-last" data-network="messenger" style="display: inline-block;">
                    <img alt="messenger sharing button" src="https://platform-cdn.sharethis.com/img/messenger.svg">
                </div>
            </div>
                <p class="text-right text-mute"><?php echo date_format(new DateTime($row['updated_at']),"j F Y"); ?></p>

            <!-- facebook comments -->
            <!-- <div class="col-12">
                <div class="fb-comments" 
                data-href="http://localhost/skmd/blog_detail.php?id=<?php $row['id'];?>" 
                data-width="100%" 
                data-numposts="5"></div>
            <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.jsxfbml=1&version=v10.0" nonce="ilaJWN06"></script>
                </div> -->

            <!-- owl-carousel -->
            <!-- <div class="owl-carousel owl-theme">
                <?php while($row_RAND = $result_RAND->fetch_assoc()){ ?>
                    <section class="col-12 p-2">
                        <div class="card">
                            <a href="blog_detail.php?id=<?php echo $row_RAND['id']?>" class="warpper-card-img">
                                <img class="card-img-top" src="<?php echo $base_path_blog.$row_RAND['image'] ?>">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row_RAND['name_en']; ?></h5>
                                <p class="card-text"><?php echo $row_RAND['details_th']; ?></p>
                            </div>
                            <div class="p-3">
                                <a href="blog_detail.php?id=<?php echo $row_RAND['id']?>" class="btn btn-viewmore">อ่านเพิ่มเติม</a>
                            </div>
                        </div>
                    </section>
                <?php } ?>
            </div> -->

        </style>
</section>

    <!-- Footer -->
    <?php include_once('includes/footer.php')?>
    
    
    <script src="../node_modules\jquery\dist\jquery.min.js"></script>
    <script src="../node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
    <script src="../node_modules\popper.js\dist\umd\popper.min.js"></script>
    <script src="../node_modules/jarallax/dist\jarallax.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.jsproperty=6087f71a1c89ef00186c3dec&product=sticky-share-buttons' async='async'></script>

</body>
</html>