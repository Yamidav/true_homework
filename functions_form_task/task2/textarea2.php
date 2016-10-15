
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
    $text1 =preg_replace ('/[^a-zа-яё\040]+/iu',"\040",$text1);
    $text1 = explode(" ", $text1);
    usort($text1, "cmp");
    $result = array_slice($text1, 0, 3);
    $result = implode(" ",$result);
    echo "Топ3 самых длинных слова:\040$result";
}
else {
        echo "Пожалуйста введите текст в форму";
    }
