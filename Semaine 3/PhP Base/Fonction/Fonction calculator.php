<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-secondary">
                <?php

                function calculator($Nb1, $Nb2, $opé)
                {
                    if (($opé != "/") and ($opé != "*") and ($opé != "-") and ($opé != "+")) {
                        echo "Opérateur incorrect";
                    } else if ($opé == "/") {
                        $resultat = $Nb1 / $Nb2;
                        echo "Le résultat de " . $Nb1 . " / " . $Nb2 . " est : " . $resultat;
                    } else if ($opé == "+") {
                        $resultat = $Nb1 + $Nb2;
                        echo "Le résultat de " . $Nb1 . " + " . $Nb2 . "  est : " . $resultat;
                    } else if ($opé == "-") {
                        $resultat = $Nb1 - $Nb2;
                        echo "Le résultat de " . $Nb1 . " - " . $Nb2 . " est : " . $resultat;
                    } else if ($opé == "*") {
                        $resultat = $Nb1 * $Nb2;
                        echo "Le résultat de " . $Nb1 . " * " . $Nb2 . " est : " . $resultat;
                    }
                }

                ?>

                <?php
                Echo "Calcul pour 12 et 5 avec tous les opèrateurs" . "<br>" . "<br>";

                calculator(12, 5, "/");
                echo "<br>" . "<br>";

                calculator(12, 5, "+");
                echo "<br>" . "<br>";

                calculator(12, 5, "-");
                echo "<br>" . "<br>";

                calculator(12, 5, "*");
                echo "<br>" . "<br>";

                ?>
                <br><br><br><br>

                <?php
                Echo "Calcul pour 42 et 12 avec tous les opèrateurs" . "<br>" . "<br>";

                calculator(42, 12, "/");
                echo "<br>" . "<br>";

                calculator(42, 12, "+");
                echo "<br>" . "<br>";

                calculator(42, 12, "-");
                echo "<br>" . "<br>";

                calculator(42, 12, "*");
                echo "<br>" . "<br>";

                ?>
            </div>
        </div>
    </div>
    <!-- Script Boostrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>