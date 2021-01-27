<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Démo params url live</title>
   <link rel="stylesheet" href="./css/app.css">
</head>
<body>
<?php
    if(isset($_GET['error']) && $_GET['error'] === '1') { ?>
        <div class="error">Attention coco, tu as essayé de m'enrouler en retirant un paramètre!! </div><?php
    }
    $tab = [1,2,3,4,5,6];
    //JSON_encode ==> transforme un string au format json/tableau
    $tab= base64_encode(json_encode($tab));
?>
    <div class="container">
        <ul>
            <li>
                <a href="coucou.php?tab=<?= $tab ?>">Mon lien 1</a>
                <!--<?= $tab ?> === echo-->
            </li>
            <li>
                <a href="coucou.php?nom=Doe&amp;premon=John&amp;age=36">Mon lien 2</a>
            </li>
            <li>
                <a href="coucou.php?nom=Connor&amp;premon=Sarah&amp;age=65">Mon lien 3</a>
            </li>
            <li>
                <!--si un utilisateur tape qq ch dans l'url, un formulaire-->
                <?php
                $src = "<script type='text/javascript'>alert('hello');</script>";
                ?>
                <a href="coucou.php?nom=<?= $src ?>&amp;premon=Sarah&amp;age=65">
                    Mon lien 3
                </a>
            </li>
        </ul>
    </div>
</body>
</html>

