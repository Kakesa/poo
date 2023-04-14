<?php
require "autorisation.php";

$sql = "SELECT * FROM article ORDER BY id DESC";
$result = $db->query($sql);
$tb = $result->fetchAll();

include('menu.php');
if(count($tb) > 0) {

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Titre</th>
                <th>Slug</th>
                <th>Auteur</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
    <tbody>
            <?php 
            foreach($tb as $data) {
            ?>
            <tr>
                <td><?= $data['id'] ?></td>
                <td><?= $data['creatd_at'] ?></td>
                <td><?= $data['title'] ?></td>
                <td><?= $data['slug'] ?></td>
                <td><?= $data['auteur'] ?></td>
                <td><?php echo ($data['pic'])?'<img src="images/'.$data['pic'].'" width="100" />':null ?></td>
                <td>
                <a href="detail.php?id=<?= $data['id'] ?>">voir plus</a>
                <a onclick="supprimer(event)" href="supprimer.php?id=<?= $data['id'] ?>">Supprimer</a>
                <a href="editer.php?id=<?= $data['id'] ?>">Editer</a>
                </td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
        <script src="js/bootstrap.min.js"></script>
        <script>
        async function supprimer(event) {
            event.preventDefault()

            var url = event.target.getAttribute('href')
            if(confirm("Voulez-vous vraiment effectuer cette suppression?")) {
                event.target.innerHTML = "Suppression..."
                let rep = await fetch(url)
                                .then(response => response.json())
                                .then(json => json)

                if(rep.status == "ok") {
                    alert("Enregistrement réussi!")
                    event.target.closest('tr').remove()
                }
                else {
                    alert("Erreur")
                }
            }
            
        }
    </script>
    <?php 
    }
    else {
        echo "Aucun resultat";
    }
    ?>
    </body>
</html>
