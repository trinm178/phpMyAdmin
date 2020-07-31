<?php
     
     $connect = mysqli_connect("localhost","root","","db_asm_ps09376");
     mysqli_query($connect, "SET NAMES 'utf-8'");

     $query = "SELECT * FROM sinhvien";
     $data =    mysqli_query($connect, $query);

    
     // Tạo class 
     class sinhvien{
         function sinhvien($id, $name, $students_code, $birthday, $phone, $address) {
             $this -> id = $id;
             $this -> name = $name;
             $this -> students_code = $students_code;
             $this -> birthday = $birthday;
             $this -> phone = $phone;
             $this -> address = $address;
         }
     }
     // Tạo mảng 
     $mangSV = array();

     while($row = mysqli_fetch_assoc($data)){
        array_push($mangSV, new sinhvien($row['id'], $row['name'],$row['students_code'],$row['birthday'],$row['phone'],$row['address']));
    }
    echo json_encode($mangSV);
?>