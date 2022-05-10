function convert_integer_to_string ($int_array) {
    $char = '';
    foreach ($int_array as $value) {
        $char .= mb_chr($value)
    }
    return $char;
}