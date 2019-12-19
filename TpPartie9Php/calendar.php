<?php
setlocale(LC_TIME, 'fr_FR.utf8');
$month = $_POST['month'];
$year = $_POST['year'];
$timestamp = mktime(0, 0, 0, $month, 1, $year);
//Récuperer le nombre de jours dans le mois
$nbOfDay = date('t', $timestamp);
//Récuperer le jour du 1er du mois
$daysStr = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
$firstDay = strftime('%u', $timestamp);
$nbCell = 1;
$nbCellOnRow = 0;
$nbDay = 1;
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/calendar.css">
        <title>Exercice TP Partie 9 PHP</title>
    </head>
    <body>
        <h1>Exercice TP Partie 9 PHP</h1>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Lundi</th>
                        <th>Mardi</th>
                        <th>Mercredi</th>
                        <th>Jeudi</th>
                        <th>Vendredi</th>
                        <th>Samedi</th>
                        <th>Dimanche</th>                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        while ($nbCell <= 42) {
                            if ($nbCell < $firstDay) {
                                if ($nbCellOnRow < 7) {
                                    ?>
                                    <td></td>
                                    <?php
                                    $nbCellOnRow++;
                                } else {
                                    ?>
                                </tr>
                                <tr>
                                    <td></td>
                                    <?php
                                    $nbCellOnRow = 1;
                                }
                                $nbCell++;
                            } elseif ($nbDay <= $nbOfDay) {
                                if ($nbCellOnRow < 7) {
                                    ?>
                                    <td><?= $nbDay ?></td>
                                    <?php
                                    $nbCellOnRow++;
                                    $nbDay++;
                                } else {
                                    ?>
                                </tr>
                                <tr>
                                    <td><?= $nbDay ?></td>
                                    <?php
                                    $nbCellOnRow = 1;
                                    $nbDay++;
                                }
                                $nbCell++;
                            } else {
                                if ($nbCellOnRow < 7) {
                                    ?>
                                    <td></td>
                                    <?php
                                    $nbCellOnRow++;
                                } else {
                                    ?>
                                </tr>
                                <tr>
                                    <td></td>
                                    <?php
                                    $nbCellOnRow = 1;
                                }
                                $nbCell++;
                            }
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>