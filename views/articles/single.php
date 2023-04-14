<?php
require "autorisation.php";

if(!empty($_GET['id'])) {
   
        $id = (int)$_GET['id'];

        $sql = "SELECT * FROM article WHERE id = ?";
        $result = $db->prepare($sql);
        $result->execute([$id]);

        $data = $result->fetch();
    
    
}
else {
    header("location:liste.php");
}

include('menu.php');
?>

<div>

    <h1><?= $data['title'] ?></h1>
    <p>
        <i><?= $data['created_at'] ?></i> | 
        <b><?= $data['auteur'] ?></b>

    </p>

    <div>
        <?= nl2br($data['content']) ?>
    </div>

</div>