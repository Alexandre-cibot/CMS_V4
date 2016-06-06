<?php include_once ('includes/header.php');?>
    <h1>Details</h1>
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
            <th>Title</th>
            <td><?=$data->title?></td>
        </tr>
        <tr>
           <th>Span</th>
           <td><?=$data->span?></td>
        </tr>
        <tr>
            <th>Span-class</th>
            <td><?=$data->span_class?></td>
        </tr>
        <tr>
            <th>Body</th>
            <td>
                <?=htmlspecialchars($data->body)?>
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