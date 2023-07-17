<?php
    session_start();
    require_once "config.php";
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['blood_group']) && isset($_POST['gender']) && isset($_POST['tshirt_size']) && isset($_POST['address1']) && isset($_POST['address2']) && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['country']) && isset($_POST['pin_code']) && isset($_POST['category_km']) && isset($_POST['emergency_contact_name']) && isset($_POST['emergency_contact_number']) && isset($_POST['organizer_name']) && isset($_POST['reference'])){
        
        
        $add = ($_POST['address1']) . ', ' . ($_POST['address2']) . ', ' . ($_POST['city']) . ', ' . ($_POST['state']) . ', ' . ($_POST['country']) . ' - ' . ($_POST['pin_code']);

        $name = ($_POST['name']);
        $email = ($_POST['email']);
        $phone = ($_POST['phone']);
        $blood_group = ($_POST['blood_group']);
        $gender = ($_POST['gender']);
        $tshirt_size = ($_POST['tshirt_size']);
        $address = $add;
        $category_km = ($_POST['category_km']);
        $emergency_contact_name = ($_POST['emergency_contact_name']);
        $emergency_contact_number = ($_POST['emergency_contact_number']);
        $organizer_name = ($_POST['organizer_name']);
        $refer_by = ($_POST['reference']);
        $discount_code = NULL;
        $payment_status="pending";  
        // $added_on=date('Y-m-d h:i:s');

        mysqli_query($conn,"INSERT INTO `event_registration`(`name`, `email`, `phone`, `blood_group`, `gender`, `tshirt_size`, `address`, `category_km`, `emergency_contact_name`, `emergency_contact_number`, `organizer_name`, `refer_by`, `discount_code`, `payment_status`) VALUES ('$name','$email','$phone','$blood_group', '$gender', '$tshirt_size', '$address', '$category_km', '$emergency_contact_name', '$emergency_contact_number	', '$organizer_name', '$refer_by', '$discount_code', '$payment_status')");
        $_SESSION['OID']=mysqli_insert_id($conn);
    }


    if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
        $payment_id=$_POST['payment_id'];
        mysqli_query($conn,"update event_registration set payment_status='success',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
    }
?>