<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title> Task7 </title>
</head>
<body>
<H1>Задание номер 7: Гостевая Книга</H1>
<div>
    <?php addComment('data.txt')?>
</div>
<p>
<form method="post">
    <!-- <input type="text" maxlength="15" size="30" name="name" required placeholder="Ваше имя"><br>
    <input type="text" maxlength="20" size="30" name="email" required placeholder="Ваш email"><br> -->
    <textarea required maxlength="350" wrap="soft" rows="10" cols="70" name="comment"></textarea><br>
    <input type="submit" name="addComment" value="Добавить комментарий">
</form>
</p>
<pre>
<?php
$file='data.txt';
function addComment($file){
    $end ="\040" . PHP_EOL;
    if(!empty($_POST)) {
        $resource=$_POST["comment"];
        $handle = fopen($file, 'a+');
        $newcom = trim($resource) . $end;
        fwrite($handle, $newcom);
        fclose($handle);
        checkFile('data.txt');
    }
    else {
        checkFile('data.txt');
    }
}
function checkFile ($file){
    $end="\040" . PHP_EOL;
    $handle = file_get_contents($file);
    $array = explode($end, $handle);
    if (count($array)>1) {
        foreach ($array as $key => $value) {
            echo "<p align=\"left\">$value</p>";
        }
    }
    else{
        echo "Пока еще нет ни одного комментария. Вы будете первым!";
    }
}
    ?>
    </pre>
</body>
</html>