function comvert_string_to_integer ($str) {
    $ord_array = [];
    for($i = 0; $i < mb_strlen($str); $i++){
        $value = mb_substr($str, $i, 1);
        $ord_array[] = mb_ord($value);
    }
    return $ord_array;
}