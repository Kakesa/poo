<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>register</title>
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
        <form action="action_register.php" method="post">
            
            <?php 
                if(isset($_GET['exist'])) {
                    echo '<p class="alert">Un utilisateur avec cet email existe déjà</p>';
                }
            ?>
            <div class="container" style="margin-top: 80px; padding: 20px; border: 2px solid white">
            <h2 style="text-align: center;">S'identifier</h2>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Your name</span>
                    <input type="text" name="nom" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                    <input type="email" name="email" class="form-control"  aria-label="Recipient's username" aria-describedby="basic-addon2">  
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Your password</span>
                    <input type="password" name="password" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <p style="text-align: center;"><input type="submit" class="btn btn-primary" value="S'inscrire"></p>
                <p class="link" style="color:black;"><strong> Vous avez déjà un compte? </strong><a href="login.php" class="btn btn-secondary">Se connecter</a></p>
            </div>
        </form>
        <script src="views/js/bootstrap.min.js"></script>
    </body>
</html>
