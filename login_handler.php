<?php
require_once "config.php";

$conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if(!$conn){
    die("Connection to the database failed die to ". mysqli_connect_error());
}

function validateLogin($name, $email, $password, $conn) {
    $query = "SELECT * FROM registration WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 0){
        $errors = "User not registered";
        header("Location: login.php?err=" . urlencode($errors));
        exit;
    }
    if(mysqli_num_rows($result) > 0) {
        // User exists, check if the password matches
        $row = mysqli_fetch_assoc($result);
        // echo "Password from the database ". $row['password'] . "<br>";
        // if(password_verify($password, $row['password'])) {
        if ($password === $row['password']){
            // Password matches, store user details in the login table
            $userId = $row['id'];
            $insertQuery = "INSERT INTO login (name, email, password) VALUES ('$name', '$email', '$password')";
            mysqli_query($conn, $insertQuery);

            // Allow the user to login
            return true;
        } else {
            // Invalid password
            return false;
        }
    } else {
        // User not registered
        return false;
    }
}

function sanitizeInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = sanitizeInput($_POST["name"]);
        $email = sanitizeInput($_POST["email"]);
        $password = sanitizeInput($_POST["password"]);
    
        // Validate user input
        $errors;
        if (empty($name)) {
            $errors = "Name is required";
            header("Location: login.php?err=" . urlencode($errors));
            exit;
        }
    
        if (empty($email)) {
            $errors = "Email is required";
            header("Location: login.php?err=" . urlencode($errors));
            exit;
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors = "Invalid email format";
            header("Location: login.php?err=" . urlencode($errors));
            exit;
        }
    
        if (empty($password)) {
            $errors = "Password is required";
            header("Location: login.php?err=" . urlencode($errors));
            exit;
        }
    
        // If there are no validation errors, proceed with login validation
        if (empty($errors)) {
            // echo "The entered password is ". $password. "<br>";
            // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            // echo "The entered hashed password is ". $hashed_password. "<br>";
            if(validateLogin($name, $email, $password, $conn)) {
                // User login successful, redirect to dashboard or desired page
                header("location: index.php");
                
            } else {
                // Invalid login credentials, display error message
                $errorMessage = "Invalid password";
                echo $errorMessage;
                header("Location: login.php?err=" . urlencode($errorMessage));
                exit;
                // header("location: index.php");
            }
        } 
        // else {
        //     // Print the validation errors
        //     foreach ($errors as $error) {
        //         header("Location: login.php?err=" . urlencode($error));
        //         // echo $error . "<br>";
        //     }
        // }
    }

    
// check if the user is already logged in
// if(isset($_SESSION['email']))
// {
//     header("location: index.php");
//     exit;
// }

?>