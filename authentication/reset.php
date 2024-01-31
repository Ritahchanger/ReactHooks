<?php

if (!isset($_GET['user_email'])) {
    require_once('../database/functions.php');
    redirect('./Login.php');
} else {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
        require_once('../database/functions.php');
        $connection = connection();

        $password = $_POST['password'];
se
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        try {
            
            $connection->connect();

            $user_email = $_GET['user_email'];
            
            $register_password_stmt = $connection->prepare("UPDATE `users` SET pword = ? WHERE email = ?");
            $register_password_stmt->bind_param("ss", $hashed_password, $user_email);
            $register_password_stmt->execute();

           
            if ($register_password_stmt->affected_rows > 0) {
             echo json_encode(array("message"=>"successfull"));
            } else {
               
                echo json_encode(array("message"=>"usuccessfull"));
            }

            $register_password_stmt->close();
            $connection->close();
        } catch (Exception $e) {
          
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
