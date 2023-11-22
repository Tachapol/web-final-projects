<!-- <?php 
    require_once('../php/connect.php');
    $sql = "SELECT * FROM `condo` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
    $result = $conn->query($sql);
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title>คอนโดให้เช่า ใกล้ม.กรุงเทพ</title>

    <!-- Section Meta Tag -->
    <?php include_once('includes\meta.php')?>

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
                        <h1 class="display-4 font-weight-bold">พลัม คอนโด</h1>
                        <p class="lead">รังสิต</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
            </a>    
        </div>

          <div class="carousel-item">
                <a href="https://www.facebook.com/Kave-Space-Kave-Shift-100890941538058/">  
                    <div class="carousel-img" style="background-image: url('https://www.kobkid.com/market/images/market_images/127709/01873aad035aed9.jpg');">
                        <div class="carousel-caption">
                            <h1 class="display-4 font-weight-bold">เคฟทาวน์เสปซ</h1>
                            <p class="lead">รังสิต</p>
                        </div>
                        <div class="backscreen"></div>
                    </div>
                </a>
            </div>

            <div class="carousel-item">
                <a href="https://www.facebook.com/Rent-condo-Common-TU-De-condo-Modizlaunch-Rangsit-near-TU-university-137654241801547/">
                    <div class="carousel-img" style="background-image: url('https://condotiddoi.com/articleimg/20190528184031-4280409.jpg');">
                        <div class="carousel-caption">
                            <h1 class="display-4 font-weight-bold">คอมมอน ทียู</h1>
                            <p class="lead">รังสิต</p>
                        </div>   
                        <div class="backscreen"></div> 
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="https://www.facebook.com/Rent-Kave-TU-near-Thammasat-U-ให้เช่าคอนโด-ปล่อยเช่า-by-Dear-104704681931215/">
                    <div class="carousel-img" style="background-image: url('https://kavecondo.com/wp-content/uploads/2018/10/02.jpg');">
                        <div class="carousel-caption">
                            <h1 class="display-4 font-weight-bold">เคฟทียู</h1>
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
                            <h1 class="display-4 font-weight-bold">เคฟทียู</h1>
                            <p class="lead">รังสิต</p>
                        </div>   
                        <div class="backscreen"></div> 
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="https://www.facebook.com/Rent-Plum-fresh-rangsit-Bangkok-university-ปล่อยเช่า-ฝากเช่า-ขาย-172199771589817/">
                    <div class="carousel-img" style="background-image: url('https://www.livinginsider.com/upload/project/60c6bacfe4a19_5008.jpg');">
                        <div class="carousel-caption">
                            <h1 class="display-4 font-weight-bold">พลัมเฟรช</h1>
                            <p class="lead">รังสิต</p>
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
    
<!-- Section Quote -->
    <div class="container text-center">
        <div class="row">
            <div class="card-caption mx-3 mt-3">
                <div class="p-4">
                    <h1>รวมคอนโดให้เช่า</h1>
                    <hr>
                    <h5>รวมคอนโดให้เช่า รับฝากปล่อยเช่าคอนโด รับฝากขาย คอนโดย่ายรังสิต คอนโดใกล้ ม.กรุงเทพ และ ม.ธรรมศาสตร์ รังสิต
                        Plum Alive , Plum Park , Kave Town & Kave Town Space Condo , Kave Shift , D condo , Common TU 
                        คอนโดใกล้ ม.กรุงเทพ และ ม.ธรรมศาสตร์ รังสิต</h5>
                </div>
                <img class="card-img img-card-bottom" src="../assets/images/condo/imageindex.jpg" class="card-img-top">
            </div>
        </div>
    </div>	

<!-- Condo -->
    <section class="container p-5">
        <h1 class="border-short-botton text-center">เเนะนำ</h1>
        <div class="row">
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card card-rent">
                    <a href="https://www.facebook.com/Condo4Rent.By.Dear/" class="warpper-card-img img-card">
                        <img src="../assets/images/condo/16292959351756.jpg" class="card-img" alt="...">
                    </a>    
                    <div class="card-body pb-0">
                        <h3 class="card-title text-center border-short-botton p-0">พลัมคอนโด</h3>
                        <p class="card-text text-center">พลัมอไลฟ์ 1,2</p>
                    </div>    
                    <div class="text-center pb-3">
                        <hr><a href="https://www.facebook.com/Condo4Rent.By.Dear/" class="btn btn-viewmore">ห้องว่าง</a>
                    </div>
                </div>
            </section>  

            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card card-rent">
                    <a href="https://www.facebook.com/Kave-Space-Kave-Shift-100890941538058/" class="warpper-card-img img-card">
                        <img src="../assets/images/condo/16292961073468.jpg" class="card-img" alt="...">
                    </a>    
                    <div class="card-body pb-0">
                        <h3 class="card-title text-center border-short-botton p-0">เคฟ</h3>
                        <p class="card-text text-center">เคฟทาวน์เสปซ <br> เคฟชิฟท์ <br> เคฟทาวน์</p>
                    </div>    
                    <div class="text-center pb-3">
                        <hr><a href="https://www.facebook.com/Kave-Space-Kave-Shift-100890941538058/" class="btn btn-viewmore">ห้องว่าง</a>
                    </div>
                </div>
            </section> 

            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card card-rent">
                    <a href="https://www.facebook.com/Rent-condo-Common-TU-De-condo-Modizlaunch-Rangsit-near-TU-university-137654241801547/" class="warpper-card-img img-card">
                        <img src="../assets/images/condo/rentdbcondopage.jpg" class="card-img" alt="...">
                    </a>    
                    <div class="card-body pb-0">
                        <h3 class="card-title text-center border-short-botton p-0">NEAR TU</h3>
                        <p class="card-text text-center">Common TU <br> D Condo <br> Modizlaunch</p>
                    </div>    
                    <div class="text-center pb-3">
                        <hr><a href="https://www.facebook.com/Rent-condo-Common-TU-De-condo-Modizlaunch-Rangsit-near-TU-university-137654241801547/" class="btn btn-viewmore">ห้องว่าง</a>
                    </div>
                </div>
            </section> 

            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card card-rent">
                    <a href="https://www.facebook.com/Rent-Plum-fresh-rangsit-Bangkok-university-ปล่อยเช่า-ฝากเช่า-ขาย-172199771589817/" class="warpper-card-img img-card">
                        <img src="../assets/images/condo/plumfresh.jpg" class="card-img" alt="...">
                    </a>    
                    <div class="card-body pb-0">
                        <h3 class="card-title text-center border-short-botton p-0">พลัมเฟรช</h3>
                        <p class="card-text text-center"></h5></p>
                    </div>    
                    <div class="text-center pb-3">
                        <hr><a href="https://www.facebook.com/Rent-Plum-fresh-rangsit-Bangkok-university-ปล่อยเช่า-ฝากเช่า-ขาย-172199771589817/" class="btn btn-viewmore">ห้องว่าง</a>
                    </div>
                </div>
            </section> 

            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card card-rent">
                    <a href="https://www.facebook.com/Rent-Kave-TU-near-Thammasat-U-ให้เช่าคอนโด-ปล่อยเช่า-by-Dear-104704681931215/" class="warpper-card-img img-card">
                        <img src="../assets/images/condo/kavetu.jpg" class="card-img" alt="...">
                    </a>    
                    <div class="card-body pb-0">
                        <h3 class="card-title text-center border-short-botton p-0">เคฟทียู</h3>
                    </div>    
                    <div class="text-center pb-3">
                        <hr><a href="https://www.facebook.com/Rent-Kave-TU-near-Thammasat-U-ให้เช่าคอนโด-ปล่อยเช่า-by-Dear-104704681931215/" class="btn btn-viewmore">ห้องว่าง</a>
                    </div>
                </div>
            </section>

            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card card-rent">
                    <a href="https://www.facebook.com/Rent-condo-AttitudeBe-condo-Rangsit-102368102161159/" class="warpper-card-img img-card">
                        <img src="../assets/images/condo/attitude.jpg" class="card-img" alt="...">
                    </a>    
                    <div class="card-body pb-0">
                        <h3 class="card-title text-center border-short-botton p-0">Attitude BU / Becondo</h3>
                    </div>    
                    <div class="text-center pb-3">
                        <hr><a href="https://www.facebook.com/Rent-condo-AttitudeBe-condo-Rangsit-102368102161159/" class="btn btn-viewmore">ห้องว่าง</a>
                    </div>
                </div>
            </section>

        </div>
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

</body>
</html>