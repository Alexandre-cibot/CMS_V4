<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des pages</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 70px;
        }
    </style>
</head>
<body role="document">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="">Back Office</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="">Pages</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container theme-showcase" role="main">
    <h1>Pages</h1>
    <table class="table-bordered table-responsive table">
        <tr>
            <td>
                <a href="../admin/index.php">Retour</a>
            </td>
        </tr>
        <tr>
            <th>ID</th>
            <td><?=$data->id?></td>
        </tr>
        <tr>
            <th>Slug</th>
            <td><?=$data->slug?></td>
        </tr>
        <tr>
           <th>Titre</th>
           <td><?=$data->title?></td>
        </tr>
        <tr>
            <th>Body</th>
            <td>
                <pre><?=htmlspecialchars($data->body)?></pre>
            </td>
        </tr>
        <tr>
            <th>Image</th>
            <td><img src="../img/<?=$data->img?>" alt=""></td>
        </tr>
    </table>
</div>
</body>
</html>