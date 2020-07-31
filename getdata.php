<?php
     
     $connect = mysqli_connect("localhost","root","","db_asm_ps09376");
     mysqli_query($connect, "SET NAMES 'utf-8'");

     $query = "SELECT * FROM users";
     $data =    mysqli_query($connect, $query);

    
     // Tạo class users
     class Users{
         function Users($id, $name, $email, $password, $create_date, $update_date) {
             $this -> id = $id;
             $this -> name = $name;
             $this -> email = $email;
             $this -> password = $password;
             $this -> create_date = $create_date;
             $this -> update_date = $update_date;
         }
     }
     // Tạo mảng 
     $mangUser = array();

     while($row = mysqli_fetch_assoc($data)){
        array_push($mangUser, new Users($row['id'], $row['name'],$row['email'],$row['password'],$row['create_date'],$row['update_date']));
    }
    echo json_encode($mangUser);
?>