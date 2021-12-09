<?php
require 'vendor/autoload.php';

$foaf = new \EasyRdf\Graph("http://localhost/tubesmusik/Data/foaf.rdf");
$foaf->load();
$me = $foaf->primaryTopic();

$data = array();

foreach ($foaf->allOfType('foaf:musik') as $person) {
    $name = $person->get('foaf:namaBand');
    $vokalis = $person->get('foaf:vokalis');
    $judul = $person->get('foaf:judulLagu');
    $yt = $person->get('foaf:yt');

    array_push(
        $data,
        array(
            'name' => $name->getValue(),
            'vokalis' => $vokalis->getValue(),
            'judul' => $judul->getValue(),
            'yt' => $yt->getValue()
        )
    );
}
header('Content-Type: application/json');
$fix = json_encode($data);
echo $fix;
return $fix;
