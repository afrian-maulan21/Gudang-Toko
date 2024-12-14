<?php
    include "../login.html";
    include "../service/koneksi.php";

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM akun WHERE 
        username='$username' AND password='$password'";

        $result = $db->query($sql);

        if($result->num_rows > 0){
            $data =  $result->fetch_assoc();
            
            header("Location: ../Home.html");
        } else {
            echo "data tidak valid";
        } 
    }
?>