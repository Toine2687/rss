<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Origami RSS</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/assets/css/style.css">
</head>

<body>
    <main>

        <div id="settingsContainer">
            <img src="../public/assets/img/logo.svg" alt="logo origami">
            <form method="post">
                <div id="checkboxesDiv">
                    <h2>Selectionnez 3 sujets</h2>
                    <?php include __DIR__ . '/../views/checkbox.php' ?>
                </div>

                <label for="articleNb">Combien d'articles afficher ?</label>
                <?php include __DIR__ . '/../views/select.php' ?>
                <!-- INSERER DARK MODE -->
                <div id="btnDiv">
                    <button id="settingsBtn" type="submit">Valider</button>
                </div>
            </form>
        </div>
        <?php