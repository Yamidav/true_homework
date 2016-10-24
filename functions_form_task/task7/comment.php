<?php
 require 'common.php';

If (empty($_POST)){
    redirect('task7.php');
}

$body = !empty($_POST['comment']) ? $_POST['comment'] : null;
$username = !empty($_POST['username']) ? $_POST['username'] : null;
$email = !empty($_POST['email']) ? $_POST['email'] : null;
$date = date('Y-m-d H:i');

if (!$body || !$username || !$email) {
    redirect('index.php');
}

$body=processCommentBody($body);
$data = compact(['username', 'email', 'date', 'body']);
$storageData = prepareDataForStorage($data);
saveToFile($storageData);
redirect(STORAGE_FILENAME);
?>