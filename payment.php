<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment through Razorpay</title>
</head>
<body>
    <?php
    $apikey = 'rzp_test_eQfoAMwI3i6mf1';
    ?>
<form action="" method ="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apikey;?>"
    data-currency="INR"
    data-id="<?php echo 'OID' .rand(10, 100).'END';?>"
    data-buttontext="Pay with Razorpay" 
    data-descriptions="Event Registration payment"
    data-image="https://happyteam.co.in/images/CV%20RFGBFV.png"
    data-prefill.name="<?php echo $_POST['name']; ?>"
    data-prefill.email="<?php echo $_POST['email']; ?>"
    data-prefill.contact="<?php echo $_POST['phone']; ?>"
    data-theme.color="#F37254"

></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>
</body>
</html>