<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        require("php/utils.php");
        $pagename = $_GET['page'];
        $currentpage = '';
        if (checkpage($pagename)) {
            $authorized = true;
        } else {
            $authorized = false;
        }
        if (!$authorized) {
            afficheerreur();
        }
        $titre = $currentpage["title"];
        $desc = $currentpage["description"];
        echo "<title>$titre</title>";
        echo "<meta name='description' content='$desc'/>";
        ?>
        <meta name="author" content="Rémi Draskovic"/>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/perso.css" rel="stylesheet">
        <link rel="icon" type="image/ico" href="images/favicon.ico">
    </head>
    <body>
        <?php
        menu();
        echo '<div style="margin-top: 80px">';
        affiche($pagename);
        echo '</div>';
        footer();
        ?>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>