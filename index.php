<?php 
    require_once('php/connect.php');
    $tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';
    $sql = "SELECT * FROM `condo` WHERE `tag` LIKE '%".$tag."%' AND `status` = 'true' ORDER BY RAND() LIMIT 6";
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
    <title>รวมคอนโดให้เช่าม.กรุงเทพ</title>

    <!-- COMMON TAGS -->
        <meta charset="utf-8">
        <title>Condo for rent</title>
        <!-- Search Engine -->
        <meta name="description" content="รวมคอนโดให้เช่าโดยพี่เดียร์พี่โบว์">
        <meta name="image" content="https://rentdbcondo.com/assets/images/components/seo1.png">
        <!-- Schema.org for Google -->
        <meta itemprop="name" content="รวมคอนโดให้เช่า">
        <meta itemprop="description" content="รวมคอนโดให้เช่าโดยพี่เดียร์พี่โบว์">
        <meta itemprop="image" content="https://rentdbcondo.com/assets/images/components/seo1.png">
        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta name="og:title" content="รวมคอนโดให้เช่า">
        <meta name="og:description" content="รวมคอนโดให้เช่าโดยพี่เดียร์พี่โบว์">
        <meta name="og:image" content="https://rentdbcondo.com/assets/images/components/seo1.png">
        <meta name="og:url" content="https://rentdbcondo.com/">
        <meta name="og:site_name" content="รวมคอนโดให้เช่า">
        <meta name="og:type" content="website">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">


    <!-- CSS -->
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body{font-family: 'Kanit', serif;}
        .gal {
        display: inline-block;
        height: 150px;
        width: 150px;
        border-radius: 50%;
        box-shadow: 0px 0px 10px rgb(54, 52, 52);
      }
    </style>
</head>

<body class="no-highlight">

<!-- Section navbar -->
    <?php include_once('includes/navbar.php')?>

<!-- Section Carousel -->
    <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        
        <div class="carousel-inner">
          <div class="carousel-item active">  
            <a href="https://www.facebook.com/Condo4Rent.By.Dear/">
                <div class="carousel-img" style="background-image: url('https://static.estopolis.com/review/5b7e223fc8ef2288d7d4f5e6_5b7e260315f02020d4eedbe1.jpg');">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">PLUM CONDO</h1>
                        <p class="lead">RANGSIT</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
            </a>
            </div>
            <div class="carousel-item">
                <a href="https://www.facebook.com/Kave-Space-Kave-Shift-100890941538058/">
                    <div class="carousel-img" style="background-image: url('https://www.kobkid.com/market/images/market_images/127709/01873aad035aed9.jpg');">
                        <div class="carousel-caption">
                            <h1 class="display-4 font-weight-bold">KAVE TOWN SPACE</h1>
                            <p class="lead">RANGSIT</p>
                        </div>
                        <div class="backscreen"></div>
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="https://www.facebook.com/Rent-condo-Common-TU-De-condo-Modizlaunch-Rangsit-near-TU-university-137654241801547/">
                    <div class="carousel-img" style="background-image: url('https://condotiddoi.com/articleimg/20190528184031-4280409.jpg');">
                        <div class="carousel-caption">
                            <h1 class="display-4 font-weight-bold">COMMON TU</h1>
                            <p class="lead">RANGSIT</p>
                        </div>   
                        <div class="backscreen"></div> 
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="https://www.facebook.com/Rent-Kave-TU-near-Thammasat-U-ให้เช่าคอนโด-ปล่อยเช่า-by-Dear-104704681931215/">
                    <div class="carousel-img" style="background-image: url('https://kavecondo.com/wp-content/uploads/2018/10/02.jpg');">
                        <div class="carousel-caption">
                            <h1 class="display-4 font-weight-bold">KAVE TU</h1>
                            <p class="lead">RANGSIT</p>
                        </div>   
                        <div class="backscreen"></div> 
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="https://www.facebook.com/Rent-Plum-fresh-rangsit-Bangkok-university-ปล่อยเช่า-ฝากเช่า-ขาย-172199771589817/">
                    <div class="carousel-img" style="background-image: url('https://www.livinginsider.com/upload/project/60c6bacfe4a19_5008.jpg');">
                        <div class="carousel-caption">
                            <h1 class="display-4 font-weight-bold">PLUM FRESH</h1>
                            <p class="lead">RANGSIT</p>
                        </div>   
                        <div class="backscreen"></div> 
                    </div>
                </a>
            </div>
        </div>
        
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </section>
    </div>	

<!-- Condo -->
<section class="container p-5">
        <div class="row">
        <?php if($result->num_rows){
            while($row = $result->fetch_assoc()){ ?>
                <section class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="card card-rent">
                        <a href="rent_detail.php?id=<?php echo $row['id']?>" class="warpper-card-img img-card">
                            <img src="<?php echo $base_path_blog.$row['image']?>" class="card-img" alt="...">
                        </a>    
                        <hr>
                        <div class="card-body  text-center">
                            <h2 class="card-title"><?php echo $row['name_en']?></h2>
                            <p class="card-text"><?php echo $row['details_en']?></p>
                            <p class="card-text"><?php echo $row['bedroom']?></p>
                            <p class="card-text"><?php echo $row['bathroom']?></p>
                            <p class="card-text"><?php echo $row['floor']?></p>
                            <p type="number" class="text-danger text-bold number-separator card-text"><?php echo number_format($row['price']); ?></p>
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
    </section>     
    
    <!-- Footer -->
    <?php include_once('includes/footer.php')?>

    <script src="../node_modules\jquery\dist\jquery.min.js"></script>
    <script src="../node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
    <script src="../node_modules\popper.js\dist\umd\popper.min.js"></script>
    <script src="../node_modules/jarallax/dist\jarallax.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/easy-number-separator.js"></script>
</body>
</html>