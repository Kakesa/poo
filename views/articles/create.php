<?php 
    require "autorisation.php";
    include('menu.php');
?>
<form action="action.php" enctype="multipart/form-data" method="post">
    <p>
        Titre : 
        <input type="text" name="title">
    </p>
    <p>Slug : <input type="text" name="slug"></p>
    <p>Description : <textarea name="content" id="" cols="30" rows="10"></textarea></p>
    <p>Auteur : <input type="text" name="auteur"></p>
    <p>Image : <input type="file" name="pic"></p>
    <p><button type="submit">Valider</button></p>
</form>