<?php
// check if the user is already logged in
if(isset($_SESSION['email']))
{
    header("location: index.php");
    exit;
}
require_once "config.php";

$conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if(!$conn){
    die("Connection to the database failed die to ". mysqli_connect_error());
}

$email = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['email'])) || empty(trim($_POST['password'])))
    {
        header('location:login.php?error');
        // $err = "Please enter email + password";
    }
    else{
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
    }


    if (empty($err)) {
        $sql = "SELECT id, email, password FROM HappyTeam.registration WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        
        // Check if the statement was prepared successfully
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            $param_email = $email;
            
            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                
                // Check if a matching email was found
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    mysqli_stmt_fetch($stmt);
                    
                    // Verify the password
                    if (password_verify($password, $hashed_password)) {
                        // Password is correct. Allow user to login
                        session_start();
                        $_SESSION["email"] = $email;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;
                        
                        //insert into the database

                        $sql = "INSERT INTO HappyTeam.login (name, email, password) VALUES (?, ?, ?)";
                        $stmt = mysqli_prepare($conn, $sql);

                        if ($stmt) {
                            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_email, $param_password);

                            // Set the parameters
                            $param_name = $name;
                            $param_email = $email;
                            $param_password = password_hash($password, PASSWORD_DEFAULT);

                            // Execute the statement
                            if (mysqli_stmt_execute($stmt)) {
                                // Redirect to the index page
                                header("location: index.php");
                                exit;
                                } else {
                                    $err = "Something went wrong... cannot redirect!";
                                }

                                // Close the statement
                                mysqli_stmt_close($stmt);
                            }
                    } 
                    else {
                        $err = "Invalid password";
                        echo $err;
                        header("Location: login.php?err=" . urlencode($err));
                        exit;
                    }
                } 
                else {
                    $err = "email not found";
                    echo $err;
                    header("Location: login.php?err=" . urlencode($err));
                    exit;
                }
            } 
            
            else {
                $err = "Something went wrong. Please try again later.";
                echo $err;
                header("Location: login.php?err=" . urlencode($err));
            }
            
            // Close the statement
            mysqli_stmt_close($stmt);
        } 
        
        else {
            $err = "Something went wrong. Please try again later.";
            echo $err;
            header("Location: login.php?err=" . urlencode($err));
            exit;
        }

    }   

}
// session_start(); 
// $error=''; 

// if (isset($_POST['submit'])) {
// if (empty($_POST['email']) || empty($_POST['password'])) {
// $error = "email or Password is invalid";
// }
// else
// {
// // Define $username and $password
// $email=$_POST['email'];
// $password=$_POST['password'];
// // Establishing Connection with Server by passing server_name, user_id and password as a parameter
// require 'config.php';
// // $conn = Connect();
// $conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

// // SQL query to fetch information of registerd users and finds user match.
// $query = "SELECT email, password FROM registration WHERE email=? AND password=? LIMIT 1";

// // To protect MySQL injection for Security purpose
// $stmt = $conn->prepare($query);
// $stmt -> bind_param("ss", $email, $password);
// $stmt -> execute();
// $stmt -> bind_result($email, $password);
// $stmt -> store_result();

// if ($stmt->fetch())  
// {
// 	// $_SESSION['login_user2']=$username; // Initializing Session
// 	header("location: index.php"); // Redirecting To Other Page
// } else {
// $error = "Username or Password is invalid";
// }
// mysqli_close($conn); // Closing Connection
// }
// }


?>