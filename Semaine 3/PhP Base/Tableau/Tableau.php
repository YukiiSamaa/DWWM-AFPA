<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            $a = array(
                "19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"),
                "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""),
                "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation")
            );

            //EXERCICE 1  semaine a lieu la validation du groupe 19002
            $i = 0;
            while ($a["19002"][$i] != "Validation") {
                $i = $i + 1;
            }
            echo "La validation du groupe 19002 a eu lieu à la semaine : ", $i + 1;

            echo "<br>";

            //EXERCICE 2
            for ($i = 0; $i < count($a["19001"]) - 1; $i = $i + 1) {
                if ($a["19001"][$i] == "Stage") {
                    $position = $i + 1;
                }
            }
            echo "La position de la dernière occurence de Stage dans le groupe 19001 est : " . $position;

            echo "<br>";

            // //EXERCICE 3 dans un nouveau tableau, les codes des groupes.
            
                // A revoir

            //Exercice 4
            $NbStage = 0;
            for ($i = 0; $i < count($a["19003"]) - 1; $i = $i + 1) {
                if ($a["19003"][$i] == "Stage") {
                    $NbStage = $NbStage + 1;
                }
            }
            echo "Le nombre de semaine de stage du groupe 19003 est : " . $NbStage;
            ?>
        </div>
    </div>
    <!-- Script boostrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>