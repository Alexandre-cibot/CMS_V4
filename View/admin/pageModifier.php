<?php include_once ('includes/header.php');?>

<h1>Pages</h1>

    <form action="#" method="POST">
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
                <td><input type="text" name="title" value="<?=$data->title?>"></td>
            </tr>
            <tr>
                <th>Body</th>
                <td>
                    <textarea type="text" name="body"><?=htmlspecialchars($data->body)?></textarea>
                </td>
            </tr>
            <tr>
                <th>Image</th>
                <td>
                    <input type="text" name="img" value="<?=$data->img?>">
                </td>
            </tr>
        </table>
        <input type="submit" class="btn btn-warning" value="Valider">
    </form>
</div>
</body>
</html>