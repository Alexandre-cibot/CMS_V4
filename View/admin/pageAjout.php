<?php include_once ('includes/header.php');?>

<h1>Pages</h1>

    <form action="?a=ajouter" method="POST">
        <table class="table-bordered table-responsive table">
            <tr>
                <td>
                    <a href="index.php">Retour</a>
                </td>
            </tr>
            <tr>
                <th>Slug</th>
                <td><input type="text" name="slug" required></td>
            </tr>
            <tr>
                <th>Titre</th>
                <td><input type="text" name="title" required></td>
            </tr>
            <tr>
                <th>Body</th>
                <td>
                    <textarea type="text" name="body" required>
                        <div class="container theme-showcase" role="main">
                            <div class="jumbotron">
                                <h1></h1>
                                <p></p>
                                <span class="label label-danger"></span>
                            </div>
                            <img class="img-thumbnail" alt="Teletubbies" src="img/" data-holder-rendered="true">
                        </div>
                    </textarea>
                </td>
            </tr>
            <tr>
                <th>Image</th>
                <td>
                    <input type="text" name="img" required>
                </td>
            </tr>
        </table>
        <input type="submit" class="btn btn-warning" value="Valider">
    </form>
</div>
</body>
</html>