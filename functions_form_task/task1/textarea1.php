<?php
function getCommonWords ()
{
    if (isset($_POST['text1'])) {
        $text1 = ($_POST['text1']);
        $array1 = explode(' ', $text1);
    } else {
        echo "Введите текст в 1 форму";
    }
    if (isset($_POST['text2'])) {
        $text2 = ($_POST['text2']);
        $array2 = explode(' ', $text2);
    } else {
        echo "Введите текст в 2 форму";
    }
    $array3 = array_intersect($array1, $array2);
    $result = implode(" ", $array3);
    echo "<p>$result</p>";
}
getCommonWords();
