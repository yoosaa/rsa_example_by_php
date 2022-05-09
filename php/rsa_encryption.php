function rsa_encryption ($encryption_target, $open_1, $open_2) {
    $b = [];
    foreach ($encryption_target as $value) {
        $encryption_target_e = gmp_pow($value, $open_2);
        $b[] = (string)gmp_div_r($encryption_target_e, $open_1);
    }
    return $b
}