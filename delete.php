<?php
    $connect = mysqli_connect("localhost","root","","db_asm_ps09376");
    mysqli_query($connect, "SET NAMES 'utf-8'");


    $id = $_POST['id'];

    $query = "DELETE FROM sinhvien WHERE id = '$id'";
    
    if(mysqli_query($connect, $query)) {
        //thành công
        echo "Thanh cong";
    } else {
        echo "That bai";
    }
?>