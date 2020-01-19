<?php

use Drupalkid\Encryption\EncryptionFactory;

require_once 'app/start.php';

$encrypted_data = EncryptionFactory::decrypt("unKd9j0nwBiYOcFcnlcxil1dMmkbm6x3cA9n3Q8RVQU=", "decrypt");
$decrypted_data = EncryptionFactory::encrypt("Hello", "encrypt");

print_r($encrypted_data);
print_r($decrypted_data);
