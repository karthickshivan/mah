<?php
$host = "localhost";
$dbname = "mahdb21";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Successfully";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Assuming your form has fields like 'Name', 'dluser_email', 'dluser_password', 'dluser_conpassword', etc.
        $username = $_POST['Name'];
        $dluser_email = $_POST['dluser_email'];
        $dluser_password = $_POST['dluser_password'];

        // Check if all required form fields are set
        if (!empty($username) && !empty($dluser_email) && !empty($dluser_password)) {
            // Prepare and execute an INSERT statement
            $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $dluser_email); // Use $dluser_email instead of undefined $email
            $stmt->bindParam(':password', $dluser_password);

            $stmt->execute();

            // Registration successful message
            echo "Registration successful";
        } else {
            echo "All form fields are required.";
        }
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
