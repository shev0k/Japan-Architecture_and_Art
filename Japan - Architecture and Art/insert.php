<?php 

$con = mysqli_connect("localhost","root","","wp");

function pkcs7_pad($data, $size) //criptare
{
    $length = $size - strlen($data) % $size;
    return $data . str_repeat(chr($length), $length);
}

function pkcs7_unpad($data) //decriptare
{
    return substr($data, 0, -ord($data[strlen($data) - 1]));
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

$key_size = 32; // 256 bits
$encryption_key = '変態';
$secret_iv = 'アラバマ';

$iv_size = 16; // 128 bits
$iv = substr(hash('sha256', $secret_iv), 0, 16);;

$enc_name = openssl_encrypt(pkcs7_pad($name, 16), 'AES-256-CBC', $encryption_key, 0, $iv);
$enc_email = openssl_encrypt(pkcs7_pad($email, 16), 'AES-256-CBC', $encryption_key, 0, $iv);
$enc_password = openssl_encrypt(pkcs7_pad($password, 16), 'AES-256-CBC', $encryption_key, 0, $iv);

$statment = "insert into register (name,email,password,repassword) values ('$enc_name','$enc_email','$enc_password','$iv')";
$res = mysqli_query($con ,$statment);


echo "Successfullyregisterd";
header('Location: login.php');
?>