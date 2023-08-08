<?php
    include("./php/form.php");
?>

<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Contattateci!</h1>

        <!-- ERRORE DI VALIDAZIONE / MESSAGGIO INVIATO -->
        <div id="error">
            <!-- Mostro l'esito della compilazione: errore o messaggio inviato -->
            <?php $error.$successMessage; ?>
        </div>

        <!-- FORM -->
        <form method="post" class="mt-3">
            <fieldset class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Insirisci l'indirizzo email">
            </fieldset>
            <fieldset class="form-group mt-3">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Password">
            </fieldset>
            
            <fieldset class="form-group mt-3">
                <label for="content">Cosa volete chiederci?</label>
                <textarea class="form-control" id="content" name="content" rows="3"></textarea>
            </fieldset>
            
            <button type="submit" class="btn btn-primary mt-2" id="submit">Submit</button>
        </form>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="./js/jquery-3.7.0.js"></script>
    <!-- JavaScript -->
    <script type="text/javaScript" src="./js/script.js"></script>
</body>
</html>