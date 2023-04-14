<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/style.css">
    <style>
    .alert {
        color:red;border:1px solid red;
        border-radius:5px;
        padding: 5px;
    }
</style>
</head>
<body>      
    <form action="action.php" enctype="multipart/form-data" method="post" style="margin-top : 80px; border:2px solid white; padding:20px;">
       <h1 style="text-align: center;">Connexion</h1>
        <?php 
            if(isset($_GET['noexist'])) {
            echo '<p class="alert">Email ou mot de passe incorrecte!</p>';
            }
        ?>
        <div class="container">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">@example.com</span>
                <input type="email" name="email" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">  
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Your password</span>
                <input type="password" name="password" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div><br>
            <p style="text-align: center;"><input type="submit" class="btn btn-primary" value="Connexion" name="button_con"></p>
            <p class="link" style="color:black;"><strong> Vous n'avez pas un compte?</strong><a style="margin-left: 5%;" href="create.php" class="btn btn-outline-danger">S'inscrire</a></p>
        </div>
    </form>
    <script src="views/js/bootstrap.min.js"></script>
</body>
</html>



