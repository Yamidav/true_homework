<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title> Task3 </title>
</head>
<body>
<H1>Задание номер 3</H1>
<form method="post">
    <input type="number" name="lentgh">
    <input type="submit" name="button" value="Отправить">
</form>
<?php

    if (empty($_POST)) {
        die ("PLS TYPE NUMBER");
    }
    else {}
function rewrite($c) {
$text1=file_get_contents("./$c");
$text2=preg_replace('/[^\w\040]+/ui',"\040",$text1);
$array1= explode(" ",$text2);
$badWords = array_filter($array1,'cbck');
foreach ($badWords as &$value){
    $value="/$value/";
}
$result=preg_replace ($badWords,"\040",$text1);
echo "Отредактированный текст cо словами меньше {$_POST['lentgh']}: <br> $result";
}
function cbck($a){
    $b=intval($_POST['lentgh']);
    if (mb_strlen($a) >= $b) {
        return 1;
    } else {
        return 0;
    }
}
?>
<?php rewrite ('text.txt')?>
</body>
</html>