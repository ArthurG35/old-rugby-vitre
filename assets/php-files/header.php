<?php

$hote = $_SERVER['HTTP_HOST'];
$url = "https://";
$url .= $hote;
error_reporting(E_ALL);

?>

<header id="id-header">
    <nav>
        <ul class="nav" id="id-nav">
            <li><a href="<?php echo $url; ?>">Home</a></li>
            <li><a href="equipes">Équipes</a></li>
            <li><a href="partenaire">Partenaires</a></li>
            <li><a href="boutique">Boutique</a></li>
        </ul>
    </nav>
</header>