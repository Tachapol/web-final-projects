<?php include_once('../authen.php') ?>
<?php
    // echo '<script> alert("Finished Creating!")</script>'; 
    // header('Refresh:0; url=index.php');
    
    // print_r($_POST);
    // print_r($_FILES);
    // print_r($_FILES['file']);
    if(isset($_POST['submit'])){
        $tag = 'all,'.join(',', $_POST['tag']);
        $status = isset($_POST['status']) ? 'true': 'false';
        $temp = explode('.',$_FILES['file']['name']);
        $text_en = str_replace('../../../', '../', $_POST['text_en']);
        $text_th = str_replace('../../../', '../', $_POST['text_th']);
        $new_name = round(microtime(true)*9999) . '.' . end($temp);
        $url_upload = '../../../assets/images/condo/'.$new_name;

// 
        // if ( move_uploaded_file($_FILES['file']['tmp_name'], $url_upload) ){
        //     $sql = "INSERT INTO `condo` (`name_en`, `name_th`, `details_en`, `details_th`, `room_size`, `bedroom`, `bathroom`, `price`, `text_en`, `text_th`,`tag`, `status`, `image`, `updated_at`, `created_at`) 
        //             VALUES ('".$_POST['name_en']."',
        //                     '".$_POST['name_th']."' , 
        //                     '".$_POST['details_en']."' , 
        //                     '".$_POST['details_th']."' , 
        //                     '".$_POST['room_size']."' , 
        //                     '".$_POST['bedroom']."' , 
        //                     '".$_POST['bathroom']."' , 
        //                     '".$_POST['price']."' ,
        //                     '".$text_en."',
        //                     '".$text_th."',
        //                     '".$tag."',
        //                     '".$status."',
        //                     '".$new_name."',
        //                     '".date('Y-m-d H:i:s')."', 
        //                     '".date('Y-m-d H:i:s')."')";
        // $result = $conn->query($sql) or die($conn->error);
// 
        if ( move_uploaded_file($_FILES['file']['tmp_name'], $url_upload) ){
            $sql = "INSERT INTO `condo` (`name_en`, `name_th`, `details_en`, `details_th`, `text_en`, `text_th`,`tag`, `status`, `image`, `updated_at`, `created_at`) 
                    VALUES ('".$_POST['name_en']."',
                            '".$_POST['name_th']."' , 
                            '".$_POST['details_en']."' , 
                            '".$_POST['details_th']."' , 
                            '".$text_en."',
                            '".$text_th."',
                            '".$tag."',
                            '".$status."',
                            '".$new_name."',
                            '".date('Y-m-d H:i:s')."', 
                            '".date('Y-m-d H:i:s')."')";
        $result = $conn->query($sql) or die($conn->error);
        if($result){
            echo '<script> echo alert("Sucessful Upload") </script>';
            header('Refresh:0; url=index.php');
        }
                    

        } else {
            echo 'No';
        }
    } else {
        header('location:index.php');
    }
?>