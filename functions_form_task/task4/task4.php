<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title> Task4 </title>
</head>
<body>
<H1>Задание номер 4</H1>
<pre>
    <?php
        function directoryListing ($dirName){
            if (!is_dir($dirName)) {
                trigger_error('Directory does not exist.', E_USER_NOTICE);
                return null;
            }
     $h = opendir($dirName);
        $files=[];
        while (($f = readdir($h)) !==false){
            if ($f !='.'
            && $f!= '..'){
                $files[] = $f;
            }
        }
        return $files;
    }
    $list= directoryListing('../');
    print_r($list);
    ?>
</pre>
</body>
</html>