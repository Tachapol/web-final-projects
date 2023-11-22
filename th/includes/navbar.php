<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'], ".php")?>

<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark bg-blue">
    <div class="container">
    <a class="navbar-brand" href="index.php">
            <img src="../assets/images/navbar/logo2.png" width="200" height="50" class="d-inline-block align-center" alt="">
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarKey" aria-controls="navbarKey" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarKey">
            <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item <?php echo $file_name == 'index' ? 'active': '' ?>">
                    <a class="nav-link" href="index.php">หน้าหลัก <span class="sr-only">(current)</span></a>
                </li>
                <!-- <li class="nav-item <?php echo $file_name == 'sale' ? 'active': '' ?>">
                    <a class="nav-link" href="sale.php">ซื้อ</a>
                </li> -->
                <li class="nav-item <?php echo $file_name == 'rent' ? 'active': '' ?>">
                    <a class="nav-link" href="rent.php">แกลเลอรี</a>
                </li>
                <li class="nav-item <?php echo $file_name == 'lyp' ? 'active': '' ?>">
                    <a class="nav-link" href="lyp.php">ฝากเช่า</a>
                </li>
                <li class="nav-item <?php echo $file_name == 'contact' ? 'active': '' ?>">
                    <a class="nav-link" href="contact.php">ติดต่อ</a>
                </li>
                <li class="nav-item <?php echo $file_name == 'contact' ? 'active': '' ?>">
                    <a class="nav-link" href="https://rentdbcondo.com/th/">ไทย <img src="../assets/images/navbar/th.png" width="20" height="20" class="d-inline-block align-center" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="">|</a>
                </li>
                <li class="nav-item <?php echo $file_name == 'contact' ? 'active': '' ?>">
                    <a class="nav-link" href="https://rentdbcondo.com/en/">ENG<img src="../assets/images/navbar/en.png" width="20" height="20" class="d-inline-block align-center" alt=""></a>
                </li>
            </ul>
            </div>  
    </div>
</nav>