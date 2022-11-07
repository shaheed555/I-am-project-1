<?php 
error_reporting(0);
$firstName = $_POST['firstName'];
$lastName =  $_POST['lastName'];
$email =     $_POST['email'];

$errors = [
    'firstNameError' =>'',
    'lastNamEerror' =>'' ,
    'emailError' =>'',
];

if (isset($_POST['submit'])) {
                $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
                $lastName =  mysqli_real_escape_string($conn, $_POST['lastName']);
                $email =     mysqli_real_escape_string($conn, $_POST['email']);
            $sql = "INSERT INTO users (firstName, lastName, email) 
                VALUES ('$firstName','$lastName','$email')";
if (empty($firstName)){
    $errors['firstNameError'] = 'ادخل الاسم الاول';
}if (empty($lastName)){
    $errors['lastNameError'] = 'ادخل الاسم الاخير';
}if (empty($email)){
    $errors['emailError'] = 'ادخل الايميل';

}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['emailError'] = 'ادخل ايميل صالح';
}else{
if(mysqli_query($conn, $sql)){
header('Location:'. $_SERVER['PHP_SELF']);
}else{
echo 'fail' . mysqli_error($conn);
            }
        
        }
    
    }