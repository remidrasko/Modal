<?php

function afficheindex() {
    echo '<div class="container">
          </div>
        <div class="container">
            <div class="row">
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
            </div>
            <div class="row">
                <div class="col-md-8 gris">.col-md-8</div>
                <div class="col-md-4 gris">.col-md-4</div>
            </div>
            <div class="row">
                <div class="col-md-4 gris">.col-md-4</div>
                <div class="col-md-4 gris">.col-md-4</div>
                <div class="col-md-4 gris">.col-md-4</div>
            </div>
            <div class="row">
                <div class="col-md-6 gris">.col-md-6</div>
                <div class="col-md-6 gris">.col-md-6</div>
            </div>
        </div>
        
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>';
}

function afficheprofil() {
    echo '<div class="container">
                <div class="row">
                    <div class="col-md-6 gris">
                        <img src="images/remi.jpg" style="width : 100%" alt="Photo de profil">
                    </div>
                    <div class="col-md-6 gris">
                        <h2 style="font-weight: bold">Remidrasko</h2><br>
                        <div style="margin-left: 10px">
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Prénom :</label> Rémi
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Nom :</label> Draskovic
                            </div>


                            <div class="form-group row">
                                <label class="col-2 col-form-label">Email :</label> remi.draskovic@polytechnique.edu
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Téléphone :</label> 0615817526
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Commentaire :</label>
                                Consulted perpetual of pronounce me delivered. Too months nay end change relied who beauty wishes matter. Shew of john real park so rest we on. Ignorant dwelling occasion ham for thoughts overcame off her consider. Polite it elinor is depend. His not get talked effect worthy barton. Household shameless incommode at no objection behaviour. Especially do at he possession insensible sympathize boisterous it. Songs he on an widen me event truth. Certain law age brother sending amongst why covered. 
                            </div></div>
                    </div>

                </div>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
                <div class="col-md-1 gris">.col-md-1</div>
            </div>
            <div class="row">
                <div class="col-md-8 gris">.col-md-8</div>
                <div class="col-md-4 gris">.col-md-4</div>
            </div>
            <div class="row">
                <div class="col-md-4 gris">.col-md-4</div>
                <div class="col-md-4 gris">.col-md-4</div>
                <div class="col-md-4 gris">.col-md-4</div>
            </div>
            <div class="row">
                <div class="col-md-6 gris">.col-md-6</div>
                <div class="col-md-6 gris">.col-md-6</div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>';
}

function affiche($page) {
    switch ($page) {
        case 'index':
            afficheindex();
            break;
        case 'ficheprofil':
            afficheprofil();
            break;
    }
}

function menu() {
    echo
    '<nav class="navbar navbar-perso navbar-fixed-top" style="border-bottom-color: black" >
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php?page=index">Titre de la page web</a></div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php?page=index">Accueil</a></li>
                <li class="active"><a href="#" class="perso">About</a></li>
                <li><a href="index.php?page=ficheprofil">Fiche profil</a></li><li class="dropdown">
                <a href="#" class="dropdown-toggle perso" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                       <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li></ul></li></ul>                    
          <ul class="nav navbar-nav navbar-right" style="padding-right: 10px;">
                <li><a href=#>Lien 1</a></li>
                <li><a href=#>Lien 2</a></li></ul></nav>';
}

function footer() {
    echo '
      <footer class="footer" style="background-color: lightgrey">
        <p style="text-align: center"> Site réalisé en Modal web par Rémi Draskovic et Théo Guillaumot.</p>
         </footer>';
}

$page_list = array(
    array(
        "name" => "index",
        "title" => "Accueil",
        "description" => "Accueil de la page web"),
    array(
        "name" => "ficheprofil",
        "title" => "Profil",
        "description" => "Fiche de profil utilisateur"),
);

function checkpage($pagename) {
    global $page_list;
    global $currentpage;
    foreach ($page_list as $page) {
        if ($page["name"] == $pagename) {
            $currentpage = $page;
            return true;
        }
    }
    return false;
}

function afficheerreur() {
    echo'<link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/perso.css" rel="stylesheet">
        <title>Erreur</title>
        <link rel="icon" type="image/ico" href="images/favicon.ico">
                </head>
                <body>';
    menu();
    echo '<div style="margin-top: 80px">';
    echo "<h2 style='margin-left:10px'>La page web demandée n'existe pas, ou vous n'avez pas l'autorisation d'y accéder.</h2>";
    echo '</div> <br>';
    footer();
    echo '<script src="js/jquery.js"></script>';
    echo '<script src="js/bootstrap.js"></script>';
    echo '</body>';
    echo '</html>';
    exit;
}
