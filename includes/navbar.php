<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'], ".php")?>

<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark bg-blue">
    <div class="container">
    <a class="navbar-brand" href="index.php">
            <img src="assets/images/navbar/logo2.png" width="200" height="50" class="d-inline-block align-center" alt="">
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarKey" aria-controls="navbarKey" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarKey">
            <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item <?php echo $file_name == 'index' ? 'active': '' ?>">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php echo $file_name == 'rent' ? 'active': '' ?>">
                    <a class="nav-link" href="en/rent.php">Rent</a>
                </li>
                <li class="nav-item <?php echo $file_name == 'sale' ? 'active': '' ?>">
                    <a class="nav-link" href="en/sale.php">Sale</a>
                </li>
                <li class="nav-item <?php echo $file_name == 'contact' ? 'active': '' ?>">
                    <a class="nav-link" href="en/contact.php">Contact Us</a>
                </li>
                <li class="nav-item <?php echo $file_name == 'contact' ? 'active': '' ?>">
                    <a class="nav-link" href="../th/index.php">ไทย <img src="assets/images/navbar/th.png" width="20" height="20" class="d-inline-block align-center" alt=""></a>
                </li>
            </ul>
            </div>  
    </div>
</nav>