<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    
   
</head>
<body>
    <div class="w-25 mx-auto">
        <h2>S'enregistrer</h2>
        <p></p>
        <form action="" method="post">
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="username" class="form-control" value="">
            </div>    
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="password" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Confirmer mot de passe</label>
                <input type="password" name="confirm_password" class="form-control" value="">
            </div>
            <div class="form-group mt-3">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Déjà enregistré? <a href="login.php">Se connecter</a>.</p>
        </form>
    </div>    
</body>
</html>