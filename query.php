<?php
require 'vendor/autoload.php';

$foaf = new \EasyRdf\Graph("http://localhost/tubesmusik/Data/foaf.rdf");
$foaf->load();
$me = $foaf->primaryTopic();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h3>Lorem lorem huhu</h3>
    </center>
    <?php
    foreach ($foaf->allOfType('foaf:musik') as $person) {
        echo '<h5>Judul Lagu : ' . $person->get('foaf:judulLagu') . '</h5>';
        echo '<p>Band  : ' . $person->get('foaf:namaBand') . '</p>';
        echo '<p>Album : ' . $person->get('foaf:album') . '</p>';
        echo '<p>Rilis : ' . $person->get('foaf:rilis') . '</p>';
        echo '<p>Penyanyi : ' . $person->get('foaf:vokalis') . '</p>';
        echo '<p>Genre : ' . $person->get('foaf:genre') . '</p>';
        echo '<iframe id="ytplayer" type="text/html" width="640" height="360"
        src="' . $person->get('foaf:yt') . '?autoplay=0"
        frameborder="0"></iframe>';
        echo '<br>';
        echo '<br>';
    }
    ?>
</body>

</html>