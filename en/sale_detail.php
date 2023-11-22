<?php
    require_once('php/connect.php');
    $sql = "SELECT * FROM condo WHERE id = '".$_GET['id']."' AND `status` = 'true'";
    $result = $conn->query($sql) or die($conn->error);

    if($result->num_rows > 0){ 
        $row = $result->fetch_assoc();
    } else {
        header('Location: sale.php');
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
        <meta name="description" content="<?php echo $row['detail_en']?>">
        <meta name="image" content="https://rentdbcondo.com/index.php<?php echo $base_path_blog.$row['image']?>">
        <meta name="keywords" content="dbcondo, rentdbcondo, คอนโดม.กรุงเทพ, คอนโดมกรุงเทพ, เช่าคอนโดม.กรุงเทพ, เช่าคอนโด, เช่าคอนโดรังสิต, คอนโดรังสิต, Plum Rangsit, Plum Condo, Kave Rangsit, Kave town space">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <meta name="author" content="mysteriouz">

        <!-- Schema.org for Google -->
        <meta itemprop="name" content="DB Condo">
        <meta itemprop="description" content="<?php echo $row['detail_en']?>">
        <meta itemprop="image" content="<?php echo $base_path_blog.$row['image']?>">
        <!-- Twitter -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="DB Condo">
        <meta name="twitter:description" content="<?php echo $row['detail_en']?>">
        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta name="fb:app_id" content="">
        <meta name="og:title" content="DB Condo">
        <meta name="og:description" content="<?php echo $row['detail_th']?>">
        <meta name="og:image" content="https://rentdbcondo.com/<?php echo $base_path_blog.$row['image']?>">
        <meta name="og:site_name" content="https://rentdbcondo.com/">
        <meta name="og:type" content="website">

    <!-- CSS -->
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="node_modules\owl.carousel\dist\owl.carousel.min.js">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@400&display=swap" rel="stylesheet">
    <style>
        body{font-family: 'Mitr', sans-serif;}
    </style>

</head>
<body>

    <!-- Section navbar -->
    <?php include_once('includes/navbar.php')?>


    <!-- Section Page-Title -->
    <header class="jarallax" data-jarallax='{ "speed":0.4 }' style="background-image: url('<?php echo $base_path_blog.$row['image']?>');">
        <div class="page-image text-center">
            <h4 class="display-4 font-weight-bold"> <?php echo $row['title']?></h4>
            <p class="lead"> <?php echo $row['subtitle']?> </p>
        </div>
    </header>
    
<!-- Section Blog -->
    <section class="container blog-content">
        <div class="row">
            <div class="col-12 ">
               <?php echo $row['text']?>
            <hr>
            <!-- Social -->
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-2">
                    <img class="profile" src="assets/images/unclogo_2.png" alt="">
                </div>
                <div class="font-weight-bold">
                     <h5 class="font-weight-bold">ABOUT THE AUTHOR</h5>
                     <h6>UNESCO CLUB</h6>
                </div>
            </div>
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
            <div class="owl-carousel owl-theme">
                    <?php while($row_RAND = $result_RAND->fetch_assoc()){ ?>
                    <section class="col-12 p-2">
                        <div class="card h-100">
                            <a href="blog_detail.php?id=<?php echo $row_RAND['id']?>" class="warpper-card-img">
                                <img class="card-img-top" src="<?php echo $base_path_blog.$row_RAND['image'] ?>">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row_RAND['title']; ?></h5>
                                <p class="card-text"><?php echo $row_RAND['subtitle']; ?></p>
                            </div>
                            <div class="p-3">
                                <a href="blog_detail.php?id=<?php echo $row_RAND['id']?>" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                            </div>
                        </div>
                    </section>
                    <?php } ?>
                </div>

        </style>
</section>

    <!-- Footer -->
    <?php include_once('includes/footer.php')?>
    
    <!-- Section On to Top -->
    <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    
    <script src="node_modules\jquery\dist\jquery.min.js"></script>
    <script src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
    <script src="node_modules\popper.js\dist\umd\popper.min.js"></script>
    <script src="node_modules\jarallax\dist\jarallax.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop: true,
                nav: false,
                dots: true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            });
        });
    </script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.jsproperty=6087f71a1c89ef00186c3dec&product=sticky-share-buttons' async='async'></script>

</body>
</html>