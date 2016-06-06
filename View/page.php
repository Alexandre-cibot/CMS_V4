<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=htmlspecialchars($page->title)?></title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body role="document">
<?=$nav?>
<div class="container theme-showcase" role="main">
    <div class="container theme-showcase" role="main">
        <div class="jumbotron">
            <h1><?=htmlspecialchars($page->title)?></h1>
            <p><?=htmlspecialchars($page->body)?></p>
            <span class="label <?=htmlspecialchars($page->span_class)?>"><?=htmlspecialchars($page->span)?></span>
        </div>
        <img class="img-thumbnail" alt="Teletubbies" src="img/<?=htmlspecialchars($page->img)?>" data-holder-rendered="true">
    </div>
</div>
</body>
</html>