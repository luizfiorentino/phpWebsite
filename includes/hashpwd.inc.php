<?php

$ensitiveData = "Krossing";
$salt = bin2hex(random_bytes(16));// Generate random salt
$pepper = "ASecretPepperString";

$dataToHash = $ensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

echo "<br>" . $hash;