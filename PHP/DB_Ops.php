<?php
        include 'upload.php';
        //'save'  the name of save botton  name='Save'  
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //test1 name of database 
            $conn = mysqli_connect("localhost", "root", "", "form");
            if (mysqli_connect_errno()) {
                die("Connection failed: " . mysqli_connect_error());
            }
            if (isset($_POST['save'])) {
                $full_name = $_POST['full_name'];
                $user_name = $_POST['user_name'];
                $birthdate = $_POST['birthdate'];
                $phone = $_POST['phone'];
                $address_ = $_POST['address_'];
                $password_ = $_POST['password_'];
                $confirm_password = $_POST['confirm_password'];
                $image_ = $_FILES['image_']['name'];
                $email = $_POST['email'];

                $sql_u = "SELECT * FROM users WHERE user_name='$user_name'";
                $res_u = mysqli_query($conn, $sql_u);
                if (mysqli_num_rows($res_u) > 0) {
                    $name_error = "Sorry... username already taken";
                    echo 'username already taken';
                } else {
                    
                    $sql = "INSERT INTO users (full_name,user_name, birthdate , phone , address_ , password_ , confirm_password , image_ , email) VALUES ( '$full_name','$user_name', '$birthdate' , '$phone' , '$address_' , '$password_' , '$confirm_password' , '$image_' , '$email') ";
                    $up=new Upload_img();
                    $query = mysqli_query($conn, $sql);
                    if ($query) {
                        echo 'Entry Successfully ';
                    } else {
                        echo 'Error Occurred ';
                    }
                }
            }
        }