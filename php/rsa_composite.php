function rsa_composite ($encryption, $secret, $open) {
    $a = [];
    foreach ($encryption as $value) {
        $encryption_d = gmp_pow($value, $secret);
        $a[] = (string)gmp_div_r($encryption_d, $open);
    }
    return $a
}