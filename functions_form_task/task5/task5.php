<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title> Task5 </title>
</head>
<body>
<H1>Задание номер 5</H1>
<pre>
    <?php
    function directoryListing ($dirName,$Search)
    {
        if (!is_dir($dirName)) {
            trigger_error('Directory does not exist.', E_USER_NOTICE);
            return null;
        }
        chdir($dirName);
        return glob("*{$Search}*");
    }
    $list = directoryListing('C:\xampp', 'php');
    print_r($list);
    ?>
</pre>
</body>
</html>