<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="index.css" rel="stylesheet">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Signika:wght@300&display=swap');
          </style>
        <title>Cook & Eat</title>
    </head>
    <body>
        <?php include_once('header.php') ?>
        <?php include_once('connectDatabaseRecipes.php') ?>

        <main>
            <div>
                <h2 class="sous-titre">Les sucrées les plus aimées</h2>

                <table style="max-width: 100vw;">
                    <tr>
                        <?php 
                            $sqlQuery = 'SELECT * FROM sugar WHERE is_enabled = "true" ORDER BY numberLike DESC';
                            $RecipesStatement = $db->prepare($sqlQuery);
                            $RecipesStatement->execute();
                            $Recipes = $RecipesStatement->fetchAll();

                            $limitrecipe = 0;
                            foreach ($Recipes as $recipe) {
                                ?><td style="width: 25vw; text-align: center;"><a href="recette/?id=1"><div class="container"><img class="img-responsive" src="imgExportSugar.php?id=<?php echo($recipe['id']); ?>"><span><?php echo($recipe['titleRecipe']); ?></span></div></a></td>
                        <?php
                                $limitrecipe++;
                                if($limitrecipe==4) break;
                            };
                        ?></tr>
                </table>
            </div>

            <div>
                <h2 class="sous-titre">Les salés</h2>
                <table style="max-width: 100vw;">
                    <tr>
                        <td style="width: 25vw; text-align: center;"><a href="recette/"><div class="container"><img class="img-responsive" src="first.jpg"><span>Titre Recette</span></div></a></td>
                        <td style="width: 25vw; text-align: center;"><a href="recette/"><div class="container"><img class="img-responsive" src="first.jpg"><span>Titre Recette</span></div></a></td>
                        <td style="width: 25vw; text-align: center;"><a href="recette/"><div class="container"><img class="img-responsive" src="first.jpg"><span>Titre Recette</span></div></a></td>
                        <td style="width: 25vw; text-align: center;"><a href="recette/"><div class="container"><img class="img-responsive" src="first.jpg"><span>Titre Recette</span></div></a></td>
                    </tr>
                </table>
            </div>

            <div>
                <h2 class="sous-titre">Les sucrés</h2>
                <table style="max-width: 100vw;">
                    <tr>
                        <td style="width: 25vw; text-align: center;"><a href="recette/"><div class="container"><img class="img-responsive" src="first.jpg"><span>Titre Recette</span></div></a></td>
                        <td style="width: 25vw; text-align: center;"><a href="recette/"><div class="container"><img class="img-responsive" src="first.jpg"><span>Titre Recette</span></div></a></td>
                        <td style="width: 25vw; text-align: center;"><a href="recette/"><div class="container"><img class="img-responsive" src="first.jpg"><span>Titre Recette</span></div></a></td>
                        <td style="width: 25vw; text-align: center;"><a href="recette/"><div class="container"><img class="img-responsive" src="first.jpg"><span>Titre Recette</span></div></a></td>
                    </tr>
                </table>
            </div>
        </main>
    </body>
</html>