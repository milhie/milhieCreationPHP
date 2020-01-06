<!DOCTYPE html>
<html lang="fr">
    <head>
        
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style_base_milhie.css" />
        <link rel="stylesheet" href="styleAccueil.css" />
        <title>MilhieCréation Accueil</title>
    </head>

    <body>

        <div id="blocpage">

            <?php include("tete_de_page.php"); ?>

            <?php include("menu.php"); ?>
                
            
            
            
            <section id="corps_page"> 
                <h2 class="titre">Créations en perles et fils d'aluminium</h2>
                <article>
                    
                        <h2 class="epingle"> <img src="images/ico_epingle.png" alt="Milhiecreation" class="ico_categorie" /> Accueil </h2>

                        <p class="introduction"><span class="salutations">Bienvenue</span> sur mon site! 
                        <br/> Ce site est fait pour vous présenter mes créations en fil d'aluminium... <br/> Je crée également des bijoux ou décorations sur mesure, n'hésitez pas à me contacter <a href="#Contact">->ici</a> 
                        </p>

                    
                

                    <div id="liens_pages">
                        <div id="version_classique">
                            <ul>
                                <li class="bijoux"><p> <a href="bijoux.php" class="bouton">Bijoux <img src="images/flecheblanchedroite.png" alt="" /></a></p></li>
                            
                                <li class="arbres_de_vie"> <p><a href="arbres_de_vie.php" class="bouton">Arbres de vie  <img src="images/flecheblanchedroite.png" alt="" /></a> </p></li>

                                <li class="decorations_murales_chambre_enfant"><p> <a href="decos.php" class="bouton">Decorations murales <img src="images/flecheblanchedroite.png" alt="" /></a></p></li>
                            </ul>
                            <ul>
                                <li class="decos_mariage"><p> <a href="decos_mariage.php" class="bouton">Décorations de mariage <img src="images/flecheblanchedroite.png" alt="" /></a></p></li>
                            
                                <li class="pieges_reves"><p> <a href="pieges_reves.php" class="bouton">Pièges à rêves <img src="images/flecheblanchedroite.png" alt="" /></a></p></li>

                                <li class="autresDecos"><p> <a href="autresDecorations.php" class="bouton">Autres décorations <img src="images/flecheblanchedroite.png" alt="" /></a></p></li>
                            </ul>

                        </div>

<!--cette liste n'apparait qu'en version mobile-->
                        <div id="version_mobile">
                            <ul>
                                <li class="bijoux"><p><a href="bijoux.php" class="pasbouton"><span> -> Bijoux </span></a></p></li>

                                <li class="arbres_de_vie"><p><a href="arbres_de_vie.php" class="pasbouton"><span> -> Arbres de vie </span></a></p></li>

                                <li class="decorations_murales_chambre_enfant"><p><a href="decos.php" class="pasbouton"><span> -> Decorations murales </span> </a></p></li>
                            </ul>
                            <ul>
                                <li class="decos_mariage"><p><a href="decos_mariage.php" class="pasbouton"><span> -> Décorations de mariage </span> </a></p></li>
                        
                                <li class="pieges_reves"><p><a href="pieges_reves.php" class="pasbouton"><span > -> Pièges à rêves </span> </a></p></li>
                        
                                <li class="autresDecos"><p><a href="autresDecorations.php" class="pasbouton"><span> -> Autres décorations </span></a></p></li>
                            </ul>
                        </div>
                    </div>

                </article>

                

                <?php include("aside.php"); ?>

            </section>

        <?php include("pied_de_page.php"); ?>

        </div>
    </body>
</html>