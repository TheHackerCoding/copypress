<?php
$email = $_POST["email"];
$encrypting = $_POST['password'];
$encrypt = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($encrypt); 
$options = 0; 
$encryption_iv = "011101000110100001100101011000100110111101111010011110100110101101100111"; /* lol thebozzkg */
$encrypt_key = $email;
$encryption = openssl_encrypt($encrypting, $encrypt, $encrypt_key, $options, $encryption_iv);
$current_idRAW = file_get_contents("./id");
$current_idRaw = number_format($current_idRAW);
$current_idCurrent = $current_idRaw + 1;
file_put_contents('id', $current_idCurrent);
$current_data = file_get_contents("accounts");
$array_data = json_decode($current_data, true);
$extra = array(
    'id' => $current_idCurrent,
    'email' => $email,
    'password' => $encryption
);
$array_data[] = $extra;
$final_data[] = json_encode($array_data);
/*
    Testing purposes :)
    echo $encryption;
    echo $extra['id'];
*/
file_put_contents('accounts', $final_data);

?>