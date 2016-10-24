<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/my.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title> Task7 </title>
</head>
<body>
<header>
    <h1>Guest book</h1>
</header>
<div class="col-xs-12 col-md-8">
    <?php
    require 'common.php';
    $comments = getComments();
    if (!empty($comments))
    {
        foreach ($comments as &$entry) :?>
            <div class="panel panel-default">
                <div class="panel-heading">
                        <h3 class="panel-title">
                            <?php
                            echo "{$entry['username']} / {$entry['date']} / {$entry['email']}" ?> </h3>
                </div>
                <div class="panel-body">
                        <?= $entry['body'] ?>
                </div>
            </div>
            <?php
            endforeach;
            unset($entry);
    } else {
            echo "<h3>No comments have been added yet.</h3>";
        }
    ?>
</div>
<div
<form class="left-content col-xs-10 col-md-4">
    <div class="form-group">
        <label for="comment" class="control-label">Комментарий</label>
        <textarea class="form-control" id="comment" name="comment" rows="8" cols="40" required="true"></textarea>
    </div>
    <div class="form-group">
        <label for="username" class="control-label">Имя</label>
        <input class="form-control" type="text" name="username" id="username" required="true">
    </div>
    <div class="form-group">
        <label for="email" class="control-label">E-mail</label>
        <input class="form-control" type="email" name="email" id="email" required="true">
    </div>
    <div class="form-group">
                <button type="submit" class="btn btn-default">Добавить</button>
    </div>
    </form>
</body>
</html>