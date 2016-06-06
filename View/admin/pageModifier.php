<?php include_once ('includes/header.php');?>

<h1>Modifications</h1>

    <form action="#" method="POST">
        <table class="table-bordered table-responsive table">
            <tr>
                <td>
                    <a href="../admin/index.php">Retour</a>
                </td>
            </tr>
            <tr>
                <th>Slug</th>
                <td><input type="text" name="slug" value="<?=$data->slug?>"></td>
            </tr>
            <tr>
                <th>Title</th>
                <td><input type="text" name="title" value="<?=$data->title?>"></td>
            </tr>
            <tr>
                <th>Span</th>
                <td><input type="text" name="span" value="<?=$data->span?>"></td>
            </tr>
            <tr>
                <th>Span-class</th>
                <td><input type="text" name="span_class" value="<?=$data->span_class?>"></td>
            </tr>
            <tr>
                <th>Body</th>
                <td>
                    <textarea name="body" id="" cols="30" rows="10"><?=htmlspecialchars($data->body)?></textarea>
                </td>
            </tr>
            <tr>
                <th>Image</th>
                <td><input type="file" name="img" value="<?=$data->img?>"></td>
            </tr>
        </table>
        <input type="submit" class="btn btn-warning" value="Valider">
    </form>
</div>
</body>
</html>