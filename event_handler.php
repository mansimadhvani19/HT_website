<?php

require_once "config.php";
    
    $conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
    
    if(!$conn){
        die("Connection to the database failed due to ". mysqli_connect_error());
    }
$err = "";
if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // if(empty(trim($_POST['name']))){
    //     $err = "Name cannot be empty";
    //     echo $err;
    //     header("Location: event_registration.php?err=" . urlencode($err));
    //     exit;
    // }
    // else{
    //     $name = trim($_POST['name']);
    // }
    // if(empty(trim($_POST['email']))){
    //     $err = "Email cannot be empty";
    //     echo $err;
    //     header("Location: event_registration.php?err=" . urlencode($err));
    //     exit;
    // }
    // else{
    //     $email = trim($_POST['email']);
    // }
    // if(empty(trim($_POST['phone']))){
    //     $err = "Phone cannot be empty";
    //     echo $err;
    //     header("Location: event_registration.php?err=" . urlencode($err));
    //     exit;
    // }
    // else{
    //     $phone = trim($_POST['phone']);
    // }
    // if(empty(trim($_POST['blood_group']))){
    //     $err = "blood group cannot be empty";
    //     echo $err;
    //     header("Location: event_registration.php?err=" . urlencode($err));
    //     exit;
    // }
    // else{
    //     $blood_group = trim($_POST['blood_group']);
    // }
    // if(empty(trim($_POST['gender']))){
    //     $err = "gender cannot be empty";
    //     echo $err;
    //     header("Location: event_registration.php?err=" . urlencode($err));
    //     exit;
    // }
    // else{
    //     $gender = trim($_POST['gender']);
    // }
    // if(empty(trim($_POST['tshirt']))){
    //     $err = "tshirt size cannot be empty";
    //     echo $err;
    //     header("Location: event_registration.php?err=" . urlencode($err));
    //     exit;
    // }
    // else{
    //     $tshirt = trim($_POST['tshirt']);
    // }
    // if(empty(trim($_POST['address1']))){
    //     $err = "address line 1 cannot be empty";
    //     echo $err;
    //     header("Location: event_registration.php?err=" . urlencode($err));
    //     exit;
    // }
    // else{
    //     $address1 = trim($_POST['address1']);
    // }
    // if(empty(trim($_POST['address2']))){
    //     $err = "address line 2 cannot be empty";
    //     echo $err;
    //     header("Location: event_registration.php?err=" . urlencode($err));
    //     exit;
    // }
    // else{
    //     $address2 = trim($_POST['address2']);
    // }
    // if(empty(trim($_POST['city']))){
    //     $err = "city cannot be empty";
    //     echo $err;
    //     header("Location: event_registration.php?err=" . urlencode($err));
    //     exit;
    // }
    // else{
    //     $city = trim($_POST['city']);
    // }
    // if(empty(trim($_POST['state']))){
    //     $err = "state cannot be empty";
    //     echo $err;
    //     header("Location: event_registration.php?err=" . urlencode($err));
    //     exit;
    // }
    // else{
    //     $state = trim($_POST['state']);
    // }
    // if(empty(trim($_POST['country']))){
    //     $err = "country cannot be empty";
    //     echo $err;
    //     header("Location: event_registration.php?err=" . urlencode($err));
    //     exit;
    // }
    // else{
    //     $country = trim($_POST['country']);
    // }
    // if(empty(trim($_POST['pin_code']))){
    //     $err = "pin code cannot be empty";
    //     echo $err;
    //     header("Location: event_registration.php?err=" . urlencode($err));
    //     exit;
    // }
    // else{
    //     $pin_code = trim($_POST['pin_code']);
    // }
    // if(empty(trim($_POST['emergency_name'])) || empty(trim($_POST['emergency_phone']))){
    //     $err = "emergency contact name or emergency phone cannot be empty";
    //     echo $err;
    //     header("Location: event_registration.php?err=" . urlencode($err));
    //     exit;
    // }
    // else{
    //     $emergency_name = trim($_POST['emergency_name']);
    //     $emergency_number = trim($_POST['emergency_phone']);
    // }
    // if(empty(trim($_POST['category_km']))){
    //     $err = "category_km cannot be empty";
    //     echo $err;
    //     header("Location: event_registration.php?err=" . urlencode($err));
    //     exit;
    // }
    // else{
    //     $category = trim($_POST['category_km']);
    // }
    // if(empty(trim($_POST['organizer_name']))){
    //     $err = "organizer_name cannot be empty";
    //     echo $err;
    //     header("Location: event_registration.php?err=" . urlencode($err));
    //     exit;
    // }
    // else{
    //     $organizer_name = trim($_POST['organizer_name']);
    // }
    // if(empty(trim($_POST['reference']))){
    //     $err = "reference cannot be empty";
    //     echo $err;
    //     header("Location: event_registration.php?err=" . urlencode($err));
    //     exit;
    // }
    // else{
    //     $reference = trim($_POST['reference']);
    // }
    // if(empty(trim($_POST['discount_code']))){
    //     $discount_code = NULL;
    // }
    // else{
    //     $discount_code = trim($_POST['discount_code']);
    // }
    
    // if (!empty($err)) {
    //     header("Location: event_registration.php?err=" . urlencode($err));
    //     exit;
    // }
    
$errors = [];

if (empty(trim($_POST['name']))) {
    $errors[] = "Name cannot be empty";
}

else if (empty(trim($_POST['email']))) {
    $errors[] = "Email cannot be empty";
}

else if (empty(trim($_POST['phone']))) {
    $errors[] = "Phone cannot be empty";
}

else if (empty(trim($_POST['blood_group']))) {
    $errors[] = "Blood Group cannot be empty";
}

else if (empty(trim($_POST['gender']))) {
    $errors[] = "Gender cannot be empty";
}

else if (empty(trim($_POST['tshirt']))) {
    $errors[] = "T-shirt size cannot be empty";
}

else if (empty(trim($_POST['address1']))) {
    $errors[] = "Address line 1 cannot be empty";
}

else if (empty(trim($_POST['address2']))) {
    $errors[] = "Address line 2 cannot be empty";
}

else if (empty(trim($_POST['city']))) {
    $errors[] = "City cannot be empty";
}

else if (empty(trim($_POST['state']))) {
    $errors[] = "State cannot be empty";
}

else if (empty(trim($_POST['country']))) {
    $errors[] = "Country cannot be empty";
}

else if (empty(trim($_POST['pin_code']))) {
    $errors[] = "Pin code cannot be empty";
}

// else if (empty(trim($_POST['emergency_name'])) || empty(trim($_POST['emergency_phone']))) {
//     $errors[] = "Emergency contact name or emergency phone cannot be empty";
// }

// else if (empty(trim($_POST['category_km']))) {
//     $errors[] = "Category_km cannot be empty";
// }

// else if (empty(trim($_POST['organizer_name']))) {
//     $errors[] = "Organizer name cannot be empty";
// }

// else if (empty(trim($_POST['reference']))) {
//     $errors[] = "Reference cannot be empty";
// }

// $discount_code = empty(trim($_POST['discount_code'])) ? null : trim($_POST['discount_code']);
$discount_code = "abcd";

if (!empty($errors)) {
    $err = implode(", ", $errors);
    header("Location: event_registration.php?err=" . urlencode($err));
    exit;
}

// If all validations passed, assign the values to variables
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$blood_group = trim($_POST['blood_group']);
$gender = trim($_POST['gender']);
$tshirt = trim($_POST['tshirt']);
$address1 = trim($_POST['address1']);
$address2 = trim($_POST['address2']);
$city = trim($_POST['city']);
$state = trim($_POST['state']);
$country = trim($_POST['country']);
$pin_code = trim($_POST['pin_code']);   
// $emergency_name = trim($_POST['emergency_name']);
$emergency_name = "emergency_name";
// $emergency_number = trim($_POST['emergency_phone']);
$emergency_number = "emergency_phone";
// $category = trim($_POST['category_km']);
$category = "5km";
// $organizer_name = trim($_POST['organizer_name']);
$organizer_name = "abc";
// $reference = trim($_POST['reference']);
$reference = 'reference';
    
if (empty($err)){
    $flag = "true";
    echo $flag;
    header("Location: event_registration.php");
}

    $address = $address1 . ', ' . $address2 . ', ' . $city . ', ' . $state . ', ' . $country . ' - ' . $pin_code;
    

    
    $payment_status = "pending";

    require_once "payment.php";

    
    // if ($payment_status == "success"){
    //     if(empty($err))
    //     {
    //         $sql = "INSERT INTO HappyTeam.event_registration (name, email, phone, blood_group, gender, tshirt_size, address, category_km, emergency_contact_name, emergency_contact_number, organizer_name, refer_by, discount_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    //         $stmt = mysqli_prepare($conn, $sql);
    //         if ($stmt)
    //         {
    //             mysqli_stmt_bind_param($stmt, "sssssssssssss", $param_name, $param_email, $param_phone, $param_blood_group, $param_gender, $param_tshirt_size, $param_address, $param_category_km, $param_emergency_name, $param_emergency_number, $param_organizer_name, $param_refer_by, $param_discount_code);

    //             // Set these parameters
    //             $param_name = $name;
    //             $param_email = $email;
    //             $param_phone = $phone;
    //             $param_blood_group = $blood_group;
    //             $param_gender = $gender;
    //             $param_tshirt_size = $tshirt;
    //             $param_address = $address;
    //             $param_category_km = $category;
    //             $param_emergency_name = $emergency_name;
    //             $param_emergency_number = $emergency_number;
    //             $param_organizer_name = $organizer_name;
    //             $param_refer_by = $reference;
    //             $param_discount_code = $discount_code;

    //             // Try to execute the query
    //             if (mysqli_stmt_execute($stmt))
    //             {
    //                 header("location: index.php");
    //             }
    //             else{
    //                 echo "Something went wrong... cannot redirect!";
    //             }
    //         }
    //         mysqli_stmt_close($stmt);
    //     }
    //     mysqli_close($conn);
    // }

}

?>