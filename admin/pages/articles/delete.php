<?php include_once('../authen.php') ?>
<?php
    // echo '<script> alert("Finished Deleting!")</script>'; 
    // header('Refresh:0; url=index.php');
    // if( !isset($_GET['id'])){
    //     header('Location:index.php');
    //   } 

    $id = $_GET['id'];
    if (isset($id)){
        $sql = "DELETE FROM `condo` WHERE `condo`.`id` = '".$id."' ";
        $result = $conn->query($sql);

        if ( $conn->affected_rows) {
            echo '<script> alert("Successfully deleted")</script>'; 
            header('Refresh:0; url=index.php');
        } else {
            echo '<script> alert("Delete failed")</script>'; 
            header('Refresh:0; url=index.php');
            } 
        } else {
        header('Refresh:0; url=index.php');
    }
?>