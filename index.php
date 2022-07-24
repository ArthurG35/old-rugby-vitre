<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico" />
    <script src="https://kit.fontawesome.com/15a2a289be.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.5/iframeResizer.min.js"></script>
    <title>AURORE RUGBY CLUB VITRÉ</title>
</head>


<body>
    <?php include 'assets/php-files/header.php' ?>

    <div class="widget_scorenco">
        <iframe id="61c065fb8dd8725be5d0da10" src="https://scorenco.com/widget/61c065fb8dd8725be5d0da10/?auto_height=true" style="display: block; width: 100%; overflow: auto; margin: auto; border-width: 0px;" scrolling="no"></iframe>
    </div>

    <div class="classement">

        <?php
        error_reporting(E_ALL);

        $json_file = file_get_contents("https://scorenco.com/backend/v1/widgets/61baffec9e37365c2dbd8881/data/?format=json");

        $json_dec = json_decode($json_file, true);

        $json_base = $json_dec["data"]["ranking"]["teams"];

        $rank = "1";

        ?>
        <section>
            <h1>Classement</h1>
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>Rank</th>
                            <th>Équipes</th>
                            <th>Points</th>
                            <th>Match</th>
                            <th>Gagner</th>
                            <th>Perdu</th>
                            <th>BP</th>
                            <th>BC</th>
                            <th>Bonus</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <?php
                        foreach ($json_base as $mydata) {
                            echo "<tr>";
                            echo "<td>" . $rank . "</td>";
                            echo  "<td>" . $mydata["name"] . "</td>";
                            echo "<td>" . $mydata["data"]["0"]["pts"] . "</td>";
                            echo  "<td>" . $mydata["data"]["1"]['jo'] . "</td>";
                            echo  "<td>" . $mydata["data"]["2"]["g"] . "</td>";
                            echo  "<td>" . $mydata["data"]["4"]["p"] . "</td>";
                            echo  "<td>" . $mydata["data"]["5"]["bp"] . "</td>";
                            echo  "<td>" . $mydata["data"]["6"]["bc"] . "</td>";
                            echo  "<td>" . $mydata["data"]["7"]["bonus"] . "</td>";
                            echo "</tr>";
                            $rank++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <?php include 'assets/php-files/footer.php' ?>
</body>
<script src="index.bundle.js?v=<?= filemtime('index.bundle.js'); ?>"></script>

</html>