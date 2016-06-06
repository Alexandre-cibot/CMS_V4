<?php include_once ('includes/header.php');?>

    <h1>Pages</h1>
    <a href="index.php?a=ajouter" class="btn btn-primary">Ajouter</a>
    <br>
    <br>
    <table class="table-bordered table-responsive table">
        <tr>
            <th>ID</th>
            <th>Slug</th>
            <th>Titre</th>
            <th>Action</th>
        </tr>
        <?php foreach($data as $page):?>
        <tr>
            <td><?=$page->id?></td>
            <td><?=$page->slug?></td>
            <td><?=$page->title?></td>
            <td>
                <a href="index.php?a=details&id=<?=$page->id?>">Details</a>
                <a href="index.php?a=modifier&id=<?=$page->id?>">Modifier</a>
                <a href="index.php?a=supprimer&id=<?=$page->id?>">Supprimer</a>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
</div>
</body>
</html>