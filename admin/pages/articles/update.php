<?php include_once('../authen.php') ?>
<?php
    if(isset($_POST['submit'])){
        $image_name = $_POST['data_file'];
        if( $_FILES['file']['error'] == 0){
            if( !getimagesize($_FILES['file']['tmp_name'])){
                echo '<srcipt> alert("Please upload image file! ")</srcipt>';
                header('Refresh:0; url=index.php');
            } 
            
            $temp = explode('.',$_FILES['file']['name']);
            $image_name = round(microtime(true)*9999) . '.' . end($temp);
            $url_upload = '../../../assets/images/condo/' . $image_name;
           
            if( !move_uploaded_file($_FILES['file']['tmp_name'], $url_upload)){
                echo '<srcipt> alert("Couldn&#8216t Upload. Try again.")</srcipt>';
                header('Refresh:0; url=index.php');
                
            }
       } 
       
        $text_en = str_replace('../../../', '../', $_POST['text_en']);
        $text_th = str_replace('../../../', '../', $_POST['text_th']);
        $tag = 'all,' . join(',', $_POST['tag']);
        $status = isset($_POST['status']) ? 'true' : 'false' ;
 
        $sql = "UPDATE `condo`
                SET name_en = '".$_POST['name_en']."', 
                    name_th = '".$_POST['name_th']."',
                    details_en = '".$_POST['details_en']."',
                    details_th = '".$_POST['details_th']."',
                    text_en = '".$text_en."',
                    text_th = '".$text_th."',
                    size = '".$size."',
                    bedroom = '".$bedroom."',
                    bathroom = '".$bathroom."',
                    price = '".$price."',
                    image = '". $image_name."',
                    tag = '".$tag."',
                    status = '".$status."',
                    updated_at = '".date("Y-m-d H:i:s")."'
                    WHERE id = '".$_POST['id']."'";
        $result = $conn->query($sql) or die($conn->error);
        if($result){
            echo '<script> alert("Sucess! Your submission has been saved!")</script>';
            header('Refresh:0; url=index.php');
        }

    } else {
        header('Location:index.php');
    }
?>