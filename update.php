<?php
    $connect = mysqli_connect("localhost","root","","db_asm_ps09376");
    mysqli_query($connect, "SET NAMES 'utf-8'");

    $id = $_POST['id'];
    $name = $_POST['name'];
    $students_code = $_POST['students_code'];
    $birthday = $_POST['birthday'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = "UPDATE sinhvien SET name = '$name', 
                                students_code = '$students_code', 
                                birthday = '$birthday',
                                phone = '$phone',
                                address = '$address' WHERE id = '$id'
                                ";

    if(mysqli_query($connect, $query)) {
        //thành công
        echo "Thanh cong";
    } else {
        echo "That bai";
    }

?>