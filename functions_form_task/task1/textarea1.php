<?php
function getCommonWords ($a,$b)
{
    if (!empty($_POST["$a"])) {
        $text1 = ($_POST["$a"]);
        $text1 =preg_replace ('/[^a-zа-яё\040]+/iu',"\040",$text1);
        $array1 = explode(' ', $text1);
    } else {
        echo "Введите текст в 1 форму";
    }
    if (isset($_POST["$b"])) {
        $text2 = ($_POST["$b"]);
        $text2 =preg_replace ('/[^a-zа-яё\040]+/iu',"\040",$text2);
        $array2 = explode(' ', $text2);
    } else {
        echo "Введите текст в 2 форму";
    }
    $array3 = array_intersect($array1, $array2);
    $result = implode(" ", $array3);
    echo "<p>Вот все общие слова которые вы написали:$result</p>";
}
getCommonWords(text1,text2);
