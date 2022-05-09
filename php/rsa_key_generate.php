function rsa_key_generate ($prime_number_1, $prime_number_2) {
    if($prime_number_1 === $prime_number_2) {
        return false;
    }


    $open_1 = (string)gmp_mul($prime_number_1, $prime_number_2);
    $n_ = gmp_mul(gmp_sub($prime_number_1, '1'), gmp_sub($prime_number_2, '1'));
    $rand = gmp_random_range(0, gmp_sub($n_, '1'));

    while (true) {
        $coprime_numbers = (string)gmp_gcd($rand, $n_);

        if ($coprime_numbers === '1') {
            $open_2 = (string)$rand;
            break;
        }

        $rand = gmp_sub($rand, '1');
    }

    $secret = (string)gmp_invert($open_2, $n_);

    return [$secret, $open_1, $open_2];
}