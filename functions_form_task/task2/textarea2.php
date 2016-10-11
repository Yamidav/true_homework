<?php
function cmp($a, $b)
{
    if (iconv_strlen($a) === iconv_strlen($b)) {
        return 0;
    }
    return (iconv_strlen($a) < iconv_strlen($b)) ? 1 : -1;
}
if (!empty($_POST['text1'])) {
    $text1 = ($_POST['text1']);
    $text1 = explode(" ", $text1);
    usort($text1, "cmp");
    $result = array_slice($text1, 0, 3);
    $result = implode(" ",$result);
    echo "$result";
}
else {
        echo "Пожалуйста введите текст в форму";
    }
