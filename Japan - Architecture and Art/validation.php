<?php

$con = mysqli_connect("localhost","root","","wp");

$name= $_POST['name'];
$password = $_POST['password'];

function pkcs7_pad($data, $size) //criptare
{
    $length = $size - strlen($data) % $size;
    return $data . str_repeat(chr($length), $length);
}

$key_size = 32; // 256 bits
$encryption_key = '変態';
$secret_iv = 'アラバマ';

$iv_size = 16; // 128 bits
$iv = substr(hash('sha256', $secret_iv), 0, 16);

$enc_name = openssl_encrypt(pkcs7_pad($name, 16), 'AES-256-CBC', $encryption_key, 0, $iv);
$enc_password = openssl_encrypt(pkcs7_pad($password, 16), 'AES-256-CBC', $encryption_key, 0, $iv);
$statment = "SELECT id from register WHERE name='$enc_name' AND password='$enc_password' ";

$res = mysqli_query($con, $statment);

if($res)
{
	while($arr = mysqli_fetch_array($res))
	{
		echo "Login Successful...";
		header('Location: Japan.html');
	}
	
}

$row= mysqli_num_rows($res);
if(!$row)
{
	echo "Invalid Login Details";
}


?>