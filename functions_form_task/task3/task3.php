<?php
function cbck($a)
{
    //$b=($_POST['lentgh']); тут будет ссылка на форму в html файле
    $b = 5;
    if (mb_strlen($a) >= $b) {
        return 1;
    } else {
        return 0;
    }
}
$b = 5;
$fp= fopen('text.txt', 'r');
var_dump($fp);
$text1=file_get_contents('./text.txt');
var_dump($text1);
//$text1="Текст какой, тЇо с кучїй символів, вот такая: фигня."; **для провери нижней части кода
$text2=preg_replace('/[^a-zа-яіїіЇ\040]+/iu',"\040",$text1);
$array1= explode(" ",$text2);
$badWords = array_filter($array1,'cbck');
foreach ($badWords as &$value){
    $value="/$value/";
}
$result=preg_replace ($badWords,"\040",$text1);
echo "Отредактированный текст cо словами меньше {$b}: $result";
unset ($value);
unset ($b);