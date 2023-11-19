<?php
    include 'config.php';
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo '<script>alert("EHC{just_a_simple_payload}")</script>';
            echo '<script>window.location = "home.php"</script>';
        } else {
            echo "Username: " . $username;
            echo "<br>";
            echo "Password: " . $password;
            var_dump($sql);
        }
    }
    
?>
