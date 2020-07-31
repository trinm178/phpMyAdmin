<?php
    $connect = mysqli_connect("localhost","root","","db_asm_ps09376");
    mysqli_query($connect, "SET NAMES 'utf-8'");

    $name = $_POST['name'];
    $students_code = $_POST['students_code'];
    $birthday = $_POST['birthday'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = "INSERT INTO sinhvien VALUES(null, '$name', '$students_code', '$birthday', '$phone','$address')";

    if(mysqli_query($connect, $query)){
        echo "Thanh cong";
    } else {
        echo "That bai";
    }
?>