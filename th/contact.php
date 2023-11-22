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
    <header class="page-title jarallax" data-jarallax='{ "speed": 0.4 }' style="background-image: url('https://images.unsplash.com/photo-1504202302068-15fc2055f7f9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1030&q=80');">
        <div class="page-image text-center">
            <h1 class="display-4 font-weight-bold">ติดต่อเรา</h1>
            <!-- <p class="lead">TEL 095-548-0171</p> -->
        </div>
    </header>

<!-- Section Contact -->
    <div class="container py-5">
        <!-- Contact -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ลงทะเบียน</h5>
                        <hr>
                        <form method="post" action="../php/contact.php">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">ชื่อ-นามสกุล</label>
                                  <input type="text" id="name" name="name" class="form-control" required >
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="email">อีเมลล์</label>
                                  <input type="email" id="email" name="email" class="form-control" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="phone">เบอร์โทรศัพท์</label>
                                  <input type="text" id="phone" name="phone" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">ไอดีไลน์</label>
                                  <input type="text" id="line" name="line" class="form-control" required>
                                </div>

                                <div class="form-group col-12">
                                    <label for="message">ข้อความ</label>
                                    <textarea id="message" name="message" rows="10" class="form-control" required></textarea>
                                </div>
                            </div>
                                
                                <div id="recaptcha-wrapper" class="text-center my-3">
                                    <div class="g-recaptcha d-inline-block" data-callback="recaptchaCallback" data-sitekey="6LePaAAcAAAAAIyJZS12Bc2M3JsDZNIU6FjxAtCr"></div>
                                </div>
                                
                                <button class="btn btn-primary d-block mx-auto btn-submit" type="submit"  name="btn-submit" id="btn-submit" disabled>Send Email</button>
                        </form>
                    
                    </div>
                </div>
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
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
                $(function(){
            // global variables
            captchaResized = false;
            captchaWidth = 304;
            captchaHeight = 78;
            captchaWrapper = $('#recaptcha-wrapper');
            captchaElements = $('#rc-imageselect, .g-recaptcha');

            $(window).on('resize', function() {
                resizeCaptcha();
            });

            resizeCaptcha();
        });

        function resizeCaptcha() {
            if (captchaWrapper.width() >= captchaWidth) {
                if (captchaResized) {
                    captchaElements.css('transform', '').css('-webkit-transform', '').css('-ms-transform', '').css('-o-transform', '').css('transform-origin', '').css('-webkit-transform-origin', '').css('-ms-transform-origin', '').css('-o-transform-origin', '');
                    captchaWrapper.height(captchaHeight);
                    captchaResized = false;
                }
            } else {
                var scale = (1 - (captchaWidth - captchaWrapper.width()) * (0.05/15));
                captchaElements.css('transform', 'scale('+scale+')').css('-webkit-transform', 'scale('+scale+')').css('-ms-transform', 'scale('+scale+')').css('-o-transform', 'scale('+scale+')').css('transform-origin', '0 0').css('-webkit-transform-origin', '0 0').css('-ms-transform-origin', '0 0').css('-o-transform-origin', '0 0');
                captchaWrapper.height(captchaHeight * scale);
                if (captchaResized == false) captchaResized = true;
            }
        }
        // resizeCaptcha();

        function recaptchaCallback (){
            $('#btn-submit').removeAttr('disabled')
        }
    </script>

</body>
</html>