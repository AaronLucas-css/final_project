<?php
if(isset($_POST['submit'])){
        $pass = $_POST['password'];
        $name = $_POST['username'];
        require('../required/dbConnect.php');

        $userRow =$connect ->query('SELECT * FROM credential WHERE regNumber="$name" AND password = "$pass"; ');
        if($userRow){
           while ($user = $userRow->fetch_row()){
        if($user['role']=='student'){
            echo "<script>window.location.href ='../../front-end/pages/studentPortal.html' </script>";
            exit();
        }else if(user['role'] =='admin'){
            echo "<script>window.location.href='../../front-end/pages/admin.html' </script>";
            exit();
        }
        $conn->close();
        }
        }
        else{
            header('location:"../../index.hthml"');
            exit();
        }

}